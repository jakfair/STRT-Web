<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>STRT</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />

    <!-- Scripts -->
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/classes/tryptique.js')}}"></script>
    <script src="{{asset('js/classes/character.js')}}"></script>
    <script src="{{asset('js/animation.js')}}"></script>

    <script type="text/javascript">
        @if($save != "[]")
            console.log("ya une save");
            teams = {!! json_encode($save->toArray()) !!};
            playerteam = JSON.parse(teams[0].JSON);
            enemyteam1 = JSON.parse(teams[1].JSON);
            sessionStorage.playercharacters = JSON.stringify(playerteam);
            sessionStorage.ennemicharacters = JSON.stringify(enemyteam1);
        @else
            console.log("ya pas de save")
        @endif
        var triptyques = {!! json_encode($triptyques->toArray()) !!};
        var skills = {!! json_encode($skills->toArray()) !!};
        var effets = {!! json_encode($effets->toArray()) !!};
        skills.forEach(function(skill){
            skill.effets = [];
            effets.forEach(function(effet){
                if(effet.idskill == skill.id){
                    skill.effets.push(effet);
                }
            });
        });
        triptyques.forEach(function(triptyque){
            triptyque.skills = [];
            skills.forEach(function(skill){
                if(skill.idtriptyque == triptyque.id){
                    triptyque.skills.push(skill);
                }
            });
        });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}?v=3" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div id="auth-card">
            @if (Auth::check())
                <div id="account_menu">{{Auth::user()->name}}</div> | <a href="/logout">Se déconnecter</a>
            @else
                <a href="/login">Se connecter</a> | <a href="/register">S'inscrire</a>
            @endif
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
