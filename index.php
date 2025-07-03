<?php
// index.php for CCAI Demo - Full Phone Store Theme
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ConnectTel Mobile Store</title>

  <link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css" />
  <script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>

  <style>
    body {
      margin: 0;
      font-family: 'Helvetica Neue', sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: #000;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #1a1a1a;
      display: flex;
      justify-content: center;
      padding: 10px 0;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 15px;
      font-weight: 500;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .hero {
      background-color: #fff;
      text-align: center;
      padding: 60px 20px;
    }

    .hero h1 {
      font-size: 3em;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 1.2em;
      color: #555;
    }

    .section-title {
      text-align: center;
      padding: 30px 10px 10px;
      font-size: 1.8em;
      color: #222;
    }

    .products, .plans {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      padding: 40px 20px;
      background-color: #f1f1f1;
    }

    .product, .plan {
      background-color: #fff;
      width: 280px;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    .product img, .plan img {
      max-width: 100%;
      border-radius: 10px;
    }

    .product h3, .plan h3 {
      margin: 15px 0 10px;
    }

    .product p, .plan p {
      color: #777;
    }

    footer {
      background: #000;
      color: white;
      text-align: center;
      padding: 20px;
    }

    df-messenger {
      z-index: 999;
      position: fixed;
      bottom: 16px;
      right: 16px;
      --df-messenger-font-color: #000;
      --df-messenger-font-family: 'Google Sans', sans-serif;
      --df-messenger-chat-background: #f3f6fc;
      --df-messenger-message-user-background: #d3e3fd;
      --df-messenger-message-bot-background: #fff;
    }
  </style>
</head>
<body>

  <header>
    <img src="logo.png" alt="ConnectTel Logo" style="height: 50px; vertical-align: middle; margin-right: 10px;"><h1 style='display:inline;'>ConnectTel</h1>
    <p>Your One-Stop Shop for Phones and Plans</p>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#">Smartphones</a>
    <a href="#">Plans</a>
    <a href="#">Accessories</a>
    <a href="#">Support</a>
  </nav>

  <section class="hero">
    <h1>Summer Sale is Live!</h1>
    <p>Get up to 30% off on top smartphones + Free SIM activation</p>
  </section>

  <div class="section-title">Top Smartphones</div>
  <section class="products">
    <div class="product">
      <img src="https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-15-pro-max-1.jpg" alt="iPhone 15 Pro Max">
      <h3>iPhone 15 Pro Max</h3>
      <p>From $1,199</p>
    </div>
    <div class="product">
      <img src="https://fdn2.gsmarena.com/vv/pics/google/google-pixel-8-pro-1.jpg" alt="Galaxy S23 Ultra">
      <h3>Samsung Galaxy S23 Ultra</h3>
      <p>From $1,099</p>
    </div>
    <div class="product">
      <img src="https://fdn2.gsmarena.com/vv/pics/google/google-pixel-8-pro-1.jpg" alt="Pixel 8 Pro">
      <h3>Google Pixel 8 Pro</h3>
      <p>From $899</p>
    </div>
    <div class="product">
      <img src="https://fdn2.gsmarena.com/vv/pics/oneplus/oneplus-12r-1.jpg" alt="OnePlus 12R">
      <h3>OnePlus 12R</h3>
      <p>From $649</p>
    </div>
  </section>

  <div class="section-title">Popular Mobile Plans</div>
  <section class="plans">
    <div class="plan">
      <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" alt="Basic Plan" width="100">
      <h3>Basic Plan</h3>
      <p>$20/month - 5GB data, 100 mins, 100 texts</p>
    </div>
    <div class="plan">
      <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" alt="Unlimited Plan" width="100">
      <h3>Unlimited Plan</h3>
      <p>$49/month - Unlimited data, calls, and texts</p>
    </div>
    <div class="plan">
      <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" alt="Family Plan" width="100">
      <h3>Family Plan</h3>
      <p>$99/month - 4 lines, Unlimited everything</p>
    </div>
  </section>

  <footer>
    &copy; 2025 ConnectTel Inc. All rights reserved.
  </footer>

  <df-messenger
    location="us-central1"
    project-id="ccai-demo-463118"
    agent-id="40bee3c0-922f-4438-925f-7bf195b47a81"
    language-code="en"
    max-query-length="-1">
    <df-messenger-chat-bubble chat-title="Support Assistant"></df-messenger-chat-bubble>
  </df-messenger>

</body>
</html>
