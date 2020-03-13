<?php include "includes/header.php";?>

<main class="wrapper">

    <div>

        <h2>Enter Stage Weird...</h2>
        <p>Gallery of stage performances.</p>

        <!-- Images used to open the lightbox -->
        <div class="row">
            <div class="column">
                <img src="images/galleries_temp/img1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/galleries_temp/img2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/galleries_temp/img3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/galleries_temp/img4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
            </div>
        </div>

        <!-- The Modal/Lightbox -->
        <div id="myModal" class="gallery-modal">
            <span class="gal-close cursor" onclick="closeModal()">&times;</span>
            <div class="gal-modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 4</div>
                    <img src="images/galleries_temp/img1.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 4</div>
                    <img src="images/galleries_temp/img2.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 4</div>
                    <img src="images/galleries_temp/img3.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 4</div>
                    <img src="images/galleries_temp/img4.jpg" style="width:100%">
                </div>

                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Caption text -->
                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <!-- Thumbnail image controls -->
                <div class="column">
                    <img class="demo" src="images/galleries_temp/img1.jpg" onclick="currentSlide(1)" alt="Temp 1">
                </div>

                <div class="column">
                    <img class="demo" src="images/galleries_temp/img2.jpg" onclick="currentSlide(2)" alt="Temp 2">
                </div>

                <div class="column">
                    <img class="demo" src="images/galleries_temp/img3.jpg" onclick="currentSlide(3)" alt="Temp 3">
                </div>

                <div class="column">
                    <img class="demo" src="images/galleries_temp/img4.jpg" onclick="currentSlide(4)" alt="Temp 4">
                </div>
            </div>
        </div>
    </div>



    <div class="threads">

        <h2>Comment Section - Coming At Some Future Time</h2>

        <textarea class="comments" rows="10" cols="50" name="comment" readonly>Future sight of user comments and threads</textarea>



    </div>



</main>

<script>
    // Open the Modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }

</script>


<?php include "includes/footer.php";?>
