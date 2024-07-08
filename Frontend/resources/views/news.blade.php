@extends('layout.master')
@section('content')

<link rel="stylesheet" href="/css/news.css">
  <div class="div">
  <div class="div-1">News & Article</div>
  
  <div class="div-2">
    <div class="div-3">
    @foreach ($display as $show)
      <div class="column">
        <div class="div-4">
          <img
            loading="lazy"
            src="{{$show->img}}"
            class="img-4"
          />
          <div class="div-5">
            <span
              style="
                font-family: Noto Sans Gujarati, -apple-system, Roboto,
                  Helvetica, sans-serif;
              "
            >
              {{ $show->title }}
            </span>
            <br />
            <span style="font-weight: 400; font-size: 20px">
              {{ $show->details}}
            </span>
          </div>
          <div class="div-6">Click for info</div>
        </div>
      
      </div>
      @endforeach
    </div>
</div>
</div>
@stop