<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/dash.css">

  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand img-logo" href="<?= base_url('user-about')?>">
        <img src="https://i.imgur.com/0eg0aG0.jpg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar " id="navbarSupportedContent">
        <a style="padding-right:2rem" href="<?= base_url('logout')?>"><button class="btn btn-outline-danger"
            type="button">Logout</button></a>
        <a href="<?= base_url('postview')?>"><button class="btn btn-outline-info" type="button">Post</button></a>
      </div>
    </div>
  </nav>

  <?php if($users): ?>
  <?php $id=1;?>
  <?php foreach($users as $user): ?>
  <?php if($user['status']==0):?>
 
  <?php else:?>
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?= base_url() ?>/public/assets/images/first.jpg" class="img-fluid rounded-start border border-2"
          alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $user['name']?></h5>
          <p class="card-text"><?= $user['short_description']?></p>
          <a href="#" class="btn btn-info" onclick="viewMore()">Details</a>
          <a href="<?= base_url('chat')?>" class="btn btn-primary">Connect</a>
        </div>
      </div>
    </div>
  </div>
  <section class="patient-registration">
    <!--Modal Start-->
    <div class="modal">
      <div class="modal__header">
        <p class="modal__header__heading">More Details</p>
        <div class="modal-closebtn" onclick="viewMore();">
          <img src="<?php echo base_url() ?>/public/assets/images/close.png" alt="" width="28px">
        </div>
      </div>
      <div class="modal__container">
        <div class="goal">

          <h4>Goal</h4>
          <p name="goal"><?= $user['goal']?></p>
        </div>
        <div class="res">

          <h4>Resourses</h4>
          <p name="resourses"><?= $user['reso']?></p>
        </div>
        <!-- <div class="reso">
          <h4>Resone</h4>
          <p name="resone">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed eaque vitae quam ipsa quas
            veniam doloremque magni dolore harum quos.</p>
        </div> -->
  </section>
  <?php endif ?>
  <?php endforeach; ?>
  <?php endif; ?>





  <script src="<?= base_url() ?>/public/assets/js/dash.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>

</body>

</html>