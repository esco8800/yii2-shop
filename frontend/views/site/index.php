<?php

/* @var $this yii\web\View */

use frontend\widgets\Blog\LastPostsWidget;

$this->title = 'Интернет-магазин Malias';
?>



<div class="col-md-9 col-sm-9">

    <div id="ensign-nivoslider" class="slides nivoSlider">
        <img src="img/sliders/slider-1/bg1.jpg" alt="Malias" title="#slider-direction-1" style="width: 847px; visibility: hidden;">
        <img src="img/sliders/slider-1/bg2.jpg" alt="Malias" title="#slider-direction-2" style="width: 847px; visibility: hidden;">
        <img src="img/sliders/slider-1/bg3.jpg" alt="Malias" title="#slider-direction-3" style="width: 847px; visibility: hidden;">
    </div>
    <!-- START PRODUCT-BANNER -->
    <div class="product-banner home1-banner">
        <div class="row">
            <div class="col-md-7 banner-box1">
                <div class="single-product-banner">
                    <a href="#"><img src="img/banner/3.jpg" alt="Product Banner"></a>
                    <div class="banner-text banner-1">
                        <h2>head phone 2015</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-5 banner-box2">
                <div class="single-product-banner">
                    <a href="#"><img src="img/banner/4.jpg" alt="Product Banner"></a>
                    <div class="banner-text banner-2">
                        <h2>Deals <span>50%</span></h2>
                        <p>lumina n85</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRODUCT-BANNER -->
    <?= $this->render('_list', [
        'dataProvider' => $dataProvider
    ]) ?>
    <!-- START PRODUCT-AREA -->
    <div class="product-area">


    </div>
    <!-- End Product -->
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="area-title">
                <h3 class="title-group border-red gfont-1">Последние записи</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="active-brand-logo owl-carousel owl-theme" style="opacity: 1; display: block;">
            <div style="display: none;" class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3510px; left: 0px; display: block;"><div class="owl-item" style="width: 195px;"><div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/1.png" alt=""></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 195px;"><div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/2.png" alt=""></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 195px;"><div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/3.png" alt=""></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 195px;"><div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/4.png" alt=""></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 195px;"><div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/5.png" alt=""></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 195px;"><div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/6.png" alt=""></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 195px;"><div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/1.png" alt=""></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 195px;"><div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/2.png" alt=""></a>
                            </div>
                        </div></div><div class="owl-item" style="width: 195px;"><div class="col-md-2">
                        </div></div></div></div>
        </div>
</div>


<?= LastPostsWidget::widget([
    'limit' => 4,
]) ?>

<style>
    .nivo-directionNav {
        display: none;
    }
    .nivo-controlNav {
        display: none;
    }
</style>
