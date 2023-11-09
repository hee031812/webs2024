<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<?php include "../include/head.php" ?>
    <style>
        .container {
            max-width: 1400px;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <section class="subpageWrap container">
            <div class="submain ">
                <div class="subText">
                    <div>
                        <h1>Recycle</h1>
                        <p>분리배출을 어떻게 하는지 모르겠다면</p>
                        <p><em>아래 메뉴</em>를 선택 해주세요</p>
                    </div>
                </div>
                <div class="subnav">
                    <ul>
                        <li><a href="../subcate/subcate.php?subcate=가구">가구</a></li>
                        <li><a href="../subcate/subcate.php?subcate=가전">가전</a></li>
                        <li><a href="../subcate/subcate.php?subcate=용기포장">용기포장</a></li>
                        <li><a href="../subcate/subcate.php?subcate=패션잡화">패션잡화</a></li>
                        <li><a href="../subcate/subcate.php?subcate=음식물">음식물</a></li>
                        <li><a href="../subcate/subcate.php?subcate=기타">기타</a></li>
                    </ul>
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