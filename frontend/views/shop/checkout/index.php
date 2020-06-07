<?php

/* @var $this yii\web\View */
/* @var $cart \shop\cart\Cart */
/* @var $model \shop\forms\Shop\Order\OrderForm */

use shop\helpers\PriceHelper;
use shop\helpers\WeightHelper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Оформление заказа';
$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['/shop/catalog/index']];
$this->params['breadcrumbs'][] = ['label' => 'Корзина', 'url' => ['/shop/cart/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cabinet-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td class="text-left">Название продукта</td>
                <td class="text-left">Модель</td>
                <td class="text-left">Количество</td>
                <td class="text-right">Цена за единицу</td>
                <td class="text-right">Итоговая цена</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cart->getItems() as $item): ?>
                <?php
                $product = $item->getProduct();
                $modification = $item->getModification();
                $url = Url::to(['/shop/catalog/product', 'id' => $product->id]);
                ?>
                <tr>
                    <td class="text-left">
                        <a href="<?= $url ?>"><?= Html::encode($product->name) ?></a>
                    </td>
                    <td class="text-left">
                        <?php if ($modification): ?>
                            <?= Html::encode($modification->name) ?>
                        <?php endif; ?>
                    </td>
                    <td class="text-left">
                        <?= $item->getQuantity() ?>
                    </td>
                    <td class="text-right"><?= PriceHelper::format($item->getPrice()) ?></td>
                    <td class="text-right"><?= PriceHelper::format($item->getCost()) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <br />

    <?php $cost = $cart->getCost() ?>
    <table class="table table-bordered">
        <tr>
            <td class="text-right"><strong>Sub-Total:</strong></td>
            <td class="text-right"><?= PriceHelper::format($cost->getOrigin()) ?></td>
        </tr>
        <tr>
            <td class="text-right"><strong>Total:</strong></td>
            <td class="text-right"><?= PriceHelper::format($cost->getTotal()) ?></td>
        </tr>
        <tr>
            <td class="text-right"><strong>Weight:</strong></td>
            <td class="text-right"><?= WeightHelper::format($cart->getWeight()) ?></td>
        </tr>
    </table>

    <?php $form = ActiveForm::begin() ?>

    <div class="panel panel-default">
        <div class="panel-heading">Покупатель</div>
        <div class="panel-body">
            <?= $form->field($model->customer, 'phone')->textInput()->label('Телефон') ?>
            <?= $form->field($model->customer, 'name')->textInput()->label('Имя') ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Доставка</div>
        <div class="panel-body">
            <?= $form->field($model->delivery, 'method')->dropDownList($model->delivery->deliveryMethodsList(), ['prompt' => '--- Select ---'])->label('Метод') ?>
            <?= $form->field($model->delivery, 'index')->textInput()->label('Индекс') ?>
            <?= $form->field($model->delivery, 'address')->textarea(['rows' => 3])->label('Адрес') ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Сообщение</div>
        <div class="panel-body">
            <?= $form->field($model, 'note')->textarea(['rows' => 3])->label('Сообщение') ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Оформить заказ', ['class' => 'btn btn-primary btn-lg btn-block']) ?>
    </div>

    <?php ActiveForm::end() ?>

</div>
    
