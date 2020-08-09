function LeftToRightAnimation(){
    $("#character"+attaquant+"_visuel").animate({"left": "+=50px"}, "fast");
    $("#character"+attaquant+"_visuel").animate({"left": "-=50px"}, "slow");
}

function BlinkAnimation(){
    for(i=0;i<=4;i++){
        $("#ennemi"+defenseur+"_visuel").fadeOut(150).fadeIn(150);
    }
}

function DeathAnimation(){
    $("#ennemi"+defenseur+"_visuel").fadeOut(500);
}

//$("#character"+attaquant+"_visuel").animate({"left": "-=50px"}, "slow", function() {
//    $("#character3_visuel").animate({"left": "+=50px"}, "fast");
//    $("#character3_visuel").animate({"left": "-=50px"}, "slow");
//});
