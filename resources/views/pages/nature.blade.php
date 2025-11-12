@extends('layouts.page')

@section('content')

<div class = "page-container">

    <h1 class="main-title">Nature Escapes: Cebu Edition</h1>
    <p class = "main-title-caption"> "Experience Cebu’s natural wonders — swim with whale sharks in Oslob, marvel at the misty Tumalog Falls, explore wildlife at Cebu Safari and Adventure Park, and wander through the vibrant blooms of Sirao Garden, the island’s “Little Amsterdam.” </p>

<h2 class="section-title">Oslob Whale Shark Watching</h2>
<p class = section-caption>Swim beside gentle giants in the clear waters of Oslob—an awe-inspiring encounter with nature’s grace.</p>
<div class="carousel-wrapper">
    <button class="scroll-btn left" aria-label="Previous">&#10094;</button>
    <div class="carousel-track" id="carousel1">
        <div class="carousel-item">
            <img src="{{ asset('images/oslob1.png') }}" alt="Oslob 1" >
            <p class="caption">Whale Sharks swimming gracefully in Oslob waters.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/oslob2.jpg') }}" alt="Oslob 2" >
            <p class="caption">Tourists reaches for the harmless whale sharks.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/oslob3.jpg') }}" alt="Oslob 3" >
            <p class="caption">Family bonds with the Whale Shark in Oslob.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/oslob4.png') }}" alt="Oslob 4" >
            <p class="caption">A majestic gentle giant in clear blue waters.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/oslob5.jpg') }}" alt="Oslob 5" >
            <p class="caption">Swimming with the harmless giant.</p>
        </div>
    </div>
    <button class="scroll-btn right" aria-label="Next">&#10095;</button>
</div>

<h2 class="section-title">Tumalog Falls</h2>
<p class = section-caption >Veiled in mist and silence, Tumalog Falls cascades like silk through the forest air.</p>
<div class="carousel-wrapper">
    <button class="scroll-btn left" aria-label="Previous">&#10094;</button>
    <div class="carousel-track" id="carousel2">
        <div class="carousel-item">
            <img src="{{ asset('images/Tumalog1.jpg') }}" alt="Tumalog 1" >
            <p class="caption">Before the mist and the falls.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Tumalog2.jpg') }}" alt="Tumalog 2" >
            <p class="caption">Tumalog whispers serenity from every angle.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Tumalog3.jpg') }}" alt="Tumalog 3" >
            <p class="caption">Sunlight turns the cascade into threads of light.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Tumalog4.jpg') }}" alt="Tumalog 4" >
            <p class="caption">Mist veils the cliffs as water falls like silk.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Tumalog5.jpg') }}" alt="Tumalog 5" >
            <p class="caption">A lone figure stands, humbled by nature’s grace.</p>
        </div>
    </div>
    <button class="scroll-btn right" aria-label="Next">&#10095;</button>
</div>

    <h2 class="section-title">Cebu Safari and Adventure Park</h2>
    <p class = section-caption>From roaring lions to lush trails, Cebu Safari offers a wild escape into nature’s heart.</p>
<div class="carousel-wrapper">
    <button class="scroll-btn left" aria-label="Previous">&#10094;</button>
    <div class="carousel-track" id="carousel3">
        <div class="carousel-item">
            <img src="{{ asset('images/Safari1.jpg') }}" alt="Safari 1" >
            <p class="caption">Buckle up—wild wonders ahead!</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Safari2.jpg') }}" alt="Safari 2" >
            <p class="caption">The white tiger—fierce, regal, unforgettable.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Safari3.jpg') }}" alt="Safari 3" >
            <p class="caption">Peaceful perches, bursts of orange.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Safari4.jpg') }}" alt="Safari 4" >
            <p class="caption">Side by side, the pride rests—watchful and steady.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Safari5.jpg') }}" alt="Safari 5" >
            <p class="caption">When stillness speaks louder than a roar.</p>
        </div>
    </div>
    <button class="scroll-btn right" aria-label="Next">&#10095;</button>
</div>

    <h2 class="section-title">Sirao Garden</h2>
    <p class = section-caption>Dubbed Cebu’s Little Amsterdam, Sirao blooms with color, charm, and mountain breeze.</p>
<div class="carousel-wrapper">
    <button class="scroll-btn left" aria-label="Previous">&#10094;</button>
    <div class="carousel-track" id="carousel4">
        <div class="carousel-item">
            <img src="{{ asset('images/Sirao1.jpg') }}" alt="Sirao 1" >
            <p class="caption">Among the celosias, I found stillness and color. ”</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Sirao2.jpg') }}" alt="Sirao 2" >
            <p class="caption">Where color meets calm.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Sirao3.jpg') }}" alt="Sirao 3" >
            <p class="caption">Petals, peace, and mountain breeze.</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Sirao4.jpg') }}" alt="Sirao 4" >
            <p class="caption">Blooming paradise in Cebu’s highlands</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Sirao5.jpg') }}" alt="Sirao 5" >
            <p class="caption">In the heart of Cebu, petals whisper stories to the wind.</p>
        </div>
    </div>
    <button class="scroll-btn right" aria-label="Next">&#10095;</button>
</div>
@endsection







