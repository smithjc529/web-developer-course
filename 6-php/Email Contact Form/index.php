<?php

    $error = ""; $successMessage = "";

    if ($_POST); {

        if (!$_POST["email"]) {

            $error .= "An email address is required.<br>";

        }

        if (!$_POST["subject"]) {

            $error .= "A subject is required.<br>";
            
        }

        if (!$_POST["content"]) {

            $error .= "A comment must be entered.<br>";
            
        }

        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

            $error .= "This is not a valid email address.";

        }

        if ($error != "") {
            
                $error = '<div class="alert alert-danger" role="alert"><p><strong>A simple warning alert—check it out!</strong></P>' . $error . '</div>';

        } else {

            $emailTo = "me@mydomain.com";

            $subject = $_POST['subject'];

            $content = $_POST['content'];

            $headers = "From:".$_POST["email"];

            if (mail($emailTo, $subject, $content, $headers)) {

                $successMessage = '<div class="alert alert-success" role="alert">Your Message Was Sent.</div>';
            } else {

                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent.</strong></P>' . $error . '</div>';
            }
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  </head>
<body>

    <div class="container">

        <h1>Get in touch.</h1>

        <div id="error"><? echo $error.$successMessage; ?></div>

    </div>

    <form method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
        </div>

        <div class="form-group">
            <label for="content">Questions/Comments:</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>

        <button type="submit" id="submit" class="btn btn-primary">Submit</button>

    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

        <script type="text/javascript">

         $("form").submit(function (e) {
               
                var error = "";

                if ($("#email").val() == "") {

                    error+= "The email field is required<br>";

                }

                if ($("#subject").val() == "") {

                    error+= "The subject field is required<br>";

                }

                if ($("#content").val() == "") {

                    error+= "The content field is required<br>";

                }

                if (error != "") {

                    $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>A simple warning alert—check it out!</strong></P>' + error + '</div>');
                    
                    return false;

                } else {

                    return true;
            });
           
        </script>







</body>

</html>