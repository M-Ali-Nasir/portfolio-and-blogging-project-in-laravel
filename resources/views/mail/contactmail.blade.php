<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body style="font-family: 'Helvetica', 'Arial', sans-serif;">

    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f8f8f8;">

        <h2 style="color: #333333;">New Contact Form Submission</h2>

        <table cellpadding="5" cellspacing="0" width="100%">
            <tr>
                <td style="font-weight: bold; width: 30%;">Subject:</td>
                <td>{{ $subject_mail }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Name:</td>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Email:</td>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold; vertical-align: top;">Content:</td>
                <td>{{ $content }}</td>
            </tr>
        </table>

    </div>

</body>
</html>
