<?php include "includes/header.php";?>


<article class="research">

    <h3>Road to Flex</h3>

    <p>In the beginning of HTML, circa 1991, page styling was non-existent. Browsers dictated how HTML was rendered with some influence by the end user. The progression to CSS (Fig. 1) moved relatively quickly. It only took five years before CSS made it on the scene. Although CSS got off to a slow start, in 2002 Wired and ESPN both redesigned their sites using the new specifications, giving a boost to the rise of CSS. Even with the advances in styling HTML, it would not be until 2009 and the release of CSS3 that layout would see much anticipated advances in layouts. </p>

    <figure id="timeline">
        <img src="images/css-timeline.png" alt="timeline of css">
        <figcaption>Fig.1 CSS Timeline</figcaption>

    </figure>


    <h3>From Tables to Flexbox</h3>
    <p>Prior to CSS3, web designers relied heavily on hacks and tricks to create interesting page layouts, often using css tables to provide the structure. At one time it was even thought by some that being able to render styled pages was ridiculous (ask Marc Andreesen). Eventually, this idealism was proven incorrect. Early layouts used simple columns built with widths and floats (fig. 2). The code to the left produces the results that follow.</p>

    <div class="code">

        <pre>
    body {
    width: 90%;
    max-width: 900px;
    margin: 0 auto;
    }

    div:nth-of-type(1) {
    width: 48%;
    float: left;
    }

    div:nth-of-type(2) {
    width: 48%;
    float: right;
    }
    </pre>

    </div>

    <figure class="two-col">
        <img id="two-col" src="images/2-col-layout.png" alt="css 2 column layout">
        <figcaption>Fig.2 Two Column CSS Layout</figcaption>

    </figure>



    <p class="clear_paragraph">Later, designers used CSS tables and other tricks to organize content. With the rise in mobile devices, tablets, and the growing variety of screen resolutions, CSS3 introduced design tools that addressed the evolving needs, particularly Flexbox. Flexbox allowed for truly responsive design and easier manipulation of layout for designers. Flexbox standards have only recently became a WC3 Candidate Recommendation (Oct 2017).</p>


    <h3>Essential Flexbox Fundamentals</h3>
    <p>Flexbox helps makes designing streamlined and efficient, as long as one understands at minimum of two rules. Here are a the basic concepts to keep in mind when utilizing flexbox layouts.</p>

    <ul>
        <li>Flex Container is the parent element.</li>
        <ul>
            <li>Flex items are the child element</li>
            <li>Descendants of flex containers are not flex items.</li>
        </ul>
        <li> Flex containers can be nested</li>
        <li> Container display can be flex or inline-flex</li>
        <ul>
            <li> Flex</li>
            <li> Flex container span width of its container.</li>
            <li> Flex items fit the content.</li>
        </ul>
        <ul>
            <li> Inline-flex</li>
            <li> Flex container fits content.</li>
            <li> Flex items fit content.</li>
            <li> Flex containers stack inline to each other.</li>
        </ul>
        <li> Flex aligns on two axis… main and cross</li>
        <ul>
            <li> Main and Cross direction is determined by flex-direction.</li>
            <li> If flex-direction is set to:</li>
            <ul>
                <li> row (default), main axis runs horizontal, and items align horizontally.</li>
                <li> column, main axis run vertical, and items align vertically.</li>
            </ul>
            <li> Flex items arranged based on start and end points</li>
            <ul>
                <li> If flex-direction set to row, main start is on right, end on left</li>
                <li> When set to column, main start is on top, end at bottom</li>
                <li> Using flex-direction: row- or column- reverse will reverse the start and end points.</li>
                <li> Main start and end follows suit with default language.</li>
            </ul>
        </ul>
    </ul>

    <p>These are only a few of the attributes associated with Flexbox, and they address two very fundamental concepts of Flexbox: 1) it is only a relationship between the parent and the immediate child, and 2) Flexbox is one dimensional, horizontal or vertical. Nesting flexboxes and additon of other design elements, such as CSS Grids, can make for great sites.</p>


</article>


<aside class="research">

    <h3>Gallery References</h3>

    <ul class="home">
        <li><a href="https://www.awwwards.com/awwwards/collections/image-gallery-and-slideshows/" target="_blank">Awwwards - Image Galleries and Slideshows</a></li>
        <br>
        <li><a href="https://www.awwwards.com/websites/gallery/" target="_blank">Awwwards - Best Gallery Websites</a></li>
        <br>
        <li><a href="https://www.stevenbaker.de/" target="_blank">Example of very good - Steven Baker</a></li>
        <br>
        <li><a href="https://yvettesbridalformal.p1r8.net/" target="_blank">Example of NOT good. You might not want to even click here.</a></li>
    </ul>

</aside>

<aside class="research cites">
    <h3>Citations</h3>
    <ul>
        <li>Babich, Nick. “More Than Just Pretty: How Imagery Drives User Experience.” Smashing Magazine, 18 Jan. 2017, www.smashingmagazine.com/2017/01/more-than-just-pretty-how-imagery-drives-user-experience/.</li>
        <li>Baskanderi, Naema. “Ecommerce UX: Best Practices Product Image Gallery.” Medium, UX Planet, 27 Sept. 2017, uxplanet.org/ecommerce-ux-best-practices-product-image-gallery-e0ce6145d270.
        </li>
        <li>Groom, Victoria and Nick Nomm. “The Impact of Images: Research on Users' Processing and Perception User Experience Magazine.” User Experience Magazine, User Experience Magazine: Visualizations, June 2015, uxpamagazine.org/the-impact-of-images/.
        </li>
        <li>Leonov, Ievgen. “5 Ways to Use a Photo Gallery For Your Website.” The Blog, www.cincopa.com/blog/5-ways-to-use-a-photo-gallery-for-website/.
        </li>
        <li>Sacchetti, Enrico. “The Power of Images.” Physics World, Physics World Magazine, 27 June 2018, physicsworld.com/a/the-power-of-images/.

        </li>

    </ul>

</aside>




<?php include "includes/footer.php";?>
