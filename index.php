<?php
// index.php for Heroku PHP Hosting
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CCAI Demo - Order & Account Management</title>

  <!-- Dialogflow Messenger Style and Script -->
  <link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css">
  <script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>

  <style>
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

  <!-- Dialogflow Messenger Bot -->
  <df-messenger
    location="us-central1"
    project-id="ccai-demo-463118"
    agent-id="40bee3c0-922f-4438-925f-7bf195b47a81"
    language-code="en"
    max-query-length="-1">
    <df-messenger-chat-bubble
      chat-title="Order and account management">
    </df-messenger-chat-bubble>
  </df-messenger>

</body>
</html>
