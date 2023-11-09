<?php
include "../connect/connect.php";
include "../connect/session.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $youId = mysqli_real_escape_string($connect, $_POST['youId']);
    $youName = mysqli_real_escape_string($connect, $_POST['youName']);
    $youPhone = mysqli_real_escape_string($connect, $_POST['youPhone']);

    $sql = "SELECT * FROM teamMembers WHERE youId = '$youId' AND youName = '$youName' AND youPhone = '$youPhone'";

    $result = $connect->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $foundPass = $row['youPass'];
    } else {
        echo "<script>
                alert('일치하는 정보가 없습니다.');
                location.href = 'joinId.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="ko">

<?php include "../include/head.php" ?>

    <style>
        .login__box {
            height: auto;
        }

        .login__box h3 {
            font-size: 1.6rem;
            margin-bottom: 0;
        }

        .images__wrap span {
            background-image: url(../../assets/img/idfindcom.png);
        }

        .login__findid {
            display: flex;
            justify-content: space-around;
            font-size: 2rem;
            width: 50%;
            margin: 1rem 0;
            border-bottom: 2px solid #999999;
        }

        .login__btn2 {
            margin: 1rem 0;
        }

        .login__findid em {
            font-size: 1.5rem;
            color: #285A5B;
        }

        .login__idbox {
            width: 100%;
            height: 17.5rem;
            padding: 2rem 3rem;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #edebe7;
        }

        @media (max-width:1100px) {
            .login__inner {
                margin-top: 50px;
            }
        }

        @media (max-width:660px) {
            .login__idbox {
                margin-bottom: 3rem;
                width: 80%;
            }

            .login__box {
                margin-left: 0;
            }
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
                    <h1>우리의<br>
                        지구는 오직<br>
                        하나뿐입니다.</h1>
                </div>
                <div class="login__box">
                    <h2>비밀번호찾기 성공</h2>
                    <div class="login__idbox">
                        <h3>당신의 비밀번호는</h3>
                        <div class="login__findid">"<em>
                                <?=$foundPass?>
                            </em>"</div>
                        <button class="login__btn2 btn__style1"><a href="../login/login.php">로 그 인</a></button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

</body>

</html>