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
sessionStorage.playercharacters = JSON.stringify(playercharacters);
sessionStorage.ennemicharacters = JSON.stringify(ennemicharacters);
for(i=0;i<playercharacters.length;i++){
    document.getElementById("character"+i+"_visuel").src = playercharacters[i].classe.icone;
}
