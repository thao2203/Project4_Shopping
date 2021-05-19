<div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up"  data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">SẢN PHẨM MỚI</h3>
                                <p>Đặt hàng trước ngay bây giờ để nhận ưu đãi và quà tặng độc quyền</p>
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
                                    @foreach($products as $product)                                   
                                    <div class="product-default-single-item product-color--golden swiper-slide">
                                        <form action="">
                                        <input type="hidden" value="{{$product->id}}" class="cart_product_id_{{$product->id}}">
                                        <input type="hidden" value="{{$product->name}}" class="cart_product_name_{{$product->id}}">
                                        <input type="hidden" value="{{$product->feature_image_path}}" class="cart_product_image_{{$product->id}}">
                                        <input type="hidden" value="{{$product->price}}" class="cart_product_price_{{$product->id}}">
                                        <input type="hidden" value="1" class="cart_product_qty_{{$product->id}}">
                                        <div class="image-box">
                                            <a href="/detail/{{$product->id}}" class="image-link">
                                                <img src="{{url('/images/'.$product->feature_image_path)}}" style="width:270px;height:300px" alt="">
                                                <!-- <img src="{{asset('assets/images/product/default/home-1/default-2.jpg')}}" alt=""> -->
                                            </a>
                                            <div class="tag">
                                                <span>Khuyến mại</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                     <button class="btn btn-block btn-lg btn-black-default-hover" type="button" data-id="{{$product->id}}" name="add-to-cart" >Thêm vào giỏ hàng</button>

                                                    <!-- <a href="#" data-bs-toggle="modal" style="font-size: 11px;" data-bs-target="#modalAddcart">Thêm vào giỏ hàng</a> -->
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
                                                <h6 class="title"><a href="/detail/{{$product->id}}">{{ $product->name }}</a></h6> <br>
                                                <span class="price"   style="text-decoration: line-through;">{{ number_format($product->price, 0) }} VNĐ</span>
                                            </div>
                                            
                                            <div class="content-right">
                                            
                                                <span class="price" style="color:brown">{{ number_format($product->price-($product->price*10/100), 0) }} VNĐ</span>
                                            </div>

                                        </div>
                                        </form>
                                        
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