<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <script src="js/menu.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"
        integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js"
        integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portifólio</title>
</head>

<body>

    <header id="header">
        <a href="" class="logo"><span>Murilo</span> Falconeri</a>
        <button class="MenuOpen" onclick="OpenMenu()"><i class="fa-solid fa-bars"></i></button>
        <nav class="navbar" id="navBar">
            <a href="" style="color: red;">Home</a>
            <a href="">Projects</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </nav>
    </header>

    <div class="stars-container">
        <div class="stars"></div>
    </div>


    <main>
        <section class="flex flex1" >
            <div class="aboutMe">
                <h1>Hi, I am Murilo Falconeri</h1>
                <h3>BackEnd Developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium totam dignissimos fugiat
                    aliquam nemo! Adipisci hic rem voluptate necessitatibus eligendi voluptatum. Inventore accusamus
                    perferendis minima quod similique ea nobis eius.</p>

                <div class="btns">
                    <button class="gitHub">gitHub</button>
                    <button class="Linkedin">linkedin</button>
                </div>
            </div>

            </div class="languages">
                <img class="imgs" id="logoMysql" src="assets/mysql-logo-png-transparent.png" alt="Logo Mysql">
                <img class="imgs" id="logoPhp" src="assets/PHP-logo.svg.png" alt="Logo PHP">
                <img class="imgs" id="logoLaravel" src="assets/985px-Laravel.svg.png" alt="">
                <img class="imgs" id="logoGit" src="assets/Git-Icon-1788C.png" alt="">
                <img class="imgs" id="logoJs" src="assets/logo-javascript-1024.png" alt="">
                <img class="imgs" id="logoWp" src="assets/Wordpress_Blue_logo.png" alt="">
                <img class="imgs" id="logoHtml" src="assets/logo-html-5-1536.png" alt="">
                <img class="imgs" id="logoCss" src="assets/logo-css-3-2048.png" alt="">
            <div>


        </section>

        <h1 class="title">About Me</h1>
        <hr>

        <section class="flex2">
            <div class="textAboutMe">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum architecto esse nihil obcaecati iure,
                    quisquam reiciendis voluptatibus ipsa rem corrupti, ratione quam soluta cumque ullam et similique
                    deserunt. Ab, rerum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi dicta iste
                    architecto et corrupti necessitatibus veniam repellat eos fuga molestias, debitis pariatur qui
                    beatae consequuntur quas quaerat, aperiam alias provident?</p>
                <span>Talk to me</span>
                <div class="contact">
                    email:
                    WhatsApp:
                    linkedin:
                    instagram:
                    Twitter:

                </div>
            </div>

            <div class="imgAboutMe">
                <img src="assets/WhatsApp Image 2023-09-17 at 20.10.06.jpeg" alt="">
            </div>
        </section>

        <h1 class="title">Most Recent Projects</h1>
        <hr>

        <section class="projects">
            <div class="gridProjects">
                <div class="project">
                    <!--Apae-->
                    <div class="card" id="apae">
                        <div class="overlay"></div>
                        <div class="info">
                            <h3 class="projectName">Apae Website</h3>
                            <p class="projectDes">Description</p>
                        </div>

                    </div>
                </div>

                <div class="project">
                    <!---SeriesController-->
                    <div class="card" id="series">
                        <div class="overlay"></div>
                        <div class="info">
                            <h3 class="projectName">SeriesController</h3>
                            <p class="projectDes">Description</p>
                        </div>
                    </div>
                </div>

                <div class="project">
                    <!---TodoList-->
                    <div class="card" id="list">
                        <div class="overlay"></div>
                        <div class="info">
                            <h3 class="projectName">Name</h3>
                            <p class="projectDes">Description</p>
                        </div>
                    </div>
                </div>

                <div class="project">
                    <!---Apae 2.0-->
                    <div class="card" id="apae2">
                        <div class="overlay"></div>
                        <div class="info">
                            <h3 class="projectName">Apae 2.0</h3>
                            <p class="projectDes">Description</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <!--- <h1 class="title">certificates</h1>--->
        <!--<hr>--->

        <section class="certificates">

        </section>
    </main>

    <footer>

    </footer>

    <script src="../js/menu.js"></script>
    <script src="../js/slider.js"></script>
</body>

</html>