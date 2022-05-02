<?php

// $name = $_POST['name'];
// echo $name;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>My first form</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-md-7">
                <h1 class="display-4">Contact Form</h1>
                <hr class="bg-info" />
                <p class="pb-1 mb-1">
                    Please write your name, email address, and a message below if you have any questions. One of our staff members will be happy to contact you directly and answer your questions as soon as possible.
                </p>
                <p class="text-danger small pt-0 mt-0">
                    * All fields are required
                </p>
                <form method="POST">
                    <div class="row form-group">
                        <label for="name" class="col-form-label col-md-4">Name:</label>
                        <div class="col-md-8">
                            <input type="text" name="name" value="" id="name" class="form-control" required />
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="email" class="col-form-label col-md-4">Email:</label>
                        <div class="col-md-8">
                            <input type="email" name="email" value="" id="email" class="form-control" required />
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="message" class="col-form-label col-md-4">Message:</label>
                        <div class="col-md-8">
                            <textarea rows="4" class="form-control" name="message" value="" id="message" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>