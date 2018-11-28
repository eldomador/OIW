<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"> 
    <title>Książe Ziemniaków</title>
    <link rel="stylesheet" href="styles/Style.css">

    

  </head>
  <body>
    <header class="header">
      <div class="container">
      <h1>Książe Ziemniaków</h1>
        </div>
    </header>
    <nav class="nav">
        <div class="container">
       <ul>
          <li><a href="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</a></li>
          
        <li><a href="#o-firmie">O Firmie</a></li>
        <li><a href="#oferta">Oferta</a></li>
        <li><a href="#produkcja">Produkcja</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
      </ul>
      
        </div>
    </nav>

     

    
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.html">Strona Główna</a>
      <a href="frytki.html">Frytki</a>
      <a href="register.php">Rejestracja</a>
      <a href="login.php">Logowanie</a>
      

      
    </div>
    
    
    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>  -->
    
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>

    <section  class="section" id="o-firmie">
        <div class="container">
      <h2>O firmie</h2>
      <p>tyle czasu zostało do ostatnich zajeć:</p>
      <p  id="demo"></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
        
      <button>Zmień użytkownika</button>
        
       </div>
    </section>
    <section class="section">
        <div class="container" id="oferta">
        <H2>Oferta</H2>
        <button id="get-btn" type="button">Sprawdź oferte</button>
        <!-- <button type="button" onclick="loadDoc()">Change Content</button>  buton do tekstu ajaxa-->
        <div class="slideshow-container">

            <div class="mySlides fade">
              
              <img src="1.jpg" style="width:100%">
              <div class="text">Frytki Poslkie</div>
            </div>
            
            <div class="mySlides fade">
              
              <img src="2.jpg" style="width:100%">
              <div class="text">Frytki Belgijskie</div>
            </div>
            
            <div class="mySlides fade">
              
              <img src="3.jpg" style="width:100%">
              <div class="text">Frytki Niemieckie</div>
            </div>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
      </div>
      </section>
    <section  class="section">
        <div class="container" id="produkcja">
        <h2>Produkcja</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
        </div>
      </section>
      <section class="section" id="kontakt">
          <div class="container">
          <H2>Kontakt</H2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pharetra erat. Aliquam efficitur augue eget lorem blandit, sed suscipit arcu porttitor. Phasellus blandit purus ante, a ultricies arcu blandit ut. Pellentesque iaculis augue mauris, eu consectetur erat dignissim vitae. Nunc malesuada arcu interdum tristique vestibulum. Donec efficitur quam sapien, sed bibendum libero varius quis. Nunc vitae sapien non ligula accumsan tincidunt. Nunc tincidunt lorem est, ac porttitor odio facilisis eu. Aliquam laoreet eros in magna tempus sodales. Fusce pharetra, ligula eget ultricies imperdiet, ipsum lectus rutrum dui, non porttitor eros tellus ac massa. Nam fringilla cursus erat sed sodales. Duis quis libero sit amet enim facilisis convallis vel ac eros. Mauris efficitur posuere iaculis. Aliquam porta lacus et hendrerit ultrices.</p> 
          </div>
        </section>

      <footer>
          <div class="container">
        <p>&copy; Jakub Kosmalski</p>
          </div>
      </footer>
      
      <script>
      var myButton = document.querySelector('button');
      var myHeading = document.querySelector('h1');
      </script>

      <script>
        function setUserName() {
  var myName = prompt('wpisz swoje imie.');
  localStorage.setItem('name', myName);
  myHeading.textContent = 'Ziemiaki są super, ' + myName;
}

if(!localStorage.getItem('name')) {
  setUserName();
} else {
  var storedName = localStorage.getItem('name');
  myHeading.textContent = 'Ziemniaki są super, ' + storedName;
}
      </script>

      <script>myButton.onclick = function() {
          setUserName();
        }</script>
      
      <script src="scripts/jquery.js"></script>
      <script src="scripts/stickyfill.js"></script>
      <script src="scripts/test.js"></script>
      
      
      <script>


      $('.nav').Stickyfill();

      	$(function() {
			  $('a[href*="#"]:not([href="#"])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').stop().animate({
			          scrollTop: target.offset().top - 70
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});
      </script>
    <script>  
        var p1 = document.createElement('p');
        var text = document.createTextNode('Test appendChilda');
        p1.appendChild(text);
        document.getElementById('oferta').appendChild(p1);

        var xh1 = document.createElement('h1');
        var text = document.createTextNode('Test appendChilda');
        xh1.appendChild(text);
        document.getElementById('produkcja').appendChild(xh1);
      
       
      </script>
      <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("dec 12, 2018 13:20:00").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
        // Get todays date and time
        var now = new Date().getTime();
        
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>

      <!-- <script>
        function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("oferta").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "text.txt", true);
  xhttp.send();
}
        </script> dodanwanie tekstu ajaxem -->

  </body>
</html>
