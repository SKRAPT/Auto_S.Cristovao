document.addEventListener('DOMContentLoaded', function() {
    var registerLink = document.querySelector('.register-link a');
    var closeLink = document.querySelector('.popup a.close');
  
    registerLink.addEventListener('click', function(event) {
      event.preventDefault();
      var popupId = this.getAttribute('href');
      document.querySelector(popupId).classList.add('active');
    });
  
    closeLink.addEventListener('click', function(event) {
      event.preventDefault();
      var popup = this.closest('.popup');
      popup.classList.remove('active');
    });
  });
  
  window.addEventListener('scroll', function() {
    var parallax = document.querySelector('.parallax');
    var scrolled = window.pageYOffset;
    parallax.style.transform = 'translateY(' + (scrolled * -0.3) + 'px)';
  });
  