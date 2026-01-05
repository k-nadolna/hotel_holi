<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Holi</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  
  <nav>
    <div class="navbar">
      <div class="menu_logo">
        <img src="images/logo.png" height="512px" width="512px" class="img_logo">
        <p>Hotel Holi</p>
      </div>

      <div class="menu">
        <button type="button" class="button_menu">
          <img src="images/icons/menu.png" height="512px" width="512px">
        </button>
        <ul class="menu_list">
          <button type="button" class="button_menu_close">x</button>
          <li class="li_aboutus">
            <a href="#aboutus">O nas</a> 
          </li>
          <li>
            <a href="#attractions">Atrakcje</a>
          </li>
          <li>
            <a href="#offer">Oferta</a>
          </li>
          <li>
            <a href="#gallery">Galeria</a>
          </li>
          <li>
            <a href="#contact">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>  
  </nav>


  <div id="slider">
    <h1>Witamy w Hotelu Holi</h1>
    <div>
      <img src="images/hero1.jpg" height="594px" width="1000px" class="slider_img active">
      <img src="images/hero2.jpg" height="594px" width="1000px" class="slider_img">
      <img src="images/hero3.jpg" height="594px" width="1000px" class="slider_img">
    </div>
      
    <button type="button" class="button_slider_left"><</button>
    <button type="button" class="button_slider_right">></button>

    <div class="dots">
      <button type="button" class="dot"></button>
      <button type="button" class="dot dot2"></button>
      <button type="button" class="dot dot3"></button>
    </div>
  </div>

  <div id="aboutus">
    <div>
      <img src="images/img4.jpg" height="512px" width="1000px" class="aboutus_img">
    </div>
    <div class="aboutus_text">
      <h2>Witaj na naszej stronie</h2>
      <p>
        Hotel Holi to kameralny hotel położony wśród górskiej przyrody, stworzony z myślą o prawdziwym wypoczynku. Stawiamy na ciszę, komfort i swobodną atmosferę, dzięki której można zwolnić tempo i cieszyć się każdą chwilą z dala od codziennego pośpiechu.
      </p>
      <button type="button" class="aboutus_button" href="#contact">Napisz do nas</button>
    </div>
  </div>

  <div id="attractions">
    <h2>Atrakcje</h2>

    <div class="attractions">

      <div class="attraction">
        <img src="images/attractions/massage.jpg" height="660px" width="660px" class="atr_img">
        <p>Masaż</p>
        <div class="atr_text">
          <h3>Masaż</h3>
          <p>Chwila głębokiego relaksu i regeneracji po dniu w górach. Idealny sposób, by zadbać o ciało i wyciszyć umysł. </p>
        </div>
      </div>

      <div class="attraction">
        <img src="images/attractions/playground.jpg" height="660px" width="660px" class="atr_img">
        <p>Plac zabaw</p>
        <div class="atr_text">
          <h3>Plac zabaw</h3>
          <p>Bezpieczna przestrzeń na świeżym powietrzu, sprzyjająca ruchowi i dobrej zabawie w naturalnym otoczeniu.</p>
        </div>
      </div>

      <div class="attraction">
        <img src="images/attractions/swimming_pool.jpg" height="660px" width="660px" class="atr_img">
        <p>Basen</p>
        <div class="atr_text">
          <h3>Basen</h3>
          <p>Przestrzeń do swobodnego wypoczynku i odprężenia. Doskonały zarówno na poranny rozruch, jak i wieczorny relaks.</p>
        </div>
      </div>

      <div class="attraction">
        <img src="images/attractions/playroom.jpg" height="660px" width="660px" class="atr_img">
        <p>Sala zabaw</p>
        <div class="atr_text">
          <h3>Sala zabaw</h3>
          <p>Przestronna sala zabaw to miejsce, w którym dzieci mogą swobodnie spędzać czas, bawić się i rozwijać swoją wyobraźnię. </p>
        </div>
      </div>

      <div class="attraction">   
          <img src="images/attractions/sauna.jpg" height="660px" width="660px" class="atr_img">
          <p>Sauna</p>
          <div class="atr_text">
            <h3>Sauna</h3>
            <p>Ciepło, spokój i regeneracja. Sauna pozwala rozluźnić mięśnie i odzyskać energię po aktywnym dniu.</p>
          </div>
      </div>

      <div class="attraction">
        <img src="images/attractions/trekking.jpg" height="660px" width="660px" class="atr_img">
        <p>Trekking</p>
        <div class="atr_text">
          <h3>Trekking</h3>
          <p>Góry na wyciągnięcie ręki. Liczne szlaki zachęcają do spacerów i dłuższych wędrówek wśród pięknych krajobrazów.</p>
        </div>
      </div>

    </div>

  </div>

  <div id="offer">
    <h2>Oferta</h2>
    <div class="oferta_grupa">
      <div class="oferta oferta1">
        <img src="images/room1.jpg" class="oferta_img">
        <h3>Pokój 1-osobowy</h3>
        <p>
          Kameralny i komfortowy pokój, idealny dla osób podróżujących solo. Zapewnia wygodną przestrzeń do odpoczynku oraz spokojną atmosferę sprzyjającą relaksowi po dniu spędzonym w górach.
        </p> 
      </div>

      <div class="oferta oferta2">
        <img src="images/room2.jpg" class="oferta_img">
        <h3>Pokój 2-osobowy</h3>
        <p>
          Przestronny i przytulny pokój, stworzony z myślą o wspólnym wypoczynku. To doskonałe miejsce na komfortowy nocleg i regenerację w górskim otoczeniu.
        </p>
      </div>

      <div class="oferta oferta3">
        <img src="images/room3.jpg" class="oferta_img">
        <h3>Pokój 3-osobowy</h3>
        <p>
          Najbardziej przestronna opcja dla osób ceniących wygodę i swobodę. Apartament oferuje większą przestrzeń do wypoczynku oraz podwyższony standard, idealny na dłuższy pobyt.
        </p>  
      </div>

    </div>

    <div class="oferta_popup">
      <img src="" height="530px" width="800px" class="ofeta_popup_img">
      <button type="button" class="oferta_popup_close">x</button>
    </div>
  </div>  


  <div id="gallery">
    <h2>Galeria</h2>
    
    <div class="gallery">
      <img src="images/img1.jpg" height="594px" width="1000px" class="gallery_img">
      <img src="images/img2.jpg" height="594px" width="1000px" class="gallery_img">
      <img src="images/img3.jpg" height="594px" width="1000px" class="gallery_img">
      <img src="images/img4.jpg" height="594px" width="1000px" class="gallery_img">
      <img src="images/img5.jpg" height="594px" width="1000px" class="gallery_img">
      <img src="images/img6.jpg" height="594px" width="1000px" class="gallery_img">
      <img src="images/img7.jpg" height="594px" width="1000px" class="gallery_img">
      <img src="images/img8.jpg" height="594px" width="1000px" class="gallery_img">
      <img src="images/img9.jpg" height="594px" width="1000px" class="gallery_img">
    </div>

    <div class="gallery_popup">
      <img src="" height="594px" width="1000px" class="gallery_popup_img">
      <button type="button" class="gallery_close">x</button>
      <button type="button" class="gallery_prev"><</button>
      <button type="button" class="gallery_next">></button>
    </div>
  </div>

  <div id="contact">
    <div class="contact-container">
       <h2>Napisz do nas</h2>

       <?php
          if(isset($_POST['submit'])){
            $recipient = "kontakt@resposite.pl";
            $subject = $_POST['subject'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $dateFrom = $_POST['date_from'] ?? '';
            $dateTo =$_POST['date_to'] ?? '';
            $message = $_POST['message'];

            $body = "<p>Wiadomość od: $name ($email)</p>
                    <p>Numer telefonu: $phone</p>
                    <p>Data rezerwacji: $dateFrom - $dateTo</p>
                    <p>Wiadomość:</p>
                    <p> $message </p>";

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: kontakt@resposite.pl\r\n";
            $headers .= "Reply-To: $email\r\n";

            if(empty($recipient) || empty($subject) || empty($message)){
              

               echo "<div class='danger-message'>
                      <p>Wszystkie pola sa wymagane</p>
                    </div>";
            }else{
              if(mail($recipient, $subject, $body, $headers)){
              echo "<div class='success-message'>
                      <p>Mail został wysłany</p>
                    </div>";
              }else{
              echo "<div class='danger-message'>
                      <p>Mail nie został wysłany</p>
                    </div>";
              }
            }

            
          }
       ?>
       
      <form action="#contact" method="POST">
      <fieldset>
        <div class="contact_grid">
          <label>Imię i nazwisko</label>
          <input type="text" name="name" required>
          <label>Adres e-mail</label>
          <input type="email" name="email" required>
          <label>Nr telefonu</label>
          <input type="text" name="phone" required>
       
          <label>Temat wiadomości</label>
         
         <div class="formlularz_wyrownanie">
          <input type="radio" name="subject" value="question" id="question" required>
          <label for="question">zapytanie</label>
          <input type="radio" name="subject" value="reservation" id="reservation" required>
          <label for="reservation">rezerwacja</label>
          <input type="radio" name="subject" value="other" id="other" required>
          <label for="other">inne</label>
         </div> 
        
          <label> Termin rezerwacji</label>


          <?php
              $today = date('Y-m-d');
              $nextYear = date('Y-m-d', strtotime('+1 year'));
          ?>
          <div class="data_rezerwacji">
            <input type="date" name="date_from" min=<?=$today ?>>
            <p> - </p>
            <input type="date" name="date_to" min=<?=$today ?> max=<?= $nextYear ?>>
          </div>
       
          <label>Treść wiadomości</label>
          <textarea name="message" required ></textarea>
        
          <br class="hidden">
          <div class="form_buttons">
            <input type="reset" value="Wyczyść" class="form_button">   
            <input type="submit" value="Wyślij" class="form_button" name="submit">

          </div>
        </div>
      </fieldset>
    </form>
    </div>
    
  </div>

  <div id="footer">
    <div class="footer_address">
      <h3>Hotel Holi</h3>
      <address>ul. Widokowa 2 <br>
      11-111 Karpacz
      </address>
      
      <div>
        <img src="images/icons/mail.png" height="512px" width="512px">
        <a href="mailto: kontakt@holi.pl">kontakt@holi.pl</a>
      </div>

      <div>
        <img src="images/icons/phone-call.png" height="512px" width="512px">
        <a href="tel. 123456789">tel. 123456789</a>
      </div>
    </div>

    <div class="footer_social">
      <h3>Bądź na bieżąco</h3>
      <div>
        <a href="#facebook">
          <img src="images/icons/facebook.png" height="512px" width="512px">
          facebook
        </a>

        <a href="#instagram">
          <img src="images/icons/instagram.png" height="512px" width="512px">
          instagram
        </a>

        <a href="#tiktok"> 
          <img src="images/icons/tiktok.png" height="512px" width="512px">
          tiktok
        </a>
      </div>
    </div>

    <div class="footer_menu">
      <h3>Menu</h3>
      <ul>
        <li><a href="#aboutus">O nas</a> </li>
        <li><a href="#offer">Oferta</a> </li>
        <li><a href="#attractions">Atrakcje</a></li>
        <li><a href="#gallery">Galeria</a> </li>
        <li><a href="#contact">Kontakt</a> </li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>Created by <a href="https://www.resposite.pl/"><strong>Resposite.pl</strong></a></p>
  </div>

  <script src="app.js"></script>
</body>
</html>