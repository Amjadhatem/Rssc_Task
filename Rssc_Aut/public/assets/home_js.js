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

<script src="https://kit.fontawesome.com/abdaddd2d7.js" crossorigin="anonymous"></script>
