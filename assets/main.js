// ScrolBar Top
const scrollProgress = document.getElementById('scroll-progress');
const height =
  document.documentElement.scrollHeight - document.documentElement.clientHeight;

window.addEventListener('scroll', () => {
  const scrollTop =
    document.body.scrollTop || document.documentElement.scrollTop;
  scrollProgress.style.width = `${(scrollTop / height) * 100}%`;
});

// Numbers
const items = [...document.querySelectorAll('.number')];

const updateCount = (el) => {
  const value = parseInt(el.dataset.value);
  const increment = Math.ceil(value / 1000);
  // const increment = 1;
  let initialValue = 0;
  
  const increaseCount = setInterval(() => {
    initialValue += increment;
  
    
    if (initialValue > value) {
      el.textContent = `${value.toLocaleString('ar-EG')}+`;
      clearInterval(increaseCount);
      return;
    }
    
    el.textContent = `${initialValue.toLocaleString('ar-EG')}+`;
  }, 1);
  // console.log(increaseCount);
};

items.forEach((item) => {
  updateCount(item);
});


