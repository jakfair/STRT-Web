var tryptique = class {
    skills = [];
    constructor(nom,description,type,icon,vie,attaque,defense,esquive,precision,vitesse,critique) {
        this.nom = nom;
        this.description = description;
        this.type = type;
        this.icon = icon;
        this.vie = vie;
        this.attaque = attaque;
        this.defense = defense;
        this.esquive = esquive;
        this.precision = precision;
        this.vitesse = vitesse;
        this.critique = critique;
        this.addskills = function (newObject) {
            this.skills.push(newObject);
        };
    }
}

