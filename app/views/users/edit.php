<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
  <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
  <table>
    <tr>
      <td>EMAIL</td>
      <td><input type="email" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required></td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td><input type="password" name="user_password"></td>
    </tr>
    <tr>
      <td>FULL NAME</td>
      <td><input type="text" name="user_nama" value="<?php echo $data['row']['user_nama']; ?>" required></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" name="user_alamat" value="<?php echo $data['row']['user_alamat']; ?>" required></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="btn_update" value="UPDATE"></td>
    </tr>
  </table>
</form>