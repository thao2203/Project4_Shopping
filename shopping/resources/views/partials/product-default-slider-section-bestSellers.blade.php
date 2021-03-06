<div class="product-default-slider-section section-top-gap-100 section-fluid section-inner-bg">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up"  data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3  class="section-title">BÁN CHẠY NHẤT</h3>
                                <p>Thêm sản phẩm tốt nhất của chúng tôi vào danh sách hàng tuần của bạn.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up"  data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-2rows default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-2row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Start Product Default Single Item -->
                                    @foreach($products_bestSeller as $product)                                   
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <div class="image-box">
                                            <a href="/detail/{{$product->id}}" class="image-link">
                                                <img src="{{url('/images/'.$product->img_pro)}}" style="width:270px;height:300px" alt="">
                                                <!-- <img src="{{asset('assets/images/product/default/home-1/default-2.jpg')}}" alt=""> -->
                                            </a>
                                            <div class="tag">
                                                <span>Khuyến mại</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                <button type="button" name="add-to-cart"  data-id="{{$product->id}}"class="btn add-to-cart">Thêm vào giỏ hàng</button>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="/detail/{{$product->id}}">{{ $product->name_pro }}</a></h6> <br>
                                                <span class="price"   style="text-decoration: line-through;">{{ number_format($product->price, 0) }} VNĐ</span>
                                            </div>
                                            
                                            <div class="content-right">
                                                <span class="price" style="color:brown">{{ number_format($product->price-($product->price*10/100), 0) }} VNĐ</span>
                                            </div>

                                        </div>
                                    </div>

                                    @endforeach
                                    
                                    <!-- End Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div> 