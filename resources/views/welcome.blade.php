<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Selamat datang di Website SDN 1 Banjar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
           <link rel="shortcut icon" href="img/sd.png">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}"> 
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
    <header class="header">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
         <div class="container">
            <a class="navbar-brand nav-item nav-link text-white" href="halaman.html"><img src="{{ asset('/img/tutwuri.png')}}" height="30px" width="30px">
            <b>SDN 1 Banjar</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link text-white" href="#">HOME</a>
                  <a class="nav-item nav-link text-white" href="#profil">PROFIL</a>
                  <a class="nav-item nav-link text-white" href="#guru">GURU</a>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="tabelsiswa1.html" id="navbarDropdown" role="button" data-toggle="dropdown">
                     SISWA
                     </a>
                     <div class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="tabelsiswa1.html">Data siswa</a>
                        <div class="dropdown-divider"></div>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#awal" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     BERITA
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="tabelguru1.html">Info kegiatan sekolah</a>
                        <div class="dropdown-divider"></div>
                     </div>
                  </li>
                  <a class="nav-item nav-link text-white" href="#hubungi">HUBUNGI KAMI</a>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header end -->
   <section id="awal1" class="awal">
      <div class="container">
      <div class="row pt-4 mb-4">
         <div class="col text-center"><br><br><br>
         </div>
      </div>
      <div class="jumbotron jumbotron-fluid">
         <div class="container text-center">
            <br><br><br>
            <img src="{{ asset('/img/sd.png')}}" width="25%" alt="sd.png">
            <h1 class="display-4">SDN 1 BANJAR</h1>
            <p class="lead text-center">
               <a href=".html" target="_blank"><b>ooo</b></a>
               <br><br>-------------------------------------------------------------------
            </p>
            </h3>
            <script>
               document.write(Date());
            </script>
         </div>
      </div>
   </section>

  <!-- section profil sekolah -->
   <section id="profil" class="profil">
      <div class="container">
      <div class="row pt-4 mb-4">
         <div class="col text-center">
            <br><br><br>
            <h2>PROFIL SEKOLAH SDN 1 BANJAR</h2>
         </div>
      </div>
      <div class="card-deck">
         <div class="card">
            <a href="sambutan.html" target="_blank"><img class="card-img-top "  src="img/sambutan.png"   alt="Card image cap"></a>
            <div class="card-body">
               <h5 class="card-title"></h5>
               <p class="card-text " href="halaman.html">SAMBUTAN KEPALA SEKOLAH</p>
            </div>
            <div class="card-footer">
               <small class="text-muted">1</small>
            </div>
         </div>
         <div class="card">
            <a href="visimisi.html" target="_blank"><img class="card-img-top" src="img/visimisi.jpg" width="300" height="260" alt="2"></a>
            <div class="card-body">
               <h5 class="card-title"></h5>
               <p class="card-text">VISI DAN MISI</p>
            </div>
            <div class="card-footer">
               <small class="text-muted">2</small>
            </div>
         </div>
         <div class="card">
            <a href="fotokegiatan.html" target="_blank"><img class="card-img-top" src="img/kegiatan1.jpg"width="300" height="260" alt="Card image cap"></a>
            <div class="card-body">
               <h5 class="card-title"></h5>
               <p class="card-text">GALERI SDN 1 BANJAR</p>
            </div>
            <div class="card-footer">
               <small class="text-muted">3</small>
            </div>
         </div>
      </div>
   </section>
   <!-- sectionguru -->
   <section id="guru" class="guru">
   <div class="container">
   <div class="row pt-4 mb-4">
      <div class="col text-center">
         <br><br><br>
         <h2>PROFIL GURU SDN 1 BANJAR</h2>
      </div>
   </div>
   <!-- Section coba tampilan guru -->
   <!-- Slideshow container -->
   <div class="slideshow-container" align="center" >
   <!-- Full-width images with number and caption text -->
   <div class="mySlides fade">
      <div class="numbertext" style="margin-left: 25px;">1 / 7</div>
      <img src="img/gurufix1.jpg" style="width:80%" >
      <div class="text" style="bottom: 100px;">Muhamad Efendi S.Kom</div>
      <a href="tabelguru1.html">
         <button class="button button1">Detail Guru</button>
   </div>
   <div class="mySlides fade">
   <div class="numbertext" style="margin-left: 25px;">2 / 7</div>
   <img src="img/gurufix2.jpg" style="width:80%">
   <div class="text" style="bottom: 100px;">Andre taulani S.Kom</div>
   <a href="tabelguru2.html"><button class="button button1">Detail Guru</button> 
   </div>
   <div class="mySlides fade">
   <div class="numbertext" style="margin-left: 25px;">3 / 7</div>
   <img src="img/gurufix3.jpg" style="width:80%">
   <div class="text" style="bottom:100px;">Entis sutisna S.Pd</div>
   <a href="tabelguru3.html"><button class="button button1">Detail Guru</button> 
   </div>
   <div class="mySlides fade">
   <div class="numbertext" style="margin-left: 25px;">4 / 7</div>
   <img src="img/gurufix4.jpg" style="width:80%">
   <div class="text" style="bottom: 100px;">nunung S.Ag</div>
   <a href="tabelguru4.html"><button class="button button1">Detail Guru</button> 
   </div>
   <div class="mySlides fade">
   <div class="numbertext" style="margin-left: 25px;">5 / 7</div>
   <img src="img/gurufix5.jpg" style="width:80%">
   <div class="text" style="bottom: 100px;">Edi supono S.Pd</div>
   <a href="tabelguru5.html"><button class="button button1">Detail Guru</button> 
   </div>
   <div class="mySlides fade">
   <div class="numbertext" style="margin-left: 25px;">6 / 7</div>
   <img src="img/gurufix6.jpg" style="width:80%">
   <div class="text" style="bottom: 100px;">deni setiawan S.Pd</div>
   <a href="tabelguru6.html"><button class="button button1">Detail Guru</button> 
   </div>
   <div class="mySlides fade">
   <div class="numbertext" style="margin-left: 25px;">7 / 7</div>
   <img src="img/gurufix7.jpg" style="width:80%">
   <div class="text" style="bottom: 100px;">aziz abdillah S.Pd</div>
   <a href="tabelguru7.html"><button class="button button1">Detail Guru</button> 
   </div>
   <div>
   <!-- Next and previous buttons -->
   <a class="prev" style="left: 20px; top: 170px;"  onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" style="right: 20px; top: 170px;"  onclick="plusSlides(1)">&#10095;</a>
   </div>
   <br>
   <!-- The dots/circles -->
   <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
   </div>
