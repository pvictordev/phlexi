//header
export class CustomHeader extends HTMLElement {
    constructor() {
      super();
    }
    connectedCallback() {
      this.innerHTML = `
      <header class="header">
      <div class="header-container">
        <nav class="header-top">
          <div class="top-left">
            <!-- burger menu -->
            <input type="checkbox" id="mobile-menu-toggle" class="mobile-menu-toggle" />
            <label for="mobile-menu-toggle" class="mobile-menu-icon">&#9776;</label>
            <a href="index.html" class="logo">
              <img src="images/favicon.svg" alt="" />
              <h1 class="gradient-text">Phlexi</h1>
            </a>
            <!-- desktop menu -->
            <div class="header-menu">
              <span>Find Worker</span>
              <span>Find Work</span>
              <span>Why Phlexi</span>
            </div>
            <!-- Mobile menu HTML added here -->
            <nav class="mobile-menu">
              <a href="" class="mobile-menu-item">Find Worker</a>
              <a href="" class="mobile-menu-item">Find Work</a>
              <a href="" class="mobile-menu-item">Why Phlexi</a>
            </nav>
          </div>

          <div class="top-right">
            <div class="header-search">
              <i class="search-icon"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  aria-hidden="true"
                  viewBox="0 0 24 24"
                  role="img"
                  width="24"
                  height="24"
                >
                  <path
                    vector-effect="non-scaling-stroke"
                    stroke="var(--gray-02)"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-miterlimit="10"
                    stroke-width="1.5"
                    d="M10.688 18.377a7.688 7.688 0 100-15.377 7.688 7.688 0 000 15.377zm5.428-2.261L21 21"
                  ></path>
                </svg>
              </i>
              <input type="text" placeholder="Search" />
            </div>
            <div class="header-buttons">
              <img class="window-search" src="images/search.svg" alt="" />
              <a>Log in</a>
              <a class="gradient-button">Sign up</a>
            </div>
          </div>
        </nav>
        
        <nav class="header-bottom">
          <ul class="nav-container">
            <li class="nav-item"><a href="about.html">About</a></li>
            <li class="nav-item"><a href="contact.html">Contact</a></li>
            <li class="nav-item"><a href="market.html">Marketplace</a></li>
          </ul>
        </nav>
      </div>
    </header>
          `;
    }
  }
  customElements.define("custom-header", CustomHeader);
  
  //footer
  export class CustomFooter extends HTMLElement {
    constructor() {
      super();
    }
    connectedCallback() {
      this.innerHTML = `
      <footer class="footer">
      <div class="footer-container">
        <div class="footer-socials">
          <div class="logo">
            <img src="images/favicon.svg" alt="" />
            <h1 class="gradient-text">Phlexi</h1>
          </div>
          <p>© 2024 Phlexi. All rights reserved</p>
          <div class="social-media">
            <a href=""
              ><img
                src="images/instagram.svg"
                style="width: 24px; height: 24px"
            /></a>
            <a href=""
              ><img src="images/facebook.svg" style="width: 24px; height: 24px"
            /></a>
            <a href=""
              ><img src="images/twitter.svg" style="width: 24px; height: 24px"
            /></a>
          </div>
        </div>
        <div class="footer-links">
          <ul>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Marketplace</a></li>
          </ul>
        </div>
        <div class="footer-newletter">
          <form class="newsletter-form" action="">
            <input type="email" placeholder="Enter your email" />
            <button>
              <img
                src="images/message.svg"
                alt=""
                style="width: 24px; height: 24px"
              />
            </button>
          </form>
        </div>
      </div>
          </footer>
              `;
    }
  }
  customElements.define("custom-footer", CustomFooter);
  