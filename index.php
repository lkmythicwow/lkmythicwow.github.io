<!DOCTYPE html>
<html>
  <head>
  <title>Mythic WoW - Escolher Reinos</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	  <meta name="description" content="Escolher Reinos">
	  <meta name="author" content="mythic wow" />
      <link href="img/favicon.ico" rel="shortcut icon"/>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
	<link href="ionicons.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/da749ea48e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="js/countdown.js" type="text/javascript"></script>

  <script type="text/javascript">
    if (screen.width <= 768) {
      document.location = "/mobile";
    }
    console.log("test");

  </script>

  </head>
  <body>
    
    <header class="glow">
      <h1>MYTHIC<span>WOW</span></h1>
      <h2>EM BREVE!</h2>
    </header>
	
  
    <div class="card">
      <div class="card-image"></div>
      <div class="card-text card2">
        <span class="date"><h2 id="countdown">EM BREVE!</h2></span>
        <h2>Wotlk 3.3.5a </h2>
		<p>XP 16X GOLD 4X PROF 4X REP 2X.</p>
      </div>
      <div class="card-stats">
        <div class="stat">
          <!--<div class="value">6<sup>d</sup>3<sup>h</sup>24<sup>m</sup></div> -->
		  <?php
            include 'cache.php';
		  ?>
        </div>

        <div class="stat">
            <div class="acess"><a href="#"><b>Acessar</b></a></div>
        </div>
      </div>
    </div>

    
    </div>

    <footer>
        <div id="redes-sociais">

          <a href="https://www.facebook.com/mythicrpg/"><div id="rede-social">
            <img src="facebook.png" alt="rede-social">
          </div></a>

          <a href="https://discord.gg/RbUgfVu"><div id="rede-social">
          <img src="discordia.png" alt="rede-social">
          </div></a>

          <!--<a href="#"><div id="rede-social">
          <img src="youtube.png" alt="rede-social">
          </div></a> -->

          <a href="https://www.instagram.com/mythicowow.xyz/"><div id="rede-social">
          <img src="instagram.png" alt="rede-social">
          </div></a>

        </div>
    </footer>

  </body>
  <script src="js/main.js" type="text/javascript"></script>
</html>
