
<header>

<!--------------------------------- Navigation Section --------------------------------->

<nav class="navbar-container container">
  <!-- Navigation Content -->
  <div class="icons_media">
      <ul>
          <li><a href="#"><img src="{{ asset('assets/img/facebook.png') }}" width="40" height="40" alt="Facebook" /></a></li>
          <li><a href="#"><img src="{{ asset('assets/img/linkedin.png') }}" width="40" height="40" alt="LinkedIn" /></a></li>
          <li class="last"><a href="#"><img src="{{ asset('assets/img/google.png') }}" width="40" height="40" alt="Google" /></a></li>
      </ul>
  </div>
  <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
  </button>
  <div id="navbar-menu" aria-labelledby="navbar-toggle">
      <ul class="navbar-links">
          <li class="navbar-item"><a class="navbar-link" href="#">Arabic</a></li>
          <li class="navbar-item"><a class="navbar-link" href="#">Contact</a></li>
      </ul>
  </div>
</nav>

<!--------------------------------- Navigation Section --------------------------------->

<hr style="width: 70%;">

<!--------------------------------- header Section --------------------------------->

<section class="main_cont">

<div class="main2">
<div class="img_cont">
<img src="{{ asset('assets/img/logo aut 2.png') }}" alt="logo">
</div>
<div class="cont2">
  <h1>RSSC</h1>
  <h2>	
    Red Sea <br>
    Studies Center</h2>
</div>
</div>  
</section>

<!--------------------------------- header Section --------------------------------->

<!--------------------------------- SideBar Section --------------------------------->

<!-- Slider Section -->
<div class="slideshow-container">
<div class="slide" style="background: linear-gradient(to right,#1B1F34 ,rgba(27 , 31 , 52 , 0.0)) ,url({{ asset('assets/img/1P7A0984.JPG') }}); background-position: center; background-size: cover;"></div>
<div class="slide" style="background: linear-gradient(to right,#1B1F34 ,rgba(27 , 31 , 52 , 0.0)) ,url({{ asset('assets/img/RedSea1.jpg') }}); background-position: center; background-size: cover;"></div>
<div class="slide" style="background: linear-gradient(to right,#1B1F34 ,rgba(27 , 31 , 52 , 0.0)) ,url({{ asset('assets/img/RedSea2.jpg') }}); background-position: center; background-size: cover;"></div>
<div class="slide" style="background: linear-gradient(to right,#1B1F34 ,rgba(27 , 31 , 52 , 0.0)) ,url({{ asset('assets/img/1P7A1000.JPG') }}); background-position: center; background-size: cover;"></div>

<!-- Previous and Next buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!--------------------------------- SideBar Section --------------------------------->

<!--------------------------------- Options Bar --------------------------------->
<div class="options-container">
<a href="/"><div class="option">Home</div></a>
<a href="/ALECSO_Chair"><div class="option">ALESCO Chair</div></a>
<div class="dropdown">
<div class="dropdown_option">About Us</div>
  <div class="dropdown-content">
      <a href="/President">President</a>
      <a href="/AboutUS">Breif</a>
      <a href="/Objectives">Objectives</a>
      <a href="/Director">Founding directoe</a>
  </div>
</div>
<div class="dropdown">
<div class="dropdown_option">Services</div>
  <div class="dropdown-content">
      <a href="/Training">Training</a>
      <a href="/Support">Support & Research</a>
      <a href="/Network">Networking</a>
  </div>
</div>
<div class="dropdown">
<div class="dropdown_option">Gallary</div>
  <div class="dropdown-content">
      <a href="/Videos">Vedios</a>
      <a href="/Photos">Photos</a>
  </div>
</div>


<a href="/Events"><div class="option">Events</div></a>
<a href="/Announcements"><div class="option">Announcements</div></a>
<a href="/Forms"><div class="option">Forms</div></a>

</div>

<!--------------------------------- Options Bar --------------------------------->

</header>