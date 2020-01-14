<?php
/**
 * Файл класса AdminController
 *
 * @copyright Copyright (c) 2018, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace console\controllers;

use Exception;
use yii\console\Controller;
use yii\validators\EmailValidator;
use shop\entities\User\User;
use common\helpers\Password;

/**
 * Контроллер управления администратором
 *
 * @package console\controllers
 */
class AdminController extends Controller
{
    /**
     * @var string
     */
    public $role;

    /**
     * Действие создания администратора
     */
    public function actionCreate()
    {
        $username = $this->inputUsername('usernameValidator');
        $name = $this->inputName();
        $email = $this->inputEmail();
        $password = $this->inputPassword();

        $transaction = User::getDb()->beginTransaction();
        try {
            if ($this->makeUser($username, $name, $email, $password)) {
                $transaction->commit();
                $this->printUserData($username, $password);
            } else {
                $transaction->rollBack();
                throw new Exception('Could not create a new user.');
            }
        } catch (Exception $e) {
            $transaction->rollBack();
            $this->stderr($e->getMessage());
        }
    }

    /**
     * Действие изменения пароля пользователя
     */
    public function actionChangePassword()
    {
        $username = $this->inputUsername('existsUsernameValidator');
        $password = $this->inputPassword();

        try {
            $this->updateUser($username, $password);
            $this->printUserData($username, $password);
        } catch (Exception $e) {
            $this->stderr($e->getMessage());
        }
    }

    /**
     * Вывод данных пользователя
     *
     * @param $username
     * @param $password
     */
    protected function printUserData($username, $password)
    {
        $this->stdout("\n");
        $this->stdout("==============================================\n");
        $this->stdout("Your username: {$username}\n");
        $this->stdout("Your password: {$password}\n");
    }

    /**
     * Создание нового пользователя
     *
     * @param string $username
     * @param string $name
     * @param string $email
     * @param string $password
     * @return bool
     * @throws Exception
     */
    protected function makeUser($username, $name, $email, $password)
    {
        $user = new User();
        $user->setAttributes([
            'username' => $username,
            'email' => $email,
            'name' => $name,
        ]);
        $user->setPassword($password);
        if ($user->save()) {
            $auth = \Yii::$app->authManager;
            $role = $auth->getRole($this->role);
            $auth->assign($role, $user->getPrimaryKey());
            return true;
        }
        return false;
    }

    /**
     * Обновление пароля для пользователя
     *
     * @param string $username
     * @param string $password
     * @throws Exception
     */
    protected function updateUser($username, $password)
    {
        User::updateAll([
            'password_hash' => Password::hash($password),
        ], [
            'username' => $username,
        ]);
    }

    /**
     * Получение логина
     *
     * @param string $validator
     * @return string
     */
    protected function inputUsername($validator)
    {
        return $this->prompt('Enter username:', ['required' => true, 'validator' => [$this, $validator]]);
    }

    /**
     * Получение e-mail адреса
     *
     * @return string
     */
    protected function inputEmail()
    {
        return $this->prompt('Enter E-mail:', ['required' => true, 'validator' => [$this, 'emailValidator']]);
    }

    /**
     * Получение имени пользователя
     *
     * @return string
     */
    protected function inputName()
    {
        return $this->prompt('Enter name:', ['required' => true]);
    }

    /**
     * Получение пароля
     *
     * @return string
     */
    protected function inputPassword()
    {
        return $this->prompt('Enter password:', ['validator' => [$this, 'passwordValidator']]) ?: Password::generate(10);
    }

    /**
     * Валидатор пароля
     *
     * @param string $input
     * @param string $error
     * @return bool
     */
    public function passwordValidator($input, &$error)
    {
        if ($input && mb_strlen($input) < Password::DEFAULT_STRENGTH) {
            $error = 'Password should contain at least 8 symbols!';
            return false;
        }
        return true;
    }

    /**
     * Валидотор логина
     *
     * @param string $input
     * @param string $error
     * @return bool
     */
    public function usernameValidator($input, &$error)
    {
        return $this->uniqueValidator('username', 'Username', $input, $error);
    }

    /**
     * Email валидатор
     *
     * @param string $input
     * @param string $error
     * @return bool
     */
    public function emailValidator($input, &$error)
    {
        $validator = new EmailValidator();
        if (!$validator->validate($input)) {
            $error = "\"{$input}\" is not a valid email address!";
            return false;
        }
        return $this->uniqueValidator('email', 'E-mail', $input, $error);
    }

    /**
     * Валидатор на существование логина пользователя
     *
     * @param string $input
     * @param string $error
     * @return bool
     */
    public function existsUsernameValidator($input, &$error)
    {
        if (!$this->existsUserByAttribute('username', $input)) {
            $error = "User with username \"{$input}\" doesn't exists!";
            return false;
        }
        return true;
    }

    /**
     * Валидатор на уникальность
     *
     * @param string $attribute
     * @param string $label
     * @param string $input
     * @param string $error
     * @return bool
     */
    protected function uniqueValidator($attribute, $label, $input, &$error)
    {
        if ($this->existsUserByAttribute($attribute, $input)) {
            $error = "{$label} \"{$input}\" has already been taken!";
            return false;
        }
        return true;
    }

    /**
     * Проверка на существование
     *
     * @param string $attribute
     * @param string $input
     * @return bool
     */
    protected function existsUserByAttribute($attribute, $input)
    {
        return User::find()->where([$attribute => $input])->exists();
    }
}
