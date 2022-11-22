// Navbar
const btnNavOpen = document.querySelector(".btn-nav-open");
const btnNavClose = document.querySelector(".btn-nav-close");
const navigation = document.querySelector(".nav");

btnNavOpen.addEventListener("click", () => {
  navigation.classList.toggle("is-active");
  navigation.classList.toggle("-left-72");
  navigation.classList.toggle("opacity-0");
  navigation.classList.toggle("opacity-100");
});

btnNavClose.addEventListener("click", () => {
  navigation.classList.toggle("is-active");
  navigation.classList.toggle("-left-72");
  navigation.classList.toggle("opacity-100");
});

const owlNav = document.querySelector(".owl-nav");

$(document).ready(function () {
  $(".carousel-excess").owlCarousel({
    margin: 10,
    loop: true,
    nav: true,
    dots: false,
    items: 2,
    navText: [
      '<img src="http://localhost:8080/fourcargo/themes/fourcargo/assets/image/arrow-l.png" alt="" class="prev-excess owl-prev"/>',
      '<img src="http://localhost:8080/fourcargo/themes/fourcargo/assets/image/arrow-r.png" alt=""  class="next-excess owl-next "/>',
    ],
    responsive: {
      0: {
        items: 1,
        stagePadding: 20,
      },
      700: {
        stagePadding: 20,
        items: 2,
      },
      1030: {
        items: 3,
      },
    },
  });
});

$(document).ready(function () {
  $(".carousel").owlCarousel({
    margin: 20,
    loop: true,
    nav: true,
    dots: false,
    items: 2,
    navText: [
      ' <img src="http://localhost:8080/fourcargo/themes/fourcargo/assets/image/arrow-l.png" alt="" class="prev-how owl-prev "/>',
      '<img src="http://localhost:8080/fourcargo/themes/fourcargo/assets/image/arrow-r.png" alt=""  class="next-how owl-next "/>',
    ],
    responsive: {
      0: {
        stagePadding: 30,
        items: 1,
      },

      711: {
        items: 2,
      },
    },
  });
});

$(document).ready(function () {
  $(".carousel-testi").owlCarousel({
    margin: 20,
    loop: true,
    nav: true,
    dots: false,
    items: 2,
    navText: [
      ' <img src="http://localhost:8080/fourcargo/themes/fourcargo/assets/image/arrow-l.png" alt="" class="prev-how owl-prev "/>',
      '<img src="http://localhost:8080/fourcargo/themes/fourcargo/assets/image/arrow-r.png" alt=""  class="next-how owl-next "/>',
    ],
    responsive: {
      0: {
        stagePadding: 30,
        items: 1,
      },

      800: {
        items: 2,
      },
    },
  });
});

let elements = document.querySelectorAll("[data-menu]");

for (let i = 0; i < elements.length; i++) {
  let main = elements[i];

  main.addEventListener("click", function () {
    let element = main.parentElement.parentElement;
    let andicators = main.querySelectorAll(".icon");
    let borderHr = document.querySelectorAll(".border-faq");
    let bells = document.querySelectorAll(".bells");

    let child = element.querySelector("ul");
    child.classList.toggle("hidden");
    if (child.classList[0] !== "hidden") {
      andicators[0].style.display = "block";
      andicators[0].style.marginTop = "0";
      andicators[1].style.display = "none";

      if (window.innerWidth > 664) {
        bells[i].style.display = "block";
      }
      borderHr[i].style.marginTop = "2rem";
      } else {
      andicators[0].style.display = "none";
      andicators[1].style.display = "block";
      bells[i].style.display = "none";
      borderHr[i].style.marginTop = "0.5rem";
    }
  });
}


$(document).ready(function(){
  $('.carousel-home').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
      }
  })
});

    var swiper = new Swiper(".mySwiper", {
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
