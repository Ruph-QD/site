<html>

<head>
    <title>PHP Contact Form</title>
    <link rel="stylesheet" href="../style/Template.css" />
    <link rel="stylesheet" type="text/css" href="../style/Contact.css" />
</head>
<header>
    <?php include("./Component/Header.php"); ?>
</header>
<body>
    <div class="main-container">
        <div>
            <h2 class=titre"> Contact </h2>
        </div>
        <div class="form-container">
            <form name="formContact" method="post" enctype="multipart/form-data" onsubmit="return validateContactForm()">

                <div class="input-row">
                    <label>Name</label>
                    <span class="info info-userName"></span><br />
                    <input type="text" class="input-field" name="userName" id="userName" placeholder="Votre Nom" />
                </div>
                <div class="input-row">
                    <label>Email</label>
                    <span class="info info-userEmail"></span><br />
                    <input type="text" class="input-field" name="userEmail" id="userEmail" placeholder="Votre adresse mail" />
                </div>
                <div class="input-row">
                    <label>Subject</label>
                    <span class="info info-subject"></span><br />
                    <input type="text" class="input-field" name="subject" id="subject" placeholder="Votre message" />
                </div>
                <div class="input-row">
                    <label>Message</label>
                    <span class="info info-userMessage"></span><br />
                    <textarea name="content" id="content" class="input-field" cols="60" rows="6" placeholder="Votre message"></textarea>
                </div>
                <div>
                    <input type="submit" name="send" class="btn-submit" value="Envoyer" />

                    <div id="statusMessage">
                        <?php
                        if (!empty($message)) {
                        ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>