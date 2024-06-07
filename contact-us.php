<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Contact</title>
</head>
<body>
<?php include 'components/header.php'; ?>
<div class="container-row-container">
    <div class="email">
        <div class="email-cont">
        <h1>
            ¡Envíanos un correo!
        </h1>

        <form action="POST" class="email">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div>
                <label for="teléfono">Telefóno:</label>
                <input type="tel" id="teléfono" name="teléfono" placeholder="Telefono" required>
            </div>
            <div>
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" placeholder="Correo" required>
            </div>
            <div>
                <label for="mensaje">Mensaje:</label>
                <textarea name="memsaje" id="mensaje" placeholder="Escribe tu mensaje aquí...">
                </textarea>
            </div>
        </form>
        </div>
        
    </div>
    <div class="ubication-contact">
        <div class="map">
                <h1>
                    Ubícanos en
                </h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1981.5517612762133!2d-79.78365213207255!3d-6.634063754139722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMzgnMDEuNyJTIDc5wrA0NycwMC4yIlc!5e0!3m2!1ses-419!2spe!4v1717781580836!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="info-container">
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
            <img src="/assets/img/catlocation.webp" alt="">
        </div>
        

    </div>
</div>
<?php include 'components\footer.php'; ?>
</body>
</html>