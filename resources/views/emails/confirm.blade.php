<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register Comfirm Link</title>
</head>
<body>
  <h1>Thank you for register in Sample!</h1>

  <p>
    Please click the link below to complete register:
    <a href="{{ route('confirm_email', $user['activation_token']) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    If this is not your own operation, please ignore this message.
  </p>
</body>
</html>