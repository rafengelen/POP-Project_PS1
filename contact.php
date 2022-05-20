<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>

    <meta name="keywords" content="website maken, website kopen, webpage maken, webpage kopen">
    <meta name="description" content="Website laten maken door een student toegepaste informatica.">
    <meta name="author" content="Raf Engelen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <?php
    $con = mysqli_connect('localhost', 'root', '2368', 'website_input');

    $txtFirstName = "\"".$_POST['firstName']."\"";

    $txtLastname = "\"".$_POST['lastName']."\"";

    $txtCompany = "\"".$_POST['company']."\"";

    $txtEmail = "\"".$_POST['email']."\"";

    $txtSummary = "\"".$_POST['summary']."\"";

    $sql = "INSERT INTO input (firstName, lastName, company, email, summary) 
    VALUES ($txtFirstName, $txtLastname, $txtCompany, $txtEmail, $txtSummary);";

    $submit = mysqli_query($con, $sql);
    ?>

</head>

<body>


        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <!-- logo -->

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.html">Startpagina</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="voorbeelden.html">Voorbeelden</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="container">
            <h1 class="my-3">Welkom <?php echo $_POST["firstName"]; ?> <?php echo $_POST["lastName"]; ?></h1>
            <p>Als uw aanvraag bekeken is, dan zult u een mail van ons ontvangen.</p>
        </main>

        <footer>

        </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>