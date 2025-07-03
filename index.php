<?php
// index.php for CCAI Demo - Phone Company Style
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ConnectTel - Customer Support</title>

  <!-- Dialogflow Messenger Style and Script -->
  <link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css">
  <script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      color: #333;
    }

    header {
      background-color: #0057b8;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      background: #003b80;
      padding: 10px;
      display: flex;
      justify-content: center;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .hero {
      background: #e0e7ff;
      padding: 60px 20px;
      text-align: center;
    }

    .hero h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 1.2em;
    }

    .features {
      display: flex;
      justify-content: space-around;
      padding: 40px 20px;
      background: #ffffff;
    }

    .feature {
      width: 30%;
      text-align: center;
    }

    .feature h3 {
      margin-bottom: 10px;
      color: #0057b8;
    }

    footer {
      background: #003b80;
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
    <h1>ConnectTel</h1>
    <p>Your trusted partner in mobile connectivity</p>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#">Plans</a>
    <a href="#">Support</a>
    <a href="#">My Account</a>
  </nav>

  <section class="hero">
    <h1>24/7 Customer Support</h1>
    <p>Get assistance with your mobile plan, account, or billing through our AI-powered support assistant.</p>
  </section>

  <section class="features">
    <div class="feature">
      <h3>Mobile Plans</h3>
      <p>Flexible options tailored to your needs.</p>
    </div>
    <div class="feature">
      <h3>Device Upgrades</h3>
      <p>Latest smartphones with affordable EMI options.</p>
    </div>
    <div class="feature">
      <h3>Smart Support</h3>
      <p>Talk to our virtual assistant anytime, anywhere.</p>
    </div>
  </section>

  <footer>
    &copy; 2025 ConnectTel Inc. All rights reserved.
  </footer>

  <!-- Dialogflow Messenger Bot -->
  <df-messenger
    location="us-central1"
    project-id="ccai-demo-463118"
    agent-id="40bee3c0-922f-4438-925f-7bf195b47a81"
    language-code="en"
    max-query-length="-1">
    <df-messenger-chat-bubble
      chat-title="Support Assistant">
    </df-messenger-chat-bubble>
  </df-messenger>

</body>
</html>
