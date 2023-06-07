<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olago Staffing Solution</title>

  <style>
    /* Header Styles */
    header#cover {
      height: 65vh;
      position: relative;
    }

    header:before {
      height: 65vh;
      background-image: url(./images/banner3.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      position: fixed;
      width: 100%;
      left: 0;
      top: 0;
      z-index: -1;
      content: "";
    }

    /* Footer Styles */
    footer {
      background-color: #f8f9fa;
      padding: 20px;
      text-align: center;
    }

    .social-links {
      margin-bottom: 20px;
    }

    .social-links a {
      display: inline-block;
      margin: 0 10px;
      color: #000;
    }

    /* Navbar Styles */
    nav.onTransparent {
      /* Add styles for transparent navbar if needed */
    }

    #topNavBar * {
      color: white !important;
      text-shadow: 2px 2px #0000006b;
    }

    #topNavBar .dropdown-item {
      color: var(--text-color-secondary) !important;
      text-shadow: none !important;
    }

    /* Other Styles */
    .success-message {
      color: #28a745; /* Green */
      margin-top: 20px;
    }

    .error-message {
      color: #dc3545; /* Red */
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="w-100 h-100">
    <header id="cover">
      <div class="container-fluid h-100 d-flex justify-content-end align-items-end">
        <div class="w-100 py-3 pb-5 d-flex justify-content-center">
          <a href=".?page=vacancy" class="btn btn-primary px-4 btn-lg rounded-0 fs-4 fw-bold wow slideInLeft">Explore Job Vacancies</a>
        </div>
      </div>
    </header>

    <div class="flex-grow-1 bg-light mb-0">
      <section class="wow slideInRight" data-wow-delay=".5s" data-wow-duration="1.5s">
        <div class="container">
          <?php echo html_entity_decode(file_get_contents('./welcome.html')) ?>
        </div>
      </section>

      <section class="bg-dark bg-gradient text-light wow bounceInUp">
        <div class="container py-3">
          <h3 class="text-center">About Us</h3>
          <div>
            <?php echo html_entity_decode(file_get_contents('./about.html')) ?>
          </div>
        </div>
      </section>
    </div>

    <footer>
      <div class="social-links">
        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <p>&copy; 2023 OLAGO STAFFING SOLUTION. All rights reserved.</p>
    </footer>
  </div>

  <!-- Additional Scripts -->
  <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    // Navbar Transparency on Scroll
    $(document).scroll(function() {
      var topNavBar = $('#topNavBar');
      topNavBar.removeClass('bg-transaparent bg-dark');

      if ($(window).scrollTop() === 0) {
        topNavBar.addClass('bg-transaparent');
      } else {
        topNavBar.addClass('bg-dark');
      }
    });

    $(function() {
      $(document).trigger('scroll');
    });
  </script>
</body>

</html>

