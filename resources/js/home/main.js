
window.$ = window.jQuery = require('jquery');
window.Popper = require('@popperjs/core');
window.bootstrap = require('bootstrap');
window.Shuffle = require('shufflejs').default;
// require('persian-date');
// require('persian-datepicker/dist/js/persian-datepicker');
require('md.bootstrappersiandatetimepicker/dist/mds.bs.datetimepicker');
require('./owl-carousel-min');
require('./owl-custom-main');



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

// Login/Signup Form ----------------------------------------------
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("logBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function(e) {
  e.preventDefault();
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


