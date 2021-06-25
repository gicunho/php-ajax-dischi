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
            <div class="album bg_grey p-2 m-3" v-for='album in albums'>
                <img :src="album.poster" alt="">
                <h2>{{album.title}}</h2>
                <h3>{{album.author}}</h3>
                <h3>{{album.year}}</h3>
            </div>
            <!-- /Site Main Content -->
          </main>

      </div>

    <!-- Axios CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- My Script -->
    <script src="./dist/js/app.js"></script>
</body>
</html>