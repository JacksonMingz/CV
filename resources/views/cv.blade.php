<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ asset('bootstrap5/js/bootstrap.js') }}" >
    <!-- {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}} -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script href="{{ asset('js.js') }}"> </script>
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
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skill">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div id="home" class="row">
        <div class="col-12">
          <div class="position-relative">  
            <img class="image" src="{{ asset('bg2.jpg') }}">
            <div class="position-absolute text-center text-light top-50 start-50 translate-middle profile">
                <img class="face" src="{{ asset('face.jpg') }}">
                <div class="name glowing-text">JACKSON</div>
                <div class="container">
                  <div class="row">
                    <div class="col-4">
                      <div id="tech" class="box text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>TECHNICIAN</span>
                      </div>
                    </div>
                    <div class="col-4">
                      <div id="designer" class="box text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>DESIGNER</span>
                      </div>
                    </div>
                    <div class="col-4">
                      <div id="illustrator" class="box text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>ILLUSTRATOR</span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-6">
                      <div id="webDeveloper" class="box text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>WEB DEVELOPER</span>
                      </div>
                    </div>
                    <div class="col-6">
                      <div id="videoEditor" class="box text-white d-flex align-items-center justify-content-center glowing-box">
                        <span>VIDEO EDITOR</span>
                      </div>
                    </div>
                  </div>
                </div>                        
            </div>
          </div>
        </div>


        <div id="about" class="col-12 pt-5">

        <div class="col-12">
          <br>
          <div class="container">
            <div class="row rows justify-content-center">
              <div class="col-md-8 offset-md-1 border shadow-lg p-3 mb-5 bg-body rounded shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="head">P E K E R J A A N</h1>
                  <div class="row rows">
                    <div class="col-md-12">
                      <h3 class="subhead">TECHNICIAN | SOFTWARE DEVELOPER</h3>
                      <h5 class="content"><b>2022 December - Sekarang</b></h5>
                      <p class="content">PT Sat Nusapersada Tbk</p>
                    </div>
                </div>
              </div>
            </div>

            <div class="row rows justify-content-center mt-5">
              <div class="col-md-8 offset-md-1 border shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="head">P E N D I D I K A N</h1>
                  <div class="row rows">
                    <div class="col-md-6">
                      <h3 class="subhead">S1 - System Information</h3>
                      <h5 class="content"><b>2022 - Sekarang</b></h5>
                      <p class="content">Universitas Internasional Batam</p>
                    </div>
                    <div class="col-md-6">
                      <h3 class="subhead">SMA - Science Major</h3>
                      <h5 class="content"><b>2019 - 2022</b></h5>
                      <p class="content">SMA Kristen Kalam Kudus Selatpanjang</p>
                    </div>
                </div>
              </div>
            </div>            

            <div class="row rows justify-content-center mt-5">
              <div class="col-md-8 offset-md-1 border shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="head">P E N G H A R G A A N</h1>
                  <div class="row rows">
                    <div class="col-md-6">
                      <h3 class="subhead">Juara 1 PKM Creativity and Innovation Program</h3>
                      <h5 class="content"><b>Universitas Internasional Batam | 2022</b></h5>
                      <p class="content">~ Berhasil menyelesaikan PKM dalam kurang lebih sebulan dengan membuat simulasi aplikasi untuk membantu pedagang kaki lima.</p>
                    </div>
                    <div class="col-md-6">
                      <h3 class="subhead">The Best Physics</h3>
                      <h5 class="content"><b>SMA Kristen Kalam Kudus Selatpanjang | 2019 - 2022</b></h5>
                      <p class="content">~ Berhasil mendapatkan nilai fisika tertinggi selama 6 Semester</p>
                    </div>
                </div>
              </div>
            </div>

            <div class="row rows justify-content-center mt-5">
              <div class="col-md-8 offset-md-1 border shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="head">O R G A N I S A S I</h1>
                  <div class="row rows">
                    <div class="col-md-12">
                      <h3 class="subhead">Vice Presidents of Student Council</h3>
                      <h5 class="content"><b>SMA Kristen Kalam Kudus Selatpanjang | 2020 - 2021</b></h5>
                      <p class="content">~ Berperan dalam mengatur jalannya kegiatan OSIS, dan mengatur anggota OSIS lainnya.</p>
                    </div>
                </div>
              </div>
            </div>





            <div id="skill" class="row rows justify-content-center" style="padding-top:10vw;">
              <div class="col-md-8 offset-md-1 border shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="head">S K I L L S</h1>
                  <div class="row rows">
                    <div class="col-md-6">
                      <h3 class="subhead">Software</h3>
                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 90%;">
                              <span class="ms-2 align-middle">
                                Ms. Office
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 90% </b>
                          </span>
                        </div>
                      </div>

                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 87%;">
                              <span class="ms-2 align-middle">
                                Photoshop
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 87% </b>
                          </span>
                        </div>
                      </div>

                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 86%;">
                              <span class="ms-2 align-middle">
                                Figma
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 86% </b>
                          </span>
                        </div>
                      </div>

                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 85%;">
                              <span class="ms-2 align-middle">
                                After Effects
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 85% </b>
                          </span>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <h3 class="subhead">Skills</h3>
                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 94%;">
                              <span class="ms-2 align-middle">
                                PHP Language
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 94% </b>
                          </span>
                        </div>
                      </div>

                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 90%;">
                              <span class="ms-2 align-middle">
                                C Language
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 90% </b>
                          </span>
                        </div>
                      </div>

                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 88%;">
                              <span class="ms-2 align-middle">
                                HTML | CSS | Js
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 88% </b>
                          </span>
                        </div>
                      </div>
                      
                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 87%;">
                              <span class="ms-2 align-middle">
                                Query
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 87% </b>
                          </span>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="row rows">
                    <div class="col-md-6">
                      <h3 class="subhead">Language</h3>
                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 96%;">
                              <span class="ms-2 align-middle">
                                Indonesia | Active
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 96% </b>
                          </span>
                        </div>
                      </div>

                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 90%;">
                              <span class="ms-2 align-middle">
                                English | Active
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 90% </b>
                          </span>
                        </div>
                      </div>

                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 90%;">
                              <span class="ms-2 align-middle">
                                Hokkien | Active
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 90% </b>
                          </span>
                        </div>
                      </div>
                      
                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad" style="width: 53%;">
                              <span class="ms-2 align-middle">
                                Mandarin | Passive
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> 53% </b>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3 class="subhead">Hobby</h3>
                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad">
                              <span class="ms-2 align-middle">
                                Digital Drawing
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> &nbsp; </b>
                          </span>
                        </div>
                      </div>

                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad">
                              <span class="ms-2 align-middle">
                                Coding
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> &nbsp; </b>
                          </span>
                        </div>
                      </div>

                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad">
                              <span class="ms-2 align-middle">
                                Solving Math
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> &nbsp; </b>
                          </span>
                        </div>
                      </div>
                      
                      <div class="row rows mb-2">
                        <div class="wrapper col-9 justify-content-center pe-0">
                          <div class="backLoad">
                            <div class="theLoad">
                              <span class="ms-2 align-middle">
                                Design
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 percent ps-0">
                          <span class="ms-2 align-middle">
                            <b> &nbsp; </b>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

          </div>
        </div>

