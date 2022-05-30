<!doctype html>
<html>

<head>

  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="format-detection" content="telephone=no">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
  <table border="0" cellpadding="0" cellspacing="0"
    style="width: 100%; margin: 0 auto; text-align: center; max-width: 640px; color: #505050; font-family: 'Roboto', sans-serif;">
    <tr>
      <td>
        <table style="margin: 0 auto">
          <tr>
            <td style="max-width: 427px">
              <img src="https://topdevs.org/images/site/email-head-picture.jpg" style="width: 184px; height: 167px; margin: 0 auto;">
              <p
                style="font-size: 48px; line-height: 140%; font-style: italic; font-weight: bold; color: #294FC2; text-align: center; margin: 0; font-family: 'Mulish', sans-serif;">
                Greetings!
              </p>
              <p style="margin: 0 0 30px; font-size: 20px; text-align: center;">We've got your message.</p>
              <p style="margin: 0 0 20px; font-size: 18px; font-style: italic; line-height: 160%; text-align: center;">Our expert will contact you back within the next 12 business hours.</p>
              <p style="margin: 0 0 40px; font-size: 18px; font-style: italic; line-height: 160%; text-align: center;">Meanwhile, you are free to get to know more <a href="https://topdevs.org/company" style="color: rgb(17, 85, 204); text-decoration: none;">about us</a> or dive deeper into the
                technology world with our <a style="color: rgb(17, 85, 204); text-decoration: none;" href="https://topdevs.org/blog">blog.</a></p>
                <a style="text-align: center; font-size: 16px; width: 260px; background: #CE0737; display: block; padding: 20px 0; margin: 0 auto 40px; color: white; font-weight: bold; text-decoration: none; font-family: 'Mulish',sans-serif;" href="https://topdevs.org/">GO TO HOMEPAGE</a>
							<img src="https://topdevs.org/images/site/email-logo.jpg" style="width: 128px; height: 32px; margin: 0 auto;">
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <table style="width: 100%; margin: 60px auto; text-align: center; max-width: 640px; color: #505050; font-family: 'Roboto', sans-serif;">
    <tr style="font-size: 14px">
      <td style="padding-top: 40px; border-top: 1px solid #3A3A3A; text-align: left;">
        <span style="font-weight: bolder; min-width: 70px; display: inline-block; margin: 0 0 9px 0; color: #2D2C2C;">Name: </span>
        <span style="font-weight: 400; font-style: italic;">{{ $data["name"] }}</span>
      </td>
    </tr>
    <tr style="font-size: 14px">
      <td style="text-align: left;">
        <span style="font-weight: bolder; min-width: 70px; display: inline-block; margin: 0 0 9px 0; color: #2D2C2C;">Email: </span>
        <span style="font-weight: 400; color: #145DCC">{{ $data["email"] }}</span>
      </td>
    </tr>
    <tr style="font-size: 14px">
      <td style="text-align: left;">
        <span style="font-weight: bolder; min-width: 70px; display: inline-block; margin: 0 0 9px 0; color: #2D2C2C;">Phone: </span>
        <span style="font-weight: 400; color: #145DCC">{{ $data["phone"] ?? null }}</span>
      </td>
    </tr>
    <tr style="font-size: 14px">
      <td style="text-align: left;">
        <span style="font-weight: bolder; min-width: 70px; display: inline-block; margin: 0 0 9px 0; color: #2D2C2C;">Skype: </span>
        <span style="font-weight: 400;">{{ $data["skype"] ?? null }}</span>
      </td>
    </tr>
    <tr style="font-size: 14px">
      <td style="text-align: left;">
        <span style="font-weight: bolder; min-width: 70px; display: inline-block; margin: 0 0 9px 0; color: #2D2C2C;">Message: </span>
        <span style="font-weight: 400; color: #3A3A3A; font-style: italic;">{{ $data["message"] }}</span>
      </td>
    </tr>
  </table>
</body>
</html>
