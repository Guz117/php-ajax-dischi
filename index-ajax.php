<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="app">
        <!-- header -->
        <?php include_once __DIR__ . '/partials/header.php' ?>

        <!-- main -->
        <main>
            <div class="album">

                <div class="music" v-for="card in cards">
                    <img class="album-music" :src="card.poster" alt="">
                    <span class="title">{{ card.title }}</span>
                    <span class="author">{{ card.author }}</span>
                    <span class="year">{{ card.year }}</span>
                </div>

            </div>
        </main>
    </div>


    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>