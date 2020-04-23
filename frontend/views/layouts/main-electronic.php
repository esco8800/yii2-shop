<?php
/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= Yii::getAlias('@web/img/favicon.ico') ?>">
    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- HEADER-AREA START -->
<header class="header-area">
    <!-- HEADER-TOP START -->
    <div class="header-top hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <!-- Start Top-Link -->
                    <div class="top-link">
                        <ul class="link">
                            <li><a href="my-account.html"><i class="fa fa-user"></i> Мой аккаунт</a></li>
                            <li><a href="wishlist.html"><i class="fa fa-heart"></i> Список желаний</a></li>
                            <li><a href="checkout.html"><i class="fa fa-share"></i> Оформление заказа</a></li>
                            <li><a href="account.html"><i class="fa fa-unlock-alt"></i> Вход/регистрация</a></li>
                        </ul>
                    </div>
                    <!-- End Top-Link -->
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER-TOP END -->
    <!-- HEADER-MIDDLE START -->
    <div class="header-middle">
        <div class="container">
            <!-- Start Support-Client -->
            <div class="support-client hidden-xs">
                <div class="row">
                    <!-- Start Single-Support -->
                    <div class="col-md-3 hidden-sm">
                        <div class="single-support">
                            <div class="support-content">
                                <i class="fa fa-clock-o"></i>
                                <div class="support-text">
                                    <h1 class="zero gfont-1">Рабочее время</h1>
                                    <p>Пн - Пт: 8.00 - 18.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-truck"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Бесплатная доставка</h1>
                                <p>При заказе свыше 9000 руб</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-money"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Скидки до 50%</h1>
                                <p>Товары ограничены</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-phone-square"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Телефон: 0123456789</h1>
                                <p>Закажи онлайн сейчас!</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                </div>
            </div>
            <!-- End Support-Client -->
            <!-- Start logo & Search Box -->
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="index.html" title="Malias"><img src="img/logo.png" alt="Malias"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="quick-access">
                        <div class="search-by-category">
                            <div class="search-container">
                                <select>
                                    <option class="all-cate">All Categories</option>
                                    <optgroup  class="cate-item-head" label="Cameras & Photography">
                                        <option class="cate-item-title">Handbags</option>
                                        <option class="c-item">Blouses And Shirts</option>
                                        <option class="c-item">Clouthes</option>
                                    </optgroup>
                                    <optgroup  class="cate-item-head" label="Laptop & Computer">
                                        <option class="cate-item-title">Apple</option>
                                        <option class="c-item">Dell</option>
                                        <option class="c-item">Hp</option>
                                        <option class="c-item">Sony</option>
                                    </optgroup>
                                    <optgroup  class="cate-item-head" label="Electronic">
                                        <option class="c-item">Mobile</option>
                                        <option class="c-item">Speaker</option>
                                        <option class="c-item">Headphone</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="header-search">
                                <form action="#">
                                    <input type="text" placeholder="Поиск">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="top-cart">
                            <ul>
                                <li>
                                    <a href="cart.html">
                                        <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="cart-total">
			                    					<span class="cart-title">shopping cart</span>
				                    				<span class="cart-item">2 item(s)- </span>
				                    				<span class="top-cart-price">$365.00</span>
			                    				</span>
                                    </a>
                                    <div class="mini-cart-content">
                                        <div class="cart-img-details">
                                            <div class="cart-img-photo">
                                                <a href="#"><img src="img/product/total-cart.jpg" alt="#"></a>
                                            </div>
                                            <div class="cart-img-content">
                                                <a href="#"><h4>Prod Aldults</h4></a>
                                                <span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$180.00</strong>
														</span>
                                            </div>
                                            <div class="pro-del">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="cart-img-details">
                                            <div class="cart-img-photo">
                                                <a href="#"><img src="img/product/total-cart2.jpg" alt="#"></a>
                                            </div>
                                            <div class="cart-img-content">
                                                <a href="#"><h4>Fact Prone</h4></a>
                                                <span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$185.00</strong>
														</span>
                                            </div>
                                            <div class="pro-del">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-inner-bottom">
													<span class="total">
														Total:
														<span class="amount">$550.00</span>
													</span>
                                            <span class="cart-button-top">
														<a href="cart.html">View Cart</a>
														<a href="checkout.html">Checkout</a>
													</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End logo & Search Box -->
        </div>
    </div>
    <!-- HEADER-MIDDLE END -->
    <!-- START MAINMENU-AREA -->
    <div class="mainmenu-area shop-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="/">Главная</a></li>
                                <li><a href="/blog">Блог</a></li>
                                <li><a href="/about">О нас</a></li>
