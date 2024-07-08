

@extends('layout.master')
@section('content')




<link rel="stylesheet" href="/css/pet-random.css">
<div class="div">
  <div class="div-2">Shop</div>
  <div class="div-3">
      <div class="div-4">
        @foreach ($display as $show)
        
        <div class="column">
          <div class="div-6">
            <div class="div-7">
              <div class="div-10">
                <div class="div-8">
                  <a href="/pet-info" class="div-9" >{{$show->animal_name}}</a>
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/8fa774dbc15ecd4c80935f418c97193bba11f6a64e953606ae43bce5bdd471d2?apiKey=13e5d974267742ca9c25ec9223504ce7&"
                    class="img"
                  />
                </div>
                <div class="div-12">{{$show->description}}</div>
              </div>
              <img
                loading="lazy"
                src="{{$show->img}}"
                class="img-4"
              />
              <div class="div-11">{{$show->price}}</div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
@stop