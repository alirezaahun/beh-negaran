// Persian Date ------------------------------------------------
$(document).ready(function () {
  const datepickerDOM = $("#persianDatapicker");
  const dateObject = datepickerDOM.persianDatepicker({
    inline: false,
    format: "LLLL",
    viewMode: "day",
    initialValue: true,
    minDate: false,
    maxDate: false,
    autoClose: false,
    position: "auto",
    altFormat: "lll",
    altField: "#altfieldExample",
    onlyTimePicker: false,
    onlySelectOnDate: false,
    calendarType: "persian",
    inputDelay: 800,
    observer: false,
    calendar: {
      persian: {
        locale: "fa",
        showHint: true,
        leapYearMode: "algorithmic",
      },
      gregorian: {
        locale: "en",
        showHint: true,
      },
    },
    navigator: {
      enabled: true,
      scroll: {
        enabled: true,
      },
      text: {
        btnNextText: "<",
        btnPrevText: ">",
      },
    },
    toolbox: {
      enabled: true,
      calendarSwitch: {
        enabled: true,
        format: "MMMM",
      },
      todayButton: {
        enabled: true,
        text: {
          fa: "امروز",
          en: "Today",
        },
      },
      submitButton: {
        enabled: true,
        text: {
          fa: "تایید",
          en: "Submit",
        },
      },
      text: {
        btnToday: "امروز",
      },
    },
    timePicker: {
      enabled: false,
      step: 1,
      hour: {
        enabled: false,
        step: null,
      },
      minute: {
        enabled: false,
        step: null,
      },
      second: {
        enabled: false,
        step: null,
      },
      meridian: {
        enabled: false,
      },
    },
    dayPicker: {
      enabled: true,
      titleFormat: "YYYY MMMM",
    },
    monthPicker: {
      enabled: true,
      titleFormat: "YYYY",
    },
    yearPicker: {
      enabled: true,
      titleFormat: "YYYY",
    },
    responsive: true,
    onSelect: function () {
      alert(
        `تاریخ انتخاب شده : ${date.year}/${date.month}/${date.date} ~ ${date.hour}:${date.minute}:${date.second}`
      );
    },
  });

  const date = dateObject.getState().view;
});

// Trigger Function On Scroll ----------------------------------------

$(allInView);
$(window).scroll(allInView);

function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  return elemBottom <= docViewBottom && elemTop >= docViewTop;
}

// Numbers Count Update -------------------------------------
const items = [...document.querySelectorAll(".number")];

const updateCount = (el) => {
  const value = parseInt(el.dataset.value);
  const increment = Math.ceil(value / 1000);
  // const increment = 1;
  let initialValue = 0;

  const increaseCount = setInterval(() => {
    initialValue += increment;

    if (initialValue > value) {
      el.textContent = `${value.toLocaleString("ar-EG")}+`;
      clearInterval(increaseCount);
      return;
    }

    el.textContent = `${initialValue.toLocaleString("ar-EG")}+`;
  }, 1);
  // console.log(increaseCount);
};
// Trigger Numbers Function -----------------------------------------------
let once = true;
function allInView() {
  if (once) {
    if (isScrolledIntoView($("#numbers"))) {
      items.forEach((item) => {
        updateCount(item);
      });
      once = false;
    }
  }
}

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
$(document).ready(function () {
  $(window).scroll(function () {
    if(toggleBtn == false){
      if ($(window).scrollTop() > 1100) {
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
});

let toggleBtn = false;
let togglerBtn = document.getElementById("navbarTogglerBtn");
togglerBtn.addEventListener('click', togglerTrigger)

function togglerTrigger() {
  this.toggleBtn=!this.toggleBtn;
}