<!--                                <li class="hot"><a href="shop.html">Bestseller Products</a></li>-->
<!--                                <li class="new"><a href="shop-list.html">New Products</a></li>-->
<!--                                <li><a href="shop.html">Special Products</a></li>-->
<!--                                <li><a href="#">Pages</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="cart.html">Cart</a></li>-->
<!--                                        <li><a href="checkout.html">Checkout</a></li>-->
<!--                                        <li><a href="account.html">Create Account</a></li>-->
<!--                                        <li><a href="my-account.html">My Account</a></li>-->
<!--                                        <li><a href="product-details.html">Product details</a></li>-->
<!--                                        <li><a href="shop.html">Shop Grid View</a></li>-->
<!--                                        <li><a href="shop-list.html">Shop List View</a></li>-->
<!--                                        <li><a href="wishlist.html">Wish List</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
                                <li><a href="/contact">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN-MENU-AREA -->
    <!-- Start Mobile-menu -->
    <div class="mobile-menu-area no-margin hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav id="mobile-menu">
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li><a href="/blog">Блог</a></li>
                            <li><a href="/about">О нас</a></li>
                            <li><a href="/contact">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile-menu -->
</header>
<!-- HEADER AREA END -->

<?= $content ?>

<!-- FOOTER-AREA START -->
<footer class="footer-area">
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>My Account</h5>
                    </div>
                    <nav>
                        <ul class="footer-content">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="wishlist">Wish List</a></li>
                            <li><a href="#">Search Terms</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>Customer Service</h5>
                    </div>
                    <nav>
                        <ul class="footer-content">
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </nav>
                </div>
<!--                <div class="col-xs-12 hidden-sm col-md-3">-->
<!--                    <div class="footer-title">-->
<!--                        <h5>Payment & Shipping</h5>-->
<!--                    </div>-->
<!--                    <nav>-->
<!--                        <ul class="footer-content">-->
<!--                            <li><a href="#">Brands</a></li>-->
<!--                            <li><a href="#">Gift Vouchers</a></li>-->
<!--                            <li><a href="#">Affiliates</a></li>-->
<!--                            <li><a href="shop-list.html">Specials</a></li>-->
<!--                            <li><a href="#">Search Terms</a></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
<!--                </div>-->
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>Оплата и доставка</h5>
                    </div>
                    <nav>
                        <ul class="footer-content box-information">
                            <li>
                                <i class="fa fa-home"></i><span>Ул. Красноармейская 55</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i><p><a href="contact.html">admin@bootexperts.com</a></p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>01234-56789</span> <br> <span> 01234-56789</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Copyright-area Start -->
<!--    <div class="copyright-area">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <div class="copyright">-->
<!--                        <p>Copyright &copy; Взято с <a href="http://bayguzin.ru" target="_blank"> bayguzin.ru</a> All rights reserved.</p>-->
<!--                        <div class="payment">-->
<!--                            <a href="#"><img src="img/payment.png" alt="Payment"></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Copyright-area End -->
</footer>
<!-- FOOTER-AREA END -->


<!-- jquery
============================================ -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="js/wow.min.js"></script>

<!-- meanmenu JS
============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- countdon.min JS
============================================ -->
<script src="js/countdon.min.js"></script>
<script src="js/jquery-price-slider.js"></script>
<!-- Nivo slider js
============================================ -->
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
			function initialize() {
				var mapOptions = {
					zoom: 5,
					scrollwheel: false,
					center: new google.maps.LatLng(40.7058316, -74.2581978)
				};

				var map = new google.maps.Map(document.getElementById('googleMap'),
					mapOptions);

				var marker = new google.maps.Marker({
					position: map.getCenter(),
					animation:google.maps.Animation.BOUNCE,
					icon: 'img/map-marker.png',
					map: map
				});
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>

<!-- plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="js/main.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
