<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Albums</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row row-cols-3">
                <div class="col mt-5" v-for="(item , index) in items" :key="index">
                    <div class="card h-100 text-center text-black" style="width: 300px; margin: 0 auto;">
                        <img :src="item.poster" alt="album_image">
                        <div class="card-body">
                            <h5>{{ item.title }}</h5>
                            <p> {{ item.author }} </p>
                            <h6>{{ item.year }} </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script js -->
    <script src="./js/script.js"></script>
</body>

</html>
