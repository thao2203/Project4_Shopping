@extends('layouts.client')
@section('title')
<title>Trang chính sách - HONO</title>
@endsection
@section('content')
    <!-- Start Header Area -->
    @include('partials.header-section')
    <!-- Start Header Area -->

    <!--  Start Offcanvas Mobile Menu Section -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu  -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="#"><span>Home</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                                <li><a href="index-3.html">Home 3</a></li>
                                <li><a href="index-4.html">Home 4</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Layout</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="shop-grid-sidebar-left.html">Grid Left Sidebar</a></li>
                                        <li><a href="shop-grid-sidebar-right.html">Grid Right Sidebar</a></li>
                                        <li><a href="shop-full-width.html">Full Width</a></li>
                                        <li><a href="shop-list-sidebar-left.html">List Left Sidebar</a></li>
                                        <li><a href="shop-list-sidebar-right.html">List Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="empty-cart.html">Empty Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Product Single</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="product-details-default.html">Product Default</a></li>
                                        <li><a href="product-details-variable.html">Product Variable</a></li>
                                        <li><a href="product-details-affiliate.html">Product Referral</a></li>
                                        <li><a href="product-details-group.html">Product Group</a></li>
                                        <li><a href="product-details-single-slide.html">Product Slider</a></li>
                                        <li><a href="product-details-tab-left.html">Product Tab Left</a></li>
                                        <li><a href="product-details-tab-right.html">Product Tab Right</a></li>
                                        <li><a href="product-details-gallery-left.html">Product Gallery Left</a></li>
                                        <li><a href="product-details-gallery-right.html">Product Gallery Right</a></li>
                                        <li><a href="product-details-sticky-left.html">Product Sticky Left</a></li>
                                        <li><a href="product-details-sticky-right.html">Product Sticky right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a></li>
                                        <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-full-width.html">Blog Full Width</a>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-list-sidebar-left.html">Blog List Sidebar left</a></li>
                                        <li><a href="blog-list-sidebar-right.html">Blog List Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a></li>
                                        <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="faq.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->

            <!-- Start Mobile contact Info -->
            <div class="mobile-contact-info">
                <div class="logo">
                  <a href="index.html"><img src="assets/images/logo/logo_white.png" alt=""></a>  
                </div>

                <address class="address">
                    <span>Address: 4710-4890 Breckinridge St, Fayettevill</span> 
                    <span>Call Us: (+800) 345 678, (+800) 123 456</span> 
                    <span>Email: yourmail@mail.com</span>    
                </address>

                <ul class="social-link">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

                <ul class="user-link">
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
            <!-- End Mobile contact Info -->

        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
            <!-- Start Mobile contact Info -->
            <div class="mobile-contact-info">
                <div class="logo">
                  <a href="index.html"><img src="assets/images/logo/logo_white.png" alt=""></a>  
                </div>

                <address class="address">
                    <span>Address: 4710-4890 Breckinridge St, Fayettevill</span> 
                    <span>Call Us: (+800) 345 678, (+800) 123 456</span> 
                    <span>Email: yourmail@mail.com</span>    
                </address>

                <ul class="social-link">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

                <ul class="user-link">
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
            <!-- End Mobile contact Info -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Addcart Section -->
    @include('partials.offcanvas-add-cart')
    <!-- End  Offcanvas Addcart Section -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- ENd Offcanvas Header -->

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-1/default-1.jpg" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-2/default-1.jpg" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-3/default-1.jpg" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li><a href="#" class="btn btn-block btn-golden">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- End Offcanvas Mobile Menu Section -->

    <!-- Start Offcanvas Search Bar Section -->
    @include('partials.search')
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Về chúng tôi</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Trang chủ</a></li>
                                    <li class="active" aria-current="page">Về chúng tôi</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- Start About Top -->
    <div class="about-top">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between d-sm-column">
                <div class="col-md-6">
                    <div class="about-img" data-aos="fade-up"  data-aos-delay="0">
                        <div class="img-responsive">
                            <img src="{{asset('assets/images/about/gh.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content" data-aos="fade-up"  data-aos-delay="200">
                        <h2 style="padding-bottom: 25px;" >CHÍNH SÁCH DỊCH VỤ</h2>
                        </div>
                        <div class="kc-elm kc-css-204227 kc_text_block"><p>
                        <span style="font-size: 12pt;">
                        <strong>– GIAO HÀNG MIỄN PHÍ:</strong> HONO giao hàng miễn phí trong phạm vi 4km từ cửa hàng gần nhất. Phí giao hàng có thể thay đổi trong một số trường hợp thời tiết khắc nghiệt.</span></p><p><span style="font-size: 12pt;"><strong>– THỜI GIAN LÀM VIỆC:</strong> Tổng đài HONO tiếp nhận đơn hàng trong khung giờ từ 8:00 – 21:00 hàng ngày. Bộ phận giao hàng của chúng tôi có thể phục vụ Quý khách ngoài khung giờ trên nếu có yêu cầu.</span></p><p><span style="font-size: 12pt;"><strong>– GIAO NHẬN SẢN PHẨM:</strong> Quý khách vui lòng kiểm tra và đối chiếu sản phẩm với hóa đơn trước khi thanh toán với nhân viên giao hàng của chúng tôi. Sau khi giao hàng thành công, HONO sẽ không chịu trách nhiệm đối với hình thức và số lượng sản phẩm đã bàn giao.</span></p><p><span style="font-size: 12pt;"><strong>– BẢO MẬT THÔNG TIN:</strong> HONO tôn trọng và cam kết bảo mật các thông tin mang tính riêng tư của Quý khách. Chúng tôi sẽ chỉ sử dụng thông tin Quý khách cung cấp cho mục đích cung cấp dịch vụ và chăm sóc khách hàng.</span></p>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!-- End About Top -->

    <!-- Start Slill Progress -->
    <!-- <div class="progressbar-section section-top-gap-100 section-inner-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content" data-aos="fade-up"  data-aos-delay="0">
                        <h4 class="title">Functionality meets perfection</h4>
                        <p>In today’s day and age, one cannot underestimate the importance of design, the art of creating striking visuals to move and captivate your audience. And as the world becomes more and more digitized with each passing second, the importance of graphic design has been rocketed to the top.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-progress m-t-40">
                        <div class="skill-progressbar" data-aos="fade-up"  data-aos-delay="0">
                            <h6 class="font--semi-bold m-b-15">UI/UX</h6>
                            <div class="line-progressbar" data-percentage="75" data-progress-color="#b19361"></div>
                        </div>
                        <div class="skill-progressbar" data-aos="fade-up"  data-aos-delay="200">
                            <h6 class="font--semi-bold m-b-15">Ideas</h6>
                            <div class="line-progressbar" data-percentage="86" data-progress-color="#b19361"></div>
                        </div>
                        <div class="skill-progressbar" data-aos="fade-up"  data-aos-delay="400">
                            <h6 class="font--semi-bold m-b-15">Design</h6>
                            <div class="line-progressbar" data-percentage="97" data-progress-color="#b19361"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Slill Progress -->
    @include('partials.instagram-section')
    <!-- Start Service Section -->
    @include('partials.service-promo-section')
    <!-- End Service Section -->

    <!--  Start  Team Section    -->
    <!-- <div class="team-section section-top-gap-100 secton-fluid section-inner-bg">
        
        <div class="section-title-wrapper" data-aos="fade-up"  data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content text-center">
                                <h3  class="section-title">Meet Our Team</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-wrapper">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up"  data-aos-delay="0">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader1.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Ms. Veronica</h6>
                                <span class="team-title">Web Designer</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up"  data-aos-delay="200">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader2.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Missa Santos</h6>
                                <span class="team-title">CEO Founder</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up"  data-aos-delay="400">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader3.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Missa Santos</h6>
                                <span class="team-title">Chief Officer</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 mb-5">
                        <div class="team-single" data-aos="fade-up"  data-aos-delay="600">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/team/leader4.png" alt="">
                            </div>
                            <div class="team-content">
                                <h6 class="team-name font--bold mt-5">Lisa Antonia</h6>
                                <span class="team-title">CTO</span>
                                <ul class="team-social pos-absolute">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--   End  Team Section   -->

    <!-- Start Company Logo Section -->
    <!-- <div class="company-logo-section section-top-gap-100 section-fluid">
        <div class="company-logo-wrapper" data-aos="fade-up"  data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo-slider default-slider-nav-arrow">
                          
                            <div class="swiper-container company-logo-slider">
                           
                                <div class="swiper-wrapper">
                               
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img  class="img-fluid" src="assets/images/company-logo/company-logo-1.png" alt=""></div>
                                    </div>
                                   
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-2.png" alt=""></div>
                                    </div>
                                    
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-3.png" alt=""></div>
                                    </div>
                                   
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-4.png" alt=""></div>
                                    </div>
                                    
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-5.png" alt=""></div>
                                    </div>
                                    
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-6.png" alt=""></div>
                                    </div>
                                    
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-7.png" alt=""></div>
                                    </div>
                                    
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-8.png" alt=""></div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="swiper-button-prev d-none d-md-block"></div>
                            <div class="swiper-button-next d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Company Logo Section -->
    
<!-- Start Footer Section -->
@include('partials.footer-section')
<!-- End Footer Section -->

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>

<!-- Start Modal Add cart -->
@include('partials.modalAddcart')
<!-- End Modal Add cart -->

<!-- Start Modal Quickview cart -->
<!-- @include('partials.modalQuickview') -->
<!-- End Modal Quickview cart -->

@endsection