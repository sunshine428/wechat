@extends('layout.layout')

@section('shop')
    欢迎来到微商城
    @endsection
@section('content')

    <!--主体-->
    <div class='weui-content'>
        <!--顶部轮播-->
        <div class="swiper-container swiper-banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/ban1.jpg') }}" /></a></div>
                <div class="swiper-slide"><a href="pro_list.html"><img src="{{ asset('static/index/upload/ban2.jpg') }}" /></a></div>
                <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/ban3.jpg') }}" /></a></div>
                <div class="swiper-slide"><a href="pro_list.html"><img src="{{ asset('static/index/upload/ban4.jpg') }}" /></a></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!--图标分类-->
        <div class="weui-flex wy-iconlist-box">
            <div class="weui-flex__item"><a href="pro_list.html" class="wy-links-iconlist"><div class="img"><img src="{{ asset('static/index/images/icon-link1.png') }}"></div><p>精选推荐</p></a></div>
            <div class="weui-flex__item"><a href="pro_list.html" class="wy-links-iconlist"><div class="img"><img src="{{ asset('static/index/images/icon-link2.png') }}"></div><p>酒水专场</p></a></div>
            <div class="weui-flex__item"><a href="all_orders.html" class="wy-links-iconlist"><div class="img"><img src="{{ asset('static/index/images/icon-link3.png') }}"></div><p>订单管理</p></a></div>
            <div class="weui-flex__item"><a href="Settled_in.html" class="wy-links-iconlist"><div class="img"><img src="{{ asset('static/index/images/icon-link4.png') }}"></div><p>商家入驻</p></a></div>
        </div>
        <!--新闻切换-->
        <div class="wy-ind-news">
            <i class="news-icon-laba"></i>
            <div class="swiper-container swiper-news">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="news_info.html">热烈祝贺伟义商城成功热烈祝贺伟义商城成功上线热烈祝贺伟义商城成功上线上线</a></div>
                    <div class="swiper-slide"><a href="news_info.html">蓝之蓝股份成公司上市</a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <a href="news_list.html" class="newsmore"><i class="news-icon-more"></i></a>
        </div>
        <!--精选推荐-->
        <div class="wy-Module">
            <div class="wy-Module-tit"><span>精选推荐</span></div>
            <div class="wy-Module-con">
                <div class="swiper-container swiper-jingxuan" style="padding-top:34px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan1.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan2.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan3.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan4.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan5.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan1.jpg') }}" /></a></div>
                    </div>
                    <div class="swiper-pagination jingxuan-pagination"></div>
                </div>
            </div>
        </div>
        <!--酒水专场-->
        <div class="wy-Module">
            <div class="wy-Module-tit"><span>酒水推荐</span></div>
            <div class="wy-Module-con">
                <div class="swiper-container swiper-jiushui" style="padding-top:34px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan1.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan2.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan3.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan4.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan5.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan1.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan1.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan2.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan3.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan4.jpg') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/indexupload/jingxuan5.jpg/') }}" /></a></div>
                        <div class="swiper-slide"><a href="pro_info.html"><img src="{{ asset('static/index/upload/jingxuan1.jpg') }}" /></a></div>
                    </div>
                    <div class="swiper-pagination jingxuan-pagination"></div>
                </div>
            </div>
        </div>
        <!--猜你喜欢-->
        <div class="wy-Module">
            <div class="wy-Module-tit-line"><span>猜你喜欢</span></div>
            <div class="wy-Module-con">
                <ul class="wy-pro-list clear">
                    <li>
                        <a href="pro_info.html">
                            <div class="proimg"><img src="{{ asset('static/index/upload/pro1.jpg') }}"></div>
                            <div class="protxt">
                                <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div>
                                <div class="wy-pro-pri">¥<span>296.00</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="pro_info.html">
                            <div class="proimg"><img src="{{ asset('static/index/upload/pro2.jpg') }}"></div>
                            <div class="protxt">
                                <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div>
                                <div class="wy-pro-pri">¥<span>296.00</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="pro_info.html">
                            <div class="proimg"><img src="{{ asset('static/index/upload/pro3.jpg') }}"></div>
                            <div class="protxt">
                                <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div>
                                <div class="wy-pro-pri">¥<span>296.00</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="pro_info.html">
                            <div class="proimg"><img src="{{ asset('static/index/upload/pro4.jpg') }}"></div>
                            <div class="protxt">
                                <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div>
                                <div class="wy-pro-pri">¥<span>296.00</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="pro_info.html">
                            <div class="proimg"><img src="{{ asset('static/index/upload/pro5.jpg') }}"></div>
                            <div class="protxt">
                                <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div>
                                <div class="wy-pro-pri">¥<span>296.00</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="pro_info.html">
                            <div class="proimg"><img src="{{ asset('static/index/upload/pro1.jpg') }}"></div>
                            <div class="protxt">
                                <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div>
                                <div class="wy-pro-pri">¥<span>296.00</span></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="morelinks"><a href="pro_list.html">查看更多 >></a></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('static/index/lib/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('static/index/lib/fastclick.js') }}"></script>
    <script>
        $(function() {
            FastClick.attach(document.body);
        });
    </script>
    <script src="{{ asset('static/index/js/jquery-weui.js') }}"></script>
    <script src="{{ asset('static/index/js/swiper.js') }}"></script>
    <script>
        $(".swiper-banner").swiper({
            loop: true,
            autoplay: 3000
        });
        $(".swiper-news").swiper({
            loop: true,
            direction: 'vertical',
            paginationHide :true,
            autoplay: 30000
        });
        $(".swiper-jingxuan").swiper({
            pagination: '.swiper-pagination',
            loop: true,
            paginationType:'fraction',
            slidesPerView:3,
            paginationClickable: true,
            spaceBetween: 2
        });
        $(".swiper-jiushui").swiper({
            pagination: '.swiper-pagination',
            paginationType:'fraction',
            loop: true,
            slidesPerView:3,
            slidesPerColumn: 2,
            paginationClickable: true,
            spaceBetween:2
        });
    </script>

@endsection