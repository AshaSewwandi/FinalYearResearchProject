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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body {background-color: #C29BB6;}
      h1   {color: #6B133C;}
      label{font-size: 18px;}
      .card {
        background-color: #FAE8F4;
        color: #333333;
      }
      input[type="text"], select {
        background-color: #FAE8F4;
        color: #333333;
      }
      .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #f1f1f1;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      z-index: 9999;
    }
    .popup-icon {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
    </style>
  </head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">StyleWhiz</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="name" ><b>Name:</b></label><br>
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="age"><b>Age:</b></label><br>
          <select id="age" name="age" class="form-control">
            <option value="" selected disabled>(Select an option)</option>
            <option value="range1">Age 20-25</option>
            <option value="range2">Age 25-30</option>
            <option value="range3">Age 30-35</option>
          </select>
        </div>
      </div>
    </div>
    <!-- end - row01 -->
    <br><br>
    <!-- start - row02 -->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group position-relative">
          <label for="image"><b>Upload Your Image:</b></label>
          <div class="card upload-card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="card inner-card">
                    <div class="card-body">
                      <div class="form-group text-center">
                        <input type="file" id="image1" name="image1" class="form-control-file">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-4">
                    <div class="card inner-card">
                      <div class="card-body d-flex align-items-center justify-content-center">
                        <img src="{{'images/image1.png'}}" alt="Image" class="img-fluid" style="width: 150px; height: 210px;">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card inner-card">
                      <div class="card-body">
                        <ul class="fa-ul">
                          <li style="height: 32px";> <i class="fa-li fa fa-check-square"></i> Close to camera</li>
                          <li style="height: 32px";><i class="fa-li fa fa-check-square"></i> Natural lighting</li>
                          <li style="height: 32px";><i class="fa-li fa fa-check-square"></i> No camera flash</li>
                          <li style="height: 32px";><i class="fa-li fa fa-check-square"></i> No makeup</li>
                          <li style="height: 32px";><i class="fa-li fa fa-check-square"></i> No eyewear</li>
                          <li style="height: 32px";><i class="fa-li fa fa-check-square"></i> Natural hair &amp; Natural eye</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="skin-description"><b>Skin Description:</b></label>
          <div class="card upload-card">
            <div class="card-body">
              <div class="row">
                <div class="form-group text-center">
                  <label for="image">Skin Sensitivity: <br>
                  <select id="skin-sensitivity" name="skin-sensitivity" class="form-control">
                    <option value="" selected disabled>(Select an option)</option>
                    <option value="choice1">Extremely sensitive skin  - Always burns, Never tans</option>
                    <option value="choice2">Very sensitive skin -  Burns easily, Tans minimally</option>
                    <option value="choice3">Sensitive skin - Sometimes burns, Slowly tans </option>
                    <option value="choice4">Mildly sensitive -  Burns minimally, Always tans </option>
                    <option value="choice5">Resistant skin - Rarely burns, Tans well</option>
                    <option value="choice6">Very resistant skin -  Never burns, Deeply pigmented</option>
                    <option value="choice7">Other</option>
                  </select>
                  <br>
                  <div class="form-group">
                    <label for="undertone">Undertone:

                      <div class="popup" id="popup">
                        <span class="popup-icon" onclick="closePopup()">&times;</span>
                          <h5>How to Find Your Skin's Undertone: Follow this guide</h5><br>
                          <p>
                          i. <b>Veins Test</b> | Lift your wrist to eye level and inspect the vein on the inside of your wrist:<br>
                           - blue or purple veins mean cool undertone<br>
                           - green or olive veins mean warm undertone<br><br>


                          ii. <b>White Paper Test</b> | Check the effect of white paper on the face in natural lighting and without any makeup:<br>
                          - looks pink, rose, blue or red means cool undertone<br>
                          - looks yellow, green, golden or orange means warm undertone<br><br>


                          iii. <b>Jewelry Test</b> | Compare the effect of silver and gold jewelry on the skin:<br>
                          - cool undertone is flattered by silver jewelry<br>
                          - warm undertone is brightened by golden jewelry
                        </p>
                      </div>
                      <span class="info-icon" onclick="openPopup()">&#9432;</span>
                        <script>
                          function openPopup() {
                            document.getElementById('popup').style.display = 'block';
                          }
                          function closePopup() {
                            document.getElementById('popup').style.display = 'none';
                          }
                        </script><br>


                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="undertone" id="warm-undertone" value="warm">
                      <label class="form-check-label" for="warm-undertone">
                        Warm Undertone
                      </label>
                      <div class="undertone-image">
                        <img src="{{'images/warm.png'}}" alt="Warm Undertone Image" class="img-fluid" style="width: 150px; height: 175px;">
                      </div>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="undertone" id="cool-undertone" value="cool">
                      <label class="form-check-label" for="cool-undertone">
                        Cool Undertone
                      </label>
                      <div class="undertone-image">
                        <img src="{{'images/cool.png'}}" alt="Cool Undertone Image" class="img-fluid" style="width: 150px; height: 175px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end - row02 -->
    <br><br>
    <!-- start - row03 -->
    <div class="row">
      <div class="col-md-12">
        <div class="form-group position-relative">
          <label for="image"><b>Enter Body Measurements:</b></label>
          <div class="card upload-card">
            <div class="card-body">
              <div class="row">
                <div class="row mt-1">
                  <div class="col-md-2">
                    <div class="card inner-card">
                      <div class="card-body d-flex align-items-center justify-content-center">
                        <img src="{{'images/Body_M.png'}}" alt="Image" class="img-fluid" style="width: 220px; height: 200px;">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="card upload-card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="shoulder-width">Shoulder Width:</label>
                              <div class="input-group">
                                <input type="number" id="shoulder-width" name="shoulder-width" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="bust-width">Bust Width:</label>
                              <div class="input-group">
                                <input type="number" id="bust-width" name="bust-width" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="shoulder-width">Hip Size:</label>
                              <div class="input-group">
                                <input type="number" id="shoulder-width" name="shoulder-width" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="bust-width">Height:</label>
                              <div class="input-group">
                                <input type="number" id="bust-width" name="bust-width" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <label for="image"><b>Upload Images of favourite Outfits:</b></label>
    <div class="col-md-6">
      <div class="card inner-card">
        <div class="card-body">
          <div class="form-group text-center">
            <input type="file" name="images[]" multiple accept="image/*" id="image-input" style="display: none;" />
            <div>
              <button id="upload-icon">Click to Upload Favourite Outfits </button>
            </div>
            <script>
              const uploadIcon = document.getElementById('upload-icon');
              const input = document.getElementById('image-input');

              uploadIcon.addEventListener('click', () => {
                input.click();
              });
              input.addEventListener('change', (event) => {
                const files = event.target.files;
                console.log(files.length + ' images selected');
                // Additional actions with the selected files can be performed here
              });
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
</body>
</html>
@endsection
