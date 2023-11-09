$(function(){
    let currentIndex = 0;
    let $slides = $(".slider");
    $slides.hide().first().show();

    function showNextSlide() {
        let nextIndex = (currentIndex + 1) % 3;

        $slides.eq(currentIndex).fadeOut(1200, function () {
            $slides.eq(nextIndex).fadeIn(1200);
        });

        currentIndex = nextIndex;
    }

    setInterval(showNextSlide, 3000);


    // 메뉴
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown();
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp();
    });

     // 팝업

     $(".popup-btn").click(function(){
        $(".popup-view").show();
    });
    $(".popup-close").click(function(){
        $(".popup-view").hide();
    });

});



