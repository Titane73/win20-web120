<?php include "includes/header.php";?>

    <div class="contact_form">
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "thomas.ti.hall@gmail.com";  //place your/your client's email address here
        $toName = "Ti Hall"; //place your client's name here
        $website = "Web 110 Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    </div>
    <?php include "includes/footer.php";?>
