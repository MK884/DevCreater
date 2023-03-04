<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/style.css">
    <title>Main</title>
</head>

<body>
    <div class="App">
        <div class="bt">

            <nav id="list" class="navbar navbar-expand-lg   ">
                <a href="<?= base_url('home')?>">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" >
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('about')?>">About<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('contact')?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="right-nav">
                    <li id="list1">
                        <a class="sar" href="post.html">Post</a>
                    </li>

                    <li id="list1" class="list1">
                        <a href="<?= base_url('signup')?>">Registration</a>
                    </li>
                    <li id="list1">
                        <a class="sar" href="<?= base_url('signin')?>">SignIn</a>
                    </li>


                </div>
            </nav>
        </div>
    </div>
    <!-- bootstarp js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
</body>

</html>