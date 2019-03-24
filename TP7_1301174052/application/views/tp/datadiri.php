<!DOCTYPE html>
<html lang="en">
<head>
  <title>1301174052</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Diri</h2>
  <p>Data diri ini menggunakan card dari bootstrap 4.</p> 
  <div class="card text-center" style="width:400px">
    <img class="card-img-top" src="<?php echo base_url('assets/YAHYA.jpg') ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $datadiri->nama ?> - <?php echo $datadiri->nim ?></h4>
      <p class="card-text"><?php echo $datadiri->nama ?> adalah seorang yang biasa saja</p>
      <a href="<?php echo site_url('data_teman') ?>" class="btn btn-primary">Daftar Teman</a>
    </div>
  </div>
  <br>

</body>
</html>