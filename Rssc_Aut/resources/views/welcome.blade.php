<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home Page</title>
  <link rel="stylesheet" href="{{asset('assets/home_style.css')}}">

</head>
<body>
  <section>
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
      <div class="slide" id="BG1""></div>
      <div class="slide" id="BG2"></div>
      <div class="slide" id="BG3""></div>
      <div class="slide" id="BG4""></div>
  
      <!-- Previous and Next buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  
    <!--------------------------------- SideBar Section --------------------------------->
  
     <!--------------------------------- Options Section --------------------------------->
     <div class="options-container">
      <a href="/"><div class="option">Home</div></a>
      <a href="/ALECSO_Chair"><div class="option">ALESCO Chair</div></a>
      <a href="/AboutUS"><div class="option">About Us</div></a>
      <a href="/Training"><div class="option">Services</div></a>
      <a href="/Photos"><div class="option">Gallary</div></a>
      <a href="/Events"><div class="option">Events</div></a>
      <a href="/Announcements"><div class="option">Announcements</div></a>
      <a href="/ALECSO_Chair"><div class="option">Forms</div></a>
      
      
  </div>
  <!--------------------------------- Options Section --------------------------------->
  <!--------------------------------- Cards Section --------------------------------->
   
  <section class="card_section">
  <h1 style="text-align: center; font-size: 2.5rem; color: #1B1F34;">Info</h1>
  <hr style="width: 10rem;">

  <div class="cards-container">
    @foreach ($topic as $top)
      <div class="card">
        <img src="{{ asset('storage/' . $top->image) }}" alt="Card Image">
        <h3>{{ $top->title }}</h3>
        <p>{{ $top->bio }}</p>
        <a href="/Project" class="btn">Continue Reading</a>
        <i class="fa-solid fa-arrow-right" id="font_awes" style="color: #e3e3e3;"></i>
      </div>
    @endforeach
  </div>
