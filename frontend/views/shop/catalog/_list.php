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
            <label class="input-group-addon" for="input-sort">Sort By:</label>
            <select id="input-sort" class="form-control" onchange="location = this.value;">
                <?php
                $values = [
                    '' => 'Default',
                    'name' => 'Name (A - Z)',
                    '-name' => 'Name (Z - A)',
                    'price' => 'Price (Low &gt; High)',
                    '-price' => 'Price (High &gt; Low)',
                    '-rating' => 'Rating (Highest)',
                    'rating' => 'Rating (Lowest)',
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

    <div class="col-md-4 col-xs-4">
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
        <div class="col-sm-6 text-right">Showing <?= $dataProvider->getCount() ?> of <?= $dataProvider->getTotalCount() ?></div>
    </div>

</div>