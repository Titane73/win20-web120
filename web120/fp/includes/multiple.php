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

<!-- START HTML FORM -->
<div class="contact_container">
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
        <div>
            <label>
                Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="38" autofocus />
            </label>
        </div>
        <div>
            <label>
                Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="38" />
            </label>
        </div>
        <!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
        <div>
            <label>
                How Did You Hear About Us?:<br />
                <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
                    <option value="">Choose How You Heard</option>
                    <option value="Phone">48 Hour Film Project</option>
                    <option value="Web">Youtube (Amanduh Channel)</option>
                    <option value="Magazine">Google "Feeling Lucky" Button </option>
                    <option value="A Friend">A Friend of Destination Weird</option>
                    <option value="Other">Other</option>
                </select>
            </label>
        </div>

        <div>
            <fieldset class="interest">
                <legend>What Kind of Projects or Roles Interested You?</legend>
                <input type="checkbox" name="Interested_In[]" value="48hr Film Project" tabindex="40" /> 48hr Film Project <br />
                <input type="checkbox" name="Interested_In[]" value="Acting/Performance" /> Acting/Performance <br />
                <input type="checkbox" name="Interested_In[]" value="Writing/Scripting" /> Writing/Scripting <br />
                <input type="checkbox" name="Interested_In[]" value="Lollipops" /> Directing/Videography <br />
                <input type="checkbox" name="Interested_In[]" value="Film Crew/Stage Crew" /> Film Crew/Stage Crew <br />
                <input type="checkbox" name="Interested_In[]" value="SuperFan" /> SuperFan <br />
                <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
            </fieldset>
        </div>

        <div>
            <fieldset>
                <legend>Would you like to join our mailing list?</legend>
                <input type="radio" name="Join_Mailing_List?" value="Yes" required="required" title="Mailing list is required" tabindex="50" /> Yes <br />
                <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
            </fieldset>
        </div>
        <div>
            <label class="comment_contact">
                Comments:<br /><textarea name="Comments" cols="35" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
            </label>
        </div>
        <div id="recaptcha">
            <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
        </div>
        <div id="button">
            <input type="submit" value="Submit" />
        </div>
    </form>
</div>
<!-- END HTML FORM -->
