<head>
    <title>PHP Contact Form</title>
    <link rel="stylesheet" href="../style/Template.css" />
    <link rel="stylesheet" type="text/css" href="../style/Contact.css" />
    <link rel="stylesheet" type="text/css" href="../style/Template.css" />
    <script type="text/javascript" src="../JavaScript/ValidateMail.js"></script>
</head>

<body>
    <div class="form_container">
        <h2>Contact</h2>
        <form name="formContact" action="../controller/mail_handler.php" method="post" onsubmit="return validateContactForm()">
            <div class="container">
                <input type="text" name="userName" id="userName" required>
                <label id="label-name">Nom</label>
            </div>
            <div class="container">
                <input type="text" name="userEmail" id="userEmail" required>
                <label id="label-email">Email</label>
            </div>
            <div class="container">
                <input type="text" name="subject" id="subject" required>
                <label id="label-subject">Sujet</label>
            </div>
            <div class="container">
                <textarea name="content" id="content" class="input-field" cols="60" rows="6" placeholder="Votre message"></textarea>
            </div>
            <input type="submit" name="send" class="btn-submit" value="Envoyer" />
        </form>
    </div>
</body>