<?php
session_start();

if (isset($_SESSION['full_name'])) {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Repository</title>
        <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png"/>
        <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="../assets/css/view.css"/>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
        <a class="navbar-brand ms-5" href="#">
            <h5>Research<span class="text-primary">Hub</span></h5>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="home.php">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="home.php">Contact</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="repository.php">Repository</a>
                </li>
            </ul>

            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <a class="nav-link" href="../scripts/authentication/logout.php">
                        <img src="../assets/img/icons/logout.svg" alt="logout button" height="25"/>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="form-container mt-4 mx-5">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <h3 class="text-black">
                    researchhub: a Gamification of learning Programming
                </h3>

                <p class="mb-0"><strong>Author: </strong>dev frog</p>
                <p class="mb-0"><strong>Published: </strong>January 2024</p>
                <p>
                    <strong>Categories: </strong>Educational, Computer
                    Science, Randomized Algorithm
                </p>
                <p>
                    <strong>Description:</strong>Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Illum repellendus, sit
                    quibusdam non eum architecto consectetur hic. Ut,
                    voluptatem consequatur dignissimos exercitationem error
                    neque dolor amet placeat, nesciunt autem aliquid?
                    Eligendi itaque, dolorum commodi soluta, maxime magnam
                    minima numquam sint tempore voluptatum ab est
                    exercitationem accusamus rem quae. Nulla deleniti
                    similique repudiandae consectetur natus harum ad
                    inventore quasi dolore ratione!
                </p>

                <button class="btn btn-primary">Download</button>
            </div>
            <div class="col-xs-6 col-md-4 border comment-container">
                <h5 class="text-black">Comments</h5>
                <div class="scrollable-comments">
                    <div class="card mb-4">
                        <div class="card-body">
                            <p>Type your note, and hit enter to add it</p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <p class="small mb-0 ms-2">Johny</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="add-comment">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control mb-2" id="comment" rows="1"
                                      placeholder="Add Comment..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    <script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>

    </html>
    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>