<?php
// index.php
?>

<!DOCTYPE html>
<html>
<head>
  <title>CCAI Demo</title>
  <link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css">
  <script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>
  <style>
    df-messenger {
      position: fixed;
      bottom: 16px;
      right: 16px;
      z-index: 999;
    }
  </style>
</head>
<body>
  <df-messenger
    location="us-central1"
    project-id="ccai-demo-463118"
    agent-id="40bee3c0-922f-4438-925f-7bf195b47a81"
    language-code="en">
    <df-messenger-chat-bubble chat-title="Order and account management"></df-messenger-chat-bubble>
  </df-messenger>
</body>
</html>
