<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/app.css">

    <title>Document</title>
</head>
<body class="bg_darkblue">

    <div id="root">
          <header class="bg_grey">
            <!-- Site Header -->
            <img width="80" src="./dist/img/logo.png" alt="logo Spotify" class="p-2">

            <!-- /Site Header -->
          </header>
          
          <main class="d-flex">
            <!-- Site Main Content -->

            <?php
            include __DIR__ . '/src/templates/albums.php'; 
            foreach ($database as $album) {
              ?>
              <div class="album bg_grey p-2 m-3">
                <img src="<?php echo $album['poster'] ?>" alt="">
                <h2><?= $album['title'] ?></h2>
                <h3><?= $album['author'] ?></h3>
                <h3><?= $album['year'] ?></h3>
              </div>
          <?php  }          
            ?>

          </main>

      </div>


    <script src="./dist/js/app.js"></script>
</body>
</html>