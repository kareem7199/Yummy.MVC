<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="color-scheme" content="light only">

    <title>Your Reservation Details</title>
    <style>
        /* Inline styles for the email template */
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            background-color: #ce1212;
            color: white;
            padding: 10px;
            border-radius: 20px;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin-bottom: 10px;
            line-height: 1.5;
            /* Increase line height for better readability */
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666666;
        }

        ul li {
            background-color: #f1f1f1;
            list-style: circle;
            padding: 10px;
            margin: 10px 0;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Your Reservation Details</h1>
        </div>

        <div class="content">
            <p>Dear {{ explode(' ', $name)[0] }},</p>
            <p class="header">Thank you for your reservation. Here are the details:</p>

            <ul>
                <li><strong>Name:</strong> {{ $name }}</li>
                <li><strong>Phone:</strong> {{ $phone }}</li>
                <li><strong>Date and Time:</strong> {{ \Carbon\Carbon::parse($date)->format('l, F jS, Y \a\t g:i A') }}
                </li>
                <li><strong>Number of People:</strong> {{ $people }}</li>
            </ul>
        </div>

        <div class="footer">
            <p>Regards,<br>Yummy</p>
        </div>
    </div>
</body>

</html>