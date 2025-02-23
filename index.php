<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>ViDucHung - Profile</title>
    <meta itemprop="image" content="https://i.ibb.co/pn6d6V1/php-FOs-En5.png">
    <meta name="description" content="viduchung, Vi Duc Hung, Vi Đức Hùng">
    <meta name="keywords" content="viduchung, Vi Duc Hung, Vi Đức Hùng">
    <!-- Stylesheets -->
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/responsive.css" rel="stylesheet">
    <link href="static/css/5761cbef85b34e91bcd6acc9cdcfabe3.css" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="static/js/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="static/js/respond.js"></script><![endif]-->
    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/cursor6.js" type="text/javascript"></script>
</head>

<body>
    <script src="static/js/ip.js"></script>
    <div id='snowflakeContainer'>
        <p class='snowflake'>❄</p>
    </div>
    <div class="page-wrapper default-version">

        <!-- Preloader -->
        <div class="preloader"></div>

        <div class="page-background">
            <div class="image-1"><img src="static/picture/icon-1.png" alt=""></div>
            <div class="image-7"><img src="static/picture/icon-7.png" alt=""></div>
            <canvas id="canvas"></canvas>
        </div>

        <style>
            body {
                font-family: 'Noto Serif SC', serif;
                font-weight: 400;
            }

            .header ul li a {
                background: #ededed;
            }

            .header {
                background: #ededed;
            }

            .card-home .author h3 {
                color: #fff;
            }

            .card-home .author .designation {
                color: #fff;
            }

            .card-home .text {
                color: #fff;
            }

            .card-outer .card-wrapper {
                border-radius: 25px;
            }

            .header {
                border-radius: 20px;
            }

            .card-outer .card-inner-box.offsetleft .header {
                border-radius: 20px;
            }

            .header ul li.active a {
                background: #9147ff;
                color: #fff;
                border-radius: 20px;
            }

            .card-resume .title {
                margin-top: 0px;
            }

            .card-services .title {
                margin-top: 0px;
            }

            .card-projects .title {
                margin-top: 0px;
            }

            .card-blog .title {
                margin-top: 0px;
            }

            .card-contact .title {
                margin-top: 0px;
            }

            .projects-block .image {
                border-radius: 10px;
            }

            .contact-form .form-group textarea {
                border-radius: 10px;
            }

            .news-block .image:before {
                border-radius: 10px;
            }

            .news-block .image img {
                border-radius: 10px;
            }

            .news-block .lower-content {
                border-radius: 0px 0px 10px 10px;
                padding: 30px;
                border: 1px solid rgba(208, 206, 206, 0.4);
                border-top: 0px;
                box-shadow: 0 3px 12px #ebedf0ad;
            }

            .home-google-map .google-map {
                height: 0px;
            }

            .author-info .author h3 {
                font-weight: 500;
                color: #fff;
            }

            .author-info .author .designation {
                font-family: 'Poppins', sans-serif;
                font-size: 15px;
                margin-bottom: 30px;
                color: #fff;
            }

            .social-icon-two li a {
                color: #ffffff;
            }

            .btn-style-two {
                color: #fff;
            }

            .social-icon-two li a {
                line-height: 42px;
                border: 1px solid #dbdbdb;
            }

            .news-block .date {
                background-color: #2229;
            }

            .huise {
                color: #ccc;
            }

            .services-block .text {
                margin-bottom: 10px;
                height: 3rem;
            }

            .services-block.col-md-6 {
                cursor: pointer;
            }

            .btn-style-one,
            .btn-style-two {
                padding: 8px 30px;
            }

            .default-version .card-outer .card-wrapper {
                box-shadow: 0 0 13px 2px rgb(156 154 154 / 27%);
            }

            @media only screen and (max-width: 1199px) {
                .default-version .card-outer .card-wrapper {
                    box-shadow: none;
                }
            }

            .projects-block .image {
                border-radius: 15px;
                box-shadow: 0px 0px 10px 0 rgb(176 169 169 / 29%);
                margin: 10px;
            }

            .shadow-blur {
                position: relative;
            }

            .shadow-blur::before {
                content: "";
                display: block;
                background: inherit;
                filter: blur(0.5rem);
                position: absolute;
                width: 100%;
                height: 100%;
                top: 5px;
                left: 5px;
                z-index: -1;
                opacity: 0.4;
                transform-origin: 0 0;
                border-radius: inherit;
                transform: scale(1, 1);
            }

            .ltps {
                background-image: linear-gradient(45deg, #0081ff, #1cbbb4);
                border-radius: 1rem;
                color: #fff;
                border-radius: 0.5rem;
                padding: 1.5rem 1rem;
                font-size: 1.3rem;
                font-family: 'Noto Serif SC', serif;
                font-weight: 700;
                display: flex;
                align-items: center;
                margin-bottom: 20px;
            }


            .ltps .hen {
                width: 4px;
                height: 20px;
                background: #fff;
                display: inline-block;
                border-radius: 1rem;
                margin-right: 0.6rem;
            }

            .keyPoint{
                background-color: #d2f1f0;
                color: #1cbbb4;
                padding: 2px 10px;
                border-radius: 20px;
                font-style: normal;
                font-size: 14px;
            }

            .keyPoint_t{
                background-color: #fde6d2;
                color: #f37b1d;
                padding: 2px 10px;
                border-radius: 20px;
                font-style: normal;
                font-size: 14px;
            }

            #snowflakeContainer {
            position: absolute;
            left: 0px;
            top: 0px;
            }
            .snowflake {
            padding-left: 15px;
            font-size: 14px;
            line-height: 24px;
            position: fixed;
            color: #ebebeb;
            user-select: none;
            z-index: 1000;
            -moz-user-select: none;
            -ms-user-select: none;
            -khtml-user-select: none;
            -webkit-user-select: none;
            -webkit-touch-callout: none;
            }
            .snowflake:hover {
            cursor: default;
            }
            .__tick {
            width: 50px;
            border: none !important;
            background-color: unset !important;
            }
            a {
            cursor: pointer !important;
            }
            /* Ông già Noel */
            #santa {
            position: fixed;
            bottom: 5px;
            left: 5px;
            width: 100px;
            height: 100px;
            background: url("https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExeDU2ZnhjaGgzczh2eTVkdWc1bmdzMmk1ZjViM2ZhdHd2cXp3aGRjaSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/elHA7JB8U4pDyqgYG2/giphy.gif")
                no-repeat center/contain;
            z-index: 9999;
            }

            /* Cây thông */
            #tree {
            position: fixed;
            bottom: 5px;
            right: 5px;
            width: 100px;
            height: 100px;
            background: url("https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExeXFvMGZzc3JwaHJtNmM3aDZwZHdhNmY4MWcwaGs5cHF2Ym5wb3BlZiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/lyowCkCJMzuYU/giphy.gif")
                no-repeat center/contain;
            z-index: 9999;
            cursor: pointer;
            }

        </style>


        <!-- Mobile menu -->
        <div class="mobile-menu">
            <div class="container">
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <div class="logo"><a href="index.html"><img src="" alt=""></a></div>
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse scroll-nav clearfix">
                            <ul class="navigation clearfix">

                                <li class="current"><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#resume">Resume</a></li>
                                <li><a href="#services">Hobbies</a></li>
                                <li><a href="#work">Pictures</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#contact">Contact</a></li>

                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                <!--Nav Outer End-->
            </div>
        </div>

        <div class="card-outer">
            <div class="scroll-box">
                <div class="container" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
                    <div class="card-wrapper">
                        <div class="author-info"
                            style="background-image:url(static/images/4f43dd3f543affdc2d372d4f5ea392ba.jpeg);border-radius: 25px;background-size: 145%;">
                            <div class="image"><img src="static/picture/hung.jpg" alt=""></div>
                            <div class="author">
                                <h3>Vi Duc Hung</h3>
                                <div class="designation" style="font-family: 'Noto Serif SC', serif;font-weight: 400;">
                                    Hung：
                                    <div class="typing-title">
                                        <p> <strong>Xin chao cac bann！</strong></p>
                                        <p> <strong>Toi la ViDucHung！</strong></p>
                                    </div>
                                    <span class="typed-title"></span>
                                </div>
                            </div>
                            <div class="link-btn">
                                <a href="https://facebook.com/wei.de.xiong"
                                    class="theme-btn btn-style-one">
                                    liên hệ với tôi.</a>
                            </div>
                            <ul class="social-icon-two">
                                <li><a href="https://facebook.com/wei.de.xiong"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="https://instagram.com/_viduchung"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fa fa-weixin"></span></a></li>
                            </ul>
                        </div>
                        <div class="card-inner-box">
                            <header class="header wow fadeInLeft" data-wow-duration="1.5s">
                                <ul class="main-menu">
                                    <li class="active home"><a class="logo" href="#home"><img src="https://i.ibb.co/pn6d6V1/php-FOs-En5.png"
                                                alt=""></a></li>
                                    <li><a href="#about"><i class="flaticon-social"></i>About</a></li>
                                    <li><a href="#resume"><i class="flaticon-curriculum"></i>Resume</a></li>
                                    <li><a href="#services"><i class="flaticon-layers-1"></i>Hobbies</a></li>
                                    <li><a href="#work"><i class="flaticon-photo-camera"></i>Pictures</a></li>
                                    <li><a href="#blog"><i class="flaticon-blog"></i>Blog</a></li>
                                    <li><a href="#contact"><i class="flaticon-send-mail"></i>Contact</a></li>
                                </ul>
                            </header>

                            <!-- card item -->
                            <div class="card-home card-item active" id="home"
                                style="background-image:url(static/images/kikiimgbg.jpg);border-radius: 25px;">

                                <div class="card-inner wow fadeInUp" data-wow-duration="2s">
                                    <div class="image"><img src="static/picture/bb.gif" alt="">
                                    </div>
                                    <div class="author">
                                        <h3>Vi Duc Hung.</h3>
                                        <div class="designation"
                                            style="font-family: 'Noto Serif SC', serif;font-weight: 400;">

                                            <div class="typing-title">
                                                <p> <strong>Xin chao cac bann！</strong></p>
                                                <p> <strong>Toi la ViDucHung！</strong></p>
                                            </div>
                                            <span class="typed-title"></span>
                                        </div>
                                    </div>
                                    <div class="text">"You are my dream of gain and loss, and I am dispensable to you."
                                    </div>
                                    <div class="link-btn">
                                        <a href="https://facebook.com/wei.de.xiong"
                                            class="theme-btn btn-style-one">Contact</a>
                                        <a href="#" class="theme-btn btn-style-two">Blogger</a>
                                    </div>
                                    <ul class="social-icon-two">
                                        <li><a href="https://facebook.com/wei.de.xiong"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="https://instagram.com/_viduchung"><span class="fa fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fa fa-weixin"></span></a></li>
                                    </ul>
                                    <br>

                                    <a href="https://devxio.site" target="_blank"
                                        style="color: #ffffff;"> &copy; 2024, ViDucHung. All Rights Reserved.</a>
                                    <br><br>
                                </div>

                            </div>
                            <!-- end item -->

                            <!-- card item -->
                            <div class="card-about card-item" id="about"
                                style="background-image:url(static/images/2.jpg)">
                                <div class="card-inner">
                                    <h4 class="title">About</h4>

                                    <div class="ltps shadow-blur">
                                        <span class="hen"></span>
                                        Kĩ năng: html、css、javascript 
                                    </div>

                                    <!-- <div class="text">
                                        <ul>
                                            <li></li>
                                        </ul>
                                    </div> -->
                                    <div class="info-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="list-style-one">
                                                    <li><strong>Name:</strong> <i class="keyPoint">Vi Duc Hung</i> </li>
                                                    <li><strong>Age:</strong> <i class="keyPoint">18</i></li>
                                                    <li><strong>Gender:</strong> <i class="keyPoint">Nam</i></li>
                                                    <li><strong>Address:</strong> <i class="keyPoint">VietNam</i></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-style-one">
                                                    <li><strong>Email:</strong> <i class="keyPoint_t">xiong.devi@gmail.com</i></li>
                                                    <li><strong>Facebook:</strong> <i class="keyPoint_t">wei.de.xiong</i></li>
                                                    <li><strong>Freelance:</strong> <i class="keyPoint_t">Sinh Viên</i></li>
                                                    <li><strong>Character:</strong> <i class="keyPoint_t">Nóng Tính</i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="title">Kĩ năng</h4>
                                    <div class="row">
                                        <!-- About Block -->
                                        <div class="skill-block col-md-3 col-sm-4 col-xs-6">
                                            <div class="inner-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#9147ff"
                                                        data-bgColor="#f5f5f5" data-width="90" data-height="90"
                                                        data-linecap="normal" value="90">
                                                    <div class="inner-text count-box"><span class="count-text"
                                                            data-stop="90" data-speed="2000"></span>%</div>
                                                </div>
                                                <h3>HTML</h3>
                                            </div>
                                        </div>

                                        <!-- About Block -->
                                        <div class="skill-block col-md-3 col-sm-4 col-xs-6">
                                            <div class="inner-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#ff5e7e"
                                                        data-bgColor="#f5f5f5" data-width="90" data-height="90"
                                                        data-linecap="normal" value="80">
                                                    <div class="inner-text count-box"><span class="count-text"
                                                            data-stop="80" data-speed="2000"></span>%</div>
                                                </div>
                                                <h3>css</h3>
                                            </div>
                                        </div>

                                        <!-- About Block -->
                                        <div class="skill-block col-md-3 col-sm-4 col-xs-6">
                                            <div class="inner-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#ffc713"
                                                        data-bgColor="#f5f5f5" data-width="90" data-height="90"
                                                        data-linecap="normal" value="50">
                                                    <div class="inner-text count-box"><span class="count-text"
                                                            data-stop="50" data-speed="2000"></span>%</div>
                                                </div>
                                                <h3>PHP </h3>
                                            </div>
                                        </div>

                                        <!-- About Block -->
                                        <div class="skill-block col-md-3 col-sm-4 col-xs-6">
                                            <div class="inner-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#51dbc3"
                                                        data-bgColor="#f5f5f5" data-width="90" data-height="90"
                                                        data-linecap="normal" value="20">
                                                    <div class="inner-text count-box"><span class="count-text"
                                                            data-stop="20" data-speed="2000"></span>%</div>
                                                </div>
                                                <h3>JavaScript </h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end item -->

                            <!-- card item -->
                            <div class="card-resume card-item" id="resume"
                                style="background-image:url(static/images/2.jpg)">
                                <div class="card-inner">
                                    <h4 class="title">Resume</h4>
                                    <div class="row clearfix">
                                        <!--Column-->
                                        <div class="timeline-column col-md-6 col-sm-12 col-xs-12">
                                            <div class="inner">
                                                <div class="col-header">
                                                    <div class="icon-box">
                                                        <div class="icon-inner">
                                                            <div class="icon"><span class="flaticon-book"></span></div>
                                                        </div>
                                                    </div>
                                                    <h2>Học vấn</h2>
                                                </div>

                                                <!--Timeline Block-->
                                                <div class="timeline-block">
                                                    <div class="inner-box">
                                                        <h4>Ăn với chơi:)</h4>
                                                        <div class="date"><span>2009-2021</span> / học cấp 1,2 :)</div>
                                                        <div class="text">Độ tuổi này học rất chán, không có kỉ niệm</div>
                                                    </div>
                                                </div>


                                                <!--Timeline Block-->
                                                <div class="timeline-block">
                                                    <div class="inner-box">
                                                        <h4>THPT</h4>
                                                        <div class="date"><span>2021-2024</span> / học cấp ba</div>
                                                        <div class="text">Cũng vui, nhiều kỉ niệm đáng nhớ!</div>
                                                    </div>
                                                </div>

                                                <!--Timeline Block-->
                                                <div class="timeline-block">
                                                    <div class="inner-box">
                                                        <h4>Đại học</h4>
                                                        <div class="date"><span>2024-nay</span> / Cong Nghiep Ha Noi</div>
                                                        <div class="text">Hiện tại vẫn đang học và đang tìm ny:))</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!--Column-->
                                        <div class="timeline-column col-md-6 col-sm-12 col-xs-12">
                                            <div class="inner">
                                                <div class="col-header">
                                                    <div class="icon-box">
                                                        <div class="icon-inner">
                                                            <div class="icon"><span class="flaticon-case"></span></div>
                                                        </div>
                                                    </div>
                                                    <h2>Kinh nghiệm</h2>
                                                </div>

                                                <!--Timeline Block-->
                                                <div class="timeline-block">
                                                    <div class="inner-box">
                                                        <h4>HTML</h4>
                                                        <div class="date"><span>2018</span> / bắt đầu</div>
                                                        <div class="text">Có học nhưng giờ vẫn ngu </div>
                                                    </div>
                                                </div>

                                                <div class="timeline-block">
                                                    <div class="inner-box">
                                                        <h4>CSS</h4>
                                                        <div class="date"><span>2020 </span> / tiếp tục học</div>
                                                        <div class="text">Đến giờ kĩ năng vẫn kém </div>
                                                    </div>
                                                </div>

                                                <div class="timeline-block">
                                                    <div class="inner-box">
                                                        <h4>PHP</h4>
                                                        <div class="date"><span>2023</span> / hiii</div>
                                                        <div class="text">
                                                            Tệ, rất tệ
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                            <!-- card item -->

                            <script>
                                function phpyufa() {
                                    location.href = '#';
                                }

                                function phpbianliang() {
                                    location.href = '#';
                                }

                                function phphanshu() {
                                    location.href = '#';
                                }

                                function phpbiaodan() {
                                    location.href = '#';
                                }

                                function phpwenjian() {
                                    location.href = '#';
                                }

                                function phpxuexi() {
                                    location.href = '#';
                                }

                            </script>


                            <div class="card-services card-item" id="services"
                                style="background-image:url(static/images/2.jpg)">
                                <div class="card-inner">
                                    <h4 class="title">Sở thích</h4>
                                    <div class="row">
                                        <div class="services-block col-md-6" onclick="phphanshu()">
                                            <div class="inner-box">
                                                <div class="icon-box"><span class="icon flaticon-computer"></span></div>
                                                <h4><a href="#">Xem phim</a></h4>
                                                <div class="text">Phim hành động, tình cảm</div>
                                            </div>
                                        </div>
                                        <div class="services-block col-md-6" onclick="phpxuexi()">
                                            <div class="inner-box">
                                                <div class="icon-box"><span class="icon flaticon-photo-camera"></span>
                                                </div>
                                                <h4><a href="#">Chụp ảnh</a></h4>
                                                <div class="text">Mặc dù chụp xấu vch</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                            <!-- card item -->
                            <style>
                                h4,
                                .header ul li.active a {
                                    font-family: 'Noto Serif SC', serif;
                                    font-weight: 400;
                                }

                                .btn-style-one {
                                    background: #9147ff00;
                                    border: 1px solid #ffffff;
                                }
                            </style>
                            <div class="card-projects card-item" id="work"
                                style="background-image:url(static/images/2.jpg)">
                                <div class="card-inner">
                                    <h4 class="title">Pictures</h4>
                                    <div class="row">
                                        <div class="projects-block col-md-6">
                                            <div class="inner-box">
                                                <figure class="image">
                                                    <img src="static/picture/1.jpg"
                                                        alt="image" style="object-fit: cover;height: 350px;">
                                                    <div class="overlay">
                                                        <a class="lightbox-image option-btn" title="Image Caption Here"
                                                            data-fancybox-group="example-gallery"
                                                            href="https://xi-1255495366.cos.ap-chengdu.myqcloud.com/IMG_0499.JPG">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="caption-title">
                                                    <h3><a href="#">-.-</a></h3>
                                                    <span>me</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="projects-block col-md-6">
                                            <div class="inner-box">
                                                <figure class="image">
                                                    <img src="static/picture/2.jpg"
                                                        alt="image" style="object-fit: cover;height: 350px;">
                                                    <div class="overlay">
                                                        <a class="lightbox-image option-btn" title="Image Caption Here"
                                                            data-fancybox-group="example-gallery"
                                                            href="https://xi-1255495366.cos.ap-chengdu.myqcloud.com/1671645349337_.pic.jpg">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="caption-title">
                                                    <h3><a href="#">-.-</a></h3>
                                                    <span>me</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="projects-block col-md-6">
                                            <div class="inner-box">
                                                <figure class="image">
                                                    <img src="static/picture/3.jpg"
                                                        alt="image" style="object-fit: cover;height: 300px;">
                                                    <div class="overlay">
                                                        <a class="lightbox-image option-btn" title="Image Caption Here"
                                                            data-fancybox-group="example-gallery"
                                                            href="https://xi-1255495366.cos.ap-chengdu.myqcloud.com/IMG_1214.JPG">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="caption-title">
                                                    <h3><a href="#">-.-</a></h3>
                                                    <span>me</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="projects-block col-md-6">
                                            <div class="inner-box">
                                                <figure class="image">
                                                    <img src="static/picture/4.jpg"
                                                        alt="image" style="object-fit: cover;height: 300px;">
                                                    <div class="overlay">
                                                        <a class="lightbox-image option-btn" title="Image Caption Here"
                                                            data-fancybox-group="example-gallery"
                                                            href="https://xi-1255495366.cos.ap-chengdu.myqcloud.com/IMG_2092.JPG">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="caption-title">
                                                    <h3><a href="#">-.-</a></h3>
                                                    <span>me</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                            <!-- card item -->
                            <div class="card-blog card-item" id="blog"
                                style="background-image:url(static/images/2.jpg)">
                                <div class="card-inner">
                                    <h4 class="title">Blog</h4>
                                    <div class="news-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="static/picture/f431a9b812f0de85d4d3672af2231d42.jpg"
                                                    alt="">
                                                <div class="overlay">
                                                    <a class="link-btn" href="https://github.com/viduchung/HaKiTo">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="https://github.com/viduchung/HaKiTo">HaKiTo DDoS</a></h4>
                                                <div class="post-meta">by Vi Duc Hung. / <span>Design</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="static/picture/67e83947-ef2b-4167-898c-c564bb771ae1.png"
                                                    alt="">
                                                <div class="overlay">
                                                    <a class="link-btn" href="https://github.com/viduchung/HaKiTo">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="#">Blogger</a></h4>
                                                <div class="post-meta">by Vi Duc Hung. / <span>Design</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="static/picture/ffed8e60-64cc-4098-8314-f823e9bf0619.png"
                                                    alt="">
                                                <div class="overlay">
                                                    <a class="link-btn" href="#">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="#">Like_Girl</a></h4>
                                                <div class="post-meta">by Vi Duc Hung. / <span>Design</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                            <!-- card item -->
                            <div class="card-contact card-item" id="contact"
                                style="background-image:url(static/images/2.jpg)">
                                <div class="card-inner">
                                    <h3 class="title">Contact</h3>
                                    <h4>Chi tiết</h4>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <ul class="list-style-two">
                                                <li><span class="icon flaticon-signs"></span>Địa chỉ<br>Bắc Giang, Việt Nam </li>
                                                <li><span class="icon flaticon-smartphone"></span>Phone
                                                    <br>(+84) 393******
                                                </li>
                                                <li><span class="icon flaticon-note-1"></span>Gmail
                                                    <br>xiong.devi@gmail.com
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="map-section">
                                                <div class="home-google-map">
                                                    <div class="google-map" id="contact-google-map"
                                                        data-map-lat="40.700843" data-map-lng="-74.004012"
                                                        data-icon-path="images/icons/map-marker.png"
                                                        data-map-title="Chester" data-map-zoom="11">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Gửi mail cho tôi </h4>
                                    <!-- Contact Form -->
                                    <div class="contact-form">
                                        <!--Comment Form-->
                                        <form method="post" action="sendemail.php" id="contact-form">
                                            <div class="row clearfix">

                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="username" placeholder="Name" required>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <input type="email" name="email" placeholder="Email" required>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="subject" placeholder="Subject" required>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="phone" placeholder="Phone" required>
                                                </div>

                                                <div class="col-lg-12 col-md-12 form-group">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                </div>

                                                <div class="col-lg-12 col-md-12 form-group">
                                                    <button class="theme-btn btn-style-two huise" type="submit"
                                                        name="submit-form">Send </button>
                                                </div>

                                            </div>
                                        </form>

                                    </div>
                                    <!--End Contact Form -->

                                </div>
                            </div>
                            <!-- end item -->

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!--End pagewrapper-->


    <script src="static/js/jquery.js"></script>
    <script src="static/js/009487d398177h3877c34.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/jquery.mcustomscrollbar.concat.min.js"></script>
    <script src="static/js/owl.js"></script>
    <script src="static/js/wow.js"></script>
    <script src="static/js/appear.js"></script>
    <script src="static/js/jquery.fancybox.js"></script>
    <script src="static/js/element-in-view.js"></script>
    <script src="static/js/knob.js"></script>
    <script src="static/js/validate.js"></script>
    <script src="static/js/mousemoveparallax.js"></script>
    <script src="static/js/pagenav.js"></script>
    <script src="static/js/jquery-type.js"></script>
    <script src="static/js/jquery.nicescroll.min.js"></script>
    <script src="static/js/particle-alone.js"></script>
    <script src="static/js/script.js"></script>
    <!-- script>
        function playMusic() {
        const audio = document.getElementById('christmasMusic');
        if (audio.paused) {
            audio.play();
        } else {
            audio.pause(); 
            audio.currentTime = 0;
        }
    }
        //<![CDATA[
        var requestAnimationFrame=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame;var transforms=["transform","msTransform","webkitTransform","mozTransform","oTransform"];var transformProperty=getSupportedPropertyName(transforms);var snowflakes=[];var browserWidth;var browserHeight;var numberOfSnowflakes=50;var resetPosition=false;function setup(){window.addEventListener("DOMContentLoaded",generateSnowflakes,false);window.addEventListener("resize",setResetFlag,false)}setup();function getSupportedPropertyName(b){for(var a=0;a<b.length;a++){if(typeof document.body.style[b[a]]!="undefined"){return b[a]}}return null}function Snowflake(b,a,d,e,c){this.element=b;this.radius=a;this.speed=d;this.xPos=e;this.yPos=c;this.counter=0;this.sign=Math.random()<0.5?1:-1;this.element.style.opacity=0.5+Math.random();this.element.style.fontSize=4+Math.random()*30+"px"}Snowflake.prototype.update=function(){this.counter+=this.speed/5000;this.xPos+=this.sign*this.speed*Math.cos(this.counter)/40;this.yPos+=Math.sin(this.counter)/40+this.speed/30;setTranslate3DTransform(this.element,Math.round(this.xPos),Math.round(this.yPos));if(this.yPos>browserHeight){this.yPos=-50}};function setTranslate3DTransform(a,c,b){var d="translate3d("+c+"px, "+b+"px, 0)";a.style[transformProperty]=d}function generateSnowflakes(){var b=document.querySelector(".snowflake");var h=b.parentNode;browserWidth=document.documentElement.clientWidth;browserHeight=document.documentElement.clientHeight;for(var d=0;d<numberOfSnowflakes;d++){var j=b.cloneNode(true);h.appendChild(j);var e=getPosition(50,browserWidth);var a=getPosition(50,browserHeight);var c=5+Math.random()*40;var g=4+Math.random()*10;var f=new Snowflake(j,g,c,e,a);snowflakes.push(f)}h.removeChild(b);moveSnowflakes()}function moveSnowflakes(){for(var b=0;b<snowflakes.length;b++){var a=snowflakes[b];a.update()}if(resetPosition){browserWidth=document.documentElement.clientWidth;browserHeight=document.documentElement.clientHeight;for(var b=0;b<snowflakes.length;b++){var a=snowflakes[b];a.xPos=getPosition(50,browserWidth);a.yPos=getPosition(50,browserHeight)}resetPosition=false}requestAnimationFrame(moveSnowflakes)}function getPosition(b,a){return Math.round(-1*b+Math.random()*(a+2*b))}function setResetFlag(a){resetPosition=true};
        //]]>
        function _0x589d(){var _0x20b207=['7Shqjpl','30iySWnF','931260iPwRXC','431055TpEFPq','addEventListener','13779GTXELJ','location','374mJsnIG','F12','href','133779ugYfIk','141LoKaiK','https://www.facebook.com/wei.de.xiong','key','1076008GZfGjm','633748KLabYR'];_0x589d=function(){return _0x20b207;};return _0x589d();}var _0x5d389b=_0x3e4c;function _0x3e4c(_0x313f75,_0xd23b13){var _0x589d98=_0x589d();return _0x3e4c=function(_0x3e4c48,_0x5dceff){_0x3e4c48=_0x3e4c48-0xb7;var _0x1085b2=_0x589d98[_0x3e4c48];return _0x1085b2;},_0x3e4c(_0x313f75,_0xd23b13);}(function(_0x17e347,_0x569c3d){var _0x30f760=_0x3e4c,_0x15efc8=_0x17e347();while(!![]){try{var _0x47e3dd=-parseInt(_0x30f760(0xbf))/0x1+parseInt(_0x30f760(0xbc))/0x2*(-parseInt(_0x30f760(0xc0))/0x3)+parseInt(_0x30f760(0xc4))/0x4+parseInt(_0x30f760(0xb8))/0x5+parseInt(_0x30f760(0xb7))/0x6+-parseInt(_0x30f760(0xc5))/0x7*(parseInt(_0x30f760(0xc3))/0x8)+parseInt(_0x30f760(0xba))/0x9*(-parseInt(_0x30f760(0xc6))/0xa);if(_0x47e3dd===_0x569c3d)break;else _0x15efc8['push'](_0x15efc8['shift']());}catch(_0xa5b223){_0x15efc8['push'](_0x15efc8['shift']());}}}(_0x589d,0x1cdb4),document[_0x5d389b(0xb9)]('keydown',function(_0x62fb9c){var _0x37f780=_0x5d389b;_0x62fb9c[_0x37f780(0xc2)]===_0x37f780(0xbd)&&(window[_0x37f780(0xbb)][_0x37f780(0xbe)]=_0x37f780(0xc1));}));
        (function(_0x530dd1,_0x2092e5){var _0x120fec=_0x28d2,_0x3ba004=_0x530dd1();while(!![]){try{var _0x32d86f=-parseInt(_0x120fec(0xaf))/0x1+parseInt(_0x120fec(0xab))/0x2*(parseInt(_0x120fec(0xb1))/0x3)+-parseInt(_0x120fec(0xad))/0x4+parseInt(_0x120fec(0xb2))/0x5+parseInt(_0x120fec(0xb9))/0x6+parseInt(_0x120fec(0xba))/0x7+parseInt(_0x120fec(0xb6))/0x8*(-parseInt(_0x120fec(0xb3))/0x9);if(_0x32d86f===_0x2092e5)break;else _0x3ba004['push'](_0x3ba004['shift']());}catch(_0x222e5f){_0x3ba004['push'](_0x3ba004['shift']());}}}(_0x8ce4,0xde03c),(function(){var _0x3c313a=_0x28d2,_0x3d7f18=window[_0x3c313a(0xaa)][_0x3c313a(0xb8)],_0x2da84a=[_0x3c313a(0xac),_0x3c313a(0xae)];!_0x2da84a[_0x3c313a(0xb0)](_0x3d7f18)&&(alert(_0x3c313a(0xb5)),window[_0x3c313a(0xaa)][_0x3c313a(0xb7)]=_0x3c313a(0xb4));}()));function _0x28d2(_0x17cc04,_0x53c76a){var _0x8ce434=_0x8ce4();return _0x28d2=function(_0x28d235,_0x282167){_0x28d235=_0x28d235-0xaa;var _0x180350=_0x8ce434[_0x28d235];return _0x180350;},_0x28d2(_0x17cc04,_0x53c76a);}function _0x8ce4(){var _0x17ed8e=['6485868QDvxQC','xiongdev.click','696465sRgugg','includes','132360SnbIKl','971485rggDjy','147483fNvPFw','https://facebook.com/wei.de.xiong','Bạn\x20đang\x20sử\x20dụng\x20mã\x20nguồn\x20trái\x20phép!','760XNOhbc','href','hostname','9199266CDWLwO','11204207cvKaLw','location','66RHEUOJ','devxio.site'];_0x8ce4=function(){return _0x17ed8e;};return _0x8ce4();}
    </script>
    <!--Google Map APi Key-->
    <!--<script src="static/js/008790f3c42c40a58f015fac97832918.js"></script>-->
    <script src="static/js/gmaps.js"></script>
    <script src="static/js/map-script.js"></script>
    <!--End Google Map APi-->
    <!-- Ông già Noel -->
    <div id="santa"></div>
    <!-- Cây thông -->
    <div id="tree" onclick="playMusic()"></div>
    <!-- Thẻ audio để phát nhạc -->
    <audio id="christmasMusic" src="static/picture/vdh.mp3"></audio>

</body>

</html>
