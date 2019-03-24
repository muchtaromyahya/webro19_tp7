<!DOCTYPE html>
<html lang="en">
<head>
  <title>13011174052</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Daftar Teman <?php echo $datadiri->nama; ?></h2>
  <p class="text-center"><?php echo $datadiri->nama; ?> orangnya biasa saja
  <br>ngga usah ribet</p>            
  <table class="table table-striped">
  <thead>
      <tr>
        <th>NAMA</th>
        <th>PANGGILAN</th>
        <th>EMAIL</th>
      </tr>
    </thead>
    <?php foreach ($teman as $tem): ?>
      <tr>
        <td width="150">
          <?php echo $tem->nama ?>
        </td>
        <td>
          <?php echo $tem->panggilan ?>
        </td>
        <td>
          <?php echo $tem->email ?>
        </td>
      </tr>
    <?php endforeach; ?>
    <tbody>
    </tbody>
  </table>
  <div class="container text-center">
    <a href="<?php echo site_url('data_diri') ?>" class="btn btn-primary">Data Diri</a>
  </div>
</div>

</body>
</html>


