<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
	/* co dinh menu */
$(document).ready(function() {
 
    var menu = $('#menu');
    var start = $(menu).offset().top;
    //==================
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        $(menu).css('position',((p)>start) ? 'fixed' : 'static');
        $(menu).css('top',((p)>start) ? '0px' : '');
    });
});
        //=============================
$(document).ready(function() {
    var danhmuc = $('#danhmuc');
    if (!danhmuc.length) return;
    var start = $(danhmuc).offset().top - 110;
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        $(danhmuc).css('position',((p)>start) ? 'fixed' : 'static');
        $(danhmuc).css('top',((p)>start) ? '110px' : '');
    });
});
    //=========================
$(document).ready(function() {
    var hr = $('hr');
    if (!hr.length) return;
    var start = $(hr).offset().top - 81;
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        $(hr).css('position',((p)>start) ? 'fixed' : 'static');
        $(hr).css('top',((p)>start) ? '80px' : '');
    S });
});
 



$(function() {
    //dang nhap
    $(".btn-login").click(function(e) {
        e.preventDefault();
        $("#login-form").show();
    });
    $(".login-close").click(function(e) {
        e.preventDefault();
        $("#login-form").hide();
    });
    //dang ky
    $(".btn-dangky").click(function(e) {
        e.preventDefault();
        $("#sign-up-form").show();
    });
    $(".sign-up-close").click(function(e) {
        e.preventDefault();
        $("#sign-up-form").hide();
    });
    // chuyen dang nhap sang dang ky
    
    $(".dk").click(function(e) {
        e.preventDefault();
        $("#sign-up-form").show();
        $("#login-form").hide();
    });
});


$(function() {
    // Ajax load product content
    $(".ajax_load_product").click(function(e) {
        e.preventDefault();
        $.get($(this).attr('href'), function(html) {
            $("#content-main").html(html);
        });
    });
});
 

</script>
