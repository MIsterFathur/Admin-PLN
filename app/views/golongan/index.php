<h2>Golongan</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn">Input Golongan</a>

<table id="dtb">
  <thead>
    <tr>
      <th>NO</th>
      <th>Kode Golongan</th>
      <th>Nama Golongan</th>
      <th>Edit</th>
      <th>Hapus</th>
    </tr>
  </thead>

  <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['gol_kode']; ?></td>
    <td><?php echo $row['gol_nama']; ?></td>
    <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a></td>
    <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn"
        onclick="return confirm('Are you sure?')">Hapus</a></td>
  </tr>
  <?php $no++;
      } ?>

</table>