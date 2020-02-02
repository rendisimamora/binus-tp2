<html>

<head>
  <title>Rendi Simamora - Captcha</title>
  <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>

<body>
  <div class="item text-center">
    <h3>Input captcha</h3>
    <form action="actions/cek-captcha.php" method="POST">
      <table align="center">
        <tr>
          <td>Captcha</td>
          <td><img src="plugins/captcha.php" alt="gambar" /></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" class="form-control" placeholder="Username" required />
          </td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" class="form-control" placeholder="Password" required /></td>
        </tr>
        <tr>
          <td>Input Captcha </td>
          <td><input type="number" name="isValueCaptcha" class="form-control" required /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" class="form-control pa-2" value="Login" /></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>