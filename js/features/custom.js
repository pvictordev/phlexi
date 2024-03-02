
//header
class CustomHeader extends HTMLElement {
    constructor() {
      super();
    }
    connectedCallback() {
      this.innerHTML = `
      <nav class="navbar navbar-expand-lg bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand logo" href="index.html">
          <img alt="Free Frontend Logo" class="img-fluid" height="" src="assets/favicon.svg">
          <h1 class="gradient-text">Phlexi</h1>
        </a> 
        <button aria-controls="navbarSupportedContent9" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed" data-bs-target="#navbarSupportedContent9" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent9" style="">
          <form class="d-flex align-items-center position-relative ms-lg-3">
            <div class="input-group align-items-center mt-3 mt-lg-0">
              <input aria-describedby="button-addon2" aria-label="Search" class="form-control" placeholder="Search" type="text"> 
              <button class="btn bg-white border" id="button-addon2" type="button">
                <svg class="bi bi-search" fill="currentColor" height="20" viewBox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path></svg>
            </button>
            </div>
          </form>
          <ul class="navbar-nav ms-auto my-2 my-lg-0">
            <li class="nav-item me-4">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="workers.html">Workers</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="market.html">Marketplace</a>
                <a class="dropdown-item" href="#">Find Work</a>
                <a class="dropdown-item" href="#">Why Phlexi</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
          `;
    }
  }
  customElements.define("custom-header", CustomHeader);
  
  //footer
class CustomFooter extends HTMLElement {
    constructor() {
      super();
    }
    connectedCallback() {
      this.innerHTML = `
      <footer class="footer-section pt-5">
      <div class="footer">
        <div class="row justify-content-between pt-4 pb-3 pb-lg-5">
          <div class="col-12 col-lg-7">
            <div class="logo">
              <img alt="Free Frontend Logo" class="img-fluid" src="./assets/favicon.svg">
              <h1 class="gradient-text">Phlexi</span>
            </div>
            <p class="mb-3"> Here you can find additional info about us, our team and our opportunities </p>
            <div class="mb-3">
              <a class="me-2" href="">
                <svg class="bi bi-pinterest text-primary" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"></path></svg>
              </a> 
              <a class="me-2" href=""><svg class="bi bi-twitter text-primary" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg>
            </a> 
            <a class="me-2" href=""><svg class="bi bi-facebook text-primary" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg></a>
            </div>
          </div>
          <div class="col-12 col-lg-2 large text-lg-end mb-4 md-lg-0 pt-1">
            <p class="mb-1"><a class="text-dark text-decoration-none" href="#home">Home</a></p>
            <p class="mb-1"><a class="text-dark text-decoration-none" href="#history">History</a></p>
            <p class="mb-1"><a class="text-dark text-decoration-none" href="#features">Features</a></p>
            <p class="mb-0"><a class="text-dark text-decoration-none" href="#testimonials">Testimonials</a></p>
          </div>
          <div class="col-12 col-lg-3 pt-1 large text-lg-end">
            <p class="mb-1">Mountain View</p>
            <p class="mb-1">California, United States</p>
            <p class="mb-1">Tel: +1 123-456-7890</p>
            <p class="mb-0"><a class="text-dark text-decoration-none" href="">hello@yourdomain.com</a></p>
          </div>
        </div>
        <div class="border-top d-lg-none"></div>
        <div class="d-lg-flex justify-content-between py-3">
          <div class="large">
            <span class="d-block d-lg-inline text-muted mb-2 mb-lg-0 me-lg-5">© 2023 FreeFrontend.dev. All rights reserved.</span> <a class="d-block d-lg-inline text-muted mb-2 mb-lg-0 me-lg-5" href="">Privacy Policy</a> <a class="d-block d-lg-inline text-muted mb-2 mb-lg-0 me-lg-5" href="">Terms of Service</a>
          </div>
          <div class="large">
            <span class="text-muted"><a class="text-muted" href="">Proudly built with Bootstrap</a></span>
          </div>
        </div>
      </div>
    </footer>
              `;
    }
  }
  customElements.define("custom-footer", CustomFooter);

  document.addEventListener("DOMContentLoaded", function() {

    
    const header = new CustomHeader();
    const footer = new CustomFooter();

    const body = document.querySelector("body");

    body.insertBefore(header, body.firstChild);

    body.appendChild(footer);

    // navbar dropdown
    var dropdownToggle = document.querySelector('.dropdown-toggle');
  
    dropdownToggle.addEventListener('click', function() {
      var dropdownMenu = this.nextElementSibling; 

      if (dropdownMenu.classList.contains('show')) {
          dropdownMenu.classList.remove('show'); 
      } else {
          dropdownMenu.classList.add('show'); 
      }
    });

});

