<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- CSS Link -->
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <!-- Font Awesome Link -->
  <script src="https://kit.fontawesome.com/84e2199ce0.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="page">
    <div class="page__header">

      <?php include('views/inc/header.php') ?>

    </div>
    <div class="page__content">
      <main>

        <?php include($contentView) ?>

      </main>
    </div>
  </div>



  <!-- JS Link -->
  <script src="/app/js/script.js" type="text/javascript"></script>
</body>

</html>