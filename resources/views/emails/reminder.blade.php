<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reminder Email</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
    }
    .email-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border: 1px solid #dddddd;
    }
    .header {
      background-color: #007bff;
      color: #ffffff;
      padding: 10px;
      text-align: center;
    }
    .header h1 {
      margin: 0;
      font-size: 24px;
    }
    .content {
      padding: 20px;
      font-size: 16px;
      color: #555555;
    }
    .content p {
      margin: 0 0 10px;
    }
    .button {
      display: block;
      width: 200px;
      margin: 20px auto;
      padding: 10px;
      text-align: center;
      color: #ffffff;
      background-color: #28a745;
      text-decoration: none;
      border-radius: 5px;
    }
    .footer {
      text-align: center;
      font-size: 12px;
      color: #888888;
      padding: 10px;
      border-top: 1px solid #dddddd;
    }
  </style>
</head>
<body>
  <div class="email-container">
    <!-- Header -->
    <div class="header">
      <h1>Reminder</h1>
    </div>

    <!-- Email Content -->
    <div class="content">
      <p>Dear  {{ $data['user_name'] }},</p>
      <p>This is a friendly reminder about your upcoming event:</p>
      <p><strong>Event:</strong> {{ $data['title'] }}</p>
      <p><strong>Date and Time:</strong> {{ $data['time'] }}</p>
      <p>We look forward to your participation. Please let us know if you have any questions.</p>
      <a href="[Link to Event or Details]" class="button">View Event Details</a>
    </div>

    <!-- Footer -->
    <div class="footer">
      <p>If you have any questions, feel free to contact us at <a href="mailto:support@example.com">support@example.com</a>.</p>
      <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </div>
  </div>
</body>
</html>
