<style>
._2ljuu {
    display: inline-block;
    font-style: normal;
    font-weight: 700;
    font-size: 110px;
    margin: 0;
}
.-vVex {
    font-size: 32px;
    text-transform: uppercase;
    letter-spacing: .01em;
    margin-bottom: 20px;
    line-height: .9;
}
._3PcwG {
    font-size: 14px;
    line-height: 24px;
}
._3bFHa {
    max-width: 300px;
    padding: 50px 50px;
}
._3oQIi {
    margin: 20px 0;
    font-size: 45px;
    line-height: 50px;
    text-transform: uppercase;
    line-height: .9;
    letter-spacing: -1px;
}

._31ozo {
    color: #FFFFFF;
    background-color: #000000;
    border-radius: 5px;
    padding: 15px 15px;
    font-size: 15px;
}

</style>
@if($tproducts !='')
</br>
    <!--<div class="featured-product-wrap wow fadeInUp" style="">-->
    <!--    <div class="container" style="border:1px #d1dfe8 solid; border-radius:10px; padding:10px;">-->
    <!--        <div class="row">-->
                
    <!--            <div class="col-lg-12">-->
    <!--                <div class="section-title text-center">-->
                        <!--<h2>our new arrival products </h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--                <div class="col-lg-4 col-md-4 col-xs-12 text-center single-banner-img" style="border-right:1px solid #d1dfe8;">-->
    <!--                    <a href="https://koel.shop/category/mens" class="single-image-blog-box" title="Mens' Collection">-->
    <!--                        <div style="padding: 20px; background-color: #1a2a7a85; color: #fff; border:1px; border-radius:10px;">-->
    <!--                        <div>-->
    <!--                            <h3>Mens</h3>-->
    <!--                            <h4>New Arrival</h4>-->
    <!--                        </div>-->
    <!--                        </div>-->
    <!--                    </a>-->
                        <!--<div class="single-banner-img">
    <!--                        <a href="https://koel.shop/category/mens" class="single-image-blog-box" title="Mens' Collection"> -->
    <!--                            <img src="{{asset('assets/front/images/mens.jpeg')}}" class="" title="Mens' Collection" alt="Mens' Collection">-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
                    
    <!--                <div class="col-lg-4 col-md-4 col-xs-12 text-center single-banner-img" style="border-right:1px solid #d1dfe8;">-->
    <!--                    <a href="https://koel.shop/category/kids" class="single-image-blog-box" title="Kids' Collection">-->
    <!--                        <div style="padding: 20px; background-color: #0c62ff85; color: #fff; border:1px; border-radius:10px;">-->
    <!--                        <div>-->
    <!--                            <h3>Kids</h3>-->
    <!--                            <h4>New Arrival</h4>-->
    <!--                        </div>-->
    <!--                        </div>-->
    <!--                    </a>-->
                        <!--<div class="single-banner-img">
    <!--                        <a href="https://koel.shop/category/kids" class="single-image-blog-box" title="Boys' Collection"> -->
    <!--                            <img src="{{asset('assets/front/images/kids.jpeg')}}" class="" title="Boys' Collection" alt="Boys' Collection"> -->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
                    
    <!--                <div class="col-lg-4 col-md-4 col-xs-12 text-center single-banner-img" style="">-->
    <!--                    <a href="https://koel.shop/category/womens" class="single-image-blog-box" title="Womens' Collection">-->
    <!--                        <div style="padding: 20px; background-color: #ff0c7c; color: #fff; border:1px; border-radius:10px;">-->
    <!--                        <div>-->
    <!--                            <h3>Ladies</h3>-->
    <!--                            <h4>New Arrival</h4>-->
    <!--                        </div>-->
    <!--                        </div>-->
    <!--                    </a>-->
                        <!--<div class="single-banner-img">
    <!--                        <a href="https://koel.shop/category/womens" class="single-image-blog-box" title="Womens' Collection"> -->
    <!--                            <img src="{{asset('assets/front/images/women.jpeg')}}" class="" title="Womens' Collection" alt="Womens' Collection">-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
                    <!--<div class="col-lg-12 col-md-12 col-xs-12" style="margin-top:10px;">
    <!--                    <div class="single-banner-img">-->
    <!--                        <a href="https://koel.shop/category/inner-garments" class="single-image-blog-box" title="Inner Garments' Collection"> -->
    <!--                            <img src="{{asset('assets/front/images/inner-garments.jpg')}}" class="" title="Inner Garments' Collection" alt="Inner Garments' Collection" height="400">-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
                    
                
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    

    
    @endif

