<?php
    print_r($_POST);
    if($_POST){
        $nombre         = $_POST['nombre'];
        $correo         = $_POST['correo'];
        $telefono       = $_POST['telefono'];
        $departamento   = $_POST['departamento'];
        $mensaje        = $_POST['mensaje'];

        $email_to      = $departamento;
        $email_subject = "Contacto desde el sitio web agrogen.com";

        $email_message  = '<html>
    <body style="text-align:center;">
        <table style="padding: 15px 10px 30px 10px; margin: 0 auto; background-color:#3c9e4a;">
            <tr>
                <td>
                    <table style="border-collapse:collapse; border: none; font-family: arial; color:#FFF;">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <h2 style="text-align:center; font-size: 28px; margin:0; padding:15px; margin-bottom: 25px;"><span style="font-weight: bold; font-size:36px; color: #f1c37d;">Agrogen,</span> contacto desde formulario</h2>
                                </td>           
                            </tr>
                            <tr style="text-align: left;">
                                <td style="width:130px; padding: 10px 5px;">
                                    Nombre:
                                </td>
                                <td style="background-color: #FFFFFF; color:#000000; width:570px; padding: 10px 5px; border-bottom: solid 5px #3c9e4a">'.$nombre.'</td>
                            </tr>
                            <tr style="text-align: left;">
                                <td style="padding: 10px 5px;">
                                    Correo:
                                </td>
                                <td style="background-color: #FFFFFF; margin:0;  color:#000000; padding: 10px 5px; border-bottom: solid 5px #3c9e4a">'.$correo.'</td>
                            </tr>
                            <tr style="text-align: left;">
                                <td style="padding: 10px 5px;">
                                    Teléfono:
                                </td>
                                <td style="background-color: #FFFFFF;  color:#000000; padding: 10px 5px; border-bottom: solid 5px #3c9e4a">'.$telefono.'</td>
                            </tr>
                            <tr style="text-align: left;">
                                <td style="padding: 10px 5px;">
                                    Departamento:
                                </td>
                                <td style="background-color: #FFFFFF;  color:#000000; padding: 10px 5px; border-bottom: solid 5px #3c9e4a">'.$departamento.'</td>
                            </tr>
                            <tr style="text-align: left;">
                                <td style="padding: 10px 5px;">
                                    Mensaje:
                                </td>
                                <td style="background-color: #FFFFFF;  color:#000000; padding: 10px 5px; border-bottom: solid 5px #3c9e4a">'.$mensaje.'</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>    
    </body>
</html>';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: '.$correo."\r\n".
        'Reply-To: '.$correo."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Se envia el correo

        @mail($email_to, $email_subject, $email_message, $headers);

    }
?>


