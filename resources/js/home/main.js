
window.$ = window.jQuery = require('jquery');
window.Popper = require('@popperjs/core');
window.bootstrap = require('bootstrap');
window.Shuffle = require('shufflejs').default;
// require('persian-date');
// require('persian-datepicker/dist/js/persian-datepicker');
require('md.bootstrappersiandatetimepicker/dist/mds.bs.datetimepicker');
require('./owl-carousel-min');
require('./owl-custom-main');

// Trigger Function On Scroll ----------------------------------------

// $(allInView);
// $(window).scroll(allInView);

// function isScrolledIntoView(elem) {
//   var docViewTop = $(window).scrollTop();
//   var docViewBottom = docViewTop + $(window).height();

//   var elemTop = $(elem).offset().top;
//   var elemBottom = elemTop + $(elem).height();

//   return elemBottom <= docViewBottom && elemTop >= docViewTop;
// }

// // Numbers Count Update -------------------------------------
// const items = [...document.querySelectorAll(".number")];

// const updateCount = (el) => {
//   const value = parseInt(el.dataset.value);
//   const increment = Math.ceil(value / 1000);
//   // const increment = 1;
//   let initialValue = 0;

//   const increaseCount = setInterval(() => {
//     initialValue += increment;

//     if (initialValue > value) {
//       el.textContent = `${value.toLocaleString("ar-EG")}+`;
//       clearInterval(increaseCount);
//       return;
//     }

//     el.textContent = `${initialValue.toLocaleString("ar-EG")}+`;
//   }, 1);
//   // console.log(increaseCount);
// };
// // Trigger Numbers Function -----------------------------------------------
// let once = true;
// function allInView() {
//   if (once) {
//     if (isScrolledIntoView($("#numbers"))) {
//       items.forEach((item) => {
//         updateCount(item);
//       });
//       once = false;
//     }
//   }
// }

// Footer Items Collapse On Mobile ------------------------------
var coll = document.getElementsByClassName("collapsible-trigger");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("collapse-active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}

// Change Service Box Display On Scroll ---------------------------------------
let toggleBtn = false;
let togglerBtn = document.getElementById("navbarTogglerBtn");
togglerBtn.addEventListener('click', togglerTrigger)

function togglerTrigger() {
  this.toggleBtn=!this.toggleBtn;
}
$(document).ready(function () {
  $(window).scroll(function () {
    if(toggleBtn === false){
      if ($(window).scrollTop() > 780) {
        $(".service-icons-mobile").css({ display: "block" });
      } else {
        $(".service-icons-mobile").css({ display: "none" });
      }
    }else{
      if ($(window).scrollTop() > 850) {
        $(".service-icons-mobile").css({ display: "block" });
      } else {
        $(".service-icons-mobile").css({ display: "none" });
      }
    }

  });

  console.log('hello alireza')
});

// Projects Grid (nemoone kar) ----------------------------------------------


