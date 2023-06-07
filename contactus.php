<?php include 'process-form.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: "Helvetica Neue", Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    
      .container {
      max-width: 900px;
      margin: 30px auto 0;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.8); /* Updated: Changed background color to black */
      color: #fff; /* Added: Text color for better visibility */
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      position: relative;
      z-index: 1;
    }
    
    h1 {
      font-size: 24px;
      margin: 0;
      padding-top: 20px;
      text-align: center;
      color: white;
      position: relative;
      z-index: 2;
    }
    
    #contact-form {
      margin-bottom: 20px;
    }
    
    .form-group {
      margin-bottom: 10px;
    }
    
    .success-message,
    .error-message {
      margin-top: 10px;
      text-align: center;
    }
    
    h3 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #333333;
    }
    
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    input,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    
    button {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      display: block;
      margin: 0 auto;
    }
    
    button:hover {
      background-color: #0056b3;
    }
    
    .contact-info,
    .founder-info,
    .team-info,
    .contact-details {
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid #ccc;
    }
    
    .contact-info h3,
    .founder-info h3,
    .team-info h3,
    .contact-details h3 {
      margin-top: 0;
    }
    
    .founder {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    
    .founder img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
    }
    
    .team-info ul {
      list-style-type: disc;
    }
    
    .success-message {
      color: green;
    }
    
    .error-message {
      color: red;
    }
    
    .social-links {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    
    .social-links a {
      margin: 0 10px;
      text-decoration: none;
      color: #007bff;
      transition: color 0.3s;
    }
    
    .social-links a:hover {
      color: #0056b3;
    }
    
    .footer {
      text-align: center;
      margin-top: 20px;
      color: #999;
      font-size: 12px;
    }
    
    /* Media queries */
    @media (max-width: 480px) {
      .container {
        margin: 50px auto 0;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Contact Us</h1>
    <form method="POST" class="row" id="contact-form">
      <div class="form-group col-md-12">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control" required>
      </div>
      <div class="form-group col-md-12">
        <label for="email">Email</label>
        <input name="email" id="email" class="form-control" required>
      </div>
      <div class="form-group col-md-12">
        <label for="message">Message</label>
        <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
      </div>
      <div class="col-md-12 my-2"><?php echo$alert; ?></div> 
      <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
    </form>

    <div id="response-message" class="success-message">
      <?php echo $alert; ?>
    </div>

    <div class="contact-info">
      <h3>Company Address</h3>
      <p>123 Main Street, City, Country</p>
    </div>

    <div class="team-info">
      <h3>The Team</h3>
      <p>Our experienced team has 25+ years in corporate and agency recruitment, has developed and optimized talent acquisition strategies across US, Canada, Africa, and the Middle East, and coordinated with universities and private-sector industries to assign specialized talent with resources. We are familiar with regulations pertaining to USCIS and HR regulations.</p>
      <ul>
        <li>Pauline Njunge</li>
        <li>John Mbeo</li>
        <li>Co-Founder Pauline Njunge</li>
        <li>Co-Founder Collin Mirza</li>
        <li>Recruitment Executive</li>
      </ul>
    </div>

    <div class="contact-details">
      <h3>Contact us:</h3>
      <p>Phone: 818-257-3768</p>
      <p>Email: johnmbeo@olagostaffing.com</p>
    </div>
    
    <div class="contact-details">
      <h3>Contact us:</h3>
      <p>Phone: 209-409-7789</p>
      <p>Email: paulinenjunge@olagostaffing.com</p>
    </div>

    <div class="social-links">
      <a href="#" target="_blank">Facebook</a>
      <a href="#" target="_blank">Twitter</a>
      <a href="#" target="_blank">Instagram</a>
      <a href="#" target="_blank">LinkedIn</a>
    </div>

    <div class="footer">
      <p>&copy; 2023 OLAGO STAFFING SOLUTION. All rights reserved.</p>
    </div>
  </div>

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    const responseMessage = document.getElementById('response-message');

    // Check if the success message is present on page load
    window.addEventListener('DOMContentLoaded', function() {
      if (responseMessage.textContent === 'Message sent successfully!') {
        setTimeout(function() {
          responseMessage.textContent = '';
          window.location.href = 'home.php'; // Redirect to the original page after 3 seconds
        }, 3000); // Clear the message after 3 seconds and redirect
      }
    });

    const contactForm = document.getElementById('contact-form');
    contactForm.addEventListener('submit', function(event) {
      event.preventDefault();

      // Retrieve form data
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;

      // Send form data using Axios
      axios.post('<?php echo $_SERVER['PHP_SELF']; ?>', {
        name,
        email,
        message
      })
        .then(function(response) {
          responseMessage.textContent = 'Message sent successfully!';
          responseMessage.classList.remove('error-message');
          responseMessage.classList.add('success-message');
          contactForm.reset();
          // Reload the page after successful submission
          location.reload();
        })
        .catch(function(error) {
          responseMessage.textContent = 'An error occurred. Please try again later.';
          responseMessage.classList.remove('success-message');
          responseMessage.classList.add('error-message');
        });
    });
  </script>
</body>
</html>