<!--@if($new !='')


    
    @endif-->
    
    
    <div class="section-padding featured-product-wrap wow fadeInUp" style="padding:0px;">
        @foreach($cate as $catedata)
        <div class="container">
            <div class="row">
                 @php 
                    $product_details = App\Product::where('category_id','=',$catedata->id)->orderBy('id','desc')->take(8)->get();
                @endphp
                @if($product_details !='')
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>{{$catedata->cat_name}}</h2>
                        <!--<h5>our new {{$catedata->slug}} products</h5>-->
                    </div>
                </div>
                @else
                
                @endif
               
            
                    <div class="col-lg-12">
                                <div class="owl-carousel featured-carousel owl-test">
                                    
                                    @foreach($product_details as $product_data)
                                        @php
                                            $name = str_replace(" ","-",$product_data->name);
                                        @endphp
                                        <a href="{{route('front.product',['id' => $product_data->id, 'slug' => $name])}}" class="single-product-area">
                                            <div class="product-image-area text-center" style="width: 100%;">
                                                @if($product_data->features!=null && $product_data->colors!=null)
                                                    @php
                                                        $title = explode(',', $product_data->features);
                                                        $details = explode(',', $product_data->colors);
                                                    @endphp
                                                    <div class="featured-tag" style="width: 100%;">
                                                        @foreach(array_combine($title,$details) as $ttl => $dtl)
                                                            <style type="text/css">
                                                                span#d{{$j++}}:after {
                                                                    border-left: 10px solid {{$dtl}};
                                                                }
                                                            </style>
                                                            <span id="d{{$i++}}" style="background: {{$dtl}}">{{$ttl}}</span>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                <img src="{{asset('assets/images/'.$product_data->photo)}}" alt="featured product">
                                                @if($product_data->youtube != null)
                                                    <div class="product-hover-top">
                                                        <span class="fancybox" data-fancybox href="{{$product_data->youtube}}"><i class="fa fa-play-circle"></i></span>
                                                    </div>
                                                @endif

                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-border"></div>
                                                <div class="product-hover-area">
                                                    <input type="hidden" value="{{$product_data->id}}">
                                                    @if(Auth::guard('user')->check())
                                                        <span class="wishlist hovertip uwish" rel-toggle="tooltip" title="{{$lang->wishlist_add}}"><i class="fa fa-heart"></i>
                                <span class="wish-number">{{App\Wishlist::where('product_id','=',$product_data->id)->get()->count() }}</span>
                              </span>
                                                    @else
                                                        <span class="wishlist hovertip no-wish" data-toggle="modal" data-target="#loginModal" rel-toggle="tooltip" title="{{$lang->wishlist_add}}"><i class="fa fa-heart"></i>
                                <span class="wish-number">{{App\Wishlist::where('product_id','=',$product_data->id)->get()->count() }}</span>
                              </span>
                                                    @endif
                                                    <span class="wish-list hovertip wish-listt" data-toggle="modal" data-target="#myModal" rel-toggle="tooltip" title="{{$lang->quick_view}}"><i class="fa fa-eye"></i>
                              </span>
                                                    <span class="hovertip addcart" rel-toggle="tooltip" title="{{$lang->hcs}}"><i class="fa fa-cart-plus"></i>
                              </span>
                                                    <span class="hovertip compare" rel-toggle="tooltip" title="{{$lang->compare}}"><i class="fa fa-exchange"></i>
                              </span>
                                                </div>


                                            </div>
                                            
                                            
                                            <div class="product-description text-center">
                                                <div class="product-name">{{strlen($product_data->name) > 50 ? substr($product_data->name,0,50)."..." : $product_data->name}}</div>
                                                <div class="product-review">
                                                    <div class="ratings">
                                                        <div class="empty-stars"></div>
                                                        <div class="full-stars" style="width:{{App\Review::ratings($product_data->id)}}%"></div>
                                                    </div>
                                                </div>
                                                @if($gs->sign == 0)
                                                    <div class="product-price">{{$curr->sign}}
                                                        @if($product_data->user_id != 0)
                                                            @php
                                                                $price = $product_data->cprice + $gs->fixed_commission + ($product_data->cprice/100) * $gs->percentage_commission ;
                                                            @endphp
                                                            {{round($price * $curr->value,2)}}
                                                        @else
                                                            {{round($product_data->cprice * $curr->value,2)}}
                                                        @endif
                                                        <del class="offer-price">{{$curr->sign}}{{round($product_data->pprice * $curr->value,2)}}</del>

                                                    </div>
                                                @else
                                                    <div class="product-price">
                                                        @if($product_data->user_id != 0)
                                                            @php
                                                                $price = $product_data->cprice + $gs->fixed_commission + ($product_data->cprice/100) * $gs->percentage_commission ;
                                                            @endphp
                                                            {{round($price * $curr->value,2)}}
                                                        @else
                                                            {{round($product_data->cprice * $curr->value,2)}}
                                                        @endif
                                                        <del class="offer-price">{{$curr->sign}}{{round($product_data->pprice * $curr->value,2)}}</del>
                                                        {{$curr->sign}}
                                                    </div>
                                                @endif
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                </div>
                
            </div>
        </div>
        @endforeach
    </div>    
    
    
    
    
    @if($beproducts !='')

