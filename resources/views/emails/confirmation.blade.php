<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Confirmation</title>
</head>

<body>
    <h1>Email Confirmation</h1>
    <p>Dear {{ $details['name'] }},</p>
    <p>Thank you for signing up! Please confirm your email address by clicking the link below:</p>
    <a href="{{ $details['confirmation_link'] }}">Confirm Email</a>
</body>

</html>
