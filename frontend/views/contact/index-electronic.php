<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \shop\forms\ContactForm */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Add your site or application content here -->


            <div class="col-md-9">
                <!-- Start Map area -->
                <div class="map-area">
                    <div id="googleMap" style="width:100%;height:350px;"></div>
                </div>
                <!-- End Map area -->
                <!-- Start Contact-Message -->
                <div class="contact-message">
                    <fieldset>
                        <form method="post" action="mail.php">
                            <legend>Contact Form</legend>
                            <div class="form-group form-horizontal">
                                <div class="row">
                                    <label class="col-sm-2 control-label"><sup>*</sup>Your Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-horizontal">
                                <div class="row">
                                    <label class="col-sm-2 control-label"><sup>*</sup>E-Mail Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" name="email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-horizontal">
                                <div class="row">
                                    <label class="col-sm-2 control-label"><sup>*</sup>Enquiry</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="10" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons pull-right">
                                <input class="btn btn-primary" type="submit" value="submit" name="submit"/>
                            </div>
                        </form>
                    </fieldset>
                </div>
                <!-- End Contact-Message -->
            </div>
        </div>
    </div>
    <!-- START BRAND-LOGO-AREA -->
<!--    <div class="brand-logo-area carosel-navigation">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <div class="area-title">-->
<!--                        <h3 class="title-group border-red gfont-1">Brand Logo</h3>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="active-brand-logo">-->
<!--                    <div class="col-md-2">-->
<!--                        <div class="single-brand-logo">-->
<!--                            <a href="#"><img src="img/brand/1.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <div class="single-brand-logo">-->
<!--                            <a href="#"><img src="img/brand/2.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <div class="single-brand-logo">-->
<!--                            <a href="#"><img src="img/brand/3.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <div class="single-brand-logo">-->
<!--                            <a href="#"><img src="img/brand/4.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <div class="single-brand-logo">-->
<!--                            <a href="#"><img src="img/brand/5.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <div class="single-brand-logo">-->
<!--                            <a href="#"><img src="img/brand/6.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <div class="single-brand-logo">-->
<!--                            <a href="#"><img src="img/brand/1.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <div class="single-brand-logo">-->
<!--                            <a href="#"><img src="img/brand/2.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <div class="single-brand-logo">-->
<!--                            <a href="#"><img src="img/brand/3.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- END BRAND-LOGO-AREA -->
    <!-- START SUBSCRIBE-AREA -->
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <label class="hidden-sm hidden-xs">Подпишись на рассылку</label>
                    <div class="subscribe">
                        <form action="#">
                            <input type="text" placeholder="Введите ваш Email">
                            <button type="submit">Подписаться</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SUBSCRIBE-AREA -->
</section>
<!-- END PAGE-CONTENT -->
