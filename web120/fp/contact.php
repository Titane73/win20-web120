<?php include "includes/header.php";?>



<main class="wrapper">

    <div class="form_container">
        <?php
   

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "thomas.ti.hall@gmail.com";  //place your/your client's email address here
        $toName = "Destination Weird"; //place your client's name here
        $website = "Destination Weird";  //place NAME of your client's website
            
        echo loadContact('contact_form.php');#demonstrates multiple form elements

	?>
    </div>


</main>

<?php include "includes/footer.php";?>
