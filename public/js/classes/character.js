var character = class {
    status = [];
    skills = [];
    skillselected = [];
    constructor(nom,arme,pouvoir,classe,ennemi,ou) {
        this.nom = nom;
        this.arme = arme;
        this.armelevel = 1;
        this.pouvoir = pouvoir;
        this.pouvoirlevel = 1;
        this.classe = classe;
        this.classelevel = 1;
        this.ennemi = ennemi;
        this.ou = ou;
        this.vie = arme.vie + pouvoir.vie + classe.vie;
        this.attaque = arme.attaque + pouvoir.attaque + classe.attaque;
        this.defense = arme.defense + pouvoir.defense + classe.defense;
        this.esquive = arme.esquive + pouvoir.esquive + classe.esquive
        this.précision = arme.précision + pouvoir.précision + classe.précision;
        this.vitesse = arme.vitesse + pouvoir.vitesse + classe.vitesse;
        this.actionsmax = this.vitesse / 10;
        this.actions = this.actionsmax;
        this.critique = arme.critique + pouvoir.critique + classe.critique;
    }
}

function newrandcharacters(ou,ennemi){
    var newcharacter = new character("maël",triptyques[Math.floor(Math.random() * triptyques.length)],triptyques[Math.floor(Math.random() * triptyques.length)],triptyques[Math.floor(Math.random() * triptyques.length)],ennemi,ou);
    newcharacter.arme.skills.forEach(function(skill){
        if(skill.tier == 1){
            newcharacter.skills.push(skill);
        }
    });
    newcharacter.pouvoir.skills.forEach(function(skill){
        if(skill.tier == 1){
            newcharacter.skills.push(skill);
        }
    });
    newcharacter.classe.skills.forEach(function(skill){
        if(skill.tier == 1){
            newcharacter.skills.push(skill);
        }
    });
    newcharacter.skills.forEach(function(skill){
        if(skill.actif == "oui"){
            newcharacter.skillselected.push(skill);
        }
    })
    return newcharacter;
}
