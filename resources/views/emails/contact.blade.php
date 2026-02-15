<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 0; }
        .header { background: linear-gradient(135deg, #FF9066, #FF6B6B); padding: 24px; text-align: center; border-radius: 8px 8px 0 0; }
        .header h1 { color: white; margin: 0; font-size: 22px; font-weight: 600; }
        .content { padding: 24px; background: #f9fafb; }
        .field { margin-bottom: 16px; }
        .field-label { font-weight: 600; color: #6b7280; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .field-value { padding: 12px 16px; background: white; border-radius: 8px; border: 1px solid #e5e7eb; font-size: 14px; }
        .footer { padding: 16px 24px; text-align: center; font-size: 12px; color: #9ca3af; background: #f9fafb; border-radius: 0 0 8px 8px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
    </div>
    <div class="content">
        <div class="field">
            <div class="field-label">Name</div>
            <div class="field-value">{{ $data['name'] }}</div>
        </div>
        <div class="field">
            <div class="field-label">Email</div>
            <div class="field-value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></div>
        </div>
        <div class="field">
            <div class="field-label">Subject</div>
            <div class="field-value">{{ $data['subject'] }}</div>
        </div>
        <div class="field">
            <div class="field-label">Message</div>
            <div class="field-value">{!! nl2br(e($data['message'])) !!}</div>
        </div>
    </div>
    <div class="footer">
        <p>This message was sent from the SiteStar contact form.</p>
    </div>
</body>
</html>
