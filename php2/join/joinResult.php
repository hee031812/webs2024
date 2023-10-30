<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $youId = mysqli_real_escape_string($connect, $_POST['youId']);
    $youName = mysqli_real_escape_string($connect, $_POST['youName']);
    $youEmail = mysqli_real_escape_string($connect, $_POST['youEmail']);
    $youPass = mysqli_real_escape_string($connect, $_POST['youPass']);
    $youPhone = mysqli_real_escape_string($connect, $_POST['youPhone']);
    $youRegTime = time();

    $sql = "INSERT INTO myMembers(youId, youName, youEmail, youPass, youPhone, youRegTime) VALUES('$youId', '$youName', '$youEmail', '$youPass', '$youPhone', '$youRegTime')";
    $connect -> query($sql);

    // 데이처 베이이스 연결 닫기
    mysqli_close($connect);

?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <!-- CSS -->
    <?php include "../include/head.php"?>
</head>
<body class="gray">
    <?php include "../include/skip.php"?>
    <!-- //skip -->

    <?php include "../include/header.php"?>
    <!-- //header -->

    <main id="main" role="main">
        <div class="intro__inner bmStyle container">
            <div class="intro__img">
                <img srcset="../asset/img/intro01-min.jpg 1x, ../asset/img/intro01@2x-min.jpg 2x, ../asset/img/intro01@3x-min.jpg 3x" alt="인트로 이미지">
            </div>
            <div class="intro__text">
                성공한 사람이 되려고 노력하기보다 가치있는 사람이 되려고 노력하라. &lt;알버트 아인슈타인&gt;
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php"?>
    <!-- //footer -->
</body>
</html>