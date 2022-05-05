<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index(Router $router){

        $propiedades = Propiedad::get(3);
        $inicio = true;

        $router->render('paginas/index', [
            'propiedades' => $propiedades,
            'inicio' => $inicio
        ]);
    }

    public static function nosotros(Router $router){
        
        $router->render('paginas/nosotros');
    }

    public static function propiedades(Router $router){

        $propiedades = Propiedad::all();

        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades
        ]);
    }

    public static function propiedad(Router $router){

        $id = validarORedirecionar('/propiedades');
        $id = $_GET['id'];

        $propiedad = Propiedad::find($id);

        $router->render('paginas/propiedad', [
            'propiedad' => $propiedad
        ]);
    }

    public static function blog(Router $router){

        $router->render('paginas/blog');
    }

    public static function entradas(Router $router){

        $router->render('paginas/entrada');
    }

    public static function contacto(Router $router){

        $mensaje = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $respuestas = $_POST['contacto'];

            // Crear una instancia
            $mail = new PHPMailer();

            // Configurar SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = 'f4f0763e7a6b51';
            $mail->Password = 'ddecd5e81cc2a7';
            $mail->SMTPSecure = 'tls';

            // COnfigurar el contenido del mail
            $mail->setFrom('admin@bienesraices.com');
            $mail->addAddress('admin@bienesraices.com', 'BienesRaices.com');
            $mail->Subject = 'Tienes un nuevo mensaje';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>';
            $contenido .= '<p>Nombre: '. $respuestas['nombre'] . '</p>';            

            // Enviar de forma condicional algunos campos de email o telefono
            if ($respuestas['contacto'] === 'telefono') {
                $contenido .= '<p>Eligio ser contactado por telefono:</p>';
                $contenido .= '<p>Telefono: '. $respuestas['telefono'] . '</p>';
                $contenido .= '<p>Fecha Contacto: '. $respuestas['fecha'] . '</p>';
                $contenido .= '<p>Hora: '. $respuestas['hora'] . '</p>';
            }else{
                $contenido .= '<p>Eligio ser contactado por email:</p>';
                $contenido .= '<p>Email: '. $respuestas['email'] . '</p>';
            }
            
            $contenido .= '<p>Mensaje: '. $respuestas['mensaje'] . '</p>';
            $contenido .= '<p>Vende o Compra: '. $respuestas['tipo'] . '</p>';
            $contenido .= '<p>Precio: $'. $respuestas['precio'] . '</p>';
            $contenido .= '</html>';
            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin HTML';

            // Enviar el email
            if ($mail->send()) {
                $mensaje = 'Mensaje enviado correctamente';
            }else {
                $mensaje = 'Mensaje No enviado';
            }
        }
        
        $router->render('paginas/contacto', [
            'mensaje' => $mensaje
        ]);
    }
}