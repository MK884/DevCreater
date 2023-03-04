<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Codeigniter Auth User Registration Example</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>
           
                <form action="<?php echo base_url('store'); ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/style.css">
    <title>Goal</title>

</head>

<body>
    <div class="App">
        <div class="bt">

            <nav id="list" class="navbar navbar-expand-lg   ">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
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
                            <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                        </li>
                    </ul>
                 

                    <li id="list1" class="list1">
                        <a href="<?= base_url('signup') ?>">Registration</a>
                    </li>
                    <li id="list1">
                        <a class="sar" href="<?= base_url('signin') ?>">SignIn</a>
                    </li>


                </div>
            </nav>
        </div>
        <div class="container1">

            <div class="img1">
                <img src="<?= base_url()?>/public/assets/images/first.jpg" alt="Goalimage">
            </div>

            <div class="container">
                <h1>Registration</h1>
                <?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form onsubmit="return validateForm()" action="<?php echo base_url('store'); ?>" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="name" required value="<?= set_value('name') ?>">

                    <label for="username">Email:</label>
                    <input type="text" id="email" name="email" value="<?= set_value('email') ?>" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <label for="password"> Confirm Password:</label>
                    <input type="password" id="password" name="confirmpassword" required>

                    <button onclick="addEventListener" type="submit">Registration</button>
                </form>

                <div class="error-message" id="error-message"></div>
            </div>

        </div>


    </div>
    <!-- bootstarp js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>



</body>

</html>