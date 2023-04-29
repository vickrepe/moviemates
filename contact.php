<?php include 'header.php'; ?>

<main class="content">
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recopilar los datos del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $usuario_telegram = $_POST["usuario_telegram"];
        $correo_electronico = $_POST["correo_electronico"];
        $telefono = $_POST["telefono"];
        $comentarios = $_POST["comentarios"];

        // Validar los campos obligatorios
        $errores = [];
        if (empty($nombre)) {
            $errores[] = "El campo nombre es obligatorio";
        }
        if (empty($apellido)) {
            $errores[] = "El campo apellido es obligatorio";
        }
        if (empty($correo_electronico)) {
            $errores[] = "El campo correo electrónico es obligatorio";
        }
        if (empty($telefono)) {
            $errores[] = "El campo teléfono es obligatorio";
        }

        // Si hay errores, redirigir a errormail.php
        if (!empty($errores)) {
            header("Location: errormail.php");
            exit;
        }

        // Crear el mensaje del correo electrónico
        $mensaje = "Nombre: $nombre\n";
        $mensaje .= "Apellido: $apellido\n";
        $mensaje .= "Usuario en Telegram: $usuario_telegram\n";
        $mensaje .= "Correo electrónico: $correo_electronico\n";
        $mensaje .= "Teléfono: $telefono\n";
        $mensaje .= "Comentarios: $comentarios\n";

        // Enviar el correo electrónico
        $para = "vicpres20@gmail.com";
        $asunto = "Nuevo mensaje del formulario de contacto";
        $cabeceras = "From: $correo_electronico\r\n";
        mail($para, $asunto, $mensaje, $cabeceras);

        // Redirigir a okmail.php
        header("Location: okmail.php");
        exit;
    }
    ?>
    <h1>Formulario de contacto</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-row">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre*" required>
        </div>
        <div class="form-row">
            <input type="text" id="apellido" name="apellido" placeholder="Apellido*" required>
        </div>
        <div class="form-row">
            <input type="email" id="usuario_telegram" name="usuario_telegram" placeholder="Usuario de Telegram">
        </div>
        <div class="form-row">
            <input type="email" id="correo_electronico" name="correo_electronico" placeholder="E-Mail*" required>
        </div>
        <div class="form-row">
            <input type="tel" id="telefono" name="telefono" placeholder="Teléfono*" required>
        </div>
        <div class="form-row" id="text-contact">
            <textarea id="comentarios" name="comentarios" placeholder="Puedes escribir aquí, si tienes algún comentario."></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
    <p>Si necesitas más información, contacta con nosotros a través de Telegram: <a href="https://t.me/userTelegram">@userTelegram</a> o a través de correo electrónico: <a href="mailto:correelec@gmail.com">correelec@gmail.com</a>.
    </p>
    <a href="index.php">
        <button>Inicio</button>
    </a>
</main>

<?php include 'footer.php'; ?>