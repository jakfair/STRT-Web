@extends('layouts.app')

@section('content')
    <div class="container">
        <img id="character0_visuel" src="">
        <img id="character1_visuel" src="">
        <img id="character2_visuel" src="">
        <img id="character3_visuel" src="">
        <form method="post" id="Passvar" action="/registerteams" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" id="teamJSON" name="teamJSON" value="">
            <input type="hidden" id="teamJSONennemy1" name="teamJSONennemy1" value="">
            <button type="submit">Let's go</button>
        </form>
    </div>
    <script src="{{asset('js/newtournament.js')}}"></script>
@endsection
