$(document).on('click', '.nav-list li', function() {
    $(".nav-list li").removeClass("active");
    $(this).addClass("active");
});
