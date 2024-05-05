

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centered Text</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container text-center">
    <h1>Are You Sure to unsbscribe?</h1>
    <form method="POST" action="{{ route('blogs.unsubscribe') }}">
        @csrf
        <input style="display: none" type="text" name="unsubscriber" value="{{ $email }}">
    
     <p>Click the Unsbscribe button to confirm.</p>
      <button type="submit" target="_blank" style="text-decoration: underline; color: #999999; font-family: sans-serif; font-size: 13px; font-weight: 400; line-height: 150%;">unsbscribe</button>
    </form>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>