<div class="section-padding featured-product-wrap wow fadeInUp" style="padding-top:10px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center"style="padding-bottom:30px;">
                    <h2>UPCOMING VENDORS PRODUCTS</h2><!--
                    <h5>our best products</h5>-->
                </div>
            </div>
                <div class="col-lg-12" style="border:1px #d1dfe8 solid;border-radius:10px; padding:10px;">
                    <div class="single-banner-img">
                    <a href="{{route('front.best-product')}}" class="single-image-blog-box text-center" title="Exclusive' Collection"> 
                        <img src="{{asset('assets/images/new-arrival-women-01.jpg')}}" class="item-img" title="Products' Collection" alt="Products' Collection" style="height:350px;">
                    </a>
                    </div>
                </div>
        </div>
    </div>
</div>

<!--<div class="section-padding featured-product-wrap wow fadeInUp" style="padding-top:10px;">
    <div class="container">
        <div class="row">
                <div class="col-lg-6">
                    <a class="_31ozo" style="cursor: pointer;" data-toggle="modal" data-target="#vendorloginModal">
                        <img src="{{asset('assets/front/images/01.jpg')}}" class="item-img img-responsive " title="Products' Collection" alt="Products' Collection" height="400">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="_31ozo" style="cursor: pointer;" data-toggle="modal" data-target="#vendorloginModal">
                        <img src="{{asset('assets/front/images/02.jpg')}}" class="item-img img-responsive " title="Products' Collection" alt="Products' Collection" height="400">
                    </a>
                </div>
        </div>
    </div>
</div>
-->
    @endif
<!--  Starting of product banner area   -->
<div class="section-padding product-banner-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
    <div class="container" style="">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center"style="padding-bottom:30px;">
                    <h2>EXCLUSIVE BRAND</h2>
                    <span style="font-size:18px;">If you need any special brand you can request</span>
                </div>
            </div>
            
            <div class="col-lg-12 col-md-12 col-sm-12" style="border:1px #d1dfe8 solid;border-radius:10px; padding:10px;">
                <div class="single-banner-img">
                    <a href="{{route('front.request-new-brand')}}" class="single-image-blog-box text-center" title="Request' Band"> 
                        <img src="{{asset('assets/images/new-arrival-kids-01.jpg')}}" class="item-img img-responsive " title="Request' Band" alt="Request' Band"  style="height:350px;">
                    </a>
                    </div>
            </div>
        </div>
    </div>