</section>
   <!-- <section hubungi kami> -->
   <section id="hubungi" class="hubungi">
   <div class="container">
   <div class="row pt-4 mb-4">
      <div class="col text-center">
         <br><br><br>
         <h2>Hubungi kami</h2>

         <div class="container">    
            <div class="jumbotron">
              <div class="row">
                  <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                      <img src="img/maps1.png" alt="stack photo" class="img">
                      <!--Google map-->
                      <h2>Denah Lokasi</h2>
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12875.651381769274!2d114.24664076709007!3d-8.194537594102362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14e6415555555%3A0x8fc4e6bcd051ad38!2sSdn%201%20Banjar!5e1!3m2!1sen!2sid!4v1600618775406!5m2!1sen!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
LOCATION</iframe>
 </div>
 
 <!--Google Maps-->
                  </div>

                  <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                      <div class="container" style="border-bottom:5px solid white; margin-top: 120px; " >
                        <h2>Kontak</h2> 
                      </div>
                        <hr>
                      <ul class="container details">
                        <li><p><span class="glyphicon glyphicon-earphone one"  style="width:50px; margin-right: -300px;"> </span>E'mail :</p></li> 
                        <li><p><span class="glyphicon glyphicon-earphone one" style="width:10px; margin-right: -175px;"></span>sdn.1banjar@yahoo.co.id</p></li>
                        <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px; margin-right: -300px;"></span>alamat :</p></li>
                        <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px; margin-right: 125px;"></span>Dusun Krajan, Banjar, Licin, Kabupaten Banyuwangi, Kode Pos 68432</p></li>
                        <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px; margin-right: -300px;"></span>Telepon :</p></li>
                        <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px; margin-right: -310px;"></span>45123</p></li>
                      </ul>
                  </div>
              </div>
            </div>
      </div>
   </div>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/jquery.min.js"></script>
   <script src="{{ asset('js/halaman.js')}}"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </body>
</html>
