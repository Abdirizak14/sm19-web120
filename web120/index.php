
<!DOCTYPE html>
<html lang="en">
<head>
<title>Abdi's web120 partal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/table.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Abdirizak SCC web120 portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
        <li><a href="table.php">table</a></li>
      <!--<li><a href="fp/index.php">Final Project</a></li>-->
      <li><a href="contactme.php">Contact Abdirizak</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="image" />
 <img src="images/phone.jpg" class="phone" alt="good" />
 <p>Welcome to my portal page. My name is Abdirizak Abdi I am Summer quarter web design student <strong>at Seattle central community college.</strong> I have a lot interests in learning web design, so i can build my career using web design, and also get more experience on how computers work because i know little bit about computers. I want to create my own designs, so that I can get skills that I need to achieve my career goals and be competitive to continue learning process to support myself.</p>
    <p>The reason I chose web design because I love designing most of my time. When I am free time I like to spend designing that is my passion. in this quarter I want to learn more about web design, and create my own web design. My interets is playing soccer when ever I get time.</p>
 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/tablet.jpg"  class="tablet" alt="important" />
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus porta maximus massa, eu tincidunt leo volutpat ac.</p>
 <p>Donec ac euismod augue, sit amet sollicitudin metus. Suspendisse potenti. In varius enim sit amet tortor aliquet, vel sagittis ligula molestie. </p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy;  <?=date('Y')?> by <a href="#" target="_blank">Abdirizak Abdi!</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    
}
     </script>
</body>
</html>

