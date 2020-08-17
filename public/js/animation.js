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
function degatAnimation(degat,critique){
    var container_degat = document.getElementById("container_degat_"+ennemicharacters[defenseur].ennemi+defenseur);
    container_degat.innerHTML = degat;
    if(critique == "oui"){
        container_degat.style.color = "yellow";
    }
    $("#container_degat_"+ennemicharacters[defenseur].ennemi+defenseur).fadeIn(200).animate({"top":"-=100px"},2500).fadeOut(200).animate({"top":"+=100px"},100, function(){
        container_degat.style.color = "white";
    });
}
//$("#character"+attaquant+"_visuel").animate({"left": "-=50px"}, "slow", function() {
//    $("#character3_visuel").animate({"left": "+=50px"}, "fast");
//    $("#character3_visuel").animate({"left": "-=50px"}, "slow");
//});
