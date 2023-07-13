$(document).ready(function(){

    // on-window-scroll effects
    $(window).on("scroll", function(){
        if($(window).scrollTop()){
            $("header").addClass("active");
        }else{
            $("header").removeClass("active");
        }
    });
    
    // navbar start
    $("section").scrollWatchMapTo(".nav-list > li");
    $(".nav-list > li").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
    });
    $(".nav-btn-open").click(function(){
        $(".nav-body").addClass("active");
        $(".nav-body").addClass("box-shadow-1");
    });
    $(".nav-btn-close").click(function(){
        $(this).parent().removeClass("active");
        $(".nav-body").removeClass("box-shadow-1");
    });
    $("section").click(function(){
        $(".nav-btn-close").parent().removeClass("active");
    });
    // navbar end


    // portfolio showcase start
    $(".portfolio-card").click(function(){
        var src = $(this).children(".img").children("img").attr("src");
        $(".display").children("img").attr("src", src);
        $(".display").addClass("active");
        $(".display-close-btn").addClass("active");
    });
    $(".display-close-btn").click(function(){
        $(".display").removeClass("active");
        $(this).removeClass("active");
    });
    // portfolio showcase end
});