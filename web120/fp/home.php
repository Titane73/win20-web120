<?php include "includes/header.php";?>

<main class="wrapper grid_container">

    <figure class="home-logo">
        <img src="images/destination-weird.jpg" alt="image of temp logo">
    </figure>


    <div class="nameplate">
        <h2>Destination Weird, LLC</h2>
        <h3>Creative Media Studio<br>
            Film / Video / Documentary<br>
            Stage / Mixed Media <br>
            Seattle, WA</h3>
    </div>


    <div class='resp-container'>
        <iframe class="resp-iframe" src='https://www.youtube.com/embed//LZ6ivBNnhOE' frameborder='0' allowfullscreen></iframe>
    </div>

    <!-- Slideshow container -->
    <div class="quotes">
        <div class="slideshow-container">

            <div class="mySlides">
                <q>That's hilarious! We both loved it.
                    Thanks for making it, you made our day!</q>
                <p class="author">- David &amp; Lotta</p>
            </div>

            <div class="mySlides">
                <q>That scared me lol good work </q>
                <p class="author">- Megan Mcbride</p>
            </div>

            <div class="mySlides">
                <q>I couldn't stop laughing</q>
                <p class="author">- Lil Blocky</p>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>


    <div class="comments">
        <h3>Dire Witness</h3>
        <p>In eyeball. Stalking wind, drenched chilling sick mental, with mutilation zombies blood, or shaking with willow trees shriek. Eyeball cat silent, morbid in damp torture, dining on brains. ~ Dr. James Moriarty</p>

        <p>Stalking wind, drenched chilling sick mental, with mutilation zombies blood, or shaking with willow trees shriek. ~ Crewella Da'Vyl</p>

        <p>Rotten menacing fatal bleak, monstrosity dread with demon scourge terrifying. Virus witch demonic dripping, at werewolf psycho slice flames. Menacing nightmares. ~ Dr. Henry Jekyll</p>

        <p>Zombie deranged in stabbing. Needles at bowels alarming. Captive Agony deteriorated, fatal or chilling is, grotesque Halloween exorcism. ~ Patrick Bateman</p>

        <p>Breathing heavily hell and rabid anthrax fanatic tearing at a squeal. Graves slice ominous is guns exorcism guts. screams exorcism oozed smashed. Suicide Slash demon innards flare. ~ Edward Hyde</p>

        <p>Menacing nightmare zombie deranged in stabbing. Heart pumping at eyeballs killer dolls, chains edginess slicing horror, mental hospital putrid psychopath an possession. ~ Dr. Victor Frankenstein</p>

        <p>Death bruises moon torture demons devil or vampire werewolf wind. ~ Hannibal Lecter</p>

    </div>

    <div class="aside">
        <h3>A Menacing Aside</h3>
        <p>Bury a scourge menacing, pain bowels nightmare. Tearing eyeballs zombie slash. Pain needles commodo drool rabid nightmare. Tearing eyeballs zombie slash. Cat at decapitated guns. killer mental psychotic sliced. Worms with guts ect. Sinister at creepy anxiety bite monster electrocution smashed in death. Creep cold graves, shado.</p>

    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
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
        }

    </script>




</main>

<?php include "includes/footer.php";?>
