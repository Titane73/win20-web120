<?php include "includes/header.php";?>

<main class="wrapper">

    <div>

        <h2>The Weirdo Perspective</h2>
        <P>Documentation, captured moments, and gag reels!</P>


        <!-- Images used to open the lightbox -->
        <div class="row">
            <div class="column">
                <img src="images/galleries/thumbnails/img1_thumb.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="temp image">
            </div>
            <div class="column">
                <img src="images/galleries/thumbnails/img2_thumb.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow" alt="temp image">
            </div>
            <div class="column">
                <img src="images/galleries/thumbnails/img3_thumb.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow" alt="temp image">
            </div>
            <div class="column">
                <img src="images/galleries/thumbnails/img4_thumb.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow" alt="temp image">
            </div>
        </div>

        <!-- The Modal/Lightbox -->
        <div id="myModal" class="gallery-modal">
            <span class="gal-close cursor" onclick="closeModal()">&times;</span>
            <div class="gal-modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 4</div>
                    <img src="images/galleries/img1_1024x768.jpg" alt="temp image">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 4</div>
                    <img src="images/galleries/img2_1024x768.jpg" alt="temp image">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 4</div>
                    <img src="images/galleries/img3_1024x768.jpg" alt="temp image">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 4</div>
                    <img src="images/galleries/img4_1024x768.jpg" alt="temp image">
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
                    <img class="demo" src="images/galleries/thumbnails/img1_thumb.jpg" onclick="currentSlide(1)" alt="temp image">
                </div>

                <div class="column">
                    <img class="demo" src="images/galleries/thumbnails/img2_thumb.jpg" onclick="currentSlide(2)" alt="temp image">
                </div>

                <div class="column">
                    <img class="demo" src="images/galleries/thumbnails/img3_thumb.jpg" onclick="currentSlide(3)" alt="temp image">
                </div>

                <div class="column">
                    <img class="demo" src="images/galleries/thumbnails/img4_thumb.jpg" onclick="currentSlide(4)" alt="temp image">
                </div>
            </div>
        </div>
    </div>

    <div class="threads">

        <h2>comment section - forthcoming</h2>

        <textarea class="comments" rows="10" cols="50" name="comment" aria-label="comments" readonly>Future sight of user comments and threads</textarea>



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
