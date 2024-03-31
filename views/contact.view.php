<?php
$current_page = '/contact';
require "views/partials/head.php"
?>
<?php require "views/partials/header.php" ?>

<main class="pt-10 pb-5">
  <section class="container p-lg-0">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6">
        <div class="col-lg-8 mx-auto">
          <h2 class="display-5 fw-bold">Contact Us</h2>
          <p class="lead">
            Lorem ipsum dolor, sit amet elit Quamnitm veniam dicta, quos
            nemo minima nulla ducimus officii nulla ducimus officiis! Lorem
            ipsum dolor, sit amet elit Quamnitm.
          </p>

          <form method="POST" action="/contact" id="contact-form">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <input id="fullName" name="fullName" class="form-control bg-light" placeholder="Your name" required />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="email" id="email" name="email" class="form-control bg-light" placeholder="Your email" required />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="number" id="phone" name="phone" class="form-control bg-light" placeholder="Your phone" required />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="text" id="subject" name="subject" class="form-control bg-light" placeholder="Your subject" required />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <textarea id="message" name="message" class="form-control bg-light" placeholder="Your message" rows="4" required></textarea>
                </div>
              </div>
              <div class="col-md-5">
                <div class="d-grid">
                  <button class="gradient-button" type="submit">
                    Send message
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mt-5 mt-lg-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.6488742896145!2d24.137801599999996!3d45.7782267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474c678604b4ad13%3A0xe744074070b2b902!2sGSD%20Software%20%26%20Technology!5e0!3m2!1sen!2sro!4v1706821622878!5m2!1sen!2sro" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require "views/partials/foot.php" ?>
<?php require "views/partials/footer.php" ?>