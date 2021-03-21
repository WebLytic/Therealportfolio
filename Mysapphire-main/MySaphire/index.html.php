<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Saphire</title>
        <!--Bootstrap 5.0-->
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->
        <!--Bootstrap 4.6-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!--StyleSheet-->
        <link href="saphire.css" rel="stylesheet" type="text/css"/>
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Google Font-->
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
        <!--Gstatic Font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">

    </head>
    <body>
        <!----------- NavBar ---------->      

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">TALAL MUSTAFA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#top">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <!-------------BANNER------------>
        <section id="banner">
            <div class="centered">
                <h2>My Portfolio</h2>
                <p>My name is Talal Mustafa. In this portfolio, you'll get to know about me, the services I provide and my contact information.</p>
            </div>
        </section>


        <!-------------ABOUT------------>
        <section id="about">
            <div class="container">
                <h1>About</h1>
                <p>I'm a professional Front-end Website Designer and Developer having expertise in HTML5, CSS3, BOOTSTRAP5, Adobe Photoshop, Adobe Illustrator, Adobe Xd, Figma and Media Queries. Some of my projects and the services I provide are listed below.</p>
            </div>
        </section>

        <!--        -----------PORTFOLIO----------
                <section id="portfolio">
                    <div class="container">
                        <h1>Portfolio Area</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid atque commodi dolor est nobis veniam! Eius rerum, unde. Accusamus corporis esse eveniet exercitationem fugiat harum pariatur sequi similique tenetur vitae. Aliquam amet est excepturi, exercitationem facere fugit ipsa laborum molestiae nemo officiis placeat quos repellat saepe temporibus voluptatum.</p>
                    </div>
                </section>-->

        <!-------------PROJECTS------------>
        <section id="projects">
            <div class="container">
                <h1>Projects</h1>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <img id="" class="myImg img-fluid ml-2 mt-5  mx-auto d-block" src="images/project-1.png" alt="Project-1">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <img id="" class="myImg img-fluid ml-2 mt-5  mx-auto d-block" src="images/project-2.png" alt="Project-2">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <img id="" class="myImg img-fluid ml-2 mt-5  mx-auto d-block" src="images/project-3.png" alt="Project-3">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <img id="" class="myImg img-fluid ml-2 mt-5  mx-auto d-block" src="images/project-4.png" alt="Project-4">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <img id="" class="myImg img-fluid ml-2 mt-5  mx-auto d-block" src="images/project-5.png" alt="Project-5">
                    </div>
                </div>
            </div>

            <!-------------MODAL------------>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementsByClassName("myImg");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                for (var i = 0; i < 4; i++) {
                    img[i].onclick = function () {
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    };
                }
                ;

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function () {
                    modal.style.display = "none";
                };
            </script>    
        </section>    

        <!------------------Services----------->
        <section id="services">
            <div class="container">
                <h1>Services</h1>
                <div class="row">
                    <div class="services col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p>Front-end Development based on HTML, CSS, CSS Animations, BOOTSTRAP and Media Queries.</p>
                    </div>
                    <div class="services col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>
                        <h3>Web Designing</h3>
                        <p>Designing Web pages in Adobe Photoshop, Adobe Illustrator, Adobe Xd and Figma.</p>
                    </div>
                    <div class="services col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="icon">
                            <i class="fa fa-recycle"></i>
                        </div>
                        <h3>Design to HTML Conversion</h3>
                        <p>Psd, Xd, Figma, Sketch, Png design to HTML, CSS Conversion.</p>
                    </div>
                    <div class="services col-lg-3 col-md-6 col-sm-12 text-center">
                        <div class="icon">
                            <i class="fa fa-wordpress"></i>
                        </div>
                        <h3>Wordpress Websites</h3>
                        <p>Any Wordpress Website's Front-end and Back-end.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-------------CONTACT------------>
        <section id="contact">
            <div class="container">
                <h1>Contact</h1>
                <div class="contact-row">
                    <div class="contact-left">
                        <h1>Social</h1>
                        <p><i class="fa fa-facebook"></i>https://web.facebook.com/talal.mustafa.712</p>
                        <p><i class="fa fa-instagram"></i>https://www.instagram.com/talal91196/</p>
                        <p><i class="fa fa-twitter"></i>https://twitter.com/TalalMustafa911</p>
                    </div>
                    <div class="contact-right">
                        <h1>Personal</h1>
                        <p>Lahore<i class="fa fa-map-marker"></i></p>
                        <p>talalmustafa911@gmail.com<i class="fa fa-envelope"></i></p>
                        <p>https://www.linkedin.com/in/talal-mustafa/<i class="fa fa-linkedin"></i></p>
                        <p>+923354067256<i class="fa fa-phone"></i></p>
                    </div>
                </div>
                <div class="social-links">
                    <a href="https://web.facebook.com/talal.mustafa.712" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/talal91196/" target="_blank" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/TalalMustafa911" target="_blank" class="fa fa-twitter"></a>
                    <a href="https://www.linkedin.com/in/talal-mustafa/" target="_blank" class="fa fa-linkedin"></a>
                    <a href="https://www.youtube.com/channel/UC-LnQq9R_hte1GpkSooxpNA/featured" target="_blank" class="fa fa-youtube"></a>
                    <p>Copyrights</p>
                </div>
            </div>
        </section>

        <!--Script Bundle Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
