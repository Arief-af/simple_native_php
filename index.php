<!DOCTYPE html>

<head>
  <title>tampil data</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <section class="mt-5 container p-5">

    <a href="store_view.php" class="btn btn-outline-success mb-5" style="width: max-content;">Tambah</a>

    <table class="table table-striped">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <th>Aksi</th>
      </tr>
      <?php
      include 'koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi, "select * from user");
      while ($d = mysqli_fetch_array($data)) {
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['name']; ?></td>
          <td><?php echo $d['username']; ?></td>
          <td>**********</td>
          <td><?php echo $d['level']; ?></td>
          <td>
            <a href="destroy_user_data.php?id=<?php echo $d['idUser']; ?>" class="btn btn-outline-danger">HAPUS</a>
            <a role="button" class="btn btn-outline-success" href="edit.php?id=<?php echo $d['iUuser']; ?>">UBAH</a> </button>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </section>
</body>

</html>