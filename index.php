<?php
require_once 'mobile_detect.php';
function isMobileDevice()
{
    $detect = new Mobile_Detect;
    if ($detect->isMobile() && !$detect->isTablet()) {
        return true;
    } else {
        return false;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body class="bg-light">
    <div class="jumbotron text-center bg-light">
        <div class="container <?php if (!(isMobileDevice())) {
                                    echo 'p-5';
                                } ?> text-justify">
            <blockquote class="blockquote" v-for="book in books">
                <div class="float-right book-icon display-4" @mouseover="changeReadIconL($event)" @mouseleave="changeReadIconR($event)">
                    <i class="fas fa-book-open"></i>
                    <i class="fas fa-book-reader"></i>
                </div>
                <h1 class="Paragraph-title" v-text="book.name"></h1>
                <p class="Paragraph-body" v-html="paragraphBody"></p>
                <footer class="blockquote-footer" v-text="book.author"></footer>
                <hr>
            </blockquote>
        </div>
    </div>
</body>
<script src="index.min.js"></script>

</html>