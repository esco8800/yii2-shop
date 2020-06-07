<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\DataProviderInterface */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<div style="margin-top: 100px;" class="row">

    <h2 style="margin-left: 4%;">Горячие товары</h2>
    <div class="col-md-8 col-xs-8">
        <?php foreach ($dataProvider->getModels() as $product): ?>
            <?= $this->render('_product', [
                'product' => $product
            ]) ?>
        <?php endforeach; ?>
    </div>

    <div class="row">
        <div class="col-sm-6 text-left">
            <?= LinkPager::widget([
                'pagination' => $dataProvider->getPagination(),
            ]) ?>
        </div>
        <div class="col-sm-6 text-right">Показано <?= $dataProvider->getCount() ?> из <?= $dataProvider->getTotalCount() ?></div>
    </div>

</div>