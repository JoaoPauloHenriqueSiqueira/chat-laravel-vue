@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <chat></chat>
            </div>
            <div class="col-3">
                <users :asset="'oi'"></users>
            </div>
        </div>
    </div>

@endsection

<style>

body{
     background: url("{{ asset('imgs/background.png') }}") 
}


.scroll{
    scrollbar-width: thin;
    scrollbar-color: transparent;
  }

  /* Chrome, Edge, and Safari */
  .scroll::-webkit-scrollbar {
    width: 5px;
  }

  .scroll::-webkit-scrollbar-track {
    background: transparent;
  }

  .scroll::-webkit-scrollbar-thumb {
    background-color: #a3a3a3;
    border-radius: 31px;
    border: 2px none transparent;
  }

</style>
