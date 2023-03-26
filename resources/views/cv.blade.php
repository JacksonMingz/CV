<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ asset('bootstrap5/js/bootstrap.js') }}" >
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>

    </style>
    <title>CV</title>
</head>
<body>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-lg-10">
          <a class="navbar-brand" href="#">Curriculum Vitae</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="position-relative">  
            <img class="image" src="{{ asset('bg2.jpg') }}">
            <div class="position-absolute text-center text-light top-50 start-50 translate-middle profile">
                <img class="face" src="{{ asset('face.jpg') }}">
                <div class="name glowing-text">JACKSON</div>
                <div class="container">
                  <div class="row">
                    <div class="col-4">
                      <div id="tech" class="box bg-dark text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>TECHNICIAN</span>
                      </div>
                    </div>
                    <div class="col-4">
                      <div id="designer" class="box bg-dark text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>DESIGNER</span>
                      </div>
                    </div>
                    <div class="col-4">
                      <div id="illustrator" class="box bg-dark text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>ILLUSTRATOR</span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-6">
                      <div id="webDeveloper" class="box bg-dark text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>WEB DEVELOPER</span>
                      </div>
                    </div>
                    <div class="col-6">
                      <div id="videoEditor" class="box bg-dark text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>VIDEO EDITOR</span>
                      </div>
                    </div>
                  </div>
                </div>                        
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10 offset-md-2">
                Test HALOOOO
              </div>
            </div>
          </div>
        </div>
      </div>
      
</body>
</html>