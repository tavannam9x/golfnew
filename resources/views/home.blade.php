<link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{asset ('style/style.css') }}">
<link rel="stylesheet" href="{{ asset ('font-awesome/css/font-awesome.min.css') }}">
<script type="text/javascript" src="{{asset('js/jquery-2.2.0.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset ('js/slick-1.8.1/slick/slick.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset ('js/slick-1.8.1/slick/slick-theme.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/js/bootstrap.min.js') }}">

<script>
    $(window).load(function() {
        $(".stiki").sticky({});
    });
</script>
<style>
    .stiki {
        z-index: 99999 !important;
    }
</style>

<div class="all">
    <header>
        <div class="container">
            <div class="row">
                <div class="header-top">
                    <img width="100%" src="style/img/banner.png">
                </div>
            </div>
        </div>
        <div class="stiki">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-menu row">
                            <div class="col-lg-2 col-sm-12">
                                <button id="menu-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="logo">
                                    <a href="#" title="">
                                        <img src="style/img/logo.png" class="img-fluid">
                                    </a>
                                </div>
                                <button id="search-form-btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="col-lg-10 col-sm-12">
                                <ul class="nav">
                                    <span id="close-menu-btn">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </span>

                                    @foreach($menu as $list)
                                    
                                    <li class="nav-item">
                                        <a class="nav-link"> {{$list->children}}</a>
                                        {{dd($list)}}
                                    </li>
                                 

 
                                    <li class="dropdown">
                                        <a href="video.html" >Góc chuyên môn </a><button id="mm"><i class="fa fa-chevron-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"> {{$list->title}}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-banner">
                        <form class="search-form-header" style="display: none;">
                            <input type="text" name="" placeholder="Tim kiem">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <img src="style/img/banner1.png">
                    <form class="search-form-header">
                        <input id="sear" type="text" name="" placeholder="Tim kiem">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="box">
            <div style="background-color: white" class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 resonleft">
                    <div class="box-left">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="box-left-title">Tin mới</h5>
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/post.png"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/img3.png"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Tin hội golf</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Nữ golfer bị phạt đến... 58 gậy vì để caddie đứng sau đọc line trên green</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/post.png"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Câu lạc bộ</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Hội golf người Việt tại Úc (AVGA) kỷ niệm 10 năm thành lập.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh1.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Giải đấu</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Bernd Wiesberger nhắm tới Ryder Cup lần đầu tiên với chiến thắng Italian Open 2019</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post-img">
                                    <a href="#"><img style="width: 100%; margin-bottom: 10px;" src="style/img/qc.png"></a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh2.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Thời trang</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>CLB Golf G78 miền Nam gia nhập cộng đồng golf Việt</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh3.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Câu lạc bộ</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Giải Golf CLB HIO Mở rộng - Lần 5 hấp dẫn với giải HIO lên đến 2,5 tỷ đồng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh4.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Tin mới nhất</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Nữ golfer bị phạt đến... 58 gậy vì để caddie đứng sau đọc line trên green</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh5.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Tin trong nước</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Thế đứng hợp lý giúp bạn tự tin đánh từ bunker</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post-img">
                                    <a href="#"><img style="width: 100%; margin-bottom: 10px;" src="style/img/qc.png">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh6.png"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Photo</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Bài tập đơn giản giúp cải thiện nhịp điệu khi putt</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh7.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>10 ngày trải nghiệm các sân golf ở Châu Âu theo EVGA Tour</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh8.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Góc chuyên môn</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Hon 200 golfer tranh giai Caballo Open Championship 2019,Ngay 20 thang 9 nam 2019</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh9.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Bên lề</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post-img">
                                    <img style="width: 100%; margin-bottom: 10px;" src="style/img/qc.png">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh10.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Nổi bật</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Matthew Fitzpatrick tiến gần hơn tới chức vô địch Italian Open 2019</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh11.png"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Tin trong nước</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Matthew Fitzpatrick bứt phá trong ngày thi đấu thứ 2 giải Italian Open 2019</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh9.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Thời trang</h6></a>
                                        <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                        <p>Bộ gậy Ping giúp Nate Lashley vô địch Rocket Mortgage Classic 2019</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-left-post">
                                    <div class="box-left-post-img">
                                        <a href="#"><img src="style/img/anh2.jpg"></a>
                                    </div>
                                    <div class="box-left-post-desc">
                                        <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                        <span class="box-left-day">2 gio truoc</span>
                                        <p>Hon 200 golfer tranh giai Caballo Open Championship 2019,Ngay 20 thang 9 nam 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 responright">
                    <div class="box-right">
                        <h5 class="box-right-title">Truyền hình</h5>
                        <div class="box-right-video">
                            <img style="width: 100%; height: 100%" src="style/img/video.png">
                        </div>
                        <div class="qc">
                            <a href="#"><img src="style/img/banner.png"></a>
                        </div>

                        <div class="box-right-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="block-title-right">
                                        <ul>
                                            <li>
                                                <a href="quoc-te">Bên lề</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-new-left">
                                        <div class="post-new-img">
                                            <a href="#"><img src="style/img/anh2.jpg"></a>
                                        </div>
                                        <div class="post-new-desc">
                                            
                                            <a href="#"><h6 class="post-title"></h6></a>
                                            
                                            <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                        </div>
                                    </div>
                                    <div class="post-new-right">
                                        <div class="slim-scroll">
                                            <div class="scrollbar">
                                                
                                                <div class="post-new-link">
                                                    <a href="#"><h6 class="post-title"> </h6></a>
                                                    <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="qc">
                            <a href="#"><img src="style/img/banner.png"></a>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- //////////////////mobile//////////// -->
