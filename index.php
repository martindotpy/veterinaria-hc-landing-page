<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Veterinaria HC - SPA & Pet Shop</title>
  </head>
  <body>
    <?php include './components/header.php';?>
    <div class="container">
      <div class="about-container" id="us">
        <div class="text">
          <h1>¿Quiénes somos?</h1>
          <p>
            Somos una clínica que se preocupa por las mascotas tanto <br />como
            tú. Con una dedicación apasionada por el bienestar animal,
            <br />nuestro equipo está capacitado para atender las principales
            necesidades <br />de tu mascota. <br />¡Bienvenidos a la familia de
            nuestra clínica veterinaria local!
          </p>
          <a href="about-us.php" class="button">Contáctanos</a>
        </div>
        <img src="./assets/img/dogflower.webp" alt="" loading="lazy" />
      </div>
      <hr />
      <div class="services" id="services">
        <h1>Nuestros servicios</h1>
        <p>
          Ofrecemos múltiples servicios, la salud de tu mascota nos importa
          <br />y queremos darle los mejores cuidados
        </p>
        <div class="cards">
          <div class="card">
            <h3>
              Spa <br />
              Veterinario
            </h3>
            <p>
              Ofrecemos tratamientos de bienestar diseñados <br />
              para mimar a su mascota <br />y mantenerla feliz y saludable.
            </p>
          </div>
          <div class="card">
            <h3>Consultas <br />integrales</h3>
            <p>
              Realizamos consultas exhaustivas para <br />
              evaluar la salud y bienestar de su mascota. <br />Desde exámenes
              de rutina hasta diagnósticos, <br />la salud de su mascota es
              nuestra prioridad.
            </p>
          </div>
          <div class="card">
            <h3>Precios bajos</h3>
            <p>
              Ofrecemos productos para su mascota, <br />desde juguetes hasta
              productos para el <br />cuidado de tu mascota.
            </p>
          </div>
        </div>
        <div class="img">
          <img src="./assets/img/cathome.webp" alt="" loading="lazy" />
        </div>
      </div>
      <hr />
      <div class="location" id="location">
        <div class="info">
          <div>
            <h2>Local y Contacto</h2>
            <p>Calle Las Palmeras-Ferreñafe</p>
            <p>+51 922 362 525</p>
          </div>
          <div>
            <h2>Horarios</h2>
            <p>Lunes a viernes</p>
            <p>8:00 am - 9:00 pm</p>
            <p>Sábado y domingo</p>
            <p>9:00 am - 6:00 pm</p>
          </div>
        </div>
        <img src="./assets/img/doghome.webp" alt="" loading="lazy" />
        <div class="map">
          <h1>Ubícanos en</h1>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1981.5517612762133!2d-79.78365213207255!3d-6.634063754139722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMzgnMDEuNyJTIDc5wrA0NycwMC4yIlc!5e0!3m2!1ses-419!2spe!4v1717781580836!5m2!1ses-419!2spe"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
    <?php include './components/footer.php';?>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
