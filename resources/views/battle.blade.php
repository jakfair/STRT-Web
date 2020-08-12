@extends('layouts.app')

@section('content')
<div class="container">
    <input class="button" id="confirmaction" type="button" value="confirmer" style="display: none" onclick="action()">
    <div id="battlefield">
        <div id="playerside">
            <div class="fleche_container">
                <img class="fleche_gauche" id="fleche_gauche_0" src="/img/fleche_bleu.png">
                <img class="fleche_gauche_bis" id="fleche_gauche_0_bis" src="/img/fleche_verte.png">
            </div>
            <div class="characters_visuel_container">
                <div class="statue_container" id="statue_container_non0">

                </div>
                <div class="actions_container" id="actions_container_non0">

                </div>
                <progress class="health_bar player_bar" id="health_bar_character_0" value="100" max="100"></progress>
                <img class="characters_visuel" id="character0_visuel" onclick="setattaquant(0)" src="">
                <img class="characters_visuel_bis" id="character0_visuel_bis" onclick="setdefenseur(0)" src="">
            </div>
            <div class="fleche_container">
                <img class="fleche_gauche" id="fleche_gauche_1" src="/img/fleche_bleu.png">
                <img class="fleche_gauche_bis" id="fleche_gauche_1_bis" src="/img/fleche_verte.png">

            </div>
            <div class="characters_visuel_container">
                <div class="statue_container" id="statue_container_non1">

                </div>
                <div class="actions_container" id="actions_container_non1">

                </div>
                <progress class="health_bar player_bar" id="health_bar_character_1" value="100" max="100"></progress>
                <img class="characters_visuel" id="character1_visuel" onclick="setattaquant(1)" src="">
                <img class="characters_visuel_bis" id="character1_visuel_bis" onclick="setdefenseur(1)" src="">
            </div>
            <div class="fleche_container">
                <img class="fleche_gauche" id="fleche_gauche_2" src="/img/fleche_bleu.png">
                <img class="fleche_gauche_bis" id="fleche_gauche_2_bis" src="/img/fleche_verte.png">
            </div>
            <div class="characters_visuel_container">
                <div class="statue_container" id="statue_container_non2">

                </div>
                <div class="actions_container" id="actions_container_non2">

                </div>
                <progress class="health_bar player_bar" id="health_bar_character_2" value="100" max="100"></progress>
                <img class="characters_visuel" id="character2_visuel" onclick="setattaquant(2)" src="">
                <img class="characters_visuel_bis" id="character2_visuel_bis" onclick="setdefenseur(2)" src="">
            </div>
            <div class="fleche_container">
                <img class="fleche_gauche" id="fleche_gauche_3" src="/img/fleche_bleu.png">
                <img class="fleche_gauche_bis" id="fleche_gauche_3_bis" src="/img/fleche_verte.png">
            </div>
            <div class="characters_visuel_container">
                <div class="statue_container" id="statue_container_non3">

                </div>
                <div class="actions_container" id="actions_container_non3">

                </div>
                <progress class="health_bar player_bar" id="health_bar_character_3" value="100" max="100"></progress>
                <img class="characters_visuel" id="character3_visuel" onclick="setattaquant(3)" src="">
                <img class="characters_visuel_bis" id="character3_visuel_bis" onclick="setdefenseur(3)" src="">
            </div>
        </div>
        <div id="enemiside">
            <div class="characters_visuel_container">
                <div class="statue_container" id="statue_container_oui0">

                </div>
                <progress class="health_bar ennemi_bar" id="health_bar_character_0_ennemi" value="100" max="100"></progress>
                <img class="characters_visuel_ennemi" id="ennemi0_visuel" onclick="setdefenseur(0)" src="">
                <div class="container_degat" id="container_degat_oui0">20</div>
            </div>
            <img class="fleche_droite" id="fleche_droite_0" src="/img/fleche_rouge.png">
            <div class="characters_visuel_container">
                <div class="statue_container" id="statue_container_oui1">

                </div>
                <progress class="health_bar ennemi_bar" id="health_bar_character_1_ennemi" value="100" max="100"></progress>
                <img class="characters_visuel_ennemi" id="ennemi1_visuel" onclick="setdefenseur(1)" src="">
                <div class="container_degat" id="container_degat_oui1">20</div>
            </div>
            <img class="fleche_droite" id="fleche_droite_1" src="/img/fleche_rouge.png">
            <div class="characters_visuel_container">
                <div class="statue_container" id="statue_container_oui2">

                </div>
                <progress class="health_bar ennemi_bar" id="health_bar_character_2_ennemi" value="100" max="100"></progress>
                <img class="characters_visuel_ennemi" id="ennemi2_visuel" onclick="setdefenseur(2)" src="">
                <div class="container_degat" id="container_degat_oui2">20</div>
            </div>
            <img class="fleche_droite" id="fleche_droite_2" src="/img/fleche_rouge.png">
            <div class="characters_visuel_container">
                <div class="statue_container" id="statue_container_oui3">

                </div>
                <progress class="health_bar ennemi_bar" id="health_bar_character_3_ennemi" value="100" max="100"></progress>
                <img class="characters_visuel_ennemi" id="ennemi3_visuel" onclick="setdefenseur(3)" src="">
                <div class="container_degat" id="container_degat_oui3">20</div>
            </div>
            <img class="fleche_droite" id="fleche_droite_3" src="/img/fleche_rouge.png">
        </div>
    </div>
    <div id="skillpanel">
        <div id="skillsmenu">
            <div class="container_skill" id="container_skill0">
                <img src="" class="buttonskill" id="skill0" onclick="setskill(0)"/>
                <div class="coutvisual_container" id="coutvisual_container0">

                </div>
            </div>
            <div class="container_skill" id="container_skill1">
                <img src="" class="buttonskill" id="skill0" onclick="setskill(1)"/>
                <div class="coutvisual_container" id="coutvisual_container1">

                </div>
            </div>
            <div class="container_skill" id="container_skill2">
                <img src="" class="buttonskill" id="skill0" onclick="setskill(2)"/>
                <div class="coutvisual_container" id="coutvisual_container2">

                </div>
            </div>
            <div class="container_skill" id="container_skill3">
                <img src="" class="buttonskill" id="skill0" onclick="setskill(3)"/>
                <div class="coutvisual_container" id="coutvisual_container3">

                </div>
            </div>
        </div>
        <div id="skilldesc">
            <h3 id="skilltitle"></h3>
            <p id="skilldescription"></p>
        </div>
    </div>
</div>
<script src="{{asset('js/battle.js')}}"></script>
<script type="text/javascript">
</script>
@endsection
