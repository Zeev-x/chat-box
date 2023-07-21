<!-- Di buat oleh Zeev-x -->
<!-- Jangan lupa folow github saya di https://github.com/Zeev-x -->
<?php
  $admin = "Admin1201";
  
if( $_POST['nama'] != $admin){
  $name = $_POST["nama"];
  $text = $_POST["pesan"];
  $nameFile = "session.txt";
  $message = "<hr style='border: black 1px solid;'><p>$name : $text</p>";
  $file = fopen($nameFile,"a+");  
  fwrite($file,$message);  
  fclose($file);
} else if($_POST['nama'] == $admin) {
  $name = "<a style='color: red;'>Admin</a>";
  $text = $_POST["pesan"];
  $nameFile = "session.txt";
  $message = "<hr style='border: black 1px solid;'>
              <fieldset style='width: 50%;
                               margin: auto;
                               border-radius: 20px;
                               font-family: Monospace;
                               border: black 3px solid;'align='center'>
                <legend align='center'>
                  <h2 style='background-color: black;
                             color: red;
                             padding: 5px 20px;
                             border-radius: 30px;'>$name</h2>
                </legend>
                <a style='color: black;'>$text</a>
                <br><br>
              </fieldset>";
  $file = fopen($nameFile,"a+");  
  fwrite($file,$message);  
  fclose($file);
}
?>