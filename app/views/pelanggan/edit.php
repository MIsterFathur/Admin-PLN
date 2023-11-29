<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
  <input type="hidden" name="pel_id" value="<?php echo $data['row']['pel_id']; ?>">
  <table>
    <tr>
      <td>GOLONGAN</td>
      <td>
        <select name="gol_id">
          <?php foreach ($data['optgol'] as $opt) { ?>
          <option value="<?php echo $opt['gol_id']; ?>"
            <?php echo $opt['gol_id'] == $data['row']['gol_id'] ? "selected" : ""; ?>><?php echo $opt['gol_nama']; ?>
          </option>
          <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>NO PELANGGAN</td>
      <td><input type="text" name="pel_no" value="<?php echo $data['row']['pel_no']; ?>" required></td>
    </tr>
    <tr>
      <td>NAMA PELANGGAN</td>
      <td><input type="text" name="pel_nama" value="<?php echo $data['row']['pel_nama']; ?>" required></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td><textarea name="pel_alamat" cols="30" rows="5"><?php echo $data['row']['pel_alamat']; ?></textarea></td>
    </tr>
    <tr>
      <td>NO HP</td>
      <td><input type="tel" name="pel_hp" pattern="[0-9]{10}" value="<?php echo $data['row']['pel_hp']; ?>" required>
      </td>
    </tr>
    <tr>
      <td>KTP</td>
      <td><input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>" required></td>
    </tr>
    <tr>
      <td>SERI METERAN</td>
      <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>" required></td>
    </tr>
    <tr>
      <td>METERAN</td>
      <td><input type="number" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>" required></td>
    </tr>
    <tr>
      <td>AKTIF</td>
      <td>
        <select name="pel_aktif">
          <option value="Y" <?php echo $data['row']['pel_aktif'] == 'Y' ? "selected" : ""; ?>>Aktif</option>
          <option value="N" <?php echo $data['row']['pel_aktif'] == 'N' ? "selected" : ""; ?>>Tidak Aktif</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>USER</td>
      <td>
        <select name="user_id">
          <?php foreach ($data['optuser'] as $opt) { ?>
          <option value="<?php echo $opt['user_id']; ?>"
            <?php echo $opt['user_id'] == $data['row']['user_id'] ? "selected" : ""; ?>><?php echo $opt['user_nama']; ?>
          </option>
          <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="btn_save" value="UPDATE"></td>
    </tr>
  </table>
</form>