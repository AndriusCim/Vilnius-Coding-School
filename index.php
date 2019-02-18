<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>TEST</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
      <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/skippr.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="js/skippr.min.js"></script>
      <script>src="js/main.js"</script>
   </head>
   <body>
      <header>
         <nav id="navbar" class="navbar">
            <a href="">Menu 1 </a>
            <a href="">Menu 2 </a>
            <div class="logo-big"><img src="images/Logo.png" alt="Logo-big" ></div>
            <a href="">Menu 3</a>
            <a href="">Menu 4</a>  
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a>   
         </nav>
      </header>
      <div id="slider">
         <div id="theTarget">
            <div style="background-image: url('images/cherry-garden-exterior-5-1024-x-576.png')"></div>
            <div style="background-image: url('images/cherry-garden-exterior-5-1024-x-576.png')"></div>
            <div style="background-image: url('images/cherry-garden-exterior-5-1024-x-576.png')"></div>
         </div>
      </div>
      <div class="about">
         <img src="images/rectangle-3.png" alt="#">
         <div class="about-text">
            <h2> Lorem ipsum <br> luctus</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
         </div>
         <div class="box">
            <div class="box-text">
               <h2>Lorem ipsum</h2>
               <p>30 m2 ir 60 m2 jaukiems vakarams</p>
            </div>
            <div class="box-text-center ">
               <div class="box-line">
                  <h2>Lorem ipsum</h2>
                  <p>30 m2 ir 60 m2 jaukiems vakarams</p>
               </div>
            </div>
            <div class="box-text">
               <h2>Lorem ipsum</h2>
               <p>30 m2 ir 60 m2 jaukiems vakarams</p>
            </div>
         </div>
      </div>
      <div id="googleMap"></div>
      <div class="gallery">
         <h2>Lorem ipsum</h2>
         <div class="gallery-navbar">
            <nav id="menu">
               <label for="menu-toggle" class="menu-toggle">MENU</label>
               <input id="menu-toggle" type="checkbox" class="menu-toggle" />
               <div>
                  <a href="#" id="all">ALL</a>
                  <a href="#" id="type1">Type 1</a>
                  <a href="#" id="type2">Type 2</a>
                  <a href="#" id="type3">Type 3</a>
                  <a href="#" id="type4">Type 4</a>
               </div>
            </nav>
         </div>
         <div class="">
            <div class="wrapper">
               <div class="type type1"><img src="images/rectangle-8-copy-2.png" alt="js"></div>
               <div class="type type3"><img src="images/rectangle-8-copy.png" alt="js"></div>
               <div class="type type1"><img src="images/rectangle-8-copy-2.png" alt="js"></div>
               <div class="type type1 test2"><img src="images/rectangle-8-copy.png" alt="js"></div>
               <div class="type type1"><img src="images/rectangle-8-copy-2.png" alt="js"></div>
               <div class="type type3 test2"><img src="images/rectangle-8-copy.png" alt="js"></div>
               <div class="type type3"><img src="images/rectangle-8-copy-2.png" alt="js"></div>
               <div class="type type2"><img src="images/rectangle-8-copy.png" alt="js"></div>
            </div>
         </div>
      </div>
      <div class="contact">
         <div class="bio">
            <h2>Hac orci ligula </h2>
            <p class='bio-disc'>Tempor diam fringilla eleifend mollis dui tin</p>
            <div class="bio-img">
               <img src="images/oval-2.png" alt="profile-pic">
            </div>
            <div class="bio-block">
               <h3 class="bio-name"> Name Surname</h3>
               <p class='bio-title'>title</p>
               <h3 class="bio-tel">+441 000 0000</h3>
               <h3 class="bio-mail">name@surname.lt</h3>
            </div>
         </div>
         <div class="form">
            <form action="/action_page.php" method="POST">
               <input type="text" placeholder="Jūsų vardas">
               <input type="tel" placeholder="Jūsų tel. nr.">
               <input type="email" placeholder="Jūsų el. paštas">
               <textarea id="subject" name="subject" placeholder="Žinutė" style="height:119px"></textarea>
               <div class="button">
                  <input type="submit" value="Siųsti">
               </div>
            </form>
         </div>
      </div>
      <footer>
         <h2>FOOTERIS</h2>
      </footer>
      <script>
         var map;
         function initMap() {
           map = new google.maps.Map(document.getElementById('googleMap'), {
             center: {lat: -34.397, lng: 150.644},
             zoom: 8
           });
         }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC03khP55vkS8t5Qr0KD0Flc6z_V1CI-y0&callback=initMap"
         async defer></script>
      <script>
         $(document).ready(function() {
            $("#theTarget").skippr();
         });
      </script>
      <script type="text/javascript">
         $(function() {
            $('#all').click(function() {
               $('.type').show();
               return false;
            });
            $('#type1').click(function() {
               $('.type').hide();
               $('.type1').show();
               return false;
            });
            $('#type2').click(function() {
               $('.type').hide();
               $('.type2').show();
               return false;
            });
            $('#type3').click(function() {
               $('.type').hide();
               $('.type3').show();
               return false;
            });
         });
      </script>
      <script>
         $(function() {
            var header = $(".logo-big");
         
            $(window).scroll(function() {    
               var scroll = $(window).scrollTop();
               if (scroll >= 50) {
                     header.addClass("logo-scroll");
                  
               } else {
                     header.removeClass("logo-scroll");
                  
               }
            });
         
         });
      </script>
      <script>
         function myFunction() {
         var x = document.getElementById("navbar");
         if (x.className === "navbar") {
            x.className += " responsive";
         } else {
            x.className = "navbar";
         }
         }
      </script>
   </body>
</html>