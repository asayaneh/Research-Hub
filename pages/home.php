<?php
session_start();

if (isset($_SESSION['full_name'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png"/>
        <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="../assets/css/home.css?=<?php echo time() ?>"/>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
        <a
                class="navbar-brand ms-5" href="#home">
            <h5>Research<span class="text-primary">Hub</span></h5>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#contacts">Contact</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="repository.php">Repository</a>
                </li>
            </ul>

            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <button class="nav-link" id="logout">
                        <img src="../assets/img/icons/logout.svg" alt="logout button" height="25"/>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <section id="home">
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="../assets/img/logo/logo.png" alt="" width="120" height="90">
                <h1 class="display-5 fw-bold">Welcome! <?php echo $_SESSION['full_name']?></h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Explore cutting-edge research at ACLC Research Repository – a hub of innovative
                        studies and scholarly work in various disciplines</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3" id="repository">Repository
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">

            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="../assets/img/pictures/library.jpg" class="d-block mx-lg-auto img-fluid"
                             alt="Bootstrap Themes"
                             width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">About</h1>
                        <p class="lead">Welcome to Research Hub, your dedicated online research repository designed to
                            empower students and academics alike in the pursuit of knowledge. Our platform provides a
                            seamless environment for students to share, access, and engage with a vast collection of
                            research papers in PDF format</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 py-5" id="featured-3">
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient">
                            <img src="../assets/img/icons/upload.svg" alt="">
                        </div>
                        <h2>Upload</h2>
                        <p>Upload research papers for easy contribution to a growing repository, share findings with
                            peers, mentors, and academic community, promoting collaboration and intellectual
                            exchange.</p>

                    </div>
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient">
                            <img src="../assets/img/icons/download.svg" alt="">
                        </div>
                        <h2>Download</h2>
                        <p>Simplifies access to valuable research by providing a user-friendly interface for discovering
                            and downloading papers tailored to academic interests, whether working on a project or
                            expanding knowledge.</p>

                    </div>
                    <div class="feature col">
                        <div class="feature-icon bg-primary bg-gradient">
                            <img src="../assets/img/icons/comment.svg" alt="">
                        </div>
                        <h2>Comment</h2>
                        <p>A dynamic platform where ideas are exchanged and knowledge is cultivated through meaningful
                            discussions, allowing students and scholars to connect and share insights.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contacts">
            <div class="form-container">
                <div class="text-center">
                    <h1 class="text-black">
                        Research<span class="text-primary">Hub</span>
                    </h1>
                    <p>Send us a Message</p>
                </div>
                <?php if (isset($_GET["error"])) { ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?php echo $_GET['error'] ?>
                    </div>
                <?php } ?>
                <?php if (isset($_GET["success"])) { ?>
                    <div class="alert alert-success text-center" role="alert">
                        <?php echo $_GET['success'] ?>
                    </div>
                <?php } ?>
                <form class="mt-1" action="../scripts/contact/contact.php" method="POST">
                    <div class="form-group">
                        <label for="FULL_NAME">Enter your Full name</label>
                        <input id="EMAIL" type="text" class="form-control mt-1 input" placeholder="ex. Warner Kayleigh "
                               name="name" required value="<?php echo $_SESSION['full_name'] ?>"/>
                    </div>
                    <div class="form-group mt-2">
                        <label for="EMAIL">Enter your Email</label>
                        <input id="EMAIL" type="email" class="form-control mt-1 input"
                               placeholder="ex. warnerkayleigh@gmail.com" name="email" required
                               value="<?php echo $_SESSION['email'] ?>"/>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Enter your Message</label>
                        <textarea class="form-control mt-1 input" cols="32" rows="8" name="message"></textarea>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary form-control fw-bold">
                            SEND
                        </button>
                    </div>
                </form>

            </div>
        </section>


    </main>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../js/home.js"></script>

    </body>

    </html>

    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>