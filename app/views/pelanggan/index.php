<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Pelanggan</a>

<table id="dtb" style="width:100%;height:100%;">
  <thead>
    <tr>
      <th>NO</th>
      <th>GOLONGAN</th>
      <th>NO PELANGGAN</th>
      <th>NAMA PELANGGAN</th>
      <th>ALAMAT</th>
      <th>NO HP</th>
      <th>KTP</th>
      <th>SERI METERAN</th>
      <th>METERAN</th>
      <th>AKTIF</th>
      <th>USER</th>
      <th>EDIT</th>
      <th>DELETE</th>
    </tr>
  </thead>
  <tbody>
    <?php
            $no = 1;
            foreach ($data['rows'] as $row) {
            ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row['gol_nama']; ?></td>
      <td><?php echo $row['pel_no']; ?></td>
      <td><?php echo isset($row['pel_nama']) ? $row['pel_nama'] : ''; ?></td>
      <td><?php echo isset($row['pel_alamat']) ? $row['pel_alamat'] : ''; ?></td>
      <td><?php echo isset($row['pel_hp']) ? $row['pel_hp'] : ''; ?></td>
      <td><?php echo isset($row['pel_ktp']) ? $row['pel_ktp'] : ''; ?></td>
      <td><?php echo isset($row['pel_seri']) ? $row['pel_seri'] : ''; ?></td>
      <td><?php echo isset($row['pel_meteran']) ? $row['pel_meteran'] : ''; ?></td>
      <td><?php echo isset($row['pel_aktif']) ? $row['pel_aktif'] : ''; ?></td>
      <td><?php echo isset($row['user_nama']) ? $row['user_nama'] : ''; ?></td>
      <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
      <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn"
          onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
    <?php
            $no++;
            }
            ?>

  </tbody>
</table>