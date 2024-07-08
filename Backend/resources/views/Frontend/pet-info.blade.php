@extends('layout.master')
@section('content')

<link rel="stylesheet" href="/css/pet-info.css">

<div class="div">
  <div class="div-2">Pet Information</div>
  <div class="div-3">
    <div class="div-4">
      <div class="column">
        <div class="div-5">
          <div class="div-6">Dog background</div>
          <div class="div-7">
            <div class="div-8">
              <div class="column-2">
                <img
                  loading="lazy"
                  srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/a5e8214d6d8f4191131e5fb4e3e4b88d698f36d41b4dc991486cbfee5e8e3d88?apiKey=13e5d974267742ca9c25ec9223504ce7&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/a5e8214d6d8f4191131e5fb4e3e4b88d698f36d41b4dc991486cbfee5e8e3d88?apiKey=13e5d974267742ca9c25ec9223504ce7&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a5e8214d6d8f4191131e5fb4e3e4b88d698f36d41b4dc991486cbfee5e8e3d88?apiKey=13e5d974267742ca9c25ec9223504ce7&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/a5e8214d6d8f4191131e5fb4e3e4b88d698f36d41b4dc991486cbfee5e8e3d88?apiKey=13e5d974267742ca9c25ec9223504ce7&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/a5e8214d6d8f4191131e5fb4e3e4b88d698f36d41b4dc991486cbfee5e8e3d88?apiKey=13e5d974267742ca9c25ec9223504ce7&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a5e8214d6d8f4191131e5fb4e3e4b88d698f36d41b4dc991486cbfee5e8e3d88?apiKey=13e5d974267742ca9c25ec9223504ce7&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/a5e8214d6d8f4191131e5fb4e3e4b88d698f36d41b4dc991486cbfee5e8e3d88?apiKey=13e5d974267742ca9c25ec9223504ce7&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/a5e8214d6d8f4191131e5fb4e3e4b88d698f36d41b4dc991486cbfee5e8e3d88?apiKey=13e5d974267742ca9c25ec9223504ce7&"
                  class="img"
                />
              </div>
              <div class="column-3">
                <div class="div-9">
                  Name: Golden retriever
                  <br />
                  Age: 3
                  <br />
                  born: cambodia
                  <br />
                  health: good
                  <br />
                  gender: female
                  <br />
                  weight: 20kg
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column-4">
        <div class="div-10">
          <div class="div-11">Dog vaccination for Golden retrivever</div>
          <div class="div-12">
            These will include the core vaccines, which are administered in a
            series of three: at 6-, 12-, and 16 weeks old. The core vaccines
            include the
            <span style="font-weight: 700">
               DHLPP (distemper, hepatitis, leptospirosis, parvo, and
              parainfluenza).
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop