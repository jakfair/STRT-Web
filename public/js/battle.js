playercharacters = JSON.parse(sessionStorage.playercharacters);
ennemicharacters = JSON.parse(sessionStorage.ennemicharacters);
attaquant = "";
defenseur = "";
skill = "";
stage = "0";
for(i=0;i<playercharacters.length;i++){
    document.getElementById("character"+i+"_visuel").src = playercharacters[i].classe.icone;
    document.getElementById("character"+i+"_visuel_bis").src = playercharacters[i].classe.icone;
    document.getElementById("character"+i+"_visuel_bis").style.display = "none";
    document.getElementById("health_bar_character_"+i).max = playercharacters[i].vie;
    document.getElementById("health_bar_character_"+i).value = playercharacters[i].vie;

    document.getElementById("ennemi"+i+"_visuel").src = ennemicharacters[i].classe.icone;
    document.getElementById("ennemi"+i+"_visuel").style.transform = "scaleX(-1)";
    document.getElementById("health_bar_character_"+i+"_ennemi").max = ennemicharacters[i].vie;
    document.getElementById("health_bar_character_"+i+"_ennemi").value = ennemicharacters[i].vie;
}
fleche_droite = document.getElementsByClassName("fleche_droite");
fleche_gauche = document.getElementsByClassName("fleche_gauche");
fleche_gauche_bis = document.getElementsByClassName("fleche_gauche_bis");
for(i=0;i<fleche_gauche.length;i++){
    fleche_gauche[i].style.visibility = "hidden";
    fleche_gauche_bis[i].style.visibility = "hidden";
    fleche_droite[i].style.visibility = "hidden";
}



function action(){
    console.log(playercharacters[attaquant].actions);
    if(playercharacters[attaquant].actions >= skill.coût){
        playercharacters[attaquant].actions = playercharacters[attaquant].actions - skill.coût;


        skill.effets.forEach(function(effet){
           if(effet.type == "attaque"){
               testAttaque = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
               testDefense = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
               LeftToRightAnimation();
               if((playercharacters[attaquant].précision + testAttaque) >= ennemicharacters[defenseur].esquive + testDefense){
                   BlinkAnimation();
                   degat = (playercharacters[attaquant].attaque * effet.valeur) - ennemicharacters[defenseur].defense;
                   testCritique = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
                   if(playercharacters[attaquant].critique >= testCritique){
                       degat = degat * 2;
                   }
                   ennemicharacters[defenseur].vie = ennemicharacters[defenseur].vie - degat;
                   if(ennemicharacters[defenseur].vie <= 0){
                       newstatus = {
                           nom: "dead", icone: "/img/dead_status.png",tour:1000
                       }
                       ennemicharacters[defenseur].status.push(newstatus);
                       DeathAnimation();
                       document.getElementById("ennemi"+defenseur+"_visuel").style.pointerEvents = "none";
                   }
                   document.getElementById("health_bar_character_"+defenseur+"_ennemi").value = ennemicharacters[defenseur].vie;
               }
               else{
               }
           }
           if(effet.type == "status"){
               test = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
               if(test >= effet.valeur){
                   newstatus = {
                       nom: effet.stat, icone: "/img/"+effet.stat+"_status.png",tour:effet.duree
                   }
                   ennemicharacters[defenseur].status.push(newstatus);
                   setstatue(ennemicharacters[defenseur]);
               }
           }
        });



        resetall();
    }
}




function setattaquant(position){
    resetattaquant();
    resetdisplayskills();
    resetdefenseur();
    attaquant = position;
    displayskills(position);
    fleche_gauche[position].style.visibility = "visible";
    stage = 1;
    setconfirmed();
}
function setdefenseur(position){
    if(stage >= 2){
        resetdefenseur();
        defenseur = position;
        fleche_droite[position].style.visibility = "visible";
        stage = 3;
        setconfirmed();
    }
}
function displayskills(position){
    buttonskills = document.getElementsByClassName("buttonskill");
    resetdisplayskills();
    for(i=0;i<playercharacters[position].skillselected.length;i++){
        buttonskills[i].src = playercharacters[position].skillselected[i].icone;
        buttonskills[i].style.display = "block";
    }
}
function setskill(position){
    if(stage >= 1){
        resetdefenseur();
        skill = playercharacters[attaquant].skillselected[position];
        document.getElementById("skilltitle").innerText = skill.nom;
        document.getElementById("skilldescription").innerText = skill.description;
        stage = 2;
        setconfirmed();
    }
}
function setconfirmed(){
    if(stage >= 3){
        document.getElementById("confirmaction").style.display = "block";
    }
    else{
        document.getElementById("confirmaction").style.display = "none";
    }
}
function resetall(){
    stage = "0";
    resetattaquant();
    resetdefenseur();
    resetdisplayskills();
    setconfirmed();
}
function resetattaquant(){
    attaquant = "";
    for(i=0;i<fleche_gauche.length;i++){
        fleche_gauche[i].style.visibility = "hidden";
    }
}
function resetdefenseur(){
    defenseur ="";
    for(i=0;i<fleche_droite.length;i++){
        fleche_droite[i].style.visibility = "hidden";
    }
}
function resetdisplayskills(){
    skill = "";
    buttonskills = document.getElementsByClassName("buttonskill");
    for(i=0;i<buttonskills.length;i++){
        buttonskills[i].style.display = "none";
        document.getElementById("skilltitle").innerText = "";
        document.getElementById("skilldescription").innerText = "";
    }
}
function setstatue(character){
    status_container = "statue_container_"+character.ennemi+character.ou;
    console.log(status_container);
    character.status.forEach(function(statue){
        var img = document.createElement('img');
        img.src = statue.icone;
        document.getElementById(status_container).appendChild(img);
    });
}
newstatus = {
    nom: "stun", icone: "/img/stun_status.png",tour:1
}
playercharacters[0].status.push(newstatus);
newstatus = {
    nom: "poison", icone: "/img/poison_status.png",tour:1
}
