<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | AeronTech</title>
  <link rel="stylesheet" href="./assest/aerontech.css">
  <link rel="shortcut icon" href="./assest/images/Aeron logo.png">
</head>
<body>

  <!-- ─── NAVIGATION ─── -->
  <header class="Navigation-header">
    <a href="index.php"><img class="logo1" src="./assest/images/Aeron logo.png" alt="AeronTech Logo" width="60"></a>
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="services.php">Services</a></li>
      <li class="active"><a href="contact.php">Contact</a></li>
      <li><a href="index.php#portfolio">Goals</a></li>
    </ul>
    <a href="contact.php" class="btn">Let's Talk Now</a>
  </header>

  <!-- ─── PAGE HERO ─── -->
  <section class="page-hero">
    <h1 class="fade-up">Get In Touch</h1>
    <p class="fade-up">Have a project in mind? We'd love to hear from you. Let's build something great together.</p>
  </section>

  <!-- ─── CONTACT SECTION ─── -->
  <section class="contact-section">
    <div class="contact-grid">
      <div class="contact-info-cards">
        <div class="contact-info-card fade-left">
          <div class="info-icon">
            <img src="./assest/images/call.png" alt="Phone">
          </div>
          <div>
            <h4>Phone</h4>
            <p><a href="tel:+2349035114545">+234 903 511 4545</a></p>
          </div>
        </div>
        <div class="contact-info-card fade-left">
          <div class="info-icon">
            <img src="./assest/images/W.png" alt="Email">
          </div>
          <div>
            <h4>Email</h4>
            <p><a href="mailto:Biodzeez@gmail.com">Biodzeez@gmail.com</a></p>
          </div>
        </div>
        <div class="contact-info-card fade-left">
          <div class="info-icon">
            <span style="font-size:24px;">📍</span>
          </div>
          <div>
            <h4>Address</h4>
            <p>88A, Itale-papa Community,<br>Oja-Odan, Ogun-State.</p>
          </div>
        </div>
        <div class="contact-info-card fade-left">
          <div class="info-icon">
            <span style="font-size:24px;">🕐</span>
          </div>
          <div>
            <h4>Working Hours</h4>
            <p>Mon - Fri: 8:00 AM - 6:00 PM<br>Sat: 9:00 AM - 2:00 PM</p>
          </div>
        </div>
      </div>

      <!-- ─── CONTACT FORM ─── -->
      <div class="contact-form fade-right">
        <div class="form-status"></div>
        <!--
          REPLACE THE FORM ACTION URL BELOW WITH YOUR FORMSPREE ENDPOINT.
          Steps:
          1. Go to https://formspree.io and sign up (free)
          2. Create a new form
          3. Copy your form ID (e.g., "https://formspree.io/f/xyzabc12")
          4. Paste it as the action URL below
        -->
        <form id="contactForm" action="https://formspree.io/f/YOUR_FORM_ID_HERE" method="POST">
          <div class="form-group">
            <label for="name">Full Name *</label>
            <input type="text" id="name" name="name" required data-error="Please enter your name">
            <span class="error-message"></span>
          </div>
          <div class="form-group">
            <label for="email">Email Address *</label>
            <input type="email" id="email" name="email" required data-error="Please enter a valid email">
            <span class="error-message"></span>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <select id="subject" name="subject">
              <option value="">Select a topic...</option>
              <option value="Web Development">Web Development</option>
              <option value="Graphic Design">Graphic Design</option>
              <option value="Digital Marketing">Digital Marketing</option>
              <option value="Brand Identity">Brand Identity</option>
              <option value="General Inquiry">General Inquiry</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" required data-error="Message must be at least 10 characters" placeholder="Tell us about your project..."></textarea>
            <span class="error-message"></span>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </section>

  <!-- ─── MAP ─── -->
  <div class="map-container fade-up">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126943.34661180722!2d3.0208605236576903!3d6.657480799999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93b2af0d3f7d%3A0x3f5c8d9c5a5f5b5f!2sOta%2C%20Ogun%20State!5e0!3m2!1sen!2sng!4v1"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      title="AeronTech Location">
    </iframe>
  </div>

  <!-- ─── SOCIAL FOOTER ─── -->
  <div class="Footer-one-medias">
    <p class="p-follow">FOLLOW US</p>
    <div class="Social-icons">
      <div><a href="https://www.facebook.com/azeez.ibrahimbiozeez.7" target="_blank" rel="noopener"><img class="media-cont" src="./assest/images/F.png" alt="Facebook"></a></div>
      <div><a href="https://youtube.com/@biozeez_tech" target="_blank" rel="noopener"><img class="media-cont" src="./assest/images/Y.png" alt="YouTube"></a></div>
      <div><a href="https://x.com/Biozeez09" target="_blank" rel="noopener"><img class="media-cont" src="./assest/images/X.png" alt="X"></a></div>
      <div><a href="tel:+2349166668701"><img class="media-cont" src="./assest/images/W.png" alt="WhatsApp"></a></div>
      <div><a href="https://www.linkedin.com/in/ibrahim-azeez-8a25512a8" target="_blank" rel="noopener"><img class="media-cont" src="./assest/images/L.png" alt="LinkedIn"></a></div>
      <div><a href="https://biozeez09.github.io/aerontech/" target="_blank" rel="noopener"><img class="media-cont" src="./assest/images/github.png" alt="GitHub"></a></div>
    </div>
  </div>

  <!-- ─── MAIN FOOTER ─── -->
  <footer class="Main-Footer">
    <div class="F-aeron">
      <h4 class="F-h4">AERON INC.</h4>
      <p>We are passionate about our work. Our developer stay ahead of the curve to provide engaging and user-friendly website designs to make your business stand out.</p>
    </div>
    <div class="F-web-links">
      <h4 class="F-h4">WEBSITE LINKS</h4>
      <div class="F-link">
        <a href="about.php"><p>About Us</p></a>
        <a href="services.php"><p>Our Services</p></a>
        <a href="#"><p>Privacy & Policy</p></a>
        <a href="#"><p>Explorer Point Program</p></a>
        <a href="#"><p>Terms & Condition</p></a>
        <a href="contact.php"><p>Contact Us</p></a>
      </div>
    </div>
    <div class="F-help-links">
      <h4 class="F-h4">GET HELP</h4>
      <div class="F-link">
        <a href="#"><p>Online Guide</p></a>
        <a href="contact.php"><p>Contact Us</p></a>
        <a href="tel:+2349035114545"><p>+2349035114545</p></a>
        <a href="mailto:Biodzeez@gmail.com"><p>Biodzeez@gmail.com</p></a>
      </div>
    </div>
    <div class="F-address">
      <h4 class="F-h4">ADDRESS</h4>
      <p>88A, Itale-papa Community,<br>Oja-Odan, Ogun-State.</p>
    </div>
  </footer>

  <div class="Developed">
    <p>All Rights Reserved &copy; 2025 Aeron Inc. Developed by <a href="mailto:Biodzeez@gmail.com"><span>Bio_tech</span></a></p>
  </div>

  <script src="./assest/script.js"></script>
</body>
</html>
