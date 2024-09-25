<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CeSaMe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header" id="header">
        <div class="menu container">
            <a href="a" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="rss/img/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#header">Inicio</a></li>
                    <li><a href="#servicios">Profesionales</a></li>
                    <li><a href="#turnos">Turnos Online</a></li>
                    <li><a href="a">Mis Turnos</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>healthBOX</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo corporis voluptate molestiae numquam iure laudantium quisquam qui non eius veniam repudiandae nostrum ipsum, pariatur veritatis modi accusantium quaerat maxime aspernatur?</p>
                <a href="a" class="btn-1">Información</a>
            </div>
            <div class="header-img">
                <img src="rss/img/left.png" alt="">
            </div>

        </div>
    </header>
    
    <section class="about container">
        <div class="about-img">
            <img src="rss/img/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem quos tenetur magni ullam praesentium corporis tempore neque illum atque molestiae minima maiores, incidunt harum consequuntur ipsam odio illo, quidem placeat!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quos, minima, ullam repudiandae dolores quae labore ratione perspiciatis amet, vitae quidem dicta pariatur eaque nesciunt libero provident! Enim, reprehenderit id.</p>
        </div>
    </section>

    <main class="servicio" id="servicios">
        <h2>PROFESIONALES</h2>
        <div class="servicio-content container">
            <div class="servicio-1">
                <i class="fa-solid fa-person-breastfeeding"></i>
                <h3>pediatria</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-pills"></i>
                <h3>ginecología</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hand-dots"></i>
                <h3>dermatología</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-heart-pulse"></i>
                <h3>cardiología</h3>
            </div>
        </div>
    </main>

    <section class="formulario container" id="turnos">
        <form method="post" autocomplete="off">

            <h2>Agenda Consulta</h2>

            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Edad">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Teléfono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Email">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalle de su Consulta"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onclick="myFunction()">
            </div>
        </form>
    </section>


    <footer class="footer" id="contacto">
        <div class="footer-content container">
            <div class="link">
                <a href="a" class="logo">Logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="a">aaaa</a></li>
                    <li><a href="a">bbbb</a></li>
                    <li><a href="a">cccc</a></li>
                    <li><a href="a">dddd</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href="http.//localhost-healthBOX"
        }
    </script>

</body>
</html>