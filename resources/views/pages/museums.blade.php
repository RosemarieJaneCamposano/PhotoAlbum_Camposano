@extends('layouts.page')

@section('content')

<div class = "page-container">

<h1 class="main-title">Museums Beyond Heritage: <br> Cebu’s Creative Side</h1>
<p class = "main-title-caption"> "Discover Cebu’s creative side through its diverse museums, from interactive 3D art at Cebu Happy World Museum, to the expressive Paulina Constancia Museum of Naïve Art, and the modern collections at Qube Gallery. Experience culture and love at the grand Temple of Leah, where art meets architecture." </p>


<h2 class="section-title">Cebu Happy World Museum</h2>
<p class = section-caption>A 3D interactive art museum in Cordova, Cebu, featuring over 70–85 optical illusion paintings created by Korean artists.</p>
<div class="museums-wrapper">
    <button class="scroll-btn left" aria-label="Previous">&#10094;</button>
    <div class="museums-track" id="museums1">
        <div class="museums-item">
            <img src="{{ asset('images/happy1.jpg') }}" alt="Happy World 1">
            <p class="caption">Step inside paintings, become the story</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/happy2.jpg') }}" alt="Happy World 2" >
            <p class="caption">Fantasy frames crafted for interactive delight</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/happy3.jpg') }}" alt="Happy World 3" >
            <p class="caption">Art comes alive in vibrant colors</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/happy4.jpg') }}" alt="Happy World 4" >
            <p class="caption">Optical tricks transform visitors into art</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/happy5.jpg') }}" alt="Happy World 5" >
            <p class="caption">Art becomes alive through playful posing</p>
        </div>
    </div>
    <button class="scroll-btn right" aria-label="Next">&#10095;</button>
</div>

<h2 class="section-title">Paulina Constancia Museum of Naïve Art</h2>
<p class = section-caption >Located at West Gorordo Hotel, it showcases paintings, textiles, and “naïve” pieces that emphasize simplicity, honesty, and storytelling free from academic art rules.</p>
<div class="museums-wrapper">
    <button class="scroll-btn left" aria-label="Previous">&#10094;</button>
    <div class="museums-track" id="museums2">
        <div class="museums-item">
            <img src="{{ asset('images/paulina1.jpg') }}" alt="Naïve Art 1" >
            <p class="caption">Colors dance with childlike wonder and truth</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/paulina2.jpg') }}" alt="Naïve Art 2" >
            <p class="caption">Whimsical hues dance with gentle rhythm</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/paulina3.jpeg') }}" alt="Naïve Art 3" >
            <p class="caption">Naïve visions capture Cebuano everyday life</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/paulina4.jpg') }}" alt="Naïve Art 4" >
            <p class="caption">“Fishes swim like colors on canvas</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/paulina5.jpg') }}" alt="Naïve Art 5" >
            <p class="caption">Art free from rules, full of soul</p>
        </div>
    </div>
    <button class="scroll-btn right" aria-label="Next">&#10095;</button>
</div>

    <h2 class="section-title">Qube Gallery</h2>
    <p class = section-caption>A leading contemporary art gallery in Cebu City, known for curating exhibitions of Filipino and international artists.</p>
<div class="museums-wrapper">
    <button class="scroll-btn left" aria-label="Previous">&#10094;</button>
    <div class="museums-track" id="museums3">
        <div class="museums-item">
            <img src="{{ asset('images/qube1.jpg') }}" alt="Qube 1" >
            <p class="caption">Fabric and scratches echo raw creativity</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/qube2.jpg') }}" alt="Qube 2" >
            <p class="caption">Modern canvases reflect evolving identities</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/qube3.jpg') }}" alt="Qube 3" >
            <p class="caption">Gallery walls showcase daring new voices</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/qube4.jpg') }}" alt="Qube 4" >
            <p class="caption">Soft chaos reshapes body and space</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/qube5.jpg') }}" alt="Qube 5" >
            <p class="caption">Art dances between whimsy and depth</p>
        </div>
    </div>
    <button class="scroll-btn right" aria-label="Next">&#10095;</button>
</div>

    <h2 class="section-title"> Temple of Leah</h2>
    <p class = section-caption>Built in 2012 by Teodorico Soriano Adarna as a tribute to his wife Leah, this grand structure is often called the “Taj Mahal of Cebu.</p>
<div class="museums-wrapper">
    <button class="scroll-btn left" aria-label="Previous">&#10094;</button>
    <div class="museums-track" id="museums4">
        <div class="museums-item">
            <img src="{{ asset('images/temple1.jpg') }}" alt="Temple of Leah 1" >
            <p class="caption">Roman‑inspired sculptures celebrate eternal affection ”</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/temple2.jpg') }}" alt="Temple of Leah 2" >
            <p class="caption">Bronze monument honors enduring marital love</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/temple3.jpg') }}" alt="Temple of Leah 3" >
            <p class="caption">Greek columns frame Cebu’s grand tribute</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/temple4.jpg') }}" alt="Temple of Leah 4" >
            <p class="caption">Marble halls echo grandeur and memory</p>
        </div>
        <div class="museums-item">
            <img src="{{ asset('images/temple5.jpg') }}" alt="Temple of Leah 5" >
            <p class="caption">Trumpet and wings echo Leah’s legacy</p>
        </div>
    </div>
    <button class="scroll-btn right" aria-label="Next">&#10095;</button>
</div>
@endsection







