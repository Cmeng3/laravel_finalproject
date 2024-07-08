@extends('layout.master')
@section('content')

<link rel="stylesheet" href="/css/animal.css">

<main class="content">
      <section class="profile-section">
        <div class="profiles">
          <article class="profile-card">
            <div class="profile-details">
              <p class="profile-traits">
                Human Traits : <br />
                <span style="font-size: 25px; color: rgba(255, 0, 0, 1)"> Single, Reader </span>
                <br />
                Animal Traits: <br />
                <span style="font-size: 25px; color: rgba(255, 0, 0, 1)"> Cuddly, Intelligent </span>
                <br />
                <strong style="color: rgba(0, 0, 0, 1)"> MEET IVY </strong>
                <br />
                <span style="font-size: 25px; color: rgba(255, 0, 0, 1)">
                  I love curling up with a good book, just like you.
                </span>
              </p>
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e75fdb50d405a068ba7a6136d67fc37346a5b277b862222f52e4f293ce1809f6?apiKey=13e5d974267742ca9c25ec9223504ce7&" class="profile-image" alt="Image of Ivy" />
              <button class="adopt-button">Adopt me please</button>
            </div>
          </article>
          <article class="profile-card">
            <div class="profile-details">
              <p class="profile-traits">
                Human Traits : <br />
                <span style="font-size: 25px; color: rgba(255, 0, 0, 1)"> Homebody, Renter </span>
                <br />
                Animal Traits: <br />
                <span style="font-size: 25px; color: rgba(255, 0, 0, 1)"> Fun loving, Gentle </span>
                <br />
                <strong style="color: rgba(0, 0, 0, 1)">MEET CHARLIE</strong>
                <br />
                <span style="font-size: 25px; color: rgba(255, 0, 0, 1)">
                  I love playing with kids, just like you.
                </span>
              </p>
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a3e47eca440f8ed2e572981f0f0193d0920eeb68b521fbe34faa633a89856473?apiKey=13e5d974267742ca9c25ec9223504ce7&" class="profile-image" alt="Image of Charlie" />
              <button class="adopt-button">Adopt me please</button>
            </div>
          </article>
          <article class="profile-card">
            <div class="profile-details">
              <p class="profile-traits">
                Human Traits : <br />
                <span style="font-size: 25px; color: rgba(255, 0, 0, 1)"> Single, Cook </span>
                <br />
                Animal Traits: <br />
                <span style="font-size: 25px; color: rgba(255, 0, 0, 1)"> Playful, Active </span>
                <br />
                <strong style="color: rgba(0, 0, 0, 1)">MEET LUCAS</strong>
                <br />
                <span style="font-size: 25px; color: rgba(255, 0, 0, 1)">
                  I love treats and care, just like you.
                </span>
              </p>
              <img loading="lazy" src="https://th.bing.com/th?id=OIF.m7DEhE%2bR6uwNVbf685WvYg&rs=1&pid=ImgDetMain" class="profile-image" alt="Image of Lucas" />
              <button class="adopt-button1">Adopt me please</button>
            </div>
          </article>
        </div>
      </section>
    </main>
    @stop