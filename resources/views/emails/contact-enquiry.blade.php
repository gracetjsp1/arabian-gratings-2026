<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Enquiry</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f4f4f4; padding:20px;">

<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <table width="600" cellpadding="20" cellspacing="0" style="background:#ffffff; border-radius:6px;">
                
                <tr>
                    <td style="text-align:center; background:#1f2b6c; color:#ffffff;">
                        <h2>Arabian Gratings</h2>
                        <p>New Contact Enquiry</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p><strong>Name:</strong> {{ $data['name'] }}</p>
                        <p><strong>Email:</strong> {{ $data['email'] }}</p>
                        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
                        <p><strong>Subject:</strong> {{ $data['subject'] }}</p>

                        <hr>

                        <p><strong>Message:</strong></p>
                        <p>{{ $data['message'] }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="text-align:center; font-size:12px; color:#777;">
                        © {{ date('Y') }} Arabian Gratings. All Rights Reserved.
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
