@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Form Example</title>
  @include('cdn')
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body { background-color: #C29BB6; }
    h1 { color: #6B133C;}
    .card-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .card {
      height: 550px;
      width: 600px;
      background-color: rgba(255, 255, 255, 0.2);
    }
    .card-8 {
      flex-basis: 60%;
      margin-right: 5px;
      height: 550px;
      width: 600px;
      display: flex;
    }
    .card-4 {
      flex-basis: 30%;
      height: 550px;
      width: 600px;
      display: flex;
      flex-direction: column;
    }
    .sub-card img {
      max-width: 400%;
      max-height: 400%;
      object-fit: full;
      align:center;
    }
    .favorite {
    color: red;
  }
  .h4{
    text-align: center;
    margin: auto auto;
  }
  .sub-card {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 8px;
    margin-top: 5px;
    background-color: rgba(255, 255, 255, 0.2);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    }
    .square-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .square-column {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .square {
      width: 50px;
      height: 50px;
      margin: 1px;
      border-radius: 0;
      transition: background-color 0.4s ease-in-out;
      display: flex;
      justify-content: left;
      align-items: left;
      color: #fff;
      font-weight: bold;
    }
    .color-palette {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }
    .color {
      width: 31px;
      height: 31px;
      margin: 8px;
      font-weight: bold;
    }
    .color-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 5px;
      font-weight: bold;
    }
    .state, .square-container {
      text-align: center;
      margin-top: 3px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1 class="text-center mb-4">StyleWhiz</h1>
  <div class="card-container">
    <div class="card card-8">
    <h4 align="center"><i>WARDROBE STYLE COLLECTION</i></h4>
      <div class="card-container">
        <div class="sub-card">
        <h2><i class="fa fa-heart favorite"></i></h2>
            <script>
                $(document).ready(function() {
                    $('.fa-heart').click(function() {
                    $(this).toggleClass('favorite');
                    });
                });
            </script>
            <img src="{{'images/frock1.jpeg'}}"  style="width: 300px; height: 400px;">
            <h6>V-neck Short sleeve Midi A-line Dress</h6>
        </div>
        <div class="sub-card">
        <h2><i class="fa fa-heart favorite"></i></h2>
            <script>
                $(document).ready(function() {
                    $('.fa-heart').click(function() {
                    $(this).toggleClass('favorite');
                    });
                });
            </script>
            <img src="{{'images/top1.jpeg'}}"  style="width: 300px; height: 400px;">
            <h6>Square neck Bell sleeve CropTop</h6>
        </div>
        <div class="sub-card">
        <h2><i class="fa fa-heart favorite"></i></h2>
            <script>
                $(document).ready(function() {
                    $('.fa-heart').click(function() {
                    $(this).toggleClass('favorite');
                    });
                });
            </script>
            <img src="{{'images/pants1.jpeg'}}"  style="width: 300px; height: 400px;">
            <h6>Bell Bottom</h6>
        </div>
      </div>
    </div>
    <div class="card card-4">
          <div class="sub-card">
            <div class="square-container">
              <div class="square-column">
                <div class="color-name">Your skin type is Autumn</div>
              </div>
            </div>
          </div>
          <div class="sub-card">
            <div class="square-container">
              <div class="square-column">
                @if(Session::has('user_body_shape'))
                    <div class="color-name">Your body shape is {{Session::get('user_body_shape')}}</div>
                @else
                    <div class="color-name">Your body shape is Hourglass</div>
                @endif
              </div>
            </div>
          </div>
          <h4 align="center"><i>WARDROBE PATTERN COLLECTION</i></h4>
        <div class="sub-card">
          <div class="square-container">
            <div class="square-column">
              <div class="color-name">Big Square</div>
            </div>
          </div>
        </div>
        <h4 align="center"><i>WARDROBE COLOR COLLECTION</i></h4>
          <div class="sub-card">
            <div class="color-palette">
                <div class="color-container">
                  <div class="color" style="background-color: #9E953C;"></div>
                  <div class="state">Dark greenish yellow</div>
                </div>
                <div class="color-container">
                  <div class="color" style="background-color: #20340B;"></div>
                  <div class="state">Dark olive green</div>
                </div>
                <div class="color-container">
                  <div class="color" style="background-color: #AF3318;"></div>
                  <div class="state">Deep reddish orange</div>
                </div>
                <div class="color-container">
                  <div class="color" style="background-color: #6E294C;"></div>
                  <div class="state">Dark purplish red</div>
                </div>
                <div class="color-container">
                  <div class="color" style="background-color: #610F12;"></div>
                  <div class="state">Deep reddish brown</div>
                </div>
                <div class="color-container">
                  <div class="color" style="background-color: #C38639;"></div>
                  <div class="state">Dark orange yellow</div>
                </div>
              </div>
          </div>
    </div>
  </div>
</body>
</html>
@endsection
