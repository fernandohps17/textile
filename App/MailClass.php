<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailClass
{
  private $host = 'smtp.us.appsuite.cloud';
  private $userName = 'contacto@mxgravity.com';
  private $password = 'p6z.sSK(N4C-';
  private $smtpSecure = 'ssl';
  private $port = 465;
  private $charset = 'UTF-8';
  private $configMail;

  public function __construct()
  {
    $this->configMail = new PHPMailer(true);
    $this->configMail->isSMTP();
    $this->configMail->SMTPDebug  = 0;
    $this->configMail->SMTPAuth   = true;
    $this->configMail->Host       = $this->host;
    $this->configMail->Username   = $this->userName;
    $this->configMail->Password   = $this->password;
    $this->configMail->SMTPSecure = $this->smtpSecure;
    $this->configMail->Port       = $this->port;
    $this->configMail->CharSet    = $this->charset;
    $this->configMail->isHTML(true);
    $this->configMail->setFrom($this->userName, 'CONSULTA LANDING PAGE MACEITOTEXTILE');
    $this->configMail->AddAddress('contacto@mxgravity.com');
  }

  public function consulta($data)
  {
    try {
      $this->configMail->Subject = "CONSULTA DEL CLIENTE: " . $data['name'] . "  -  https://www.maceiotextile.com";
      $this->configMail->Body    =
        "
      <html>
        <head>
          <title>HTML</title>
        </head>
        <body>
          <a href='https://www.maceiotextile.com'>
          <img src='https://www.maceiotextile.com/public/icon/favicon.ico' alt='logo' title='logo'>
          </a>
          <h1>El siguiente cliente ha realizado una consulta:</h1>
          <p> </p>

          <h2>WEB: https://www.maceiotextile.com</h2>
          <p> </p>
          <p><strong>Nombre Cliente: </strong>" . $data['name'] . "</p>
          <p><strong>Email: </strong>" . $data['email'] . "</p>
          <p><strong>Mensaje: </strong>" . $data['mensaje'] . "</p>
          <p></p>
          <p><strong>Aceptada Políticas de Privacidad.</strong></p>

        </body>
      </html>
      ";
      $this->configMail->send();
      return true;
    } catch (Exception $e) {
      return false;
    }
  }

}
