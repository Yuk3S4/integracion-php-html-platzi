<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail( $subject, $body, $email, $name, $html = false ) {

    // Configuración inicial de nuestro servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'b3941617f0b292';
    $phpmailer->Password = '********3e83';

    // Añadiendo destinatarios
    $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
    $phpmailer->addAddress($email, $name);

    $phpmailer->setFrom('from@example.com', 'Mailer');
    $phpmailer->addAddress('joe@example.net', 'Joe User');

    // Definiendo el contenido de mi email
    $phpmailer->isHTML($html); //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandar el correo
    $phpmailer->send();
}