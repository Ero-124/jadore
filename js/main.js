// Header Menu Navigation
const toggle = document.getElementById("toggle");
const sidebar = document.getElementById("sidebar");
const body = document.getElementById("body")
document.onclick = function (e) {
	if (e.target.id !== "toggle" & e.target.id !== "sidebar") {
		toggle.classList.remove("active");
		sidebar.classList.remove("active");
		body.classList.remove("lock")
	}

	toggle.onclick = function () {
		toggle.classList.toggle("active");
		sidebar.classList.toggle("active");
		body.classList.toggle("lock")
	};
};


// Фон при скролле изменяться
let lastScrollTop = 0;
let header = document.getElementById('header');

window.addEventListener("scroll", function() {
	 let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	 if (scrollTop > lastScrollTop) {
		 header.style.background="linear-gradient(to right, #13334f 26%,#173853 34%,#173853 38%,#11253b 88%)"
	 } else {
		header.style.background="transparent"
	 }
});


// Загрузчик
let loader = document.getElementById("preloader");

window.addEventListener("load", function() {
	loader.style.display = "none";
});

// LightGallery JS
lightGallery(document.querySelector(".works__gallery-items"));

// Owl Carousel JS

$(".workers__carousel").owlCarousel( {
	items: 3,
	loop: true,
	nav: true,
	margin: 20,
	responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: false
      }
    }
});




AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: 'phone', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 55, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 800, // values from 0 to 3000, with step 50ms
  easing: 'ease-in-out', // default easing for AOS animations
  once: true, // whether animation should happen only once - while scrolling down
  mirror: true, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-center', // defines which position of the element regarding to window should trigger the animation
});





mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
};
