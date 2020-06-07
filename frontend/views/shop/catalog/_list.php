<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\DataProviderInterface */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<div class="row">
    <div class="col-md-4 col-xs-4">
        <div class="form-group input-group input-group-sm">
            <label class="input-group-addon" for="input-sort">Сортировать:</label>
            <select id="input-sort" class="form-control" onchange="location = this.value;">
                <?php
                $values = [
                    '' => 'По умолчанию',
                    'name' => 'Имя (A - Я)',
                    '-name' => 'Имя (Я - A)',
                    'price' => 'Цена (Дешевле &gt; Дороже)',
                    '-price' => 'Цена (Дороже &gt; Дешевле)',
                ];
                $current = Yii::$app->request->get('sort');
                ?>
                <?php foreach ($values as $value => $label): ?>
                    <option value="<?= Html::encode(Url::current(['sort' => $value ?: null])) ?>" <?php if ($current == $value): ?>selected="selected"<?php endif; ?>><?= $label ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-xs-4">
        <div class="form-group input-group input-group-sm">
            <label class="input-group-addon" for="input-limit">Показывать:</label>
            <select id="input-limit" class="form-control" onchange="location = this.value;">
                <?php
                $values = [15, 25, 50, 75, 100];
                $current = $dataProvider->getPagination()->getPageSize();
                ?>
                <?php foreach ($values as $value): ?>
                    <option value="<?= Html::encode(Url::current(['per-page' => $value])) ?>" <?php if ($current == $value): ?>selected="selected"<?php endif; ?>><?= $value ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

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