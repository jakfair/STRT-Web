@extends('layouts.app')

@section('content')
<div class="container">
    <div id="menu">
        @if($save != "[]")
            <script type="text/javascript">

            </script>
            <a class="button" href="/battle">Continuer le tournois</a>
        @endif
        <a class="button" href="/newtournament">Nouveau tournois</a>
    </div>
</div>
@endsection
