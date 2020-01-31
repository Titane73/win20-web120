<!-- Start footer.php-->
       
<!-- Page footer     -->
     <footer>
      <p><small>&copy; 2019 - <?=date('Y')?> by <a href="contact.php">Ti Hall </a>, All Rights Reserved 
      ~ <a href="https://validator.w3.org/check/referer" target="_blank">HTML5</a> 
      ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">CSS3</a></small></p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
 </body>
</html>