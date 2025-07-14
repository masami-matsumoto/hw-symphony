$(function() {
    var topBtn = $('#pagetop');   
    topBtn.hide();
    //スクロールが700に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
	
	
});