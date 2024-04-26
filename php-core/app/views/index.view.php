<?php
$current_page = '/';
require "partials/head.php";

?>
<?php require "partials/header.php" ?>

<!-- main content -->
<main class="main">
  <div class="container">
    <!-- hero section -->
    <section class="pb-5 pt-8" id="home">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1 class="display-3 fw-bold">
            You Opportunities Start With
            <span class="gradient-text">Phlexi</span>
          </h1>
          <p class="lead my-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
            feugiat erat quis pulvinar semper.
          </p>
          <button class="gradient-button" href="">Get Started</button>
        </div>
        <div class="col-lg-6">
          <img alt="Hero" class="img-fluid" src="/resources/assets/hero-img.png" />
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
          <div class="mb-3">
            <svg class="bi bi-globe-asia-australia" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
              <path d="m10.495 6.92 1.278-.619a.483.483 0 0 0 .126-.782c-.252-.244-.682-.139-.932.107-.23.226-.513.373-.816.53l-.102.054c-.338.178-.264.626.1.736a.476.476 0 0 0 .346-.027ZM7.741 9.808V9.78a.413.413 0 1 1 .783.183l-.22.443a.602.602 0 0 1-.12.167l-.193.185a.36.36 0 1 1-.5-.516l.112-.108a.453.453 0 0 0 .138-.326ZM5.672 12.5l.482.233A.386.386 0 1 0 6.32 12h-.416a.702.702 0 0 1-.419-.139l-.277-.206a.302.302 0 1 0-.298.52l.761.325Z"></path>
              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM1.612 10.867l.756-1.288a1 1 0 0 1 1.545-.225l1.074 1.005a.986.986 0 0 0 1.36-.011l.038-.037a.882.882 0 0 0 .26-.755c-.075-.548.37-1.033.92-1.099.728-.086 1.587-.324 1.728-.957.086-.386-.114-.83-.361-1.2-.207-.312 0-.8.374-.8.123 0 .24-.055.318-.15l.393-.474c.196-.237.491-.368.797-.403.554-.064 1.407-.277 1.583-.973.098-.391-.192-.634-.484-.88-.254-.212-.51-.426-.515-.741a6.998 6.998 0 0 1 3.425 7.692 1.015 1.015 0 0 0-.087-.063l-.316-.204a1 1 0 0 0-.977-.06l-.169.082a1 1 0 0 1-.741.051l-1.021-.329A1 1 0 0 0 11.205 9h-.165a1 1 0 0 0-.945.674l-.172.499a1 1 0 0 1-.404.514l-.802.518a1 1 0 0 0-.458.84v.455a1 1 0 0 0 1 1h.257a1 1 0 0 1 .542.16l.762.49a.998.998 0 0 0 .283.126 7.001 7.001 0 0 1-9.49-3.409Z"></path>
            </svg>
          </div>
          <h4>Satisfied</h4>
          <p>International clients that are satisfied</p>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
          <div class="mb-3">
            <svg class="bi bi-calendar-event" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"></path>
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
            </svg>
          </div>
          <h4>Experience</h4>
          <p>Years of expertise in website design</p>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
          <div class="mb-3">
            <svg class="bi bi-people-fill" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"></path>
            </svg>
          </div>
          <h4>Trust</h4>
          <p>Users believe our code snippets</p>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="mb-3">
            <svg class="bi bi-brightness-high-fill" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
            </svg>
          </div>
          <h4>Strategy</h4>
          <p>Great efforts to take Designing Next Level</p>
        </div>
      </div>
    </section>

    <!-- feature section -->
    <section class="py-5" id="features">
      <div class="">
        <div class="row justify-content-center text-center mb-3">
          <div class="col-lg-8 col-xl-7">
            <span class="text-secondary">Features</span>
            <h2 class="display-5 fw-bold">Our Features</h2>
            <p class="lead">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit
              Consequatur quidem eius cum voluptatum quasi delectus.
            </p>
          </div>
        </div>
        <div class="row gx-5 align-items-center">
          <div class="col-md-4 mb-5 mb-md-0">
            <img alt="" class="img-fluid rounded" src="https://static.vecteezy.com/system/resources/previews/000/683/375/original/office-work-concept-illustration-with-happy-male-office-worker-sitting-at-the-table-with-full-battery.jpg" />
          </div>
          <div class="col-md-8">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="text-secondary">
                    <svg class="bi bi-aspect-ratio" fill="#5e5e6d" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
                      <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"></path>
                    </svg>
                  </div>
                  <div class="ms-4">
                    <h5 class="fw-bold">Responsive Design</h5>
                    <p>Lorem ipsum</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="text-secondary">
                    <svg class="bi bi-emoji-wink" fill="#5e5e6d" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z"></path>
                    </svg>
                  </div>
                  <div class="ms-4">
                    <h5 class="fw-bold">Easy-To-Use</h5>
                    <p class="fw-light">Lorem ipsum</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="text-secondary">
                    <svg class="bi bi-layout-text-window-reverse" fill="#5e5e6d" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"></path>
                      <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z"></path>
                    </svg>
                  </div>
                  <div class="ms-4">
                    <h5 class="fw-bold">100+ Components</h5>
                    <p class="fw-light">Lorem ipsum</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="text-secondary">
                    <svg class="bi bi-clipboard-check" fill="#5e5e6d" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" fill-rule="evenodd"></path>
                      <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                      <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                    </svg>
                  </div>
                  <div class="ms-4">
                    <h5 class="fw-bold">Copy & Paste</h5>
                    <p class="fw-light">Lorem ipsum</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="text-secondary">
                    <svg class="bi bi-speedometer2" fill="#5e5e6d" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                      <path d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" fill-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div class="ms-4">
                    <h5 class="fw-bold">Unlimited Usage</h5>
                    <p class="fw-light">Lorem ipsum</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="text-secondary">
                    <svg class="bi bi-pencil-square" fill="#5e5e6d" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                      <path d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" fill-rule="evenodd"></path>
                    </svg>
                  </div>
                  <div class="ms-4">
                    <h5 class="fw-bold">100% Customizable</h5>
                    <p class="fw-light">Lorem ipsum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- instruction section-->
    <section class="py-5">
      <div class="">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-lg-8 col-xxl-7">
            <span class="text-secondary">Steps</span>
            <h2 class="display-5 fw-bold">How it Works</h2>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Soluta harum ipsum venenatis metus sem veniam eveniet aperiam
              suscipit.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="row">
              <div class="col-auto text-center">
                <div class="d-flex rounded-circle align-items-center justify-content-center bg-primary text-white fs-3 fw-bold border border-white border-4 me-1" style="width: 4rem; height: 4rem">
                  1
                </div>
                <div class="text-secondary fw-light mt-1">Step</div>
              </div>
              <div class="col">
                <div class="card-instruction rounded-0 py-4 px-5 mb-5">
                  <h5>Sign In</h5>
                  <p class="text-secondary mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-auto text-center">
                <div class="d-flex rounded-circle align-items-center justify-content-center bg-primary text-white fs-3 fw-bold border border-white border-4 me-1" style="width: 4rem; height: 4rem">
                  2
                </div>
                <div class="text-secondary fw-light mt-1">Step</div>
              </div>
              <div class="col">
                <div class="card-instruction rounded-0 py-4 px-5 mb-5">
                  <h5>Log In</h5>
                  <p class="text-secondary mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-auto text-center">
                <div class="d-flex rounded-circle align-items-center justify-content-center bg-primary text-white fs-3 fw-bold border border-white border-4 me-1" style="width: 4rem; height: 4rem">
                  3
                </div>
                <div class="text-secondary fw-light mt-1">Step</div>
              </div>
              <div class="col">
                <div class="card-instruction rounded-0 py-4 px-5 mb-5">
                  <h5>Find your partner</h5>
                  <p class="text-secondary mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- history section -->
    <section class="py-5" id="history">
      <div class="">
        <div class="row justify-content-center text-center mb-3 mb-md-5">
          <div class="col-lg-8 col-xxl-7">
            <span class="text-secondary">History</span>
            <h2 class="display-5 fw-bold mb-3">Our History</h2>
            <p class="lead">
              In a few short slides you will be able to see how we started.
            </p>
          </div>
        </div>
        <div class="carousel slide pointer-event" data-bs-ride="carousel" id="galleryCarouse1">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row gy-4">
                <div class="col-md-3">
                  <img alt="" class="img-fluid rounded-1" src="/resources/assets/default-img.png" />
                </div>
                <div class="col-md-3">
                  <img alt="" class="img-fluid rounded-1" src="/resources/assets/default-img.png" />
                </div>
                <div class="col-md-3">
                  <img alt="" class="img-fluid rounded-1" src="/resources/assets/default-img.png" />
                </div>
                <div class="col-md-3">
                  <img alt="" class="img-fluid rounded-1" src="/resources/assets/default-img.png" />
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row gy-4">
                <div class="col-md-3">
                  <img alt="" class="img-fluid rounded-1" src="/resources/assets/default-img.png" />
                </div>
                <div class="col-md-3">
                  <img alt="" class="img-fluid rounded-1" src="/resources/assets/default-img.png" />
                </div>
                <div class="col-md-3">
                  <img alt="" class="img-fluid rounded-1" src="/resources/assets/default-img.png" />
                </div>
                <div class="col-md-3">
                  <img alt="" class="img-fluid rounded-1" src="/resources/assets/default-img.png" />
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#galleryCarouse1" type="button">
            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#galleryCarouse1" type="button">
            <span aria-hidden="true" class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- testimonials section -->
    <section class="py-5" id="testimonials">
      <div class="">
        <div class="row justify-content-center text-center mb-2 mb-lg-4">
          <div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
            <span class="text-secondary">Raving Fans</span>
            <h2 class="display-5 fw-bold">Our Testimonials</h2>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Soluta harum ipsum venenatis metus sem veniam eveniet aperiam
              suscipit.
            </p>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-md-4 py-2 py-md-2">
            <div class="card-testimonials mb-5 mb-md-0 p-2 p-lg-5 text-center position-relative">
              <img alt="" class="rounded-circle position-absolute translate-middle top-0" height="96" src="/resources/assets/default-img.png" width="96" />
              <div class="text-primary mb-md-4 mb-2 mt-5 mt-lg-4">
                <svg class="bi bi-quote" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                </svg>
              </div>
              <p class="mb-4">
                Lorem ipsum dolor sit consectetur adipisicing sit amet
                consectetur adipisicing elit sit
              </p>
              <h6 class="mt-4 fw-bold">John Doe</h6>
              <div class="text-secondary">HR Manager</div>
            </div>
          </div>
          <div class="col-md-4 py-2 py-md-2">
            <div class="card-testimonials mb-5 mb-md-0 p-2 p-lg-5 text-center position-relative">
              <img alt="" class="rounded-circle position-absolute translate-middle top-0" height="96" src="/resources/assets/default-img.png" width="96" />
              <div class="text-primary mb-md-4 mb-2 mt-5 mt-lg-4">
                <svg class="bi bi-quote" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                </svg>
              </div>
              <p class="mb-4">
                Lorem ipsum dolor sit consectetur adipisicing sit amet
                consectetur adipisicing elit sit
              </p>
              <h6 class="mt-4 fw-bold">John Doe</h6>
              <div class="text-secondary">Graphic Designer</div>
            </div>
          </div>
          <div class="col-md-4 py-2 py-md-2">
            <div class="card-testimonials mb-5 mb-md-0 p-2 p-lg-5 text-center position-relative">
              <img alt="" class="rounded-circle position-absolute translate-middle top-0" height="96" src="/resources/assets/default-img.png" width="96" />
              <div class="text-primary mb-md-4 mb-2 mt-5 mt-lg-4">
                <svg class="bi bi-quote" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"></path>
                </svg>
              </div>
              <p class="mb-4">
                Lorem ipsum dolor sit consectetur adipisicing sit amet
                consectetur adipisicing elit sit
              </p>
              <h6 class="mt-4 fw-bold">Jow Reo</h6>
              <div class="text-secondary">Founder & CEO</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- faq section -->
    <section class="pt-5 pb-7" id="faq">
      <div class="">
        <div class="row justify-content-center text-center mb-3">
          <div class="col-lg-8 col-xl-7">
            <span class="text-secondary">F.A.Q</span>
            <h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
            <p class="lead">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit
              Consequatur quidem eius cum voluptatum quasi delectus.
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5 mb-2">
            <span class="text-secondary">Lorem ipsum dolor</span>
            <h2 class="pb-4 fw-bold">Have Any Questions?</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Consequatur quidem eius cum voluptatum quasi delectus
              assumenda culpa.
            </p>
            <button class="gradient-button btn-lg mt-3" href="#">
              Contact us
            </button>
          </div>
          <div class="col-md-7">
            <div class="accordion" id="Questions-accordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="Questions-headingOne">
                  <button aria-controls="Questions-collapseOne" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#Questions-collapseOne" data-bs-toggle="collapse" type="button">
                    <div class="text-secondary me-3">
                      <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                      </svg>
                    </div>
                    Lorem ipsum dolor sit amet adipisicing ?
                  </button>
                </h2>
                <div aria-labelledby="Questions-headingOne" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseOne">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Maxime quos voluptatum at, quibusdam blanditiis
                    saepe soluta laborum, repellendus nemo id porro dolor
                    eveniet perspiciatis veritatis doloremque aliquam nam!
                    Libero, nostrum!
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="Questions-headingTwo">
                  <button aria-controls="Questions-collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#Questions-collapseTwo" data-bs-toggle="collapse" type="button">
                    <div class="text-secondary me-3">
                      <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                      </svg>
                    </div>
                    Lorem ipsum dolor sit amet adipisicing ?
                  </button>
                </h2>
                <div aria-labelledby="Questions-headingTwo" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseTwo">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Maxime quos voluptatum at, quibusdam blanditiis
                    saepe soluta laborum, repellendus nemo id porro dolor
                    eveniet perspiciatis veritatis doloremque aliquam nam!
                    Libero, nostrum!
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="Questions-headingThree">
                  <button aria-controls="Questions-collapseThree" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#Questions-collapseThree" data-bs-toggle="collapse" type="button">
                    <div class="text-secondary me-3">
                      <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                      </svg>
                    </div>
                    Lorem ipsum dolor sit amet adipisicing ?
                  </button>
                </h2>
                <div aria-labelledby="Questions-headingThree" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseThree">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Maxime quos voluptatum at, quibusdam blanditiis
                    saepe soluta laborum, repellendus nemo id porro dolor
                    eveniet perspiciatis veritatis doloremque aliquam nam!
                    Libero, nostrum!
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="Questions-headingFour">
                  <button aria-controls="Questions-collapseFour" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#Questions-collapseFour" data-bs-toggle="collapse" type="button">
                    <div class="text-secondary me-3">
                      <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                      </svg>
                    </div>
                    Lorem ipsum dolor sit amet adipisicing ?
                  </button>
                </h2>
                <div aria-labelledby="Questions-headingFour" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseFour">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Maxime quos voluptatum at, quibusdam blanditiis
                    saepe soluta laborum, repellendus nemo id porro dolor
                    eveniet perspiciatis veritatis doloremque aliquam nam!
                    Libero, nostrum!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php require "partials/foot.php" ?>
<?php require "partials/footer.php" ?>