<?php
/**
 * Файл класса Password
 *
 * @copyright Copyright (c) 2018, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace common\helpers;

use yii\base\Exception;

/**
 * Хелпер обеспечения безопасности паролей
 */
class Password
{
    /**
     * Количество символов в пароле по умолчанию
     */
    const DEFAULT_STRENGTH = 8;
    /**
     * Сложность пароля по умолчанию
     */
    const DEFAULT_PASSWORD_SETS = 'luds';

    /**
     * Метод хеширования пароля
     *
     * @param string $password
     * @return string
     * @throws Exception
     */
    public static function hash($password)
    {
        return static::secure()->generatePasswordHash($password);
    }

    /**
     * Метод валидации пароля с его хешем
     *
     * @param string $password
     * @param string $hash
     * @return bool
     */
    public static function validate($password, $hash)
    {
        return static::secure()->validatePassword($password, $hash);
    }

    /**
     * Генерация нового пароля
     *
     * @see https://gist.github.com/tylerhall/521810
     *
     * @param int $length
     * @param string $availableSets
     * @return string
     */
    public static function generate($length = self::DEFAULT_STRENGTH, $availableSets = self::DEFAULT_PASSWORD_SETS)
    {
        $sets = [];
        if (strpos($availableSets, 'l') !== false) {
            $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        }
        if (strpos($availableSets, 'u') !== false) {
            $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
        }
        if (strpos($availableSets, 'd') !== false) {
            $sets[] = '23456789';
        }
        if (strpos($availableSets, 's') !== false) {
            $sets[] = '!@#$%&*?';
        }

        $all = '';
        $password = '';
        foreach ($sets as $set) {
            $password .= $set[array_rand(str_split($set))];
            $all .= $set;
        }

        $all = str_split($all);
        for ($i = 0; $i < $length - count($sets); $i++) {
            $password .= $all[array_rand($all)];
        }

        $password = str_shuffle($password);

        return $password;
    }

    /**
     * Получение объекта обеспечивающего безопасность
     *
     * @return \yii\base\Security
     */
    protected static function secure()
    {
        return \Yii::$app->security;
    }
}
