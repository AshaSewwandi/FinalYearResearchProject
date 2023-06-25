@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Card Form</title>
  <style>
    .card {
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 10px;
      margin-bottom: 10px;
      background-color: #FAE8F4;
    }
  </style>
</head>
<body style="background-color:#C29BB6;">
  <form>
    <div class="card">
        @if(Session::has('user_body_shape'))
            <label for="bodyShape">Your Body Shape is <b>{{Session::get('user_body_shape')}}</b></label>
        @else
            <div class="color-name">Your body shape is Undefined</div>
        @endif
    </div>

    <div class="card">
      <label for="rank1">Most suitable Frock Styles:</label><br>
      <label for="rank1"><b>{{Session::get('frock_style_1')}}</b></label><br>
      <label for="rank1"><b>{{Session::get('frock_style_2')}}</b></label><br>
      <label for="rank1"><b>{{Session::get('frock_style_3')}}</b></label>
    </div>
    <div class="card">
        <label for="rank1">Most suitable Top Styles:</label><br>
        <label for="rank1"><b>{{Session::get('top_style_1')}}</b></label><br>
        <label for="rank1"><b>{{Session::get('top_style_2')}}</b></label><br>
        <label for="rank1"><b>{{Session::get('top_style_3')}}</b></label>
    </div>
    <div class="card">
        <label for="rank1">Most suitable Pant Styles:</label><br>
        <label for="rank1"><b>{{Session::get('pant_style_1')}}</b></label><br>
        <label for="rank1"><b>{{Session::get('pant_style_2')}}</b></label><br>
        <label for="rank1"><b>{{Session::get('pant_style_3')}}</b></label>
    </div>

    <div class="card">
      <label for="bodyShape">Your Skin Type is <b>{{Session::get('skin_type')}}</b></label>
    </div>

    <div class="card">
        <label for="outfitColors">Most matching Outfit Colors:</label><br>
        <label for="outfitColors">Tops:</label>
        <ul>
        @for ($i = 1; $i <= 7; $i++)
            @php
            $color = Session::get('top_color_'.$i);
            list($name, $hex) = explode(' - ', $color);
            @endphp
            <li style="display: flex; align-items: center;"><div style="width: 20px; height: 20px; background-color: {{$hex}}; margin-right: 5px;"></div> <b>{{$name}}</b></li>
        @endfor
        </ul>

        <label for="outfitColors">Bottom:</label>
        <ul>
        @for ($i = 1; $i <= 5; $i++)
            @php
            $color = Session::get('bottom_color_'.$i);
            list($name, $hex) = explode(' - ', $color);
            @endphp
            <li style="display: flex; align-items: center;"><div style="width: 20px; height: 20px; background-color: {{$hex}}; margin-right: 5px;"></div> <b>{{$name}}</b></li>
        @endfor
        </ul>
    </div>
  </form>
</body>
</html>
@endsection
