<?php include "includes/header.php";?>


<section class="gallery-links">
    <div class="gallery">

        <h2>Gallery</h2>

        <div class="gallery-container">

            <a href="#">
                <div></div>
                <h3>Title Goes Here</h3>
                <p>Text and text and text</p>
            </a>

            <a href="#">
                <div></div>
                <h3>Title Goes Here</h3>
                <p>Text and text and text</p>
            </a>

            <a href="#">
                <div></div>
                <h3>Title Goes Here</h3>
                <p>Text and text and text</p>
            </a>

            <a href="#">
                <div></div>
                <h3>Title Goes Here</h3>
                <p>Text and text and text</p>
            </a>

            <a href="#">
                <div></div>
                <h3>Title Goes Here</h3>
                <p>Text and text and text</p>
            </a>

            <a href="#">
                <div></div>
                <h3>Title Goes Here</h3>
                <p>Text and text and text</p>
            </a>

            <a href="#">
                <div></div>
                <h3>Title Goes Here</h3>
                <p>Text and text and text</p>
            </a>

            <a href="#">
                <div></div>
                <h3>Title Goes Here</h3>
                <p>Text and text and text</p>
            </a>

            <a href="#">
                <div></div>
                <h3>Title Goes Here</h3>
                <p>Text and text and text</p>
            </a>

        </div>

        <div class="gallery-upload">
            <form action="includes/gallery-upload.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File Name...">
                <input type="text" name="filetitle" placeholder="File Title...">
                <input type="text" name="filedesc" placeholder="Image Description...">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
            </form>


        </div>




    </div>

</section>

<?php include "includes/footer.php";?>
