<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reviews | AeronTech</title>
  <link rel="stylesheet" href="assest/aerontech.css">
  <link rel="shortcut icon" href="assest/images/Aeron logo.png">
  <style>
    .review-page {
      max-width: 800px;
      margin: 100px auto 40px;
      padding: 0 24px;
    }

    .review-page .section-title {
      margin-bottom: 2rem;
    }

    .review-card {
      display: flex;
      gap: 16px;
      padding: 24px;
      background: var(--white);
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow);
      margin-bottom: 20px;
      transition: transform var(--transition), box-shadow var(--transition);
    }

    .review-card:hover {
      transform: translateX(6px);
      box-shadow: var(--shadow-hover);
    }

    .review-card .review-avatar {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      object-fit: cover;
      flex-shrink: 0;
    }

    .review-card .review-content {
      flex: 1;
    }

    .review-card .review-name {
      font-family: var(--font-heading);
      font-size: 16px;
      font-weight: 600;
      color: var(--primary-blue);
    }

    .review-card .review-date {
      font-size: 12px;
      color: #999;
    }

    .review-card .review-stars {
      width: 80px;
      margin: 4px 0;
    }

    .review-card .review-text {
      font-size: 14px;
      color: #555;
      line-height: 1.6;
    }

    .review-card .review-actions {
      display: flex;
      gap: 12px;
      margin-top: 8px;
    }

    .review-card .review-actions button {
      background: none;
      border: none;
      font-size: 14px;
      color: var(--lighter-blue);
      cursor: pointer;
      font-family: var(--font-body);
    }

    .review-card .review-actions button:hover {
      color: var(--accent-red);
    }

    .review-header-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
      margin-bottom: 2rem;
    }

    .review-header-bar .rating-summary {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .review-header-bar .rating-summary .big-rating {
      font-family: var(--font-heading);
      font-size: 42px;
      font-weight: 700;
      color: var(--primary-blue);
    }

    .review-header-bar .rating-summary .stars-row {
      display: flex;
      gap: 4px;
    }

    .review-header-bar .rating-summary .stars-row img {
      width: 24px;
    }

    .review-header-bar .rating-summary .total-reviews {
      font-size: 14px;
      color: #888;
    }

    @media (max-width: 600px) {
      .review-page {
        margin-top: 80px;
      }

      .review-card {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>

  <!-- ─── NAVIGATION ─── -->
  <header class="Navigation-header">
    <a href="index.php"><img class="logo1" src="assest/images/Aeron logo.png" alt="AeronTech Logo" width="60"></a>
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="index.php#portfolio">Goals</a></li>
    </ul>
    <a href="contact.php" class="btn">Let's Talk Now</a>
  </header>

  <!-- ─── REVIEWS PAGE ─── -->
  <section class="review-page">
    <div class="section-title fade-up">
      <h2>Testimonials</h2>
      <h3>Customer Reviews</h3>
    </div>

    <div class="review-header-bar fade-up">
      <div class="rating-summary">
        <span class="big-rating">4.8</span>
        <div>
          <div class="stars-row">
            <img src="assest/images/St5.png" alt="★">
            <img src="assest/images/St5.png" alt="★">
            <img src="assest/images/St5.png" alt="★">
            <img src="assest/images/St5.png" alt="★">
            <img src="assest/images/St5.png" alt="★">
          </div>
          <span class="total-reviews">Based on 8 reviews</span>
        </div>
      </div>
      <div>
        <a href="tel:+2349035114545" class="btn">Write a Review</a>
      </div>
    </div>

    <div class="fade-up">
      <div class="review-card">
        <img class="review-avatar" src="assest/images/Adek.png" alt="Adekemi">
        <div class="review-content">
          <div class="review-name">Mrs. Adekemi <span class="review-date">· 06:31 AM, 2024</span></div>
          <img class="review-stars" src="assest/images/St5.png" alt="5 Stars">
          <p class="review-text">Their developers are equally industry experts, in graphics design that gives life. Give your projects to them today!</p>
          <div class="review-actions">
            <button>👍 12</button>
            <button>💬 Reply</button>
          </div>
        </div>
      </div>

      <div class="review-card">
        <img class="review-avatar" src="assest/images/mike.png" alt="Dr. Mike">
        <div class="review-content">
          <div class="review-name">Dr. Mike <span class="review-date">· A day ago, 2025</span></div>
          <img class="review-stars" src="assest/images/St5.png" alt="5 Stars">
          <p class="review-text">Aeron company deliver top-tier technology solutions. Whether it's software or IT consulting, they bring both creativity & professionalism.</p>
          <div class="review-actions">
            <button>👍 8</button>
            <button>💬 Reply</button>
          </div>
        </div>
      </div>

      <div class="review-card">
        <img class="review-avatar" src="assest/images/car.png" alt="Mr. Strange">
        <div class="review-content">
          <div class="review-name">Mr. Strange <span class="review-date">· Month ago, 2025</span></div>
          <img class="review-stars" src="assest/images/St5.png" alt="5 Stars">
          <p class="review-text">What sets Aeron company apart is their genuine care for client success. They listen, adapt, and go extra miles to make sure everything works perfectly.</p>
          <div class="review-actions">
            <button>👍 15</button>
            <button>💬 Reply</button>
          </div>
        </div>
      </div>

      <div class="review-card">
        <img class="review-avatar" src="assest/images/bbi.png" alt="Mrs. Nuriyah">
        <div class="review-content">
          <div class="review-name">Mrs. Nuriyah <span class="review-date">· 4 days ago, 2025</span></div>
          <img class="review-stars" src="assest/images/St5.png" alt="5 Stars">
          <p class="review-text">Their attention to detail and commitment to quality is unmatched. Highly recommend their services to anyone looking for professional web solutions.</p>
          <div class="review-actions">
            <button>👍 7</button>
            <button>💬 Reply</button>
          </div>
        </div>
      </div>

      <div class="review-card">
        <img class="review-avatar" src="assest/images/bof.png" alt="Bof Polska">
        <div class="review-content">
          <div class="review-name">Bof Polska <span class="review-date">· Week ago, 2025</span></div>
          <img class="review-stars" src="assest/images/St5.png" alt="5 Stars">
          <p class="review-text">They continue to exceed our expectation. Highly recommended! We've worked with Aeron on several projects and they always deliver.</p>
          <div class="review-actions">
            <button>👍 10</button>
            <button>💬 Reply</button>
          </div>
        </div>
      </div>

      <div class="review-card">
        <img class="review-avatar" src="assest/images/pro.png" alt="Pro Biozeez">
        <div class="review-content">
          <div class="review-name">Pro Biozeez <span class="review-date">· 1st Nov, 2025</span></div>
          <img class="review-stars" src="assest/images/St4.png" alt="4 Stars">
          <p class="review-text">Whether it's software or IT consulting, they bring both creativity & professionalism. Great team to work with.</p>
          <div class="review-actions">
            <button>👍 6</button>
            <button>💬 Reply</button>
          </div>
        </div>
      </div>

      <div class="review-card">
        <img class="review-avatar" src="assest/images/bio.jpg" alt="Client">
        <div class="review-content">
          <div class="review-name">Mr Azeez M.A <span class="review-date">· 2025</span></div>
          <img class="review-stars" src="assest/images/St5.png" alt="5 Stars">
          <p class="review-text">Their developers are equally industry experts, in graphics design that gives life. Give your projects to them today!</p>
          <div class="review-actions">
            <button>👍 9</button>
            <button>💬 Reply</button>
          </div>
        </div>
      </div>

      <div class="review-card">
        <img class="review-avatar" src="assest/images/jmk1.png" alt="Miss Hellen">
        <div class="review-content">
          <div class="review-name">Miss Hellen <span class="review-date">· 30th Oct, 2025</span></div>
          <img class="review-stars" src="assest/images/St5.png" alt="5 Stars">
          <p class="review-text">They listen, adapt, and go extra miles to make sure everything works perfectly. Truly a partner you can trust.</p>
          <div class="review-actions">
            <button>👍 11</button>
            <button>💬 Reply</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ─── SOCIAL FOOTER ─── -->
  <div class="Footer-one-medias">
    <p class="p-follow">FOLLOW US</p>
    <div class="Social-icons">
      <div><a href="https://www.facebook.com/azeez.ibrahimbiozeez.7" target="_blank" rel="noopener"><img class="media-cont" src="assest/images/F.png" alt="Facebook"></a></div>
      <div><a href="https://youtube.com/@biozeez_tech" target="_blank" rel="noopener"><img class="media-cont" src="assest/images/Y.png" alt="YouTube"></a></div>
      <div><a href="https://x.com/Biozeez09" target="_blank" rel="noopener"><img class="media-cont" src="assest/images/X.png" alt="X"></a></div>
      <div><a href="tel:+2349166668701"><img class="media-cont" src="assest/images/W.png" alt="WhatsApp"></a></div>
      <div><a href="https://www.linkedin.com/in/ibrahim-azeez-8a25512a8" target="_blank" rel="noopener"><img class="media-cont" src="assest/images/L.png" alt="LinkedIn"></a></div>
      <div><a href="https://biozeez09.github.io/aerontech/" target="_blank" rel="noopener"><img class="media-cont" src="assest/images/github.png" alt="GitHub"></a></div>
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

  <script src="assest/script.js"></script>
</body>
</html>
