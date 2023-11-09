<?php
include "../connect/connect.php";
include "../connect/session.php";

?>

<!DOCTYPE html>
<html lang="ko">
<?php include "../include/head.php" ?>
<style>
    body {
        padding-top: 0;
    }
</style>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <div class="slider">
            <div class="slider__slide slider__slide--active" data-slide="1">
                <div class="slider__wrap">
                    <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                    <div class="slider__content">
                        <h1>환경을 <br> 생각하고</h1><a class="go-to-next">next</a><br>
                        <div class="pauseButton"></div>
                        <div class="resumeButton"></div>
                    </div>
                </div>
            </div>
            <div class="slider__slide" data-slide="2">
                <div class="slider__wrap">
                    <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                    <div class="slider__content">
                        <h1>지구를 <br> 살리고</h1><a class="go-to-next">next</a><br>
                        <div class="pauseButton"></div>
                        <div class="resumeButton"></div>
                    </div>
                </div>
            </div>
            <div class="slider__slide" data-slide="3">
                <div class="slider__wrap">
                    <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                    <div class="slider__content">
                        <h1>더나은 <br> 미래를 만든다</h1><a class="go-to-next">next</a><br>
                        <div class="pauseButton"></div>
                        <div class="resumeButton"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro__inner">
            <div class="introWrap">
                <div class="intro__text">
                    <h3>이번주 BEST 이슈</h3>
                    <p>이번주 가장 인기 있는 품목을 모아보아요.</p>
                </div>
                <section class="hero-section container">
                    <div class="card-grid">
                        <a class="card" href="../subboard/submain.php">
                            <div class="card__background"
                                style="background-image: url(../../assets/img/intro__inner01.jpg)"></div>
                            <div class="card__content">
                                <p class="card__category">Category</p>
                                <h3 class="card__heading">대형가구</h3>
                            </div>
                        </a>
                        <a class="card" href="../subboard/submain.php">
                            <div class="card__background"
                                style="background-image: url(../../assets/img/intro__inner02.jpg)"></div>
                            <div class="card__content">
                                <p class="card__category">Category</p>
                                <h3 class="card__heading">중형가구</h3>
                            </div>
                        </a>
                        <a class="card" href="../subboard/submain.php">
                            <div class="card__background"
                                style="background-image: url(../../assets/img/intro__inner03.jpg)"></div>
                            <div class="card__content">
                                <p class="card__category">Category</p>
                                <h3 class="card__heading">중형가구</h3>
                            </div>
                        </a>
                        <a class="card" href="../subboard/submain.php">
                            <div class="card__background"
                                style="background-image: url(../../assets/img/intro__inner04.jpg)"></div>
                            <div class="card__content">
                                <p class="card__category">Category</p>
                                <h3 class="card__heading">소형가구</h3>
                            </div>
                        </a>
                        <div>
                </section>
            </div>
        </div>

        <div class="company__inner container">
            <div class="company__title">
                <h3>소소한 나의 실천으로 함께 만들어가는 깨끗한 지구!</h3>
            </div>
            <div class="page2Wrap">
                <div class="companyimgWrap">
                    <div class="company__img">
                        <img src="../../assets/img/com11.png" alt="">
                        <h2>Think</h2>
                        <p>지구를 생각하고</p>
                    </div>
                    <div class="company__img">
                        <img src="../../assets/img/com12.png" alt="">
                        <h2>Reuse</h2>
                        <p>한번 더 사용하고</p>
                    </div>
                    <div class="company__img">
                        <img src="../../assets/img/com13.png" alt="">
                        <h2>Recycle</h2>
                        <p>올바르게 재활용하고</p>
                    </div>
                    <div class="company__img">
                        <img src="../../assets/img/com14.png" alt="">
                        <h2>Recovery</h2>
                        <p>지구의 에너지를 만들고!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="main__page3">
            <div class="page3__text">
                <h4>자원 순환을 위해 앞장서는 기업</h4>
                <p>기업의 다양한 친환경 활동을 소개합니다.</p>
            </div>
            <div class="companyWrap">
                <div class="companyBox">
                    <div class="dunkin"></div>
                    <div class="company__text">
                        친환경 포장재 전환<br>
                        <em>11,504,919 개</em>
                    </div>
                    <div class="company__result">
                        <div class="result1">
                            <img src="../../assets/img/result1.png">
                            <h4>
                                1,515그루<br>
                                소나무 심은 효과
                            </h4>
                        </div>
                        <span>=</span>
                        <div class="result2">
                            <img src="../../assets/img/result2.png">
                            <h4>
                                13,771kg<br>
                                탄소저감량
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="companyBox">
                    <div class="nature"></div>
                    <div class="company__text">
                        패트병 생수 절감<br>
                        <em>170,013,808 개</em>
                    </div>
                    <div class="company__result">
                        <div class="result1">
                            <img src="../../assets/img/result1.png">
                            <h4>
                                20,893그루<br>
                                소나무 심은 효과
                            </h4>
                        </div>
                        <span>=</span>
                        <div class="result2">
                            <img src="../../assets/img/result2.png">
                            <h4>
                                189,939kg<br>
                                탄소저감량
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="companyBox">
                    <div class="starbucks"></div>
                    <div class="company__text">
                        텀블러 사용하기<br>
                        <em>98,994,105 건</em>
                    </div>
                    <div class="company__result">
                        <div class="result1">
                            <img src="../../assets/img/result1.png">
                            <h4>
                                12,166그루<br>
                                소나무 심은 효과
                            </h4>
                        </div>
                        <span>=</span>
                        <div class="result2">
                            <img src="../../assets/img/result2.png">
                            <h4>
                                110,596kg<br>
                                탄소저감량
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="companyBox">
                    <div class="baemin"></div>
                    <div class="company__text">
                        일회용품 덜쓰기<br>
                        <em>17,296,352 명</em>
                    </div>
                    <div class="company__result">
                        <div class="result1">
                            <img src="../../assets/img/result1.png">
                            <h4>
                                1,515그루<br>
                                소나무 심은 효과
                            </h4>
                        </div>
                        <span>=</span>
                        <div class="result2">
                            <img src="../../assets/img/result2.png">
                            <h4>
                                13,771kg<br>
                                탄소저감량
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="tagWrap">
            <div class="tag__title">
                <h1>카테고리별 쓰레기</h1>
                <p>다양한 카테고리로 원하는 제품을 찾아보세요.</p>
            </div>
            <div class="tag__inner scroll__style">
                <div class="tagimgBox">
                    <a href="../subboard/submain.php?subcate=가구"><img src="../../assets/img/fashion01.jpg" alt="img1"></a>
                    <h3>가구</h3>
                    <p>대형생활폐기물 원목,합판,시트지 등의 <br>
                        재질로 제작되어 재활용이 불가능<br>
                        신고 및 수거는 <br>유료 2,000 ~ 10,000원 가량 부과
                    </p>
                </div>
                <div class="tagimgBox">
                    <a href="../subboard/submain.php?subcate=패션잡화"><img src="../../assets/img/furniture1.jpg" alt="img2"></a>
                    <h3>패션</h3>
                    <p>대형생활폐기물 원목,합판,시트지 등의 <br>
                        재질로 제작되어 재활용이 불가능<br>
                        신고 및 수거는 <br>유료 2,000 ~ 10,000원 가량 부과
                    </p>
                </div>
                <div class="tagimgBox">
                    <a href="../subboard/submain.php?subcate=용기포장"><img src="../../assets/img/plastic01.jpg" alt="img3"></a>
                    <h3>용기</h3>
                    <p>대형생활폐기물 원목,합판,시트지 등의<br>
                        재질로 제작되어 재활용이 불가능<br>
                        신고 및 수거는 <br>유료 2,000 ~ 10,000원 가량 부과
                    </p>
                </div>
                <div class="tagimgBox">
                    <a href="../subboard/submain.php?subcate=가구"><img src="../../assets/img/desk.jpg" alt="img4"></a>
                    <h3>책상</h3>
                    <p>대형생활폐기물 원목,합판,시트지 등의<br>
                        재질로 제작되어 재활용이 불가능<br>
                        신고 및 수거는 <br>유료 2,000 ~ 10,000원 가량 부과
                    </p>
                </div>
                <div class="tagimgBox">
                    <a href="../subboard/submain.php?subcate=기타"><img src="../../assets/img/jewelry.jpg" alt="img5"></a>
                    <h3>주얼리</h3>
                    <p>대형생활폐기물 원목,합판,시트지 등의<br>
                        재질로 제작되어 재활용이 불가능<br>
                        신고 및 수거는 <br>유료 2,000 ~ 10,000원 가량 부과
                    </p>
                </div>
            </div>
        </section>

    </main>

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <?php include "../include/mainjs.php" ?>
    <!-- //script -->
</body>

</html>