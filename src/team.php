<!DOCTYPE html>
<html lang="en">
<head>
  <title>Give</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="description" content="">
  <!-- Meta Partage -->
  <!-- Favicon -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="scripts/app.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="styles/app.css">
  <link rel="icon" type="image/png" href="assets/images/favicon/favicon.png" />
</head>
<body>
  <div class="background">
    <div class="rainbow"></div>
  </div>
  <section class="section section--intro">
    <div class="section--intro__logo">
      <h1 class="title title--bigger">Give</h1>
      <img class="logo logo--full" src="assets/images/logo--white.png" alt="logo">
      <h2 class="title title--big title--bold">Randomness for greatness</h2>
      <h2 class="title title--big">Shape a better world</h2>
    </div>
    <div class="section--intro__scrollable">
      <p>Click and have a positive impact</p>
      <img src="assets/images/icon/arrow.png" class="icon icon--arrow" alt="petite flèche">
    </div>
  </section>
  <main class="section section--main">
    
    <nav class="nav nav--main">
      <a class="logo logo--nav" href="#">
        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask">
          <rect width="100" height="100" fill="white"/>
          <path fill="white" stroke="black" stroke-width="6" d="M93,11.8c0.5,0,0.8,0.3,0.9,0.5c0.1,0.2,0.3,0.5,0,1l-43,74.5c-0.3,0.5-0.7,0.5-0.9,0.5c-0.2,0-0.6,0-0.9-0.5l-43-74.5
          c-0.3-0.5-0.1-0.8,0-1c0.1-0.2,0.3-0.5,0.9-0.5H93 M93,10.8H7c-1.5,0-2.5,1.7-1.7,3l43,74.5c0.4,0.7,1.1,1,1.7,1s1.3-0.3,1.7-1
          l43-74.5C95.5,12.4,94.5,10.8,93,10.8L93,10.8z"/>
        </mask>
        <rect class="shape" width="100" height="100" mask="url(#mask)"/>
      </svg>
    </a>


      <!--<img alt="logo" src="assets/images/logo.png" class="logo logo--nav">-->
      <ul class="list list--main">
        <li class="list list--main__li"><a class="link link--main link--selected" href="#">Project</a></li>
        <li class="list list--main__li"><a class="link link--main" href="team.php">Team</a></li>
        <li class="list list--main__li"><a class="link link--main" href="markdown.php">Case study</a></li>
        <li class="list list--main__li"><a class="link link--main" href="join_us.php">Join Us</a></li>
        <li class="list list--main__li"><a class="link link--main link--donate" href="donate.php">Donate</a></li>
      </ul>
    </nav>
    <section class="section section--team">
      <h2 class="title title--big">Our Team</h2>
      <div class="team-grid">
        <div class="members">
          <img src="assets/images/team/ludo.png" alt="Photo de profil" class="member">
          <p class="desc"></p>
          <a href="#">Site</a>
        </div>
        <div class="members">
          <img src="assets/images/team/elie.png" alt="Photo de profil" class="member">
          <p class="desc"></p>
          <a href="#">Site</a>
        </div>
        <div class="members">
          <img src="assets/images/team/aureliane.png" alt="Photo de profil" class="member">
          <p class="desc"></p>
          <a href="#">Site</a>
        </div>
        <div class="members">
          <img src="assets/images/team/will.png" alt="Photo de profil" class="member">
          <p class="desc"></p>
          <a href="#">Site</a>
        </div>
        <div class="members">
          <img src="assets/images/team/jerome.png" alt="Photo de profil" class="member">
          <p class="desc"></p>
          <a href="#">Site</a>
        </div>
      </div>
    </section>
    <footer class="section section--footer">
        <nav class="nav nav--footer">
        <img class="logo logo--footer" src="assets/images/logo--white.png" alt="logo">
        <ul class="list list--footer list--location">
            <li class="list--footer__li">Visit me</li>
            <li class="list--footer__li"><a class="link link--footer link--italic" href="#">Place d’armes 5000 <br> Namur 🇧🇪</a></li>
          </ul>
          <ul class="list list--footer">
            <li class="list--footer__li">Navigation</li>
            <li class="list--footer__li"><a class="link link--footer" href="#">Project</a></li>
            <li class="list--footer__li"><a class="link link--footer" href="markdown.html">Case study</a></li>
            <li class="list--footer__li"><a class="link link--footer" href="team.html">Team</a></li>
            <li class="list--footer__li"><a class="link link--footer" href="join_us.html">Join us</a></li>
          </ul>
          <ul class="list list--footer">
            <li class="list--footer__li">Portfolio's</li>
            <li class="list--footer__li"><a target="_blank" class="link link--footer" href="http://ludodec.be/">Ludovic</a></li>
            <li class="list--footer__li"><a target="_blank" class="link link--footer" href="http://eliedur.be/">Elie</a></li>
            <li class="list--footer__li"><a target="_blank" class="link link--footer" href="http://aurelianeferard.be/">Aureliane</a></li>
            <li class="list--footer__li"><a target="_blank" class="link link--footer" href="http://williamblanchy.be/">William</a></li>
            <li class="list--footer__li"><a target="_blank" class="link link--footer" href="http://www.jeromehaesen.be/">Jérome</a></li>
          </ul>
        </nav>
        <p class="section--footer__copyright text-small">Developed by 5 extraordinary people ❤️</p>
    </footer>
  </main>
</body>
</html>
