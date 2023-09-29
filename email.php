<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Form</title>
</head>
<body>
     <h2>Send a Email</h2>

     <form method="post" action="send_email.php">
      <label for="to">To:</label>
      <input type="email" name="to" id="to" required><br><br>

      <label for="subject">Subject:</label>
      <input type="text" name="subject" id="subject" required><br><br>

      <label for="message">Message:</label>
      <textarea type="message" name="message" id="message" rows="5" required></textarea><br><br>

      <input type="submit" values="Send Email">
     </form>
</body>
</html>