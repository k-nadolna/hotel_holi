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
            <a href="#pricelist">Cennik</a>
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
      <img src="images/img1.jpg" height="594px" width="1000px" class="slider_img active">
      <img src="images/img2.jpg" height="594px" width="1000px" class="slider_img">
      <img src="images/img3.jpg" height="594px" width="1000px" class="slider_img">
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
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sunt harum numquam dicta. Nemo fuga unde perspiciatis ex maxime quaerat excepturi itaque reprehenderit corporis error, earum iusto magni repudiandae iste.
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
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, dolorem? Sapiente, velit asperiores corrupti </p>
        </div>
      </div>

      <div class="attraction">
        <img src="images/attractions/playground.jpg" height="660px" width="660px" class="atr_img">
        <p>Plac zabaw</p>
        <div class="atr_text">
          <h3>Plac zabaw</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur, commodi cum voluptatibus, fuga, alias adipisci similique doloremnte molliti sit iusto!</p>
        </div>
      </div>

      <div class="attraction">
        <img src="images/attractions/swimming_pool.jpg" height="660px" width="660px" class="atr_img">
        <p>Basen</p>
        <div class="atr_text">
          <h3>Basen</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quam facilis nobis molestiae eos, natus est impedit, architecni labore!</p>
        </div>
      </div>

      <div class="attraction">
        <img src="images/attractions/playroom.jpg" height="660px" width="660px" class="atr_img">
        <p>Sala zabaw</p>
        <div class="atr_text">
          <h3>Sala zabaw</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quam, aboriosam animi itaque dignissimos dolorem, cum aliquid! Accusamus ea minima perspiciatis dolore.</p>
        </div>
      </div>

      <div class="attraction">   
          <img src="images/attractions/sauna.jpg" height="660px" width="660px" class="atr_img">
          <p>Sauna</p>
          <div class="atr_text">
            <h3>Sauna</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos temporibus praesenelit molestias minus adipisci? Ullam sunt sapiente itaque explicabo aut quia.</p>
          </div>
      </div>

      <div class="attraction">
        <img src="images/attractions/trekking.jpg" height="660px" width="660px" class="atr_img">
        <p>Trekking</p>
        <div class="atr_text">
          <h3>Trekking</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptat ut.</p>
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
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti iste quae officiis minima dolorem. Deserunt magnam nulla culpa vitae animi quia, sed quas, maxime harum, rem necessitatibus cum ipsam dolorum!
        </p> 
      </div>

      <div class="oferta oferta2">
        <img src="images/room2.jpg" class="oferta_img">
        <h3>Pokój 2-osobowy</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, quisquam quibusdam hic dolores unde eligendi rerum repellat aliquid a modi, fugiat deserunt, laborum ipsum? Atque culpa nemo voluptate modi necessitatibus.
        </p>
      </div>

      <div class="oferta oferta3">
        <img src="images/room3.jpg" class="oferta_img">
        <h3>Pokój 3-osobowy</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptatem nisi labore quam cumque sapiente sequi, obcaecati velit aut totam aperiam expedita, quaerat dicta magni repellendus, possimus veniam adipisci quis?
        </p>  
      </div>

    </div>

    <div class="oferta_popup">
      <img src="" height="530px" width="800px" class="ofeta_popup_img">
      <button type="button" class="oferta_popup_close">x</button>
    </div>
  </div>  

  <div id="pricelist">
    <h2> Cennik</h2>
    <table>
      <thead>
        <th>typ pokoju</th>
        <th>sezon niski</th>
        <th>sezon wysoki</th>
        <th class="hidden_column">święta, długie weekendy</th>
      </thead>
      <tbody>
        <tr>
          <td>1-osobowy</td>
          <td> 100 zł</td>
          <td> 200 zł</td>
          <td rowspan="3" class="hidden_column">ceny ustalane indywidualnie</td>
        </tr>
        <tr>
          <td> 2-osobowy</td>
          <td> 200 zł</td>
          <td> 300 zł</td>
        </tr>
        <tr>
          <td> apartament</td>
          <td> 300 zł</td>
          <td> 400 zł</td>
        </tr>
      </tbody>
    </table>
    <p class="pricelist_info">W przypadku świąt i długich weekendów ceny ustalane indywidualnie</p>
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
          <label>imię i nazwisko</label>
          <input type="text" name="name" required>
          <label>adres e-mail</label>
          <input type="email" name="email" required>
          <label>nr telefonu</label>
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
        
          <br>
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

    <div>
      <h3>Menu</h3>
      <ul class="footer_menu">
        <li><a href="#aboutus">O nas</a> </li>
        <li><a href="#offer">Oferta</a> </li>
        <li><a href="#attractions">Atrakcje</a></li>
        <li><a href="#pricelist">Cennik</a> </li>
        <li><a href="#gallery">Galeria</a> </li>
        <li><a href="#contact">Kontakt</a> </li>
      </ul>
    </div>
  </div>

  <script src="app.js"></script>
</body>
</html>