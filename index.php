<!DOCTYPE html>
<html lang="en">
  <!-- 
  Yang mau tanpa wm, custom tampilan, bisa order web ucapan di Deka Tutorial (DM IG)
  Youtube: Deka Tutorial
  Tiktok: @deka_tutorial
  Instagram: @deka_tutorial
  -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deka Tutorial</title>
    <?php date_default_timezone_set("Asia/Jakarta"); if(isset($_POST['sayang'])){ $fp = fopen('dekatutorial.txt', 'a'); fwrite($fp, " <div> <p><span>Waktu</span> : ".date("d-M-Y (H:i)")."</p> <p><span>Sayang</span> : ".$_POST["sayang"]."</p> <p><span>Kangen</span> : ".$_POST["kangen"]."</p> <p><span>Pesan</span> : ".$_POST["pesan"]."</p> </div> "); fclose($fp); } if(isset($_GET['jawaban'])){ $fp = fopen('dekatutorial.txt', 'r'); echo ' <link rel="stylesheet" href="https://dekatutorial.github.io/19gombal/styleJawaban.css" /> </head> <body> <header> </header> '; while(!feof($fp)){ echo fgets($fp); } echo ' </body> </html> '; fclose($fp); die; } ?>
    <script src="https://dekatutorial.github.io/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://dekatutorial.github.io/19gombal/scriptDT.js"></script>
    <link rel="stylesheet" href="https://dekatutorial.github.io/19gombal/style.css" />
  </head>
  <body><div class="preload"><p>Loading dulu . . .</p></div>
    <div class="content">
      <button>Klik Aku</button>
    </div>
    <script>

      musik = "musik.mp3";

      window.addEventListener("load", (event) => { var load = document.querySelector(".preload"); load.style = "opacity: 0; transition: .5s ease all;"; setTimeout(() => { load.style.display = "none"; }, 500); }); document.querySelector("button").addEventListener("click", start); var musikku = new Audio(musik); musikku.loop = true; popupku();
      async function start() {
        musikku.play();
        formKu();
        inputSayang = document.querySelectorAll("input")[0];
        inputKangen = document.querySelectorAll("input")[1];
        inputPesan = document.querySelectorAll("input")[2];
        await dekatutorial.fire({

          imageUrl:"gambar4.gif",
          title: "Hai iness cantik! 😆",

        });
        await dekatutorial.fire({
          
          imageUrl:"gambar90.gif",
          title: "sory minta waktunya bentar aja ya😁",
          
        });
          await dekatutorial.fire({

            imageUrl:"gambar2.gif",
            title: "tetap semangat ya 💪 buat acara koornya minggu depan",

        });
            await dekatutorial.fire({
            
            imageUrl:"gambar10.gif",
            title: "semoga acaranya sukses ya",

        });
        
            await dekatutorial.fire({

            imageUrl:"gambar11.gif",
            title: "maap ga bisa ikut acaranya ya",
             
        });

            await dekatutorial.fire({

            imageUrl:"gambar9.gif",
            title: "owh ia semangat juga buat ujianya UASnya nanti ya iness",
                
        });

             await dekatutorial.fire({
  
           imageUrl:"gambar6.gif",
           title: "jangan kecapean juga ya",

                  });

            await dekatutorial.fire({

            imageUrl:"gambar7.gif",
            title: "jaga kesehatan juga ya iness",

                    });

            await dekatutorial.fire({

            imageUrl:"gambar8.gif",
            title: "owh ia kalo iness lagi ga sibuk dan mager kabarin ya xixixi",

                      });

            await dekatutorial.fire({

            imageUrl:"gambar1.gif",
            title: "makasi udah mau liat ini ya iness ❤ u",
                        
        });
      }
    </script>
  </body>
</html>
