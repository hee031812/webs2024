<!DOCTYPE html>
<html lang="ko">
<head>
<?php include "../include/head.php" ?>
    
<style>
    .images__wrap span {
        background-image: url(../../assets/img/idfindimg.png);
    }
</style>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <div class="login__inner container">
            <div class="login__wrap">
                <div class="images__wrap">
                    <span></span>
                    <h1>환경오염은 거리두기<br>
                        환경보호는 곁에두기</h1>
                </div>
                <div class="login__box">
                    <h2>아이디찾기</h2>
                    <h3>비밀번호가 기억나지 않는다면?<a href="joinpass.php" class="joinbtn">비밀번호 찾기</a></h3>
                    <em>아이디를 찾기위한 정보를 입력하세요.</em>
                    <form action="idfindcom.php" name="idfindcom" method="post" class="login__form">
                        
                            <label for="youName">
                                <input type="text" id="youName" name="youName" placeholder="이름">
                            </label>
                            <label for="youPhone">
                                <input type="text" id="youPhone" name="youPhone" placeholder="휴대폰번호">
                            </label>
                            <button class="login__btn2 btn__style1" type="submit">아 이 디 찾 기</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </main>

    
    
    <?php include "../include/footer.php" ?>
    <!-- //footer -->

</body>
</html>