<h2>Login Sistem</h2>

<form action="<?php echo URL; ?>/login/proses" method="post">
  <table>
    <tr>
      <td>Username</td>
      <td><input type="email" name="user_email" placeholder="Email" required></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="user_password" placeholder="Password" required></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit" value="Login"></td>
    </tr>
  </table>
</form>

<?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
<div class="error">
  Login tidak di temukan
</div>
<?php } ?>