<footer id="contact" class="text-center text-white" style="background-color: #f1f1f1; margin-top: 8vw;">
  <div class="container pt-4">
    <section class="mb-4">

      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="instagram.com/jacksonmingz"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-instagram"></i
      ></a>

      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://github.com/JacksonMingz/CV"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-github"></i
      ></a>
    </section>
  </div>

  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark">JacksonMingz</a>
  </div>
</footer>

                  </div>
              </div>
            </div>

          </div>
        </div>
      
</body>
</html>


<script>
// const rows = document.querySelectorAll('.row');

// function checkScroll() {
//   rows.forEach(row => {
//     const rowTop = row.getBoundingClientRect().top;
//     if (rowTop < window.innerHeight * 1) {
//       row.classList.add('active');
//     } else {
//       row.classList.remove('active');
//     }
//   });
// }
const rows = document.querySelectorAll('.row');

function checkScroll() {
  rows.forEach(row => {
    const rowTop = row.getBoundingClientRect().top;
    if (rowTop < window.innerHeight * 0.8) {
      row.classList.add('active');
    } else {
      row.classList.remove('active');
    }
  });
}

window.addEventListener('scroll', checkScroll);

window.onload = function() {
  const scrollPosition = localStorage.getItem('scrollPosition');
  if (scrollPosition) {
    window.scrollTo(0, scrollPosition);
    localStorage.removeItem('scrollPosition');
  }
};

window.addEventListener('beforeunload', () => {
  const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  localStorage.setItem('scrollPosition', scrollPosition);
});

function scrollToSkills() {
    const skillSection = document.getElementById("skill");
    skillSection.scrollIntoView({behavior: "smooth"});
  }
</script>
