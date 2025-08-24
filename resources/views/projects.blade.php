@extends('layouts.master')

@section('title', 'Projects | Prantor\'s Portfolio')

@section('content')
  <div class="container mt-5">
    <h1 class="jura mb-4">My Projects</h1>

    <div class="row g-4">
      <!-- Project Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Project 1">
          <div class="card-body">
            <h5 class="card-title jura">Algorithm Visualizer</h5>
            <p class="card-text">An interactive web application for visualizing common algorithms like sorting,
              pathfinding, and more.</p>
            <div class="d-flex gap-2">
              <span class="badge bg-primary">JavaScript</span>
              <span class="badge bg-success">React</span>
              <span class="badge bg-secondary">Algorithms</span>
            </div>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-sm btn-outline-dark">View Project</a>
            <a href="#" class="btn btn-sm btn-outline-secondary">Source Code</a>
          </div>
        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Project 2">
          <div class="card-body">
            <h5 class="card-title jura">Competitive Programming Tracker</h5>
            <p class="card-text">A dashboard to track progress across various competitive programming platforms.</p>
            <div class="d-flex gap-2">
              <span class="badge bg-danger">Laravel</span>
              <span class="badge bg-info">API Integration</span>
              <span class="badge bg-warning text-dark">MySQL</span>
            </div>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-sm btn-outline-dark">View Project</a>
            <a href="#" class="btn btn-sm btn-outline-secondary">Source Code</a>
          </div>
        </div>
      </div>

      <!-- Project Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Project 3">
          <div class="card-body">
            <h5 class="card-title jura">Personal Portfolio</h5>
            <p class="card-text">This website - built with Laravel, Bootstrap and modern web technologies.</p>
            <div class="d-flex gap-2">
              <span class="badge bg-danger">Laravel</span>
              <span class="badge bg-primary">Bootstrap 5</span>
              <span class="badge bg-success">Responsive Design</span>
            </div>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-sm btn-outline-dark">View Project</a>
            <a href="#" class="btn btn-sm btn-outline-secondary">Source Code</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Back button -->
    <div class="mt-5">
      <a href="{{ route('home') }}" class="btn btn-outline-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
        </svg>
        Back to Home
      </a>
    </div>
  </div>
@endsection