<header id="header" role="banner">
        <div class="header__inner bmStyle container">
            <div class="left">
                <a href="../main/main.php">
                    <span class="blind">
                        메인으로
                    </span>
                </a>
            </div>
            <div class="logo">
                <a href="../main/main.php">Developer Blog</a>
            </div>
            <div class="right">
            <?php if(isset($_SESSION['memberID'])){ ?>
                <ul>
                    <li><a href="#"><?= $_SESSION['youName']?>님 환영합니다.</a></li>
                    <li><a href="../login/logout.php">로그아웃</a></li>
                </ul>
            <?php } else { ?>
                <ul>
                    <li><a href="../join/join.php">회원가입</a></li>
                </ul>
            <?php } ?>
            </div>
        </div>
        <nav class="nav__inner">
            <ul>
                <li><a href="../blog/blogCate.php?category=최신정보">최신정보</a></li>
                <li><a href="../blog/blogCate.php?category=여행정보">여행정보</a></li>
                <li><a href="../blog/blogCate.php?category=사이트정보">사이트정보</a></li>
                <li><a href="../blog/blog.php=블로그">블로그</a></li>
            </ul>
        </nav>
 </header>