</section>

  <!--------------------------------- Cards Section --------------------------------->
  
  
  <!--------------------------------- Interval Section --------------------------------->
  
  <section class="Interval_cont">
  <div class="Interval_Section">
  
  </div>
  </section>
  
  <!--------------------------------- Interval Section --------------------------------->
  
  
  <!--------------------------------- Second Set of Cards --------------------------------->
  
  <section> 
  <h1 style="text-align: center; font-size: 3rem; color: #1B1F34;" >Last News</h1>
  <hr style="width: 10rem;">
  <div class="cards-container2">

    @foreach ($news as $nw)
  <div class="card2">
     <img src="{{ asset('storage/' . $nw->image) }}" alt="Card 1 Image">
     <h3>{{ $nw->title }}</h3>
     <p>{{ $nw->bio }}</p>
     <a href="/News" class="btn">Continue Reading</a>
  </div>
  @endforeach

  </div>
  </section>
  
  <!--------------------------------- Second Set of Cards --------------------------------->
  
  <hr>
  <!--------------------------------- About Section --------------------------------->
  
  <section class="About_Sec">
  
  <h1 style="text-align: center; font-size: 2.5rem; color: #1B1F34; padding-top: 2rem;" >About RSSC - Red Sea Studies Center</h1>
  
  <div class="about-section">
  <p>The Red Sea region has a rich historical, cultural and natural heritage, where the continent of Asia meets Africa along its coasts extending from the Gulf of Aqaba in the north to Bab el-Mandab strait in the south. Various civilizations and nations met throughout the ages and times in that spot. The red sea region is rich in unique natural and human resources.</p>
  <br>
  <p>Aqaba University of Technology is the first private university established in southern Jordan, and it has an ambitious vision to be distinguished, attractive and the preferred choice for students from Jordan and the region. The university is located just fifteen kilometers south of the city of Aqaba on the hills overlooking the Gulf of Aqaba and on a piece of land extending over 500 acres.</p>
  <br>
  <p>The establishment of this center comes from the mission of Aqaba University of Technology (AUT) to be a beacon of science and culture in the region. The center aims to achieve leadership and excellence, to foster innovation and entrepreneurship, and to conduct research and studies in the fields of heritage, environment, water, renewable energy, natural products and smart solutions in the red sea region.</p>
  
  <a href="/AboutUS" class="btn">Read More</a>
  
  </div>
  
  </section>
  
  <!--------------------------------- About Section --------------------------------->
  
  
  <!--------------------------------- Footer --------------------------------->
  
  <footer class="footer">
  <div class="footer-section">
    <h2>RSSC - Red Sea Studies Center</h2>
    <hr style="width: 20rem; opacity: .5;">
    <ul class="footer-links">
        <li><a href="/Innovation">Innovation & Entrepreneurship</a></li>
        <li><a href="/Project">Projects & Initiatives</a></li>
        <li><a href="/Support">Research & Technical Support</a></li>
        <li><a href="/Achievements">Achievements</a></li>
        <li><a href="/Training">Training</a></li>
        <li><a href="/Network">Networking</a></li>
        <li><a href="/Announcements">Announcements</a></li>
    </ul>
  </div>
  
  <div class="footer-section">
    <h2>Contact Us</h2>
    <hr style="width: 20rem; opacity: .5;">
    <ul class="footer-links">
        <p>RSSC - Red Sea Studies Center</p>
        <p>Telephone: +962 (0) 3 2092300</p>
        <p>Telephone: +962 (0) 3 2092310</p>
        <li><a href="#">E-Mail: nabdulhadi@aut.edu.jo</a></li>
        <p>Aqaba University of Technology</p>
        <p>South of Aqaba, South Beach road,</p>
        <p>Opposite Aqaba Development Corporation</p>
        <p>Stores,</p>
        <p>Aqaba, Jordan</p>
    </ul>
  </div>
  </footer>
  
  <!-- Second Footer -->
  <footer class="cuban-wright-footer">
  <p>Copyright © 2022 - All Rights Reserved - <a href="http://www.aut.edu.jo/en" target="_blank">Aqaba University of Technology (AUT)</a></p>
  </footer>
  <!--------------------------------- Footer --------------------------------->
  </section>
</body>

<script>
  // ---------------------nav------------------
const navbarToggle = document.querySelector("#navbar-toggle");
const navbarMenu = document.querySelector("#navbar-menu");
const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");

let isNavbarExpanded = false;

const toggleNavbarVisibility = () => {
  isNavbarExpanded = !isNavbarExpanded;
  navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
  navbarMenu.classList.toggle("navbar-menu-visible", isNavbarExpanded);
};

navbarToggle.addEventListener("click", toggleNavbarVisibility);

navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());

document.addEventListener("click", (e) => {
  // Close the menu if clicked outside of it
  if (isNavbarExpanded && e.target.closest("#navbar-menu") === null) {
    toggleNavbarVisibility();
  }
});

// Check the window width on page load and resize
const handleResize = () => {
  if (window.innerWidth > 768) {
    // Display menu if the window is larger than 768 pixels
    isNavbarExpanded = true;
  } else {
    // Hide menu if the window is 768 pixels or smaller
    isNavbarExpanded = false;
  }

  // Update the menu visibility based on the window width
  navbarMenu.classList.toggle("navbar-menu-visible", isNavbarExpanded);
};

// Initial setup on page load
window.addEventListener("load", handleResize);

// Listen for window resize events
window.addEventListener("resize", handleResize);

// ---------------------nav------------------


// ---------------------slider------------------

var slideIndex = 0;

function showSlides() {
    var slides = document.getElementsByClassName("slide");
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change slide every 2 seconds
}

showSlides(); // Call the function to start the slideshow


// ---------------------slider------------------

</script>
<script src="https://kit.fontawesome.com/abdaddd2d7.js" crossorigin="anonymous"></script>
</html>

