$(function() {
    var topBtn = $('#pagetop');   
    topBtn.hide();
    //�X�N���[����700�ɒB������{�^���\��
    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //�X�N���[�����ăg�b�v
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
	
	
});