<div style="background-color: #DADADA;" class="mobile">
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
    <div style="padding: 0px;" class="container">
        <p class="watch-all"><a href="#">Xem tat ca</a>
        </p>
        <h4 class="post-mobile-sologan">Quốc tế</h4>
        <section class="slide-post slider">
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
            <div class="slide slick">
                <div class="post-mobile">
                    <div class="post-mobile-img">
                        <img src="style/img/post.png">
                    </div>
                    <div class="post-mobile-desc">
                        <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                        <span class="post-mobile-time">2 gio truoc</span>
                        <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="qc">
        <img src="style/img/banner.png">
    </div>
</div>
<div class="container p-0">
    <footer>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-6">
                <a href="#"><img style="margin-bottom: 10px;" src="style/img/logo.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-offset-6">
                <p>
                    <b>TRANG THÔNG TIN ĐIỆN TỬ TỔNG HỢP VỀ GOLF</b>
                </p>
                <p>
                    Công ty CP Dịch vụ Truyền thông Golf Việt Nam
                </p>
                <p>
                    Địa chỉ: 549 Điện Biên Phủ, P.3, Q.3, TP. HCM
                </p>
                <p>
                    VP Hà Nội: Tầng 3, 101 B1, 92 Nguyễn Khánh Toàn, Cầu Giấy
                </p>
                <p>
                    Hotline: 0912 800 308
                </p>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-offset-6">
                <p>
                    <b>TRANG THÔNG TIN ĐIỆN TỬ TỔNG HỢP VỀ GOLF</b>
                </p>
                <p>
                    Giấy phép ICP số 36/GP-TTĐT do sở thông tin và truyền thông TPHCM cấp ngày 04/05/2018
                </p>
                <p>
                    Chịu trách nhiệm nội dung: Trang Lan Anh Phương
                </p>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-offset-6">
                <p>
                    <b>LIÊN HỆ QUẢNG CÁO</b>
                </p>
                <p>
                    <i class="fa fa-facebook-square mr-2"></i>Ms Minh Ngọc</p>
                <p>
                    <i class="fa fa-twitter-square  mr-2"></i> Mobile: 0912.800.308</p>
                <p>
                    <i class="fa fa-phone-square mr-2"></i> Email: contact@golfnews.vn</p>
                <p>
            </div>
        </div>
    </footer>
</div>
<div style="background-color: orange;" class="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
<div style="background-color: orange;" class="back-to-top">
    <i class="fa fa-angle-up" aria-hidden></i>
</div>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="js/slick-1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<Script>
    $(document).ready(function() {
        $('.slide-post').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1.5
                }
            }]
        });
        $('.slide-link').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });
</Script>
<script>
    $(document).ready(function() {
        $('.scrollbar').slimScroll({
                opacity: 0,
                height: '400px',
                allowPageScroll: true,
                disableFadeOut: true,
            })
            .mouseover(function() {
                $(this).next('.slimScrollBar').css('opacity', 0.2);
            });
    });
</script>