<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \shop\forms\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Add your site or application content here -->

<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="page-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!-- CATEGORY-MENU-LIST START -->
                <div class="left-category-menu hidden-sm hidden-xs">
                    <div class="left-product-cat">
                        <div class="category-heading">
                            <h2>categories</h2>
                        </div>
                        <div class="category-menu-list">
                            <ul>
                                <!-- Single menu start -->
                                <li class="arrow-plus">
                                    <a href="#">Cameras & Photography</a>
                                    <!--  MEGA MENU START -->
                                    <div class="cat-left-drop-menu">
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">Handbags</a>
                                            <ul>
                                                <li><a href="#">Blouses And Shirts</a></li>
                                                <li><a href="#">Clutches</a></li>
                                                <li><a href="#">Cross Body</a></li>
                                                <li><a href="#">Satchels</a></li>
                                                <li><a href="#">Sholuder</a></li>
                                                <li><a href="#">Toter</a></li>
                                            </ul>
                                        </div>
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">Tops</a>
                                            <ul>
                                                <li><a href="#">Evening</a></li>
                                                <li><a href="#">Long Sleeved</a></li>
                                                <li><a href="#">Short Sleeved</a></li>
                                                <li><a href="#">Sleeveless</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">Tanks And Camis</a></li>
                                            </ul>
                                        </div>
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">Dresses</a>
                                            <ul>
                                                <li><a href="#">Belts</a></li>
                                                <li><a href="#">Cocktail</a></li>
                                                <li><a href="#">Day</a></li>
                                                <li><a href="#">Evening</a></li>
                                                <li><a href="#">Sundresses</a></li>
                                                <li><a href="#">Sweater</a></li>
                                            </ul>
                                        </div>
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">Accessories</a>
                                            <ul>
                                                <li><a href="#">Bras</a></li>
                                                <li><a href="#">Hair Accessories</a></li>
                                                <li><a href="#">Hats And Gloves</a></li>
                                                <li><a href="#">Lifestyle</a></li>
                                                <li><a href="#">Scarves</a></li>
                                                <li><a href="#">Small Leathers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- MEGA MENU END -->
                                </li>
                                <!-- Single menu end -->
                                <!-- Single menu start -->
                                <li class="arrow-plus">
                                    <a href="#">Tv & Audio</a>
                                    <!--  MEGA MENU START -->
                                    <div class="cat-left-drop-menu">
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">BAGS</a>
                                            <ul>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Bootees Bags</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">CLOTHING</a>
                                            <ul>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Bootees Bags</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">LINGERIE</a>
                                            <ul>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Bootees Bags</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">Shoes</a>
                                            <ul>
                                                <li><a href="#">Blazers</a></li>
                                                <li><a href="#">Bootees Bags</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- MEGA MENU END -->
                                </li>
                                <!-- Single menu end -->
                                <!-- Single menu start -->
                                <li class="arrow-plus">
                                    <a href="#">SmartPhones & Tablets</a>
                                    <!--  MEGA MENU START -->
                                    <div class="cat-left-drop-menu cat-left-drop-menu-photo-contain">
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">Women</a>
                                            <ul>
                                                <li><a href="#">Belts</a></li>
                                                <li><a href="#">Jewelry</a></li>
                                                <li><a href="#">Socks</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>
                                        </div>
                                        <div class="cat-left-drop-menu-left">
                                            <a class="menu-item-heading" href="#">CLOTHING</a>
                                            <ul>
                                                <li><a href="#">Boots</a></li>
                                                <li><a href="#">Brands We Love</a></li>
                                                <li><a href="#">Casuals</a></li>
                                                <li><a href="#">Gifts And Tech</a></li>
                                                <li><a href="#">Gifts And Tech</a></li>
                                                <li><a href="#">Slippers</a></li>
                                                <li><a href="#">Speakers</a></li>
                                            </ul>
                                        </div>
                                        <div class="cat-left-drop-menu-left cat-left-drop-menu-photo">
                                            <a href="#"><img src="img/megamenu/vmega_blog1.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                    <!-- MEGA MENU END -->
                                </li>
                                <!-- Single menu end -->
                                <!-- Single menu start -->
                                <li>
                                    <a href="#">Laptop & Computer</a>
                                </li>
                                <!-- Single menu end -->
                                <!-- Single menu start -->
                                <li><a href="#">Sony</a></li>
                                <!-- Single menu end -->
                                <!-- Single menu start -->
                                <li><a href="#">Mobile</a></li>
                                <!-- Single menu end -->
                                <!-- Single menu start -->
                                <li><a href="#">Sports</a></li>
                                <!-- Single menu end -->

                                <!-- MENU ACCORDION START -->
                                <li class=" rx-child">
                                    <a href="#">Books</a>
                                </li>
                                <li class=" rx-parent">
                                    <a class="rx-default">
                                        More categories <span class="cat-thumb  fa fa-plus"></span>
                                    </a>
                                    <a class="rx-show">
                                        close menu <span class="cat-thumb  fa fa-minus"></span>
                                    </a>
                                </li>
                                <!-- MENU ACCORDION END -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END CATEGORY-MENU-LIST -->
                <!-- START SMALL-PRODUCT-AREA -->
                <div class="small-product-area carosel-navigation  hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="area-title">
                                <h3 class="title-group gfont-1">Bestseller</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="active-bestseller sidebar">
                            <div class="col-xs-12">
                                <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="#">Various Versions</a></h5>
                                        <div class="price-box">
                                            <span class="price">$99.00</span>
                                            <span class="old-price">$110.00</span>
                                        </div>
                                        <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                                <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/small/2.jpg" alt="Product">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="#">Various Versions</a></h5>
                                        <div class="price-box">
                                            <span class="price">$99.00</span>
                                            <span class="old-price">$110.00</span>
                                        </div>
                                        <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                                <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="#">Various Versions</a></h5>
                                        <div class="price-box">
                                            <span class="price">$99.00</span>
                                            <span class="old-price">$110.00</span>
                                        </div>
                                        <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                                <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/small/4.jpg" alt="Product">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="#">Various Versions</a></h5>
                                        <div class="price-box">
                                            <span class="price">$99.00</span>
                                            <span class="old-price">$110.00</span>
                                        </div>
                                        <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="#">Various Versions</a></h5>
                                        <div class="price-box">
                                            <span class="price">$99.00</span>
                                            <span class="old-price">$110.00</span>
                                        </div>
                                        <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                                <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/small/6.jpg" alt="Product">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="#">Various Versions</a></h5>
                                        <div class="price-box">
                                            <span class="price">$99.00</span>
                                            <span class="old-price">$110.00</span>
                                        </div>
                                        <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                                <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/small/7.jpg" alt="Product">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="#">Various Versions</a></h5>
                                        <div class="price-box">
                                            <span class="price">$99.00</span>
                                            <span class="old-price">$110.00</span>
                                        </div>
                                        <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                                <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/small/8.jpg" alt="Product">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5><a href="#">Various Versions</a></h5>
                                        <div class="price-box">
                                            <span class="price">$99.00</span>
                                            <span class="old-price">$110.00</span>
                                        </div>
                                        <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SMALL-PRODUCT-AREA -->
            </div>
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
    <div class="brand-logo-area carosel-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-title">
                        <h3 class="title-group border-red gfont-1">Brand Logo</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-brand-logo">
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="img/brand/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="img/brand/2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="img/brand/3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="img/brand/4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="img/brand/5.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="img/brand/6.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="img/brand/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="img/brand/2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="img/brand/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BRAND-LOGO-AREA -->
    <!-- START SUBSCRIBE-AREA -->
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
                    <div class="subscribe">
                        <form action="#">
                            <input type="text" placeholder="Enter Your E-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="social-media">
                        <a href="#"><i class="fa fa-facebook fb"></i></a>
                        <a href="#"><i class="fa fa-google-plus gp"></i></a>
                        <a href="#"><i class="fa fa-twitter tt"></i></a>
                        <a href="#"><i class="fa fa-youtube yt"></i></a>
                        <a href="#"><i class="fa fa-linkedin li"></i></a>
                        <a href="#"><i class="fa fa-rss rs"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SUBSCRIBE-AREA -->
</section>
<!-- END PAGE-CONTENT -->