</div>
    <!--  Ending of product banner area   -->
    
    
   @if($gs->lb == 1) 
    <div class="section-padding product-banner-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center"style="padding-bottom:30px;">
                        <h2>BEST OFFER</h2><!--
                        <span style="font-size:18px;">our best offer</span> <br><br>-->
                    </div>
                </div>
                
                @foreach($imgs as $img)
                    <div class="col-lg-6 col-md-6 col-sm-6" style="">
                        <div class="single-banner-img">
                            <a href="{{$img->url}}" class="single-image-blog-box">
                                <img class="btbn" src="{{asset('assets//images/'.$img->photo)}}" alt="banner">

                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    @if($gs->pp == 0)
    <!--  Starting of countdown area   -->
    <div class="section-padding countdown-wrap wow fadeInUp" data-wow-duration="1s" style="background-image: url({{asset('assets/images/'.$gs->count_image)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="count-down-text-wrap text-center">
                        <div class="count-down-header">
                            <h2>{{$gs->count_title}}</h2>
                            <h4>{{$gs->count_heading}}</h4>
                        </div>

                        <div class="countdown-timer-wrap">
                            <div id="clock"></div>
                        </div>

                        <div class="count-down-button">
                            <a href="{{$gs->count_link}}" class="btn btn-primary">{{$lang->shop_now}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Ending of countdown area   -->
@endif

<!--  Starting of Dev Shishu area   -->
    <!--<div class="product-banner-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" style="padding:25px;background-color: #004b802e; margin-top:50px;">
            <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="_3bFHa" style="">
                            <h2 class="_2ljuu">
                                1
                            </h2>
                            <h4 class="-vVex"> The Biggest Selection </h4>
                            <p class="_3PcwG">Shop over 12,000 brands and stores in one place.</p>
                            <p class="_3PcwG">Find exactly what you want with powerful search and personal recommendations.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="_3bFHa" style="">
                            <h2 class="_2ljuu">
                                2
                            </h2>
                            <h4 class="-vVex"> THE HOTTEST PRODUCTS </h4>
                            <p class="_3PcwG">See what’s new and what’s trending.</p>
                            <p class="_3PcwG">Hit the heart to receive alerts on the latest drops from your favourite brands.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="_3bFHa" style="">
                            <h2 class="_2ljuu">
                                3
                            </h2>
                            <h4 class="-vVex"> THE BEST PRICES </h4>
                            <p class="_3PcwG">Compare prices and shipping options across thousands of stores.</p>
                            <p class="_3PcwG">Lyst members are notified when an item goes on sale.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="_3bFHa" style="">
                            <p class="_3oQIi">Sign Up For Smarter Shopping</p>
                            <a class="_31ozo" style="cursor: pointer;" data-toggle="modal" data-target="#vendorloginModal">Join</a>
                        </div>
                    </div>
            </div>
    </div>-->
    <!--  Ending of Dev Shishu area   -->
    
    <!--  Starting of Dev Shishu area   -->
    <div class="section-padding product-banner-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center"style="padding-bottom:30px;">
                        <h2>DEV SHISHU</h2>
                        
                    </div>
                </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-banner-img" style="padding:25px;border: 1px #d1dfe8 solid;border-radius:10px;">
                            <a href="{{asset('assets/images/dev-shishu.jpeg')}}" class="single-image-blog-box">
                                <img class="btbn" src="{{asset('assets/images/dev-shishu.jpeg')}}" alt="banner">

                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-banner-img" style="padding:21px;border: 1px #d1dfe8 solid;border-radius:10px;">
                            @php
                                $dev_shishu = DB::table('dev_shishus')->first();
                            @endphp
                            <div>
                                <a href="{{route('front.dev-shishu')}}" class="single-image-blog-box" style="color: #575454;font-size: 16px;">
                                    {{ substr(strip_tags($dev_shishu->text), 0, 750) }}
                                    {{ strlen(strip_tags($dev_shishu->text)) > 750 ? "&nbsp; &nbsp; ...ReadMore" : "" }}
                                </a>
                            </div>
                            
                               
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!--  Ending of Dev Shishu area   -->
    
    <!--  Starting of Dev Shishu area   -->
    <div class="section-padding product-banner-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" style="padding-top:35px;padding-bottom:30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center"style="padding-bottom:30px;">
                        <h2>DESIGN YOUR HOPE</h2>
                        
                    </div>
                </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-banner-img" style="padding:21px;border: 1px #d1dfe8 solid;border-radius:10px;">
                            @php
                                $design_ur_hope = DB::table('design_your_hopes')->first();
                            @endphp
                            <div>
                                <a href="{{route('front.design-hope')}}" class="single-image-blog-box" style="color: #575454;font-size: 16px;">
                                    {{ substr(strip_tags($design_ur_hope->text), 0, 750) }}
                                    {{ strlen(strip_tags($design_ur_hope->text)) > 750 ? "...ReadMore" : "" }}
                                </a>
                            </div>
                               
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-banner-img" style="padding:25px;border: 1px #d1dfe8 solid;border-radius:10px;">
                            <a href="{{asset('assets/images/design-ur-hope.jpeg')}}" class="single-image-blog-box">
                                <img class="btbn" src="{{asset('assets/images/design-ur-hope.jpeg')}}" alt="banner">

                            </a>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
    <!--  Ending of Dev Shishu area   -->
    
@endif

@if($gs->ftp == 1)
    <!--  Starting of video blog area   -->
    <div class="video-blog-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="background-image: url({{asset('assets/images/'.$gs->vidimg)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text-area text-center">
                        <div class="video-header">
                            <h2>{{$lang->video_title}}</h2>
                        </div>
                        <div class="video-play-area">
                            <div class="video-play-btn">
                                <a class="fancybox" data-fancybox href="{{$gs->vid}}"><img src="{{asset('assets/front/images/video/video-play.png')}}" alt="video play"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Ending of video blog area   -->
@endif

@if($gs->bs == 1)
    <!--  Starting of latest news area   -->
    <div class="section-padding latest-news-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>{{$lang->lns}}</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel latest-news-list">
                        @foreach($lblogs as $lblog)
                            <a href="{{route('front.blogshow',$lblog->id)}}" class="single-news-list">
                                <div class="news-img">
                                    <img class="news-img" src="{{asset('assets/images/'.$lblog->photo)}}" alt="news image">
                                    <div class="news-list-meta"><span>{{date('d',strtotime($lblog->created_at))}}</span> {{date('M',strtotime($lblog->created_at))}}</div>
                                </div>
                                <div class="news-list-text">
                                    <h4 dir="{{$lang->rtl == 1 ? 'rtl':''}}">{{strlen($lblog->title) > 50 ? substr($lblog->title,0,50)."..." : $lblog->title}}</h4>
                                    <p dir="{{$lang->rtl == 1 ? 'rtl':''}}">{{substr(strip_tags($lblog->details),0,250)}}</p>
                                </div>
                                <hr/>
                                <div class="news-list-button"  dir="{{$lang->rtl == 1 ? 'rtl':''}}">
                                    <span class="news-btn">{{$lang->vd}}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Ending of latest news area   -->
@endif

@if($gs->ts == 1)
<!--<div class="container-fluid">
        <video class="videos-style" controls>
          <source src="{{asset('assets/images/video/final-vedio.mp4')}}" type="video/mp4">
          <source src="{{asset('assets/images/video/final-vedio.ogg')}}" type="video/ogg">
        </video>
    </div>-->
    
    <!--  Starting of review carousel area   -->
    <div class="section-padding review-carousel-wrap overlay wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="background-image: url({{asset('assets/images/'.$gs->cimg)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>{{$lang->review_title}}</h2>
                    </div>
                </div>
                
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="owl-carousel review-carousel">
                        @foreach($ads as $ad)
                            <div class="single-review-carousel-area text-center">
                                <div class="review-carousel-profile">
                                    <img src="{{asset('assets/images/'.$ad->photo)}}" alt="review profile">
                                </div>
                                <div class="review-carousel-text">
                                    <h5 class="profile-name">{{$ad->client}}</h5>
                                    <p>{{$ad->review}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--  Ending of review carousel area   -->
@endif

<!--@if($gs->bl == 1)
    
    <section class="section-padding client-logo-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>{{$lang->sue}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel logo-carousel">
                        @foreach($brands->chunk(10) as $brandz)
                            <ul class="logo-wrapper">
                                @foreach($brandz as $brand)
                                    <li><a href="{{$brand->url}}"><img src="{{asset('assets/images/'.$brand->photo)}}" alt="client logo"></a></li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endif-->
<script src="{{asset('assets/front/js/main.js')}}"></script>
<script>
    //---------Countdown-----------
    $('#clock').countdown('{{$gs->count_date}}', function(event) {
        $(this).html(event.strftime('<span class="countdown-timer-wrap"></span><span class="single-countdown-item">%w <br/><span>{{$lang->week}}</span></span> <span class="single-countdown-item">%d <br/><span>{{$lang->day}}</span></span> <span class="single-countdown-item">%H <br/><span>{{$lang->hour}}</span></span> <span class="single-countdown-item">%M <br/><span>{{$lang->minute}}</span></span> <span class="single-countdown-item">%S <br/><span>{{$lang->second}}</span></span> </span>'));
    });
</script>
