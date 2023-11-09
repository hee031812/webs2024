<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?> 

<!DOCTYPE html>
<html lang="ko">
<?php include "../include/head.php" ?>
<body>
<?php include "../include/header.php" ?>

    <main id="main">
        <div class="login__inner container">
            <div class="login__wrap">
                <div class="images__wrap">
                    <span></span>
                    <h1>소소한 나의 실천으로<br>
                        함께 만들어가는<br>
                        깨끗한 지구!</h1>
                </div>
                <div class="login__box">
                    <h2>로 그 인</h2>
                    <h3>아직 회원이 아니십니까?<a href="../join/joinAgree.php" class="joinbtn">회원가입</a></h3>
                    <form action="loginSave.php" name="loginSave" method="post" class="login__form">
                        <label for="youId">
                            <input class="login__id"type="text" id="youId" name="youId" placeholder="아이디">
                        </label>
                        <label for="youPass">
                            <input type="password" id="youPass" name="youPass" placeholder="비밀번호">
                        </label>
                        <div class="login__find">
                            <a href="../join/joinId.php">아이디 찾기</a>
                            <a href="../join/joinpass.php">비밀번호 찾기</a>
                        </div>
                        <button class="login__btn2 btn__style1">로  그  인</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <footer id="footer" role="contentinfo">
        <div class="footer__inner">
            <div class="footerwrap">
                <ul>
                    <li><img src="../../assets/img/logo2.jpg" alt="sitelogo"></li>
                    <li>
                        <h2>CUSTOMER CENTER</h2>
                        <p>전화보다 빠른 궁금증 해결</p>
                    </li>
                    <li>
                        <h2>NOTICE +</h2>
                        <p>종량제 봉투 가격 인상 공지<br>
                            2025 대기업 탄소 저감 실적 의무화 실시예정</p>
                    </li>
                    <li>
                        <h2>about 분리배출</h2>
                        <p>주소 : 서울특별시 구로구 구로동 237-14<br>
                            통신판매업 신고 : 2015-서울구로-1525</p>
                    </li>
                    <li>
                        <div class="footer__sns">
                            <h1>SOCIAL</h1>
                            <div>
                                <img src="../../assets/img/Facebook.png" alt="Facebook">
                                <img src="../../assets/img/Instagram.png" alt="Instagram">
                                <img src="../../assets/img/messanger.png" alt="messanger">
                                <img src="../../assets/img/Whatsapp.png" alt="Whatsapp">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>