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
    padding: 50px;
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
      width: 60px;
      height: 60px;
      margin: 25px;
      border-radius: 0;
      transition: background-color 0.4s ease-in-out;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      font-weight: bold;
    }
    .color-name {
      text-align: center;
      margin-top: 10px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <br><h1 class="text-center mb-4">StyleWhiz</h1><br>
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
        </div>
      </div>
    </div>
    <div class="card card-4">
        <h4 align="center"><i>WARDROBE COLOR COLLECTION</i></h4>
        <div class="sub-card">
        <div class="square-container">
          <div class="square-column">
            <div class="square" style="background-color: #FF6384;"></div>
            <div class="color-name">Red</div>
            <div class="square" style="background-color: #36A2EB;"></div>
            <div class="color-name">Blue</div>
            <div class="square" style="background-color: #4BC0C0;"></div>
            <div class="color-name">Teal</div>
          </div>
          <div class="square-column">
            <div class="square" style="background-color: #FF6384;"></div>
            <div class="color-name">Red</div>
            <div class="square" style="background-color: #36A2EB;"></div>
            <div class="color-name">Blue</div>
            <div class="square" style="background-color: #4BC0C0;"></div>
            <div class="color-name">Teal</div>
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
  </div>
</body>
</html>
