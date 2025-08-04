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
      menuOverlay.classList.add("active");
      burgerButton.classList.toggle("open");

      if (menuOverlay.classList.contains("fade-out-overlay")) {
        menuOverlay.classList.remove("fade-out-overlay");
        menuOverlay.classList.add("fade-in-overlay");
      } else {
        menuOverlay.classList.remove("fade-in-overlay");
        menuOverlay.classList.add("fade-out-overlay");
      }
    });
    const menuLinks = menuOverlay.querySelectorAll(".menu-links a");
    menuLinks.forEach(link => {
      link.addEventListener("click", function () {
        menuOverlay.classList.remove("fade-in-overlay");
        menuOverlay.classList.add("fade-out-overlay");

        if (burgerButton.classList.contains("open")) {
          burgerButton.classList.remove("open");
        }
      });
    });
  }
});
