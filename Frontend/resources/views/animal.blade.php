@extends('layout.master')
@section('content')

<link rel="stylesheet" href="/css/animal.css">

<div class="content">
    <div class="profile-section">
    @foreach ($show as $display )
        <div class="profiles">
            
            <article class="profile-card">
                <div class="profile-details">
                    <p class="profile-traits">
                        Human Traits : <br />
                        <span style="font-size: 25px; color: rgba(255, 0, 0, 1)"> {{$display -> human_trait}} </span>
                        <br />
                        Animal Traits: <br />
                        <span style="font-size: 25px; color: rgba(255, 0, 0, 1)"> {{$display -> Animal_traits}} </span>
                        <br />
                        <strong style="color: rgba(0, 0, 0, 1)"> MEET IVY </strong>
                        <br />
                        <span style="font-size: 25px; color: rgba(255, 0, 0, 1)">
                            {{$display -> meet_ivy}}
                        </span>
                    </p>
                    <img loading="lazy" src="{{$display->img}}" class="profile-image" alt="Image of Ivy" />
                    <button class="adopt-button">Adopt me please</button>
                </div>
            </article>
            
        </div>
        @endforeach
    </div>        
</div>

@stop
