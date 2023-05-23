<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Albums</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div id="app" class="vh-100 w-100">

        <!-- header -->
        <header class="w-100" style="height: 100px; background-color: #06131f;">
            <div class="d-flex align-items-center" style="width: 80%; height: 100%; margin: 0 auto;">
                <img src="./assets/img/logo.png" alt="logo" style="height: 50%;">

            </div>
        </header>

        <!-- main -->
        <main class="w-100" style="height:calc(100% - 100px); background-color: #1d2d3c;">

            <div class="container d-flex flex-wrap justify-content-center">
                <!-- cards -->
                <div v-for="album in albums" :key="album.title" class="card d-flex flex-column align-items-center"
                    style="width: calc((100% / 3) - 150px); height: 350px; margin: 30px; background-color: #112030;">
                    <img :src="album.poster" class="card-img-top w-75 p-3" :alt="album.title">
                    <div class="card-body d-flex flex-column align-items-center text-white p-2">
                        <h5 class="card-title">{{ album.title }}</h5>
                        <p class="card-text">{{ album.author }}</p>
                        <h5>{{ album.year }}</h5>
                    </div>
                </div>
            </div>
        </main>

    </div>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>