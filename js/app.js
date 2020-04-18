
window.addEventListener("load", function() {

  //Function for the Mobile Nav Icon to open the Mobile Nav Menu.
  function openNavMenu() {
    document.querySelector(".mobile-nav-icon").addEventListener("click", open);
    function open() {
      const nav = document.querySelector("#header-main-nav");
      const mobileNavIcon = document.querySelector(".header-content .mobile-nav-icon .far");

      if (nav.classList.contains("nav--show")) {
        nav.classList.remove("nav--show");
      } else {
        nav.classList.add("nav--show");
      };
    };
  };


  function checkPosition() {
    let scrollPos = 125;
    const header = document.querySelector('#header');

    let windowY = window.scrollY;
    if (windowY > scrollPos) {
      // Scrolling UP
      header.classList.add('solid-header');
    } else {
      // Scrolling DOWN
      header.classList.remove('solid-header');
    }
    scrollPos = windowY;
  }

  window.addEventListener('scroll', checkPosition);
  

  //Function to create a span with specified class(class to create font-awesome icon) and add it to the targeted list Items.
  function addClassToListItem() {
    const li = document.querySelectorAll(".mobile-location-post-card-info ul li, .location-page-post-card-excerpt ul li, .front-page-post-card-excerpt ul li, .all-apartments-page-post-card-excerpt ul li");
    li.forEach(e => {
      const span = document.createElement("span");
      span.classList.add("fas", "fa-star");
      e.prepend(span);
    });
  };

  function getyear() {
    const date = new Date();
    const year = date.getFullYear();
    document.querySelector("#fullyear").innerHTML = year;
  }

  openNavMenu();
  addClassToListItem();
  getyear()

})
