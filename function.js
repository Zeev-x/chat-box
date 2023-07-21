const app = new XMLHttpRequest();

//untuk menampilkan chat
function view(){
  app.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      document.getElementById("chat-box").innerHTML = this.responseText;
    }
  };
  app.open("GET","session.txt",true);
  app.send();
}

//untuk mengambil chat
function send(){
  app.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      this.responseText;
    }
  };
  app.open("POST","data.php",true);
  app.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  app.send("nama="+form1.nama.value+"&pesan="+form1.pesan.value);
  form1.nama.value = "";
  form1.pesan.value = "";
  return false;
}

//untuk mengaktifkan fungsi dan merefresh setiap detik
setInterval(function(){view()},1000);
window.onload = view();