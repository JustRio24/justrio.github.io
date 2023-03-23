<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/1280px-YouTube_full-color_icon_%282017%29.svg.png" type="image/svg+xml" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <title>Deka Tutorial</title> 
    <?php date_default_timezone_set("Asia/Jakarta"); if(isset($_GET['jawaban'])){$fp = fopen('dekatutorial.txt', 'r'); echo '<link rel="stylesheet" href="https://dekatutorial.github.io/18nembak/tampil.css" /></head><body><div class="top">Jawaban Script   <br />Deka Tutorial</div><div class="content">';while(!feof($fp)){echo "".fgets($fp)."<br>";} echo '</div></body></html>';die;fclose($fp);} if(isset($_POST['submit'])){ $date = date("d-M-Y (H:i)");$status = $_POST["Status"];$pesan = $_POST["Pesan"]; $fp = fopen('dekatutorial.txt', 'a'); fwrite($fp,$date."\nStatus :\n<strong>".$status."\n</strong> Pesan :\n<strong>".$pesan."</strong>\n\n"); fclose($fp);index(); } function index(){ $link = "";if(isset($_GET["link"])){$link = $_GET["link"];}echo '<link rel="stylesheet" href="https://dekatutorial.github.io/18nembak/page2.css" /></head><body><script src="https://dekatutorial.github.io/18nembak/page2.js"></script><script>timeku("'.$link.'");</script></body></html>';die;} ?> 
      <script>
        var musik = ""; 
        var backgound = ""; 
        var gambarStiker1 = ""; 
        var gambarStiker2 = ""; 
        var gambarStiker3 = "";
        var gambarStiker4 = "";
      </script> 
      <script src="https://dekatutorial.github.io/sweetalert2.all.min.js"></script> 
      <link rel="stylesheet" href="https://dekatutorial.github.io/18nembak/style.css" />
  </head> 
  <body>
     <script> popupku(); </script> 
     <div class="preload"> 
      <p>Lagi Loading Sayang...</p> 
    </div> 
    
    <div class="open"> 
       <div> 
        <div class="lope" onclick="ilang()">
          <i class="love material-icons-sharp"> favorite </i>
        </div> 
          <h3>Pencet Love nya</h3> 
      </div> 
    </div> 
      <div class="bg"></div> <div class="lopeBg"></div>
      <div class="top stiker"><img src="" /><img src="" /><img src="" /></div>
    <div class="ucapan">
      <div id="slider">
    <!-- Ucapan awal -->
        <p>Hallo Sayangkuu</p>
        <p>Selamat Ulang Tahun Yaa</p>
        <p>Semoga Panjang Umur Sehat Selalu...</p>
        <p>Hope all the Best for u</p>
    
    <!-- Pertanyaan -->
        <p>Kamu bahagia ga jadi Pacar aku?</p>
      </div><div id="slider">
    <!-- Ucapan diterima -->
        <p>Thanks For Being In My Life</p>
      </div>
    </div>
    <script>

      // PENTING : jika ekstensi file berbeda silahkan ganti di bawah ini
      musik = "musik.mp3";
      background = "background.jpg";
      gambarStiker1 = "FileStiker1.gif";
      gambarStiker2 = "FileStiker2.gif";
      gambarStiker3 = "FileStiker3.gif";
      gambarStiker4 = "mimibubu.gif";

    </script>
    <div class="button">
      <div>
        <button>Back</button>
        <button>Next</button>
      </div>
      <div>
        <button>Gamau</button>
        <button>Mau</button>
      </div>
      <div>
        <button>Kirim Pesan</button>
      </div>
    </div>
    <div class="container-pesan" style="display: none"> 
      <div class="kirim-pesan"> 
        <p>Kirim Pesan</p> 
          <form method="post"> 
              <input name="Status" hidden class="jawaban" type="text" value="" /> 
              <textarea required name="Pesan" id="" cols="30" rows="10" placeholder="Tulis pesan..."></textarea> 
              <button type="submit" name="submit">Kirim</button> 
          </form> 
      </div> 
    </div> 
    <script src="https://dekatutorial.github.io/18nembak/script.js"></script>
  </body>
</html>
