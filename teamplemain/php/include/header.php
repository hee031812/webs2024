<?php
if (isset($_GET['category'])) {
    $category = $_GET['category'];
}
// 초기에 표시할 카테고리 (예: '가구')
$initialCategory = '가구';

if (isset($_GET['subcate'])) {
    $selectedCategory = $_GET['subcate'];
} else {
    $selectedCategory = $initialCategory;
}
?>
<style>
    .btn_gotop {
        width: 40px;
        height: 40px;
        display: none;
        position: fixed;
        font-size: 20px;
        bottom: 11vh;
        right: 25px;
        z-index: 999;
        outline: none;
        background-color: var(--black);
        color: var(--white);
        cursor: pointer;
        /* padding: 5px 10px; */
        border-radius: 50%;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
    }
    .btn_gotop:hover {
        background-color: var(--white);
        color: var(--black);
        border-radius: 5px;
    }
</style>
<!-- 상단으로 이동하기 버튼 -->
<a href="#" class="btn_gotop">⏏</a>
<header id="header" class="header">
    <a class="header__logo" href="../main/main.php"><img src="../../assets/img/logo.png" alt="사이트로고"></a>
    <div id="sidenav" class="sidenav">
        <div id="slidebtn" class="slideBtn"> &#9776; </div>
        <div id="close" class="close" onclick="closeNav()">☓</div>
        <div class="menu">
            <a href="../main/main.php">홈</a>
            <a href="../subboard/submain.php">분리배출</a>
            <a href="../subcate/subcate.php?subcate=가구">
                <p>가구</p>
            </a>
            <a href="../subcate/subcate.php?subcate=가전">
                <p>가전</p>
            </a>
            <a href="../subcate/subcate.php?subcate=용기포장">
                <p>용기포장</p>
            </a>
            <a href="../subcate/subcate.php?subcate=패션잡화">
                <p>패션잡화</p>
            </a>
            <a href="../subcate/subcate.php?subcate=음식물">
                <p>음식물</p>
            </a>
            <a href="../subcate/subcate.php?subcate=기타">
                <p>기타</p>
            </a>
            <a href="../subboard/footprint.php">탄소발자국</a>
            <a href="../board/boardCate.php?category=공지사항">커뮤니티</a>
            <a href="../board/boardCate.php?category=공지사항">
                <p>공지사항</p>
            </a>
            <a href="../board/boardCate.php?category=질문하기">
                <p>질문하기</p>
            </a>
            <a href="../board/boardCate.php?category=문의하기">
                <p>문의하기</p>
            </a>
            <a href="../subboard/makers.php">만든사람들</a>
        </div>
    </div>
    <nav class="header__nav">
        <ul>
            <li><a href="../subboard/submain.php">분리배출</a>
                <ul class="submenu">
                    <li><a href="../subcate/subcate.php?subcate=가구">가구</a></li>
                    <li><a href="../subcate/subcate.php?subcate=가전">가전</a></li>
                    <li><a href="../subcate/subcate.php?subcate=용기포장">용기포장</a></li>
                    <li><a href="../subcate/subcate.php?subcate=패션잡화">패션잡화</a></li>
                    <li><a href="../subcate/subcate.php?subcate=음식물">음식물</a></li>
                    <li><a href="../subcate/subcate.php?subcate=기타">기타</a></li>
                </ul>
            </li>
            <li><a href="../subboard/footprint.php">탄소발자국</a>
            </li>
            <li><a href="../board/boardCate.php?category=공지사항">커뮤니티</a>
                <ul class="submenu">
                    <li><a href="../board/boardCate.php?category=공지사항">공지사항</a></li>
                    <li><a href="../board/boardCate.php?category=질문하기">질문하기</a></li>
                    <li><a href="../board/boardCate.php?category=문의하기">문의하기</a></li>
                </ul>
            </li>
            <li><a href="../subboard/makers.php">만든사람들</a>
            </li>
        </ul>
    </nav>

    <div class="header__login">
        <?php if (isset($_SESSION['memberId'])) { ?>
            <ul>
                <li><a href="../subcate/subcate.php?subcate=가구"><img src="../../assets/img/zoom2.svg" alt="searchicon"></a></li>
                <li><a href="../mypage/mypage.php"><img class="login__mypage" src="../../assets/img/mypage2.svg" alt="mypageicon"></a></li>
                <li class="login__wellcom"><a href="#">
                        <?= $_SESSION['youName'] ?>님
                    </a></li>
                <li class="login__logout"><a href="../login/logout.php">로그아웃</a></li>
            </ul>
        <?php } else { ?>
            <ul>
                <li><a href="../subcate/subcate.php?subcate=가구"><img src="../../assets/img/zoom2.svg" alt="searchicon"></a></li>
                <li><a href="../login/login.php"><img src="../../assets/img/login.svg" alt="loginicon"></a></li>
                <li><a href="../login/login.php">Login</a></li>
            </ul>
        <?php } ?>
    </div>
</header>
<!-- //header -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    // 메뉴 
    window.onload = function () {
        let navList = document.querySelectorAll(".header__nav > ul > li");

        navList.forEach(function (navItem) {
            navItem.addEventListener("mouseover", function () {
                const submenu = this.querySelector(".submenu");
                submenu.style.height = submenu.scrollHeight + "px";
            });
        });
        navList.forEach(function (navItem) {
            navItem.addEventListener("mouseout", function () {
                this.querySelector(".submenu").style.height = "0px";
            });
        });
    };


    //HAMBERGER MENU

    function closeNav() {
        document.getElementById("sidenav").style.width = "0%";
        document.getElementById("slidebtn").style.display = "block";
    }


    $(document).ready(function () {
        $(".slideBtn").click(function () {
            if ($("#sidenav").width() == 0) {
                document.getElementById("sidenav").style.width = "40%";

                // document.getElementById("main").style.paddingRight = "250px";

                // document.getElementById("slidebtn").style.paddingRight = "0px";
                document.getElementById("slidebtn").style.display = "none";
            } else {
                document.getElementById("sidenav").style.width = "0";
                document.getElementById("main").style.paddingRight = "0";
                document.getElementById("slidebtn").style.paddingRight = "0";
            }
        });
    });

    //gotop script
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.btn_gotop').show();
        } else {
            $('.btn_gotop').hide();
        }
    });
    $('.btn_gotop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 400);
        return false;
    });
</script>