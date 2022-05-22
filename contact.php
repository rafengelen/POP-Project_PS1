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
    //Database connection
    $con = mysqli_connect('localhost', 'root', '2368', 'website_input');

    //data uit html form
    $txtFirstName = "\"".$_POST['firstName']."\"";

    $txtLastname = "\"".$_POST['lastName']."\"";

    $txtCompany = "\"".$_POST['company']."\"";

    $txtEmail = "\"".$_POST['email']."\"";

    $txtSummary = "\"".$_POST['summary']."\"";

    //sql query
    $sql = "INSERT INTO input (firstName, lastName, company, email, summary) 
    VALUES ($txtFirstName, $txtLastname, $txtCompany, $txtEmail, $txtSummary);";

    //toevoegen aan sql
    $submit = mysqli_query($con, $sql);
    ?>



    <?php
    /*
     * Verzenden van mail is mij nog niet gelukt
     *
     *
    // Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer;

    $mail->isSMTP();                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;               // Enable SMTP authentication
    $mail->Username = 'php007.test@gmail.com';   // SMTP username
    $mail->Password = '1ITF02r0901812';   // SMTP password
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                    // TCP port to connect to

    // Info zender
    $mail->setFrom('php007.test@gmail.com', 'Test');
    $mail->addReplyTo('php007.test@gmail.com', 'Test');

    // Ontvanger
    $mail->addAddress($_POST['email']);

    // Mail formaat naar HTML
    $mail->isHTML(true);

    // Mail Onderwerp
    $mail->Subject = 'Verificatie';

    // Mail inhoud
    $bodyContent = '<h1>Verificatie</h1>';
    $bodyContent .= '<p>Uw aanvraag is aangekomen en zal binnenkort verwerkt worden. 
U krijgt een volgende mail als uw aanvraag is goedgekeurd</p>';
    $mail->Body    = $bodyContent;

    // Verzend Mail
    if(!$mail->send()) {
    echo 'Mail kon niet worden verzonden. Mailer Error: '.$mail->ErrorInfo;
    } else {
    echo 'Mail is verzonden.';
    }
*/
    ?>


</head>

<body class="d-flex flex-column min-vh-100">


        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><!-- logo --></a>

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

        <footer class="mt-auto p-3 d-flex justify-content-around">

            <ul class = "p-0 m-0">Sociale media
                <li class="mx-4"><a href="https://www.instagram.com/raf.engelen/">
                        <i class="fa-brands fa-instagram"></i>
                    </a></li>
                <li class="mx-4"><a href="https://twitter.com/Team_DN12">
                        <i class="fa-brands fa-twitter"></i>
                    </a></li>
            </ul>
            <ul class = "p-0 m-0">
                <li><a href="index.html">Startpagina</a></li>
                <li><a href="voorbeelden.html">Voorbeelden</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
