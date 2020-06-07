<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Личный кабинет';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cabinet-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать профиль', ['cabinet/profile/edit'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php if (false): ?>
    <h2>Attach profile</h2>
    <?= yii\authclient\widgets\AuthChoice::widget([
        'baseAuthUrl' => ['cabinet/network/attach'],
    ]); ?>
    <?php endif; ?>
</div>
