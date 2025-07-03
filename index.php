<?php
// index.php for CCAI Demo - Phone Store Theme
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ConnectTel Phones</title>

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

    .products {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      padding: 40px 20px;
      background-color: #f1f1f1;
    }

    .product {
      background-color: #fff;
      width: 280px;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    .product img {
      max-width: 100%;
      border-radius: 10px;
    }

    .product h3 {
      margin: 15px 0 10px;
    }

    .product p {
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
    <h1>ConnectTel Phones</h1>
    <p>Experience the future of mobile technology</p>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#">Smartphones</a>
    <a href="#">Accessories</a>
    <a href="#">Support</a>
  </nav>

  <section class="hero">
    <h1>New Launch: Galaxy X Pro</h1>
    <p>High performance. Stunning display. Order now.</p>
  </section>

  <section class="products">
    <div class="product">
      <img src="https://www.apple.com/newsroom/images/product/iphone/standard/Apple_iPhone-15-Pro_Lineup_230912.jpg.og.jpg" alt="iPhone 15 Pro">
      <h3>iPhone 15 Pro</h3>
      <p>From $999</p>
    </div>
    <div class="product">
      <img src="https://images.samsung.com/is/image/samsung/p6pim/in/sm-s911bzahins/gallery/in-galaxy-s23-s911-447587-sm-s911bzahins-thumb-535870304?$650_519_PNG$" alt="Galaxy S23">
      <h3>Samsung Galaxy S23</h3>
      <p>From $799</p>
    </div>
    <div class="product">
      <img src="https://fdn2.gsmarena.com/vv/pics/oneplus/oneplus-12r-1.jpg" alt="OnePlus 12R">
      <h3>OnePlus 12R</h3>
      <p>From $649</p>
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
