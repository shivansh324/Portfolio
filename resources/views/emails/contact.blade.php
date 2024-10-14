<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>

<body>
    <h1>New Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ htmlspecialchars($name) }}</p>
    <p><strong>Email:</strong> {{ htmlspecialchars($email) }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ nl2br(htmlspecialchars($usermessage)) }}</p>
</body>

</html>