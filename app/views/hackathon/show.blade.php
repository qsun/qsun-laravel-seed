@extends('layouts.master')

@section('title')
  {{ $hackathon->title }}
@stop

@section('content')

  <div class="container">
    <div class="row meta">
      <div class="col-md-10">
        <h1>{{ $hackathon->title }}</h1>
        <div class="information">
          <div class="item">
            <div class="name">Location: </div>
            <div class="value">{{{ $hackathon->location }}}</div>
          </div>
          <div class="item">
            <div class="name">Category: </div>
            <div class="value"><a href="#">Programming Competition</a></div>
          </div>
        </div>
      </div>

      <div class="col-md-2">
        # QR CODE HERE
      </div>
    </div><!-- row meta -->

    <div class="row">
      <div class="col-md-6 timeline">
        <div class="section">
          <h2>Timeline</h2>

          Coming soon

        </div>
      </div>
      <div class="col-md-6 description">
        <div class="section">
          <h2>Description</h2>

          {{ $hackathon->HTMLizedDescription }}
        </div>

        <div class="section">
          <h2>Judgement</h2>

          <!--  some random people here -->
        </div>

        <div class="section">
          <h2>Information</h2>
          <div class="information">
            <div class="item">
              <div class="name">Location</div>
              <div class="value">{{ $hackathon->location }}</div>
            </div>
            <div class="item">
              <div class="name">Availability</div>
              <div class="value">{{ $hackathon->availability }}</div>
            </div>
            <div class="item">
              <div class="name">Website</div>
              <div class="value">{{ $hackathon->website }}</div>
            </div>
            <div class="item">
              <div class="name">Contact</div>
              <div class="value">{{ $hackathon->contact }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--  container -->

@stop
