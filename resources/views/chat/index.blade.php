@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <chat></chat>
            </div>
            <div class="col-3">
                <users></users>
            </div>
        </div>
    </div>

@endsection

<style>

body{
     background: url("{{ asset('imgs/background.png') }}") 
}
</style>
