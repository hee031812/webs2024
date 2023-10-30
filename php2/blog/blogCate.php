<?php
include "../connect/connect.php";
include "../connect/session.php";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
} else {
    Header("Location: blog.php");
}

$categorySql = "SELECT * FROM blog WHERE blogDelete = 1 AND blogCategory = '$category' ORDER BY blogId DESC";
$categoryResult = $connect->query($categorySql);
$categoryInfo = $categoryResult->fetch_array(MYSQLI_ASSOC);
$categorycOUNT = $categoryResult->num_rows;

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <!-- CSS -->
    <?php include "../include/head.php" ?>
</head>

<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" role="main">
        <div class="intro__inner blogStyle bmStyle container">
            <div class="intro__img">
                <img srcset="../asset/img/intro01-min.jpg 1x, ../asset/img/intro01@2x-min.jpg 2x, ../asset/img/intro01@3x-min.jpg 3x"
                    alt="인트로 이미지">
            </div>
            <div class="intro__text">
                <h3>
                    <?= $category ?>
                </h3>
                <p> 여행에 관련된
                    <?= $category ?>내용을 다루는 곳입니다.
                </p>
            </div>
        </div>

            <div class="blog__layout container">
                <div class="blog__contents">
                    <section class="blog__card card__wrap">
                        <div class="card__inner column4">

<?php foreach ($categoryResult as $blog) { ?>
    <div class="card">
        <figure class="card__img">
            <a href="blogView.php?blogId=<?= $blog['blogId'] ?>">
                <img src="../asset/blog/<?= $blog['blogImgFile'] ?>"alt="<?= $blog['blogTitle'] ?>">
            </a>
        </figure>
        <div class="card__text">
            <h3>
                <a href="blogView.php?blogId=<?= $blog['blogId'] ?>">
                    <?= $blog['blogTitle'] ?>
                </a>
            </h3>
            <p>
                <?= substr($blog['blogContents'], 0, 100) ?>
            </p>
        </div>
    </div>
<?php } ?>

                        </div>
                    </section>
                </div>
                <div class="blog__aside">
                    <?php include "blogAd.php" ?>
                    <!-- //blog__ad -->

                    <?php include "blogIntro.php" ?>
                    <!-- //blog__intro -->

                    <?php include "blogCategory.php" ?>
                    <!-- //blog__category -->

                    <?php include "blogPopular.php" ?>
                    <!-- //blog_popular -->

                    <?php include "blogComment.php" ?>
                    <!-- // blog__comment-->

                </div>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>

</html>