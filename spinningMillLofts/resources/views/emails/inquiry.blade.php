<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #0056b3;
        }
        p {
            margin: 8px 0;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Property Inquiry</h2>
        <p><strong>Full Name:</strong> {{ $data['full_name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Message:</strong><br>{{ $data['message'] }}</p>
        <div class="footer">
            <p>Thank you for your attention to this inquiry. Please feel free to reach out for further details.</p>
        </div>
    </div>
</body>
</html>
