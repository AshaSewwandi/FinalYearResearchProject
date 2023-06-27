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
      height: 280px;
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
            @if((Session::get('user_body_shape') == 'Hourglass') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'images/Scoop_sleeveless_mini_fit&flare.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Mini Fit and Flare Dress<h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Hourglass') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'images/Square_sleeveless_mini_fit&flare.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Mini Fit and Flare Dress</h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Triangle') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Scoop_sleeeveless_mini_aline.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Mini A-line Dress</h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Triangle') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Square_sleeeveless_mini_aline.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Mini A-line Dress</h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Inverted triangle') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Scoop_sleeveless_mini_fit&flare.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Mini Fit and Flare Dress</h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Inverted triangle') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Square_sleeveless_mini_fit&flare.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Mini Fit and Flare Dress</h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Rectangle') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Scoop_sleeeveless_mini_aline.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Mini A-line Dress</h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Rectangle') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Square_sleeeveless_mini_aline.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Mini A-line Dress</h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Rounded') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Scoop_sleeeveless_mini_aline.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Mini A-line Dress</h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Rounded') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredLength') == 'Mini') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Square_sleeeveless_mini_aline.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Mini A-line Dress</h6>
            <h6>Preference weight: {{Session::get('frock')}}%<h6>
            @endif
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
            @if((Session::get('user_body_shape') == 'Hourglass') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Scoop_CropTop.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Crop Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Hourglass') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Square_CropTop.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Crop Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Triangle') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Scoop_Baggy.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Baggy Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Triangle') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Square_Baggy.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Baggy Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Inverted triangle') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Scoop_FittedTop.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Fitted Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Inverted triangle') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Square_FittedTop.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Fitted Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Rectangle') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Scoop_Baggy.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Baggy Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Rectangle') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Square_Baggy.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Baggy Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Rounded') && (Session::get('PereferredNeck') == 'Scoop') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Scoop_Baggy.png'}}"  style="width: 300px; height: 300px;">
            <h6>Scoop Sleeveless Baggy Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
            @if((Session::get('user_body_shape') == 'Rounded') && (Session::get('PereferredNeck') == 'Square') && (Session::get('PereferredSleeve') == 'Sleeveless'))
            <img src="{{'outfits/Sleeveless_Square_Baggy.png'}}"  style="width: 300px; height: 300px;">
            <h6>Square Sleeveless Baggy Top</h6>
            <h6>Preference weight: {{Session::get('top')}}%<h6>
            @endif
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
            @if(Session::get('user_body_shape') == 'Rounded')
            <img src="{{'outfits/Legging.png'}}"  style="width: 300px; height: 300px;">
            <h6>Legging</h6>
            <h6>Preference weight: {{Session::get('pant')}}%<h6>
            @endif
            @if(Session::get('user_body_shape') == 'Hourglass')
            <img src="{{'outfits/Highwaist.png'}}"  style="width: 300px; height: 300px;">
            <h6>High Waist</h6>
            <h6>Preference weight: {{Session::get('pant')}}%<h6>
            @endif
            @if(Session::get('user_body_shape') == 'Rectangle')
            <img src="{{'outfits/Highwaist.png'}}"  style="width: 300px; height: 300px;">
            <h6>High Waist</h6>
            <h6>Preference weight: {{Session::get('pant')}}%<h6>
            @endif
            @if(Session::get('user_body_shape') == 'Triangle')
            <img src="{{'outfits/Wide_Leg.png'}}"  style="width: 300px; height: 300px;">
            <h6>Wide Leg</h6>
            <h6>Preference weight: {{Session::get('pant')}}%<h6>
            @endif
            @if(Session::get('user_body_shape') == 'Inverted triangle')
            <img src="{{'outfits/Wide_Leg.png'}}"  style="width: 300px; height: 400px;">
            <h6>Wide Leg</h6>
            <h6>Preference weight: {{Session::get('pant')}}%<h6>
            @endif
        </div>
      </div>
    </div>
    <div class="card card-4">
          <div class="sub-card">
            <div class="square-container">
              <div class="square-column">
                @if(Session::has('user_body_shape'))
                  <div class="color-name">Your skin type is {{Session::get('skin_type')}}</div>
                @endif
              </div>
            </div>
          </div>
          <div class="sub-card">
            <div class="square-container">
              <div class="square-column">
                @if(Session::has('user_body_shape'))
                  <div class="color-name">Your body shape is {{Session::get('user_body_shape')}}</div>
                @endif
              </div>
            </div>
          </div>
          <h4 align="center"><i>WARDROBE PATTERN COLLECTION</i></h4>
        <div class="sub-card">
          <div class="square-container">
            <div class="square-column">
              @if(Session::has('PereferredPattern'))
                <div class="color-name">{{Session::get('PereferredPattern')}}</div>
              @endif
            </div>
          </div>
        </div>
        <h4 align="center"><i>WARDROBE COLOR COLLECTION</i></h4>
          <div class="sub-card; style= width: 80%">
            <div style="display: flex; justify-content: space-between;">
              <div class="card" style="width: 50%; padding: 0px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">
                  <h6 align="center"><i><b>FOR TOPS</b></i></h6>
                      
                          <ul>
                              @for ($i = 1; $i <= 7; $i++)
                                  @php
                                  $color = Session::get('top_color_'.$i);
                                  list($name, $hex) = explode(' - ', $color);
                                  @endphp
                                  <li style="display: flex; align-items: center;"><div style="width: 25px; height: 25px; background-color: {{$hex}}; margin-right: 5px;"></div> <h6>{{$name}}</h6> </li>
                              @endfor
                          </ul>
                      
              </div>
              <div class="card" style="width: 50%; padding: 0px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">
                <h6 align="center"><i><b>FOR BOTTOMS</b></i></h6>
                    
                        <ul>
                            @for ($i = 1; $i <= 5; $i++)
                                @php
                                $color = Session::get('bottom_color_'.$i);
                                list($name, $hex) = explode(' - ', $color);
                                @endphp
                                <li style="display: flex; align-items: center;"><div style="width: 25px; height: 25px; background-color: {{$hex}}; margin-right: 5px;"></div> <h6>{{$name}}</h6> </li>
                            @endfor
                        </ul>
                    
            </div>
            </div>
          </div>
    </div>
  </div>
</body>
</html>
@endsection
