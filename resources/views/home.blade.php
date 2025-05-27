@extends('layouts.app')

@section('title', 'Cut&Run marathon and activity tracker')

@section('content')
<section class="hero">
  <video autoplay muted loop class="hero-video">
    <source src="{{ asset('video/cutrun-home-video.mp4') }}" type="video/mp4" />
  </video>
  <div class="hero-text">
    <h1>
      <span id="rotating-text">Powering Your Race Events</span>
    </h1>
  </div>
</section>

  <section class="features">
    <div class="feature-box">
      <div class="icon-circle">
          <i class="fas fa-person-running"></i>
      </div>
      <h3>Participant management</h3>
      <p>Clear and convenient accounting of participants, events and results.</p>
    </div>

    <div class="feature-box">
      <div class="icon-circle">
        <i class="fa-solid fa-street-view"></i>
      </div>
      <h3>Live Timing</h3>
      <p>Real-time results from website or app, convenient control and tracking using a chip or smartphone.</p>
    </div>
    <div class="feature-box">
      <div class="icon-circle">
        <i class="fa-solid fa-flag-checkered"></i>
      </div>
      <h3>Involvement</h3>
      <p>Easy-to-use, mobile-friendly tools for racers, organizers and fans.</p>
    </div>
  </section>

  <section class="split-section">
    <div class="container flex-con">
      <img src="img/cutrun-app.png" alt="Race Image" class="split-image" />
      <div class="split-text">
        <h2>Track your race. <br>Own your progress.</h2>
        <p>Stay in full control during the race with the <a href="https://play.google.com/store/apps/details?id=top.toloka.runtracker" target="_blank">Cut&Run app</a>.
          Start and finish tracking with a single tap, monitor your real-time location, steps, time, and distance — all in one interface.
          After the event, access detailed insights and compare your performance across different runs. Your journey, your data, your advantage.
        </p>
        <a href="https://play.google.com/store/apps/details?id=top.toloka.runtracker" target="_blank" class="play">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Play Store" width="150">
        </a>
      </div>
    </div>
  </section>

  <section class="cta" id="demo">
    <h2>
      <span>Ready to elevate your sporting event?</span>
    </h2>
    <a href="https://forms.gle/zBqyzzU1xfvSkuYU9" target="_blank">Request a Demo</a>
  </section>

  <section class="benefits-section">
    <div class="container">
      <h2 class="benefits-title">Live tracking that gives you full control</h2>
      <div class="benefits-grid">
        <div class="benefit">
          <div class="icon-circle">
            <i class="fas fa-street-view"></i>
          </div>
          <h3>Live participant tracking</h3>
          <p>Follow every runner on the route in real-time using their app or tracker – from start to finish.</p>
        </div>
        <div class="benefit">
          <div class="icon-circle">
            <i class="fas fa-users"></i>
          </div>
          <h3>Fans stay engaged</h3>
          <p>Let supporters follow friends and family on the live map and cheer them on from anywhere.</p>
        </div>
        <div class="benefit">
          <div class="icon-circle">
            <i class="fas fa-eye"></i>
          </div>
          <h3>Organizer’s eyes</h3>
          <p>Monitor movement across the course, detect deviations, and ensure safety throughout the race.</p>
        </div>
        <div class="benefit">
          <div class="icon-circle">
            <i class="fas fa-life-ring"></i>
          </div>
          <h3>Emergency SOS</h3>
          <p>Participants can send a distress signal if they are lost or need help – right from the app or by tracker</p>
        </div>
        <div class="benefit">
          <div class="icon-circle">
            <i class="fas fa-ambulance"></i>
          </div>
          <h3>Instant response</h3>
          <p>Organizers get notified the moment a participant stops or quits, allowing rapid assistance.</p>
        </div>
        <div class="benefit">
          <div class="icon-circle">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3>Post-event analytics</h3>
          <p>Gain deep insights into behavior, routes, and times – helping you optimize future races.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="event-section">
    <div class="container">
      <h2 class="section-title">Upcoming Events</h2>
      <div class="event-cards">
        <a href="#/events/event-1" class="event-card">
          <img src="/img/events/city-marathon-thmb.jpg" alt="Event 1" />
          <h3>City Marathon 2025</h3>
          <p>Join thousands in the heart of the city for an unforgettable run.</p>
        </a>
        <a href="#/events/event-2" class="event-card">
          <img src="/img/events/trail-event-thmb.jpg" alt="Event 2" />
          <h3>Mountain Trail Challenge</h3>
          <p>Test your endurance on scenic and challenging mountain terrain.</p>
        </a>
        <a href="#/events/event-3" class="event-card">
          <img src="/img/events/beach-run-thmb.jpg" alt="Event 3" />
          <h3>Sunset Beach Run</h3>
          <p>A relaxed coastal run timed perfectly with the golden sunset.</p>
        </a>
      </div>
    </div>
  </section>

@endsection
