$(function () {
    $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
});

$(document).ready(function(){
    $(".progress-bar").each(function(){
        each_bar_width = $(this).attr('aria-valuenow');
        $(this).width(each_bar_width + '%');
    });
});


window.addEventListener("load", function(){
   const loader = document.querySelector(".loader");
   loader.className += " hidden";
});