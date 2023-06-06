<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- CSS Link -->
  <link rel="stylesheet" href="../dist/styles.css" type="text/css">
  <!-- FontAwesome Offline -->
  <link rel="stylesheet" href="assets\fontawesome-web\css\all.css">
</head>

<body>

  <div class="layout">
    <div class="header-content">
    
      <?php include('views/inc/header.php') ?>

    </div>
    <div class="main-content">
      <main>
  
        <?php include($contentView) ?>
  
      </main>
    </div>
  </div>



  <!-- JS Link -->
  <script src="/app/js/script.js" type="text/javascript"></script>
</body>

</html>