<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <title>&#3627;&#3609;&#3657;&#3634;&#3627;&#3621;&#3633;&#3585;&#3591;&#3634;&#3609;&#3604;&#3641;&#3649;&#3621;&#3619;&#3632;&#3610;&#3610;</title>
  </head>
  <body>
    <div align="center">
      <h1>&#3627;&#3609;&#3657;&#3634;&#3612;&#3641;&#3657;&#3604;&#3641;&#3649;&#3621;&#3619;&#3632;&#3610;&#3610;</h1>
    </div>
    <form id="form1" name="form1" method="post" action="to.php">
      <table align="center" border="0" width="200">
        <tbody>
          <tr>
            <td valign="top" width="81">User</td>
            <td valign="top" width="109"><label> <input autocomplete="on" required="required"                  placeholder="user" name="user" id="user" type="text">
              </label></td>
          </tr>
          <tr>
            <td valign="top">Password</td>
            <td valign="top"><label> <input required="required" placeholder="Password"                  name="password" id="password" type="password"> </label></td>
          </tr>
          <tr>
            <td valign="top">CAPTCHA</td>
            <td valign="top"><img src="captcha.php"><br>
              <input autocomplete="off" required="required" placeholder="captcha"                name="captcha" type="text"></td>
          </tr>
          <tr>
            <td><label> <input name="Submit" id="button" value="sent" type="submit">
              </label></td>
            <td><label> <input name="button2" id="button2" value="Reset" type="reset">
              </label></td>
          </tr>
        </tbody>
      </table>
    </form>
  </body>
</html>
