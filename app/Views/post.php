<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="post">
    <h3>Post Details</h3>
    <form action="<?= base_url('posts')?>">
      <label for="fname">Name</label>
      <input type="text" id="fname" name="name" placeholder="Your name..">

      <label for="lname">Email</label>
      <input type="text" id="lname" name="email" placeholder="Your Email..">

      


      <label for="lname">Goal</label>
      <input type="text" id="lname" name="goal" placeholder="Your Goal..">

      <label for="lname">Motive</label>
      <input type="text" id="lname" name="motive" placeholder="Your Motive..">

      <label for="lname">Resources Available</label>
      <input type="text" id="lname" name="reso" placeholder="Resources Available..">

      <label for="country">Short Description</label>
      <textarea name="disc" id="" cols="30" rows="5"></textarea>
        <button type="submit">Submit</button>
    </form>
  </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
</body>

</html>