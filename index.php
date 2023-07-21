<!DOCTYPE HTML>
<!-- Di buat oleh Zeev-x -->
<!-- Jangan lupa folow github saya di https://github.com/Zeev-x -->
<html>
  <head>
    <meta charset="UTF-8" name="keywords">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>chat-v2</title>
  </head>
  <body>
    <div align="center">
      <h6>Jangan mengirim informasi pribadimu di sini !!</h6>
    </div>
    <fieldset style="width: 50%;
                     margin: auto;
                     border-radius: 20px;
                     background-color: white;
                     border: black 3px solid">
      <legend align="center">
        <h1 style="background-color: black;
                   color: white;
                   padding: 5px 20px;
                   border-radius: 30px;">Chat-box</h1>
      </legend>
      <div id="chat-box">Pesanmu akan di tampilkan di sini</div>
    </fieldset><br><br>
    <div class="input" align="center">
      <form action="" method="post" name="form1">
        <textarea align="left" name="nama" style="padding: 0px 10px;" placeholder="Enter your name" required></textarea><br><br>
        <textarea align="left" style="padding: 10px;" name="pesan" placeholder="Enter your message"></textarea><br><br>
        <button style="padding: 10px 70px;
                       font-family: Monospace;" onclick="send()">Send</button>
      </form>
    </div>
    <script src="function.js"></script>
  </body>
</html>