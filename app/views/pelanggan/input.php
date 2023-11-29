<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
  <table>
    <tr>
      <td>GOLONGAN</td>
      <td>
        <select name="gol_id">
          <?php foreach ($data['optgol'] as $opt) { ?>
          <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_nama']; ?></option>
          <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>NO PELANGGAN</td>
      <td><input type="text" name="pel_no" required></td>
    </tr>
    <tr>
      <td>NAMA PELANGGAN</td>
      <td><input type="text" name="pel_nama" required></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td><textarea name="pel_alamat" cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>NO HP</td>
      <td><input type="tel" name="pel_hp" pattern="[0-9]{10}" required></td>
    </tr>
    <tr>
      <td>KTP</td>
      <td><input type="text" name="pel_ktp" required></td>
    </tr>
    <tr>
      <td>SERI METERAN</td>
      <td><input type="text" name="pel_seri" required></td>
    </tr>
    <tr>
      <td>METERAN</td>
      <td><input type="text" name="pel_meteran" required></td>
    </tr>
    <tr>
      <td>AKTIF</td>
      <td>
        <select name="pel_aktif">
          <option value="Y">Ya</option>
          <option value="N">Tidak</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>USER</td>
      <td>
        <select name="user_id">
          <?php
                    if (isset($data['optuser'])) {
                        foreach ($data['optuser'] as $opt) {
                            echo "<option value=\"{$opt['user_id']}\">{$opt['user_nama']}</option>";
                        }
                    }
                    ?>
        </select>
      </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="btn_save" value="SAVE"></td>
    </tr>
  </table>
</form>