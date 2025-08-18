<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
            font-size: 22px;
        }

        .content {
            padding: 25px;
            color: #333333;
        }

        .content p {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .task-card {
            border: 1px solid #e5e7eb;
            border-left: 5px solid #6366f1;
            background: #fafafa;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
        }

        .task-title {
            font-size: 16px;
            font-weight: bold;
            color: #111827;
        }

        .task-time {
            font-size: 14px;
            color: #6b7280;
            margin-top: 5px;
        }

        .footer {
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
            border-top: 1px solid #e5e7eb;
        }

        .signature {
            margin-top: 20px;
            font-style: italic;
            font-size: 13px;
            color: #374151;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>⏰ Task Reminder</h2>
    </div>
    <div class="content">
        <p>Hey {{ $name }},</p>
        <p>This is a friendly reminder about your upcoming task:</p>

        <div class="task-card">
            <div class="task-title">{{ $title }}</div>
            <div class="task-time">🗓 Reminder Time: {{ $reminder_time }}</div>
        </div>

        <p class="signature">Stay productive,<br> Your Task Manager 🚀</p>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Task Reminder System. All rights reserved.
    </div>
</div>
</body>
</html>
