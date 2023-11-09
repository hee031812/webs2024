<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    //슬라이드 
    $(document).ready(function () {
        for (var i = 1; i <= $('.slider__slide').length; i++) {
            $('.slider__indicators').append('<div class="slider__indicator" data-slide="' + i + '"></div>')
        }
        setTimeout(function () {
            $('.slider__wrap').addClass('slider__wrap--hacked');
        }, 1000);

        var isPaused = false; // 일시 중지 상태를 저장하는 변수

        function goToSlide(number) {
            $('.slider__slide').removeClass('slider__slide--active');
            $('.slider__slide[data-slide=' + number + ']').addClass('slider__slide--active');
        }

        function autoSlide() {
            if (!isPaused) { // isPaused가 false인 경우에만 슬라이드 전환
                var currentSlide = Number($('.slider__slide--active').data('slide'));
                var totalSlides = $('.slider__slide').length;
                currentSlide++;

                if (currentSlide > totalSlides) {
                    currentSlide = 1;
                }
                goToSlide(currentSlide);
            }
        }

        // 3초(3000ms)마다 autoSlide 함수를 호출하여 슬라이드를 변경
        var autoSlideInterval = setInterval(autoSlide, 4000);

        // 다음 슬라이드로 이동하는 클릭 핸들러
        $('.slider__next, .go-to-next').on('click', function () {
            var currentSlide = Number($('.slider__slide--active').data('slide'));
            var totalSlides = $('.slider__slide').length;
            currentSlide++;

            if (currentSlide > totalSlides) {
                currentSlide = 1;
            }
            goToSlide(currentSlide);
        });

        // "일시 중지" 버튼 클릭 핸들러
        $('.pauseButton').on('click', function () {
            isPaused = true; // 슬라이드 일시 중지
        });

        // "다시 시작" 버튼 클릭 핸들러
        $('.resumeButton').on('click', function () {
            isPaused = false; // 슬라이드 다시 시작
        });
    });
</script>