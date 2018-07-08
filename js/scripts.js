$(document).ready(function(){

    var frontHeight = $(".frontside").height();
    
    $(".bodyBackside").height(frontHeight);
    $(".image-flip").height(frontHeight);
    
    $(window).resize(function(){
        var frontHeight = $(".frontside").height();
    
        $(".bodyBackside").height(frontHeight);
        $(".image-flip").height(frontHeight);
    
    
    });
    });