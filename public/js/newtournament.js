playercharacters = [];
playercharacters[0] = newrandcharacters("0","non");
playercharacters[1] = newrandcharacters("1","non");
playercharacters[2] = newrandcharacters("2","non");
playercharacters[3] = newrandcharacters("3","non");
ennemicharacters = [];
ennemicharacters[0] = newrandcharacters("0","oui");
ennemicharacters[1] = newrandcharacters("1","oui");
ennemicharacters[2] = newrandcharacters("2","oui");
ennemicharacters[3] = newrandcharacters("3","oui");
console.log(playercharacters);
document.getElementById("teamJSON").value = JSON.stringify(playercharacters);
document.getElementById("teamJSONennemy1").value = JSON.stringify(ennemicharacters);
for(i=0;i<playercharacters.length;i++){
    document.getElementById("character"+i+"_name").innerText = playercharacters[i].nom;
    document.getElementById("character"+i+"_name_button").innerText = playercharacters[i].nom;
    document.getElementById("character"+i+"_visuel").src = playercharacters[i].classe.icone;
    document.getElementById("character"+i+"_vie").innerText = playercharacters[i].vie;
    document.getElementById("character"+i+"_attaque").innerText = playercharacters[i].attaque;
    document.getElementById("character"+i+"_defense").innerText = playercharacters[i].defense;
    document.getElementById("character"+i+"_precision").innerText = playercharacters[i].précision;
    document.getElementById("character"+i+"_esquive").innerText = playercharacters[i].esquive;
    document.getElementById("character"+i+"_vitesse").innerText = playercharacters[i].vitesse;
    document.getElementById("character"+i+"_critique").innerText = playercharacters[i].critique;
    var containerskills = document.getElementById("character"+i+"_container_character_card");
    playercharacters[i].skills.forEach(function(skill){
        var img = document.createElement('img');
        img.src = skill.icone;
        img.addEventListener('click', function(){
            document.getElementById("skilltitle").innerText = skill.nom;
            document.getElementById("skilldescription").innerHTML = skill.description;
        });
        containerskills.appendChild(img);
    });
}


function switchmenu(pouet){
    document.getElementById("container_characters_sheet").style.marginLeft = "-"+pouet+"00vw"
}
