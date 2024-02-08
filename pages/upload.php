<?php
session_start();

if (isset($_SESSION['full_name'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Upload</title>
        <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png"/>
        <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="../assets/css/upload.css"/>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
        <a class="navbar-brand ms-5" href="repository.php">
            <h5>Research<span class="text-primary">Hub</span></h5>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./home.php">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./home.php">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./home.php">Contact</a>
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

    <div class="form-container mt-4 mx-5">
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
        <h3 class="text-black ms-5">Upload Research</h3>
        <form class="mt-1" action="../scripts/upload/upload.php" method="POST" id="FORM" enctype="multipart/form-data">
            <div class="mx-3">
                <div class="row g-2 mt-2 justify-content-around">
                    <div class="col-sm-5 me-5">
                        <label for="title">Enter your Research Title</label>
                        <input type="text" class="form-control mt-1 border border-0 input"
                               placeholder="ex. ACLC Research Hub" required id="title" name="title"/>
                    </div>
                    <div class="col-sm-5">
                        <label for="">Enter Research Category</label>
                        <select class="form-select mt-1" aria-label="Default select example" name="category">
                            <option selected disabled>Select Category</option>
                            <option value="Natural Sciences">Natural Sciences</option>
                            <option value="Social Sciences">Social Sciences</option>
                            <option value="Humanities">Humanities</option>
                            <option value="Engineering & Technology">Engineering & Technology</option>
                            <option value="Health Sciences">Health Sciences</option>
                            <option value="Environmental Sciences">Environmental Sciences</option>
                            <option value="Mathematics & Statistics">Mathematics & Statistics</option>
                            <option value="Business & Economics">Business & Economics</option>
                            <option value="Education">Education</option>
                            <option value="ICT">Information and Communication Technology</option>
                            <option value="Agricultural & Environmental Sciences">Agriculture & Environmental Sciences</option>
                            <option value="Law & Legal Studies">Law & Legal Studies</option>
                            <option value="Fine Arts & Performing Arts">Fine Arts & Performing arts</option>
                            <option value="Psychology & Behavioral Sciences">Psychology & Behavioral Sciences</option>
                            <option value="Space & Planetary Sciences">Space & Planetary Sciences</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mx-3">
                <div class="row g-2 mt-2 justify-content-around">

                    <div class="col-sm-5 me-5">
                        <label for="PASSWORD">Enter the Authors</label>
                        <input type="text" class="form-control mt-1 border border-0 input"
                               placeholder="ex. Jerome Infante, Boboy Infnte, ..." required name="authors"/>
                    </div>

                    <div class="col-sm-5">
                        <label for="">Enter your strand</label>

                        <select class="form-select mt-1" aria-label="Default select example" name="strand">
                            <option selected disabled>Select Category</option>
                            <option value="TVL">TVL</option>
                            <option value="HUMMS">HUMMS</option>
                            <option value="GAS">GAS</option>
                            <option value="STEM">STEM</option>
                            <option value="ABM">ABM</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mx-2 mt-3">
                <div class="mx-5">
                    <label for="exampleFormControlTextarea1">Enter a Description</label>
                    <textarea class="form-control border border-0 input" rows="3"
                              placeholder="This research is about..." name="description"></textarea>
                </div>
            </div>

            <div class="mt-4 mx-5">
                <label for="UploadResearchPDF"></label>
                <input placeholder="Upload" type="file" id="UploadResearchPDF"/>
            </div>
            <button class="btn btn-primary mx-5 mt-3" id="submit" type="submit">SUBMIT</button>
        </form>


    </div>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../js/upload.js?=<?php echo time()?>"></script>
    </body>

    </html>
    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>