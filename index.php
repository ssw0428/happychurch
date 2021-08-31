<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>행복한교회</title>

    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/css/common.css">
    <link rel="stylesheet" href="resources/css/index.css">
    <link rel="stylesheet" href="resources/css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- 제이쿼리 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- swiper 불러오기 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- 아울 캐러셀 불러오기, 제이쿼리 보다 밑에 있어야 합니다. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">

    <script src="resources/js/index.js"></script>

</head>

<body>
    <header class="header-main-menu flex">
        <div class="inner con flex flex-1-0-0">
            <h1 class="logo flex height-100p">
                <a href="" class="logo-img flex flex-ai-c height-100p">
                    <img src="resources/images/logo.png" alt="">
                </a>
            </h1>
            <nav class="main-menu-bar flex flex-1-0-0 flex-jc-c">
                <ul class="flex height-100p flex-1-0-0 flex-jc-c">
                    <li>
                        <a href="" class="flex flex-ai-c height-100p">교회소개</a>
                    </li>
                    <div class="small-dot flex flex-ai-c height-100p"></div>
                    <li>
                        <a href="" class="flex flex-ai-c height-100p">묵상</a>
                    </li>
                    <div class="small-dot flex flex-ai-c height-100p"></div>
                    <li>
                        <a href="" class="flex flex-ai-c height-100p">평신도훈련</a>
                    </li>
                    <div class="small-dot flex flex-ai-c height-100p"></div>
                    <li>
                        <a href="" class="flex flex-ai-c height-100p">미디어</a>
                    </li>
                    <div class="small-dot flex flex-ai-c height-100p"></div>
                    <li>
                        <a href="" class="flex flex-ai-c height-100p">부서활동</a>
                    </li>
                    <div class="small-dot flex flex-ai-c height-100p"></div>
                    <li>
                        <a href="" class="flex flex-ai-c height-100p">소식</a>
                    </li>
                </ul>
            </nav>
            <div class="sns-icon-box flex height-100p">
                <div class="inner flex flex-ai-c height-100p">
                    <div class="icon icon-1">
                        icon-1
                        <img src="" alt="">
                    </div>
                    <div class="icon icon-2">
                        icon-2
                        <img src="" alt="">
                    </div>
                    <div class="icon icon-3">
                        icon-3
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="container">
        <section id="visual" class="main-slide">
            <div class="visual-slide">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="visual-item">
                                <div class="img-wrap">
                                    <img src="resources/images/홈페이지 메인 슬라이드 사진.jpg" alt="">
                                </div>
                                <div class="v-box">
                                    <div class="con-area">
                                        <strong class="tit">1번 슬라이드</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="visual-item">
                                <div class="img-wrap">
                                    <img src="https://ssw0428.github.io/img1/pf/vision/main_slide_1.jpg" alt="">
                                </div>
                                <div class="v-box">
                                    <div class="con-area">
                                        <strong class="tit">2번 슬라이드</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visual-con">
                    <div class="con-area">
                        <div class="visual-pagination"></div>
                    </div>
                </div> 
            </div>
        </section>
        
        <section class="content content-1 con">
            <div class="title">
                <span class="text text-1">행복</span>
                <span class="text text-2">소식</span>
                <a href="" class="plus-icon">+</a>
            </div>
            <div class="box-list con">
                <div class="inner flex flex-row-wrap">
                    <div class="inner-box">
                        <div class="tab-type-1 title-box">
                            <section class="head">
                                <ul class="flex">
                                    <li class="flex-1-0-0 active" data-tab-name="content-box" data-tab-head-item-name="1">
                                        <a class="text text-1">
                                            매일묵상
                                        </a>
                                    </li>
                                    <li class="flex-1-0-0" data-tab-name="content-box" data-tab-head-item-name="2">
                                        <a class="text text-1">
                                            말씀읽기
                                        </a>
                                    </li>
                                    <li class="flex-1-0-0" data-tab-name="content-box" data-tab-head-item-name="3">
                                        <a class="text text-1">
                                            포토에세이
                                        </a>
                                    </li>
                                    <li class="flex-1-0-0" data-tab-name="content-box" data-tab-head-item-name="4">
                                        <a class="text text-1">
                                            기도나눔
                                        </a>
                                    </li>
                                </ul>
                            </section>
                            <section class="body">
                                <ul class="flex">
                                    <li class="active" data-tab-name="content-box" data-tab-body-item-name="1">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다.dd홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li class="active" data-tab-name="content-box" data-tab-body-item-name="1">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li class="active" data-tab-name="content-box" data-tab-body-item-name="1">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li class="active" data-tab-name="content-box" data-tab-body-item-name="1">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="2">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다.dddddd 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="2">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="2">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="2">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="3">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니asdasdasd다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="3">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="3">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="3">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="4">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑asdasdads습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="4">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="4">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                    <li data-tab-name="content-box" data-tab-body-item-name="4">
                                        <a href="" class="list-box">
                                            <span class="list-box-title">
                                                제목쓰는 부분.
                                            </span>
                                            <span class="list-box-substance">
                                                반갑습니다. 홈페이지 리뉴얼 중입니다. 반갑습니다. 홈페이지 리뉴얼 중입니다.
                                            </span>
                                            <span class="list-box-date">
                                                2020-11-05
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content content-2 con flex">
            <section class="content-2-1 content-left">
                <div class="title-box">
                    <span>더</span>
                    <span>알아보기</span>
                </div>
                <nav class="content-2-box">
                    <ul class="box-1 flex">
                        <li>
                            <a href="" class="icon-img-box">
                                <img src="resources/images/new-icon-1.png" alt="">
                                <span class="title">
                                    주보
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="icon-img-box">
                                <img src="resources/images/new-icon-2.png" alt="">
                                <span class="title">
                                    교회소식
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="icon-img-box">
                                <img src="resources/images/new-icon-3.png" alt="">
                                <span class="title">
                                    헌금 안내
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="icon-img-box">
                                <img src="resources/images/new-icon-4.png" alt="">
                                <span class="title">
                                    예배 안내
                                </span>
                            </a>
                        </li>
                    </ul>
                    
                    <ul class="box-2 flex">
                        <li>
                            <a href="" class="icon-img-box">
                                <img src="resources/images/new-icon-5.png" alt="">
                                <span class="title">
                                    저서 소개
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="icon-img-box">
                                <img src="resources/images/new-icon-6.png" alt="">
                                <span class="title">
                                    학교 소개
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="icon-img-box">
                                <img src="resources/images/new-icon-7.png" alt="">
                                <span class="title">
                                    선교
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="icon-img-box">
                                <img src="resources/images/new-icon-8.png" alt="">
                                <span class="title">
                                    예배 시청
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </section>
            <section class="content-2-2 content-right">
                <div class="title-box">
                    <span>알림</span>
                </div>
                <div class="post-slide-bar">
                    <div class="post-slide">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="visual-item">
                                        <div class="img-wrap">
                                            <img src="resources/images/poster-1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="visual-item">
                                        <div class="img-wrap">
                                            <img src="resources/images/poster-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="visual-item">
                                        <div class="img-wrap">
                                            <img src="resources/images/poster-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="visual-item">
                                        <div class="img-wrap">
                                            <img src="resources/images/poster-1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="visual-item">
                                        <div class="img-wrap">
                                            <img src="resources/images/poster-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="visual-item">
                                        <div class="img-wrap">
                                            <img src="resources/images/poster-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="visual-con">
                            <div class="con-area">
                                <div class="post-pagination"></div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
        </section>

        <section class="content content-3 con">
            <div class="title-box">
                <span>3분</span>
                <span>메세지</span>
                <a href="" class="plus-icon">+</a>
            </div>
            <div class="content-boxs">
                <ul class="flex">
                    <li>
                        <a href="" class="sermon-boxs">
                            <img src="resources/images/3분 메세지 썸네일.png" alt="">
                            <div class="title-box">
                                <p class="word">마태복음 1장 1절</p>
                                <p class="title">동행과 자아</p>
                                <p class="daite">2020-10-21</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="sermon-boxs">
                            <img src="resources/images/3분 메세지 썸네일.png" alt="">
                            <div class="title-box">
                                <p class="word">마태복음 1장 1절</p>
                                <p class="title">동행과 자아</p>
                                <p class="daite">2020-10-21</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="sermon-boxs">
                            <img src="resources/images/3분 메세지 썸네일.png" alt="">
                            <div class="title-box">
                                <p class="word">마태복음 1장 1절</p>
                                <p class="title">동행과 자아</p>
                                <p class="daite">2020-10-21</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="content content-4 con">
            <div class="title-box">
                <span>말씀과 찬양</span>
                <a href="" class="plus-icon">+</a>
            </div>
            <nav class="list-1">
                <ul class="flex">
                    <li>
                        <a href="" class="list-box">
                            <img src="resources/images/예배 썸네일.jpg" alt="">
                            <div class="title-box">
                                <span class="mini-title-1">설교</span>
                                <span class="mini-title-2">동행하는 삶</span>
                                <span class="title">고린도전서1장 1절</span>
                                <span class="date">2020.10.01</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="list-box">
                            <img src="resources/images/예배 썸네일.jpg" alt="">
                            <div class="title-box">
                                <span class="mini-title-1">설교</span>
                                <span class="mini-title-2">동행하는 삶</span>
                                <span class="title">고린도전서1장 1절</span>
                                <span class="date">2020.10.01</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="list-2">
                <ul class="flex">
                    <li>
                        <a class="list-box" href="">
                            <img src="resources/images/찬양 썸네일-1.jpg" alt="">
                            <div class="title-box">
                                <span class="mini-title-1">찬양</span>
                                <span class="title">20.09.22 수요예배 실황</span>
                                <span class="date">2020.10.01</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-box" href="">
                            <img src="resources/images/찬양 썸네일-2.jpg" alt="">
                            <div class="title-box">
                                <span class="mini-title-1">찬양</span>
                                <span class="title">20.09.22 수요예배 실황</span>
                                <span class="date">2020.10.01</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-box" href="">
                            <img src="resources/images/찬양 썸네일-3.jpg" alt="">
                            <div class="title-box">
                                <span class="mini-title-1">찬양</span>
                                <span class="title">20.09.22 수요예배 실황</span>
                                <span class="date">2020.10.01</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-box" href="">
                            <img src="resources/images/찬양 썸네일-4.jpg" alt="">
                            <div class="title-box">
                                <span class="mini-title-1">찬양</span>
                                <span class="title">20.09.22 수요예배 실황</span>
                                <span class="date">2020.10.01</span>
                            </div>
                        </a>
                    </li>
                </ul>
        </section>

        <section class="content content-5 con">
            <!-- Swiper -->
            <div class="swiper-box con">
                <div class="gallery-box">
                    <div class="box">
                        <div class="text-box">
                            <p class="text-1">
                                <span>PHOTO</span>
                                <i class="line1"></i>
                            </p>
                            <p class="text-2">
                                <span>GALLERY</span>
                            </p>
                        </div>
                        <h3>포토갤러리</h3>
                        <p class="text-3">한국공예관의 다양한 모습을 사진을 만나보세요.</p>
                        <div class="slide-arrows">
                            <div class="swiper-button swiper-button-prev"></div>
                            <div class="swiper-button swiper-button-next"></div>
                        </div>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img-box"
                                    style="background-image:url('resources/images/ex-8.jpg')">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box"
                                    style="background-image:url('resources/images/ex-7.jpg')">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box"
                                    style="background-image:url('resources/images/ex-6.jpg')">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box"
                                    style="background-image:url('resources/images/ex-5.jpg')">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box"
                                    style="background-image:url('resources/images/ex-4.jpg')">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box"
                                    style="background-image:url('resources/images/ex-3.jpg')">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box"
                                    style="background-image:url('resources/images/ex-2.jpg')">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-box"
                                    style="background-image:url('resources/images/ex-1.jpg')">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <!--컨텐츠-2 더 알아보기 및 알림-->

    <!--컨텐츠-3 3분메세지-->
    <!--컨텐츠-4 말씀과 찬양-->
    <!--컨텐츠-5 사진-->
    <div class="content-5 con">
        <!-- Swiper -->
        <div class="swiper-box con">
            <div class="gallery-box">
                <div class="box">
                    <div class="text-box">
                        <p class="text-1">
                            <span>PHOTO</span>
                            <i class="line1"></i>
                        </p>
                        <p class="text-2">
                            <span>GALLERY</span>
                        </p>
                    </div>
                    <h3>포토갤러리</h3>
                    <p class="text-3">한국공예관의 다양한 모습을 사진을 만나보세요.</p>
                    <div class="slide-arrows">
                        <div class="swiper-button swiper-button-prev"></div>
                        <div class="swiper-button swiper-button-next"></div>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img-box"
                                style="background-image:url('resources/images/ex-8.jpg')">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box"
                                style="background-image:url('resources/images/ex-7.jpg')">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box"
                                style="background-image:url('resources/images/ex-6.jpg')">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box"
                                style="background-image:url('resources/images/ex-5.jpg')">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box"
                                style="background-image:url('resources/images/ex-4.jpg')">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box"
                                style="background-image:url('resources/images/ex-3.jpg')">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box"
                                style="background-image:url('resources/images/ex-2.jpg')">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box"
                                style="background-image:url('resources/images/ex-1.jpg')">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <div class="inner con flex">
            <div class="address">
                <span>충청북도 옥천군 군북면 증약길 191-5 (우) 29001</span>
                <span>TEL. 043-123-1234</span>
                <span>© COPYRIGHTS 1998 행복한교회 ALL RIGHTS RESERVED.</span>
            </div>
            <div class="icon">
                <a href="">
                    <img src="resources/images/youtube-icon-w.png" alt="">
                    <img src="resources/images/insta-icon-w.png" alt="">
                    <img src="resources/images/facebook-icon-w.png" alt="">
                </a>
            </div>
        </div>
    </div>
</body>

</html>