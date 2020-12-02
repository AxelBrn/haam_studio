document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const target2 = el.dataset.target2;
        const target3 = el.dataset.target3;
        const $target = document.getElementById(target);
        const $target2 = document.getElementById(target2);
        const $target3 = document.getElementById(target3);
        

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
        $target.classList.toggle('navbar-menu');
        $target2.classList.toggle('is-pulled-right');
        $target2.classList.toggle('level-item');
        $target3.classList.toggle('level');

      });
    });
  }

});