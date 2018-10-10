$(document).ready(function() {
        $("li").text("hello");
        $("#title").text("Where to?");
        $(".green").text("GREEN");

        $("#destination").addClass('promo');

        $('.autohide').on('click', function () {
          $(this).next('.transport').fadeToggle();
        });

});
