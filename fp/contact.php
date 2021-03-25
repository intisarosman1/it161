<!DOCTYPE html>
<html lang="en">
 <head>
  <title>All the Places I've Been Before</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/fp.css" />
  <link rel="stylesheet" href="css/nav.css" />
     <!-- jQuery -->
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <!-- MenuMaker Plugin -->
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <!-- Icon Library -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <script src="js/script.js"></script>
 </head>
 <body>
    <main>
    <header>
        <h1><a href="index.html" class="header">all the places i've been before</a></h1>
         <nav id="cssmenu">
          <ul>
             <li><a href="index.html">home</a></li>
             <li><a href="gallery.html">gallery</a></li>
             <li><a href="aboutme.html">about me</a></li>
             <li><a href="contact.php">contact</a></li>
           </ul>
          </nav>
     </header>
        
        <section>
            <h3 class="subheader">contact</h3><br>
            <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other!       
             *
             */

            include 'includes/contact_include.php'; #site keys & code here

            $toAddress = "intisarosman3@gmail.com";  //place your/your client's email address here
            $toName = "Hanan Osman"; //place your client's name here
            $website = "All the Places I've Been";  //place NAME of your client's website

            echo loadContact('simple.php');#demonstrates a simple contact form
            //echo loadContact('multiple.php');#demonstrates multiple form elements

            ?>
        </section>
       
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Contact Intisar Osman</a>, All Rights Reserved ~ <a href="disclaimer.html" target="_blank">Disclaimer / Privacy Notice</a> ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
 </body>
</html>