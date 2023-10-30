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
    <main id="main" role="main">
        <div class="intro__inner bmStyle container">
            <div class="intro__img">
                <img srcset="../asset/img/intro01-min.jpg 1x, ../asset/img/intro01@2x-min.jpg 2x, ../asset/img/intro01@3x-min.jpg 3x" alt="인트로 이미지">
            </div>
            <img src="" alt="">
        </div>
        <div class="intro__text">
            회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
        </div>
        <section class="join__inner container">
            <h2>이용약관</h2>
            <div class="join__index">
                <ul>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__agree">
                <div class="agree__box">
                    <h3 class="blind">HJ 블로그 이용약관</h3>
                    <div class="scroll">
                        제1장 총칙
                        제1조 (목적)
                        이 약관은 전기통신사업법령 및 정보통신망이용촉진 및 정보보호 등에 관한 법률에 따라 한겨레신문㈜ 및 관계사{씨네21 ㈜(이상, 자회사) ㈜한겨레플러스(이상, 제휴사)} (이하 `회사`)에서 제공하는 모든 서비스(이하 `서비스`)의 이용절차,조건등 서비스 이용과 관련한 회사와 회원의 권리 및 의무에 관련된 사항을 규정함을 목적으로 합니다.

                        제2조 (약관의 효력과 변경)
                        1.본 약관은 회원이 `내 블로그 만들기` 절차에 따라 블로그 개설시 "약관에 동의합니까"라는 물음에 회원이 "동의" 버튼을 클릭하는 것으로 효력이 발생됩니다.
                        2.회사는 필요한 경우 약관을 변경할 수 있으며, 변경된 약관은 적용일 전 7일간 온라인 상의 공지나 전자 우편 등의 방법을 통해 회원에게 공지되고 적용일에 효력이 발생됩니다.
                        3.회원은 변경된 약관에 동의하지 않을 경우, 블로그 또는 팀블로그를 폐쇄하고 본 서비스이용을 중단할 수 있습니다.
                        4.약관이 변경된 이후에도 계속적으로 서비스를 이용하는 경우에는 회원이 약관의 변경 사항에 동의한 것으로 봅니다.
                        제3조 (약관 외 준칙)
                        이 약관에 명시되지 않은 사항이 전기통신기본법, 전기통신사업법, 기타 관계법령에 규정 되어 있을 경우에는 그 규정에 따릅니다.

                        제4조 (용어의 정의)
                        1.'블로그’라 함은 회원 개인이 글이나 그림 등을 올릴 수 있는 공간입니다.
                        2.`팀블로그`라 함은 서비스에서 회원이 만든 특정한 팀블로그를 말합니다.
                        3.`팀블로그 회원`이라 함은 블로그를 개설한 후 특정 팀블로그에 가입되어 팀블로그를 이용하는 회원을 말합니다.
                        4.`팀지기`라 함은 서비스에서 팀블로그를 개설하거나 전임 팀지기로부터 권한을 위임 받은 자로서 개설한 팀블로그의 운영 전반에 책임을 지는 팀블로그를 대표하는 회원을말합니다.
                        5.`버금지기`이라 함은 서비스에서 팀지기가 선정한 팀블로그 운영자를 말합니다.
                        제2장 서비스 이용 계약
                        제5조 (이용계약)
                        서비스 이용계약은 먼저 회원이 회사가 정한 약관에 동의하여 ID를 발급 받은 뒤,‘블로그 개설’을 신청하면, 회사가 이를 허락하는 것으로 이루어집니다.

                        -일반 : 블로그 개설 신청 완료 뒤 별도의 승인절차 없이 이용합니다.
                        -전문 : 블로그 개설 신청 완료 후 운영자의 승인이 있어야 이용 할 수 있습니다.
                        -기자 : 한겨레 소속 기자에 한하며, 블로그 개설 신청 뒤 운영자의 승인이 있어야 이용할 수 있습니다.
                        제6조 (이용신청)
                        본 서비스를 이용하기 위해서는 본 약관에 동의한 후 소정의 가입신청서에 서비스 이용시 필요한 정보를 기록해야 합니다.

                    </div>
                    <div class="check">
                        <label for="agreeCheck1">
                            블로그 개인정보 수집 및 이용에 동의합니다.
                            <input type="checkbox" name="agreeCheck1" id="agreeCheck1">
                            <span class="indicator"></span>
                        </label>
                    </div>
                </div>
                <div class="agree__box">
                    <h3 class="blind">HJ 블로그 개인정보 취급방침</h3>
                    <div class="scroll scroll__style">
                            [웹쓰주식회사] 개인정보 수집 및 이용안내<br>
                            수집하는 개인정보의 항목 및 수집방법<br>
                            수집항목 : 이름, 연락처(이메일 주소, 전화번호), 주소, 성별 등<br>
                            수집방법 : 홈페이지, 모바일 앱, 이메일, 이벤트 응모, 상담 게시판 등<br>
                            개인정보의 수집 및 이용 목적<br>
                            회사는 수집한 개인정보를 다음의 목적을 위해 이용합니다.<br>
                            1. 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금 정산<br>
                            2. 회원 관리<br>
                            3. 불만처리 등 민원처리<br>
                            4. 마케팅 및 광고에 활용<br>
                    </div>
                    <div class="check">
                        <label for="agreeCheck2">
                            개인정보 수집 및 이용에 동의합니다. 
                            <input type="checkbox" name="agreeCheck2" id="agreeCheck2">
                            <span class="indicator"></span>
                        </label>
                    </div>
                </div>
                <button id="agreeButton" class="btn__style"  >동의하기</button>
            </div>
        </section>
    </main>
    <!-- //main -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    <script>
        document.getElementById("agreeButton").addEventListener("click", () => {
            const agreeCheck1 = document.getElementById("agreeCheck1");
            const agreeCheck2 = document.getElementById("agreeCheck2");

            if(agreeCheck1.checked && agreeCheck2.checked){
                window.location.href = "joinInsert.php";
            } else {
                alert("이용약관 및 개인정보 취급방침을 동의해주세요!");
            }
        });
    </script>
</body>
</html>