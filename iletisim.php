<html>
<head>
<meta charset="utf-8" />
<title>:::İletişim:::</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">    
<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
<link href="bootstrap.min.css" rel="stylesheet" /> 
<link rel="stylesheet" href="style.css" type="text/css" />  

    <script src="analytics.js" ></script> 
</head>
    
<body>
<script src="menu.js" ></script>
    <?php
    if ($_POST){
    $diger ='MIME-Version: 1.0'.'\r\n';
    $diger = 'Content-type: text/html; charset=iso-8859-9'.'\r\n';
    $adsoyad = $_POST["adsoyad"];
    $eposta = $_POST["eposta"];
    $mesaj = $_POST["mesaj"];
    $konu = "İLETİŞİM BİLDİRİMİ";
    $kime = "mehmetarikan.ma@gmail.com";
    $icerik = "Gönderen:".$adsoyad."<br/>
    E-Posta: ".$eposta."<br/> 
    Konu: ".$konu;
    $diger .='From: ('.$adsoyad.')'.$eposta;
    
    $gonder = mail($kime,$konu,$icerik,$diger);
    
    if($gonder){
        echo "iletisim gonderildi";
    }
    
}else{ echo '<form action="" method="post">
<h2>İletişim Formu</h2>
<table cellpadding="5" cellspacing="5">
   <tr>
        <td>Ad-Soyad:</td>
        <td><input type="text" name="adsoyad" /></td>
   </tr>
   <tr>
       <td>E-Posta:</td>
       <td><input type="text" name="eposta" /> </td>
   </tr>
   <tr>
       <td>Mesaj</td>
       <td><textarea rows="4" cols="30" name="mesaj"></textarea></td>
   </tr>
   <tr>
       <td></td>
       <td><input type="submit" value="Gönder" </td>
   </td>
</table>
</form>';
    
}


?>
    
    
<script src="jquery-1.12.2.min.js" ></script>
<script src="bootstrap.min.js" ></script>  
    
</body>
    
</html>