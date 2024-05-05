<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Confirmation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body style="font-family: 'Arial', sans-serif; background-color: #1e1e1e; padding: 20px;">

    <div class="container" style="max-width: 600px; margin: 0 auto; color:aliceblue; background-color: #191919; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 class="text-center">Subscription Confirmation</h2>
        <p class="text-center" style="color:#bdbdbd">Thank you {{ $userName }} for subscribing to our newsletter! You'll be among the first to know about our new blog posts.</p>

        <p class="text-center">
            <a href="{{ route('blogs') }}" class="btn btn-primary">Visit Our Website</a>
        </p>

        <p class="text-center text-muted" style="margin-top: 20px;">&copy; {{ date('Y') }} Mani-Blogs </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>