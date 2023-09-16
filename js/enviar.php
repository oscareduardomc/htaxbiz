<?php

if (isset($_POST['submit'])){
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $destinatario = 'temporalprueba2023@gmail.com';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $asunto = 'none';
        $header = "Enviado desde la pagina de Houston Tax and Business";
        $mensajeCompleto = $message;
        @mail($destinatario, $asunto, $name, $email, $mensajeCompleto, $header);
        echo '<script>alert("Correo enviado exitosamente!"); window.location="/htaxbiz/salient/index.php"</script>';
    }else
    {
        echo '<script>alert("Debes llenar todos los campos"); window.location="/htaxbiz/salient/index.php"</script>';
       
    }
}
    
    // echo "<script>alert('Correo enviado exitosamente')<\script>";
    // echo "<script> setTimeout(\"location.href = 'index.php'\",100)<script>";
    






    // if (isset($_POST['submit'])){
    //     if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
    //         $name = $_POST['name'];
    //         $email = $_POST['email'];
    //         $message = $_POST['message'];
    //         $header = "From: noreply@example.com" . "\r\n";
    //         $header = "Reply-To: noreply@example.com" . "\r\n";
    //         $header = "X-Mailer: PHP/" . phpversion();
    //         $mail = @mail("oscarm@htaxbiz.com",$name,$message,$header);
    //         if ($mail){
    //             echo "<h4>Correo enviado exitosamente!</h4>";
    //         }
    //     }
    // }




// Otra Prueba
	// $nombre = $_POST['name'];
	// $email = $_POST['email'];
	// $asunto = 'Formulario Rellenado';
	// $mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['message'];


	// if(mail('oscarm@htaxbiz.com', $asunto, $mensaje)){
	// 	echo "Correo enviado";
	// }
 ?>