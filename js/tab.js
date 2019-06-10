//
//$(".slider ol li").on("click", function() {
//   
//    $(this).addClass("active").siblings("li").removeClass("active");
//    $(".slider ul").animate({
//       top: -$(".slider").height() * $(this).index()
//    }, 500);
//});


$(".slider ol li").on("click", function () {
    $(this).addClass("active").siblings("li").removeClass("active");
    $(".slider ul").animate({
        top: -$(".slider").height() * $(this).index()
    }, 1500);
});

var i = 0;
var child = "";
setInterval(function () {
    
    $(".slider ul").animate({
        top: -$(".slider").height() * i
    }, 2000);
    i++;
    $(".slider ol li:nth-child(" + i + ")").addClass("active").siblings("li").removeClass("active");
    if (i > 4)
    {
        i = 0;
    }
}, 3000);



