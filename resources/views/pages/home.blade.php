@extends('layouts.page')

@section('content')
  <div class="photo-album">
    <h1>My Photo Album</h1>
    <p>Welcome — explore Cebu’s beauty, one photo at a time.</p>

    <img src="{{ asset('images/cebu_image.png') }}"
         alt="Cebu"
         class="cebu-image">

    <div class="category-buttons">

      <a href="{{ route('nature') }}" class="category-btn">Nature</a>
      <a href="{{ route('heritage') }}" class="category-btn">Heritage</a>
      <a href="{{ route('delicacies') }}" class="category-btn">Delicacies</a>
      <a href="{{ route('festivals') }}" class="category-btn">Festivals</a>
      <a href="{{ route('museums') }}" class="category-btn">Museums</a>

    </div>
  </div>
@endsection
