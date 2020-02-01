<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    <!-- boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- boostrap -->
    <!-- style -->
    <link rel="stylesheet" href="style.css">
    <!-- style -->

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- icons -->

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900&display=swap" rel="stylesheet">
    <!-- font -->
    
</head>
<body>
    <section class="header">

        <div class="banner">

                <ul class="nav justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link" href="#skills"><span>Skills</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work"><span>Work</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><span>Contact</span></a>
                    </li>

                </ul>

                <div class="text-box">

                    <h1>Ajay Suresh Jangam</h1>
                    <p>Front-End Developer</p>

                </div>

        </div>

    </section>

    <section class="skills" id="skills">

        <div class="skill-text">

            <h2>Skills</h2>

        </div>

        <div class="skill-list">

            <div class="list-item">

                <i class="fab fa-html5"></i>
                <p>HTML5</p>

            </div>

            <div class="list-item">

                <i class="fab fa-css3-alt"></i>
                <p>CSS3</p>

            </div>

            
            <div class="list-item">
                
                <i class="fab fa-js-square"></i>
                <p>JavaScript</p>
                
            </div>
            
            <div class="list-item">
                
                <i class="fab fa-bootstrap"></i>
                <p>Bootstrap</p>
                
            </div>
            
            <div class="list-item">
                
                <i class="fab fa-php"></i>
                <p>PHP</p>
                
            </div>
            
            <div class="list-item">

                <i class="fab fa-wordpress"></i>
                <p>Wordpress</p>

            </div>

        </div>

    </section>

    <section class="work" id="work">

        <div class="work-text">

            <h2>Work</h2>

        </div>

        <div class="cards">

            <a class="card" href="http://ajay.rohitb.me/alliance/index.html" target="_blank">
            
                <img class="card-img" src="img/Alliance-thumnail-desktop.jpg" alt="Alliance-thumnail-desktop">
                <p class="card-title">Alliance</p>
            
            </a>

            <a class="card" href="http://ajay.rohitb.me/bookstart/" target="_blank">
            
                <img class="card-img" src="img/Bookstart-thumnail-desktop.jpg" alt="Bookstart-thumnail-desktop">
                <p class="card-title">Bookstart</p>
            
            </a>

        </div>

    </section>

    <section class="contact" id="contact">

        <h2 class="contact-title">Contact</h2>

        <div class="contact-text">

            <form action="form.php" method="POST" id="frms" onsubmit="return formSubmit();">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Your Message" required></textarea>
                </div>
                
                <button type="submit" class="btn" name="submit" id="submit" value="submit">Submit</button>

                <h3 id="success"></h3>

            </form>

            <div class="contact-links">

                <a class="contact-link" id="social" title="Facebook" href="https://www.facebook.com/ajay.jangam" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="contact-link" id="social" title="LinkedIn" href="https://www.linkedin.com/in/ajay-jangam-6741b11a0/" target="_blank" ><i class="fab fa-linkedin-in"></i></a>
                <a class="contact-link" id="social" title="GitHub" href="https://github.com/ajay-jangam" target="_blank" ><i class="fab fa-github"></i></a>
                <a class="contact-link" id="social" title="Resume" href="https://drive.google.com/drive/u/0/folders/1RWOgzvgHBSVDNebL6sUdJHNT99G-Tx5f" target="_blank" type="application/pdf"><i class="fas fa-file-pdf"></i></a>

            </div>

        </div>

        <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
        

    </section>


    
    <!-- script -->
    <script src="jquery-3.4.1.js"></script>
    <script src="script.js"></script>
    <!-- script -->

    
    <!-- icon-script -->
    <script src="https://kit.fontawesome.com/95007905b2.js" crossorigin="anonymous"></script>
    <!-- icon-script -->
    
    
</body>
</html>