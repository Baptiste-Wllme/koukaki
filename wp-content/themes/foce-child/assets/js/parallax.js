document.addEventListener('DOMContentLoaded', function () {
  const parallaxEls = document.querySelectorAll('.js-parallax');

  if (!parallaxEls.length) return;

  function applyParallax() {
    const scrollY = window.scrollY;

    // Ignore sur mobile
    if (window.innerWidth <= 768) return;

    const offsetX = scrollY * 0.5;

    parallaxEls.forEach(el => {
      el.style.transform = `translateX(${offsetX}px)`;
    });
  }

  // Appliquer immédiatement une première fois
  applyParallax();

  // Puis à chaque scroll
  window.addEventListener('scroll', applyParallax);
});


let factor = window.innerWidth <= 768 ? 0.1 : 0.5;
const offsetX = scrollY * factor;


document.addEventListener('DOMContentLoaded', function () {
  const cloud1 = document.querySelector('.cloud1');
  const cloud2 = document.querySelector('.cloud2');
  const placeSection = document.querySelector("#place");

  let cloudsActive = false;

  function cloudscroll() {
    if(!cloudsActive) return;

    const scrollY = window.scrollY;
    const sectionTop = placeSection.offsetTop;
    const scrollOffset = scrollY - sectionTop;

    cloud1.style.transform = `translateX(-${scrollOffset * 0.85}px)`;
    cloud2.style.transform = `translateX(-${scrollOffset * 0.45}px)`;

  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          cloudsActive = true;
        } else {
          cloudsActive = false;
          cloud1.style.transform = "translateX(0)"
          cloud2.style.transform = "translateX(0)"
        }
      });
    },
  );
  
  observer.observe(placeSection);
  window.addEventListener("scroll", cloudscroll);
})