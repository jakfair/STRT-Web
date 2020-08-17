@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="buttonmenu">
            <span onclick="switchmenu('0')">general</span>
            <span onclick="switchmenu('1')" id="character0_name_button">personnage1</span>
            <span onclick="switchmenu('2')" id="character1_name_button">personnage2</span>
            <span onclick="switchmenu('3')" id="character2_name_button">personnage3</span>
            <span onclick="switchmenu('4')" id="character3_name_button">personnage4</span>
        </div>
        <div id="container_characters_sheet">
            <div class="character_sheet" id="general_sheet">
                <h2>General</h2>

                <div id="container_character_card">
                    <div class="character_card">
                        <h3 id="character0_name">Maël Tessier</h3>
                        <div class="character_card_visual">
                            <img src="" id="character0_visuel">
                        </div>
                        <div class="container_stat">
                            <div class="stat"><img src="/img/life.png"><span id="character0_vie">104</span></div>
                            <div class="stat"><img src="/img/attack.png"><span id="character0_attaque">104</span></div>
                            <div class="stat"><img src="/img/defense.png"><span id="character0_defense">104</span></div>
                            <div class="stat"><img src="/img/accuracy.png"><span id="character0_precision">104</span></div>
                            <div class="stat"><img src="/img/agility.png"><span id="character0_esquive">104</span></div>
                            <div class="stat"><img src="/img/speed.png"><span id="character0_vitesse">104</span></div>
                            <div class="stat"><img src="/img/critical.png"><span id="character0_critique">104</span></div>
                        </div>
                        <div class="container_skills_card" id="character0_container_character_card">
                        </div>
                    </div>
                    <div class="character_card">
                        <h3 id="character1_name">Maël Tessier</h3>
                        <div class="character_card_visual">
                            <img src="" id="character1_visuel">
                        </div>
                        <div class="container_stat">
                            <div class="stat"><img src="/img/life.png"><span id="character1_vie">104</span></div>
                            <div class="stat"><img src="/img/attack.png"><span id="character1_attaque">104</span></div>
                            <div class="stat"><img src="/img/defense.png"><span id="character1_defense">104</span></div>
                            <div class="stat"><img src="/img/accuracy.png"><span id="character1_precision">104</span></div>
                            <div class="stat"><img src="/img/agility.png"><span id="character1_esquive">104</span></div>
                            <div class="stat"><img src="/img/speed.png"><span id="character1_vitesse">104</span></div>
                            <div class="stat"><img src="/img/critical.png"><span id="character1_critique">104</span></div>
                        </div>
                        <div class="container_skills_card" id="character1_container_character_card">
                        </div>
                    </div><div class="character_card">
                        <h3 id="character2_name">Maël Tessier</h3>
                        <div class="character_card_visual">
                            <img src="" id="character2_visuel">
                        </div>
                        <div class="container_stat">
                            <div class="stat"><img src="/img/life.png"><span id="character2_vie">104</span></div>
                            <div class="stat"><img src="/img/attack.png"><span id="character2_attaque">104</span></div>
                            <div class="stat"><img src="/img/defense.png"><span id="character2_defense">104</span></div>
                            <div class="stat"><img src="/img/accuracy.png"><span id="character2_precision">104</span></div>
                            <div class="stat"><img src="/img/agility.png"><span id="character2_esquive">104</span></div>
                            <div class="stat"><img src="/img/speed.png"><span id="character2_vitesse">104</span></div>
                            <div class="stat"><img src="/img/critical.png"><span id="character2_critique">104</span></div>
                        </div>
                        <div class="container_skills_card" id="character2_container_character_card">
                        </div>
                    </div><div class="character_card">
                        <h3 id="character3_name">Maël Tessier</h3>
                        <div class="character_card_visual">
                            <img src="" id="character3_visuel">
                        </div>
                        <div class="container_stat">
                            <div class="stat"><img src="/img/life.png"><span id="character3_vie">104</span></div>
                            <div class="stat"><img src="/img/attack.png"><span id="character3_attaque">104</span></div>
                            <div class="stat"><img src="/img/defense.png"><span id="character3_defense">104</span></div>
                            <div class="stat"><img src="/img/accuracy.png"><span id="character3_precision">104</span></div>
                            <div class="stat"><img src="/img/agility.png"><span id="character3_esquive">104</span></div>
                            <div class="stat"><img src="/img/speed.png"><span id="character3_vitesse">104</span></div>
                            <div class="stat"><img src="/img/critical.png"><span id="character3_critique">104</span></div>
                        </div>
                        <div class="container_skills_card" id="character3_container_character_card">
                        </div>
                    </div>
                </div>
            </div>
            <div class="character_sheet">
                <h2>character0</h2>
            </div>
            <div class="character_sheet">
                <h2>character1</h2>
            </div>
            <div class="character_sheet">
                <h2>character2</h2>
            </div>
            <div class="character_sheet">
                <h2>character3</h2>
            </div>
        </div>
        <div id="newtournament_skilldesc">
            <h3 id="skilltitle"></h3>
            <p id="skilldescription"></p>
        </div>
        <!--<img id="character0_visuel" src="">
        <img id="character1_visuel" src="">
        <img id="character2_visuel" src="">
        <img id="character3_visuel" src="">-->
        <form method="post" id="passvar" action="/registerteams" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" id="teamJSON" name="teamJSON" value="">
            <input type="hidden" id="teamJSONennemy1" name="teamJSONennemy1" value="">
            <button type="submit">Let's go</button>
        </form>
    </div>
    <script src="{{asset('js/newtournament.js')}}"></script>
@endsection
