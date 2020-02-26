<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>


<section class="questionnaire">

    <h3>To begin our design journey, please complete the following questionnaire.
        <br>
        <br>Your answers will guide me in how to best help you. Thank you.</h3>

</section>


<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
    <div>
        <label>
            Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
        </label>
    </div>
    <div>
        <label>
            Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
        </label>
    </div>
    <!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
    <div id="heard_select">
        <label>
            How Did You Hear About Us?<br />
            <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is Required" tabindex="30">
                <option value="">Please share how you heard of us.</option>
                <option value="Linked Site">Linked Site</option>
                <option value="Online Article">Online Article</option>
                <option value="Advertisment">Advertisement</option>
                <option value="Friend or Peer">Friend or Peer Recommended</option>
                <option value="Other">Other</option>
            </select>
        </label>
    </div>

    <div id="services_fieldset">
        <fieldset>
            <legend>What Services Are You Interested In?</legend>
            <input type="checkbox" name="Interested_In[]" value="Consultation" /> Complimentary Consultation <br />
            <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
            <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
            <input type="checkbox" name="Interested_In[]" value="Special Application" /> Database Design <br />
            <input type="checkbox" name="Interested_In[]" value="Other" /> Other, please use space below to explain.<br />
        </fieldset>
    </div>

    <div>
        <fieldset id="time_fieldset">
            <legend>What is your expected time frame?</legend>
            <input type="radio" name="time_frame" value="6 weeks" required="required" title="Mailing list is required" tabindex="50" /> 6 Weeks or less <br />
            <input type="radio" name="time_frame" value="3-6 Months" /> 3-6 Months <br />
            <input type="radio" name="time_frame" value="6-12 Months" /> 6-12 Months <br />
            <input type="radio" name="time_frame" value="Year+" /> 12-18 Months <br />
            <input type="radio" name="time_frame" value="Year+" /> Long Term Contract <br />
        </fieldset>
    </div>
    <div id="add_info">
        <label>
            Project Summary / Additional Information:<br /><textarea name="Comments" cols="60" rows="4" placeholder="Please, type here." tabindex="60"></textarea>
        </label>
    </div>


    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
    <div>
        <input type="submit" value="SUBMIT" />
    </div>



</form>
<!-- END HTML FORM -->
