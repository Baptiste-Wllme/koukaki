console.log("main.js est bien chargé !");


document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll(".title-to-animate");
  console.log("Titres trouvés :", titles);


  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        console.log("voici l'entrée",entry);
        if (entry.isIntersecting) {
          entry.target.classList.add("title-visible");
          obs.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.5,
    }
  );

  titles.forEach((title) => observer.observe(title));
});

document.addEventListener("DOMContentLoaded", function () {
  const burgerButton = document.getElementById("burger-button");
  const menuOverlay = document.getElementById("menu-overlay");

  if (burgerButton && menuOverlay) {
    burgerButton.addEventListener("click", function () {
      menuOverlay.classList.toggle("active");
      burgerButton.classList.toggle("open");
    });
  }
});
