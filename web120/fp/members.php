<?php include "includes/header.php";?>

<main class="wrapper">

    <div class="members">
        <h2>Welcome to the Member's Vault</h2>
        <p>Please login to access the treasures within.</p>







        <!-- Button to open the modal login form -->
        <button onclick="document.getElementById('id01').style.display='block'">Login</button>

        <!-- The Modal -->
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                    <img src="images/destination-weird.jpg" alt="Temp logo" class="login_img">
                </div>

                <div class="form_container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" aria-label="username" required>
                    <br>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" aria-label="password" required>
                    <br>
                    <button type="submit">Login</button>
                    <br>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>


                <div class="form_container">

                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

                    <span class="psw"><a href="#">Forgot password?</a></span>
                </div>
                <br>
            </form>
        </div>

        <p>This login is for presentation only, for now. Mua haa haa!</p>

    </div>
</main>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>

<?php include "includes/footer.php";?>
