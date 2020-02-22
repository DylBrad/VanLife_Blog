// Hamburger Menu: https://www.youtube.com/watch?v=dIyVTjJAkLw

const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});

// jQuery For Responsive Nav Bar is in footer
  
/* FADE IN CONTENT JS */
  /* These selectors tell JS to focus on a specific class */
  const faders = document.querySelectorAll('.fade-in');
  const sliders = document.querySelectorAll('.slide-in');
  
  const appearOptions = {
      threshold: 0,           /* function will fade in when fully visible */
      rootMargin: "0px 0px -200px 0px"
  };
  
  const appearOnScroll = new IntersectionObserver
  (function(
      entries, 
      appearOnScroll
  ) {
      entries.forEach(entry => {
          if (!entry.isIntersecting) {         /* ! means 'false'.  */
              return                        /* if not intersecting, return. */
          } else {
              entry.target.classList.add("appear");
              appearOnScroll.unobserve(entry.target);  /* Tells the 'appearOnScroll' observer to stop once its completed */
          }
      });
  }, 
  appearOptions);
  
  faders.forEach(fader => {
      appearOnScroll.observe(fader);
  });
  