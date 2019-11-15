<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no, initial-scale=1, maxium-scale=1, minium-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pupusas Virtuales</title>
    <link rel="stylesheet" href="static/css/estilos.css">
    <link rel="icon" href="static/images/favicon-pupusa.ico">
</head>
<body>
    <header>
    <div class="contenedor">
        <h1 class="icon-free-code-camp"> Pupusas Virtuales</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
            <a href="">Inicio</a>
            <a href="#pupusas">Pupusas</a>
            <a href="#blog">Blog</a>
            <a href="#contacto">Contacto</a>
            <a href="https://github.com/raulpenate/proyecto-gsw" target="_blank">Github</a>
        </nav>
    </div>
</header>

<main>
    <section id="banner">
        <img src="static/img/pupusa-banner.jpg">
        <div class="contenedor">
            <h2>¡A mi me gustan las pupusas!</h2>
            <p>Con curtido y salsa de tomate.</p>
            <a href="https://es.wikipedia.org/wiki/Pupusa" target="_blank">Leer más</a>
        </div>
    </section>

    <section id="pupusas">
        <h2>¿Qué son las pupusas virtuales haber xdxd?</h2>
        <p> Pupusas virtuales es un proyecto que desea virtualizar las pupusas para poderlas distribuir electrónicamente a todo El Salvador y luego a todo el mundo, ya que como sabemos las pupusas son amor y al compartirlas estamos repartiendo amor.</p>
    </section>

    <section id="blog">
        <h3>El Blog de las pupusas.</h3>
        <div class="contenedor">
        <article>
            <img src="static/img/pupusa-uno.jpg" alt="">
            <h4>Famosos y Pupusas.</h4>
        </article>
        <article>
            <img src="static/img/pupusa-dos.jpg" alt="">
            <h4>Comer pupusas previene la delgadez.</h4>
        </article>
        <article>
            <img src="static/img/pupusa-tres.jpg" alt="">
            <h4>Nayib prohibe las pupusas de arroz.</h4>
        </article>
        </div>
    </section>
</main>

<section id="contacto">
<form action="enviar.php" method="post">
    <h2>CONTACTO</h2>
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="text" name="email" placeholder="Correo" required>
    <textarea name="message" placeholder="Escribe aquí tu mensaje a la patria de la pupusa: " required></textarea>
    <input type="submit" value="Enviar" id="boton">
 </form>
</section>  

<footer>
    <div class="contenedor">
        <p class="patas">Pupusas virtuales &copy; 2019</p>
        <div class="redes">
        <a class="icon-facebook-squared" href="https://www.facebook.com/factura.puertas.75" target="_blank"></a>
        <a class="icon-facebook-squared" href="https://www.facebook.com/linux.valladares" target="_blank"></a>
        <a class="icon-facebook-squared" href="https://www.facebook.com/william.hernandez.31149359" target="_blank"></a>
        <a class="icon-facebook-squared" href="https://www.facebook.com/whiteshirtforyou/" target="_blank"></a>
        </div>
    </div>
</footer>

</body>
</html>
