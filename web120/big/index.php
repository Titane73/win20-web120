<?php include "includes/header.php";?>

<!-- START LEFT COLUMN -->

<div class="form_wrapper">

    <?php


        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "thomas.ti.hall@gmail.com";  //place your/your client's email address here
        $toName = "Ti Hall"; //place your client's name here
        $website = "Web 120 Client Form";  //place NAME of your client's website

        echo loadContact('questionnaire.php');#demonstrates multiple form elements

	?>
</div>


<!-- END LEFT COLUMN -->

<!-- START RIGHT COLUMN -->

<aside class="index">

    <h3>Helpful Resources</h3>

    <ul>
        <li>The User Experience


            <ul>
                <li><a href="https://www.smashingmagazine.com/2010/10/what-is-user-experience-design-overview-tools-and-resources/" target="_blank">What is User Experience Design?</a></li>

                <li><a href="https://www.uxpin.com/studio/blog/customer-experience-vs-user-experience-why-the-difference-matters/" target="_blank">CX vs. UX</a></li>

                <li><a href="https://www.youtube.com/watch?v=Um3BhY0oS2c" target="_blank">What is the UX Design Process (Video)</a></li>


            </ul>
        </li>


        <li>Types of Websites

            <ul>
                <li><a href="http://www.webyurt.com/popular-types-of-websites">10 Most Popular Types of Websites</a></li>

            </ul>
        </li>

        <li>Consider Your Brand
            <ul>

                <li><a href="https://www.lean-labs.com/blog/seven-examples-of-branding-and-website-design" target="_blank">Examples of Branding</a></li>

                <li><a href="tributemedia.com/branding-web" target="_blank">Branding For The Web</a></li>

            </ul>
        </li>
    </ul>

</aside>


<!-- END RIGHT COLUMN -->

<?php include "includes/footer.php";?>
