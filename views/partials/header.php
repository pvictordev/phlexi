<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand logo" href="index.html">
            <img alt="Free Frontend Logo" class="img-fluid" height="" src="assets/favicon.svg">
            <span class="gradient-text fw-bold fs-2">Phlexi</span>
        </a>
        <button aria-controls="navbarSupportedContent9" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed" data-bs-target="#navbarSupportedContent9" data-bs-toggle="collapse" type="button">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 12H18" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" />
                <path d="M5 17H11" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" />
                <path d="M5 7H15" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" />
            </svg>
            </span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent9" style="">
            <form class="d-flex align-items-center position-relative ms-lg-3">
                <div class="input-group align-items-center mt-3 mt-lg-0">
                    <input aria-describedby="button-addon2" aria-label="Search" class="form-control" placeholder="Search" type="text">
                    <button class="btn bg-white border" id="button-addon2" type="button">
                        <svg class="bi bi-search" fill="currentColor" height="20" viewBox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="team.html">Team</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="market.html">Marketplace</a>
                        <a class="dropdown-item" href="#">Find Work</a>
                        <a class="dropdown-item" href="#">Sign Up</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg width="24px" height="24px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <title>dark-mode</title>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Icons">
                                    <g>
                                        <rect width="48" height="48" fill="none" />
                                        <g>
                                            <path d="M14,24A10,10,0,0,0,24,34V14A10,10,0,0,0,14,24Z" fill="var(--primary-color)" />
                                            <path d="M24,2A22,22,0,1,0,46,24,21.9,21.9,0,0,0,24,2ZM6,24A18.1,18.1,0,0,1,24,6v8a10,10,0,0,1,0,20v8A18.1,18.1,0,0,1,6,24Z" fill="var(--primary-color)" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <button class="dropdown-item" id="light-theme">Light</button>
                        <button class="dropdown-item" id="dark-theme">Dark</button>
                        <!-- <button class="dropdown-item">Auto</button> !-->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>