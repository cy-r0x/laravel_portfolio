@extends('layouts.master')

@section('title', 'Home | Prantor\'s Portfolio')

@section('content')
  <div class="main-content d-flex justify-content-between align-items-center">
    <div class="text-center text-md-start">
      <img src="{{ asset('assets/avatar.jpg') }}" alt="Profile Avatar" class="avatar cover" />
      <p class="jura mt-3 ms-md-2">fig: cyr0x</p>
    </div>
    <div class="text-center text-md-end parent-container">
      <p class="jura text-custom glass" id="info-btn">Info</p>
      <a href="{{ route('projects') }}" class="text-decoration-none">
        <p class="jura text-custom">Projects</p>
      </a>
      <a href="{{ route('resume') }}" class="text-decoration-none">
        <p class="jura text-custom">Resume</p>
      </a>
    </div>
  </div>
@endsection

@section('modals')
  <div id="my-modal">@include('partials.info-modal')</div>
@endsection

@section('scripts')
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const infoBtn = document.getElementById("info-btn");
      const modal = document.querySelector(".custom-modal");
      const closeBtn = document.getElementById("btn-close");

      infoBtn.addEventListener("click", function () {
        modal.classList.add("show");
      });

      closeBtn.addEventListener("click", function () {
        modal.classList.remove("show");
      });
    });
  </script>
@endsection