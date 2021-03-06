<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responsive progress  step bar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/reg/css/style.css">

   <style>



</style>
</head>

<body>

<div class="container-fluid margincustom">
  <div class="bar__container">
  <ul class="bar" id="bar">
    <li class="active">Basic Details</li>
    <li>Address</li>
    <li>Contact</li>
  </ul>
</div>
  <div class="col-md-6">
    <form method="post" action="<?php echo base_url('home/reguser'); ?>">
<section id="cards">
  <div class="card">
    <h3 class="card__title">BASIC DETAILS</h3>
    <section id="form">


      <div class="container">

        <div class="form-group">


          <label for="exampleInputName">Name</label>

      <div class="row">
      <div class="col">
        <input type="text" class="form-control" name="fname" placeholder="First name">
      </div>
      <div class="col">
        <input type="text" class="form-control" name="lname" placeholder="Last name">
      </div>
      </div>
      <label for="exampleInputName">Date of Birth</label>
      <div class="row">
      <div class="col">
        <input type="text" class="form-control" name="dobd" placeholder="Day">
      </div>
      <div class="col">
        <input type="text" class="form-control" name="dobm" placeholder="Month">
      </div>
      <div class="col">
        <input type="text" class="form-control" name="doby" placeholder="Year">
      </div>
      </div>
            <label for="exampleInputName">Gender</label>
      <div class="row">
      <div class="col">
        <div class="row radio">
          <input id="sex-male" type="radio" name="sex" value="male" checked="checked" />
          <label for="sex-male"><i class="fa fa-male" aria-hidden="true" style="font-size: 60px;"></i></label>
        </div>
      </div>
      <div class="col">
        <div class="row radio">
        <input id="sex-female" type="radio" name="sex" value="female" />
        <label for="sex-female"><i class="fa fa-female" aria-hidden="true" style="font-size: 60px;"></i></label>
      </div>
      </div>
      </div>
      <label for="exampleInputName">Country</label>

      <div class="row">
      <div class="col">
        <select id="country" name="country" placeholder="Select country" class="form-control custom"></select>
      </div>
      </div>
    </section>
    <br><hr><br>
    <div class="actions">
      <a href="#" class="btnn next">Next</a>
    </div>
  </div>

  <div class="card">
    <h3 class="card__title">Address</h3>
    
      <div class="container">
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="addr1" placeholder="1234 Main St">
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" name="addr2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" name="city" placeholder="City">
        </div>
        <div class="col">
          <select name="state" id="state" placeholder="Select State"  name="state" class="form-control custom"></select>
        </div>
        <div class="col">
          <input type="text" class="form-control" name="zip" placeholder="Zip">
        </div>
      </div>
    </div>
  </div>
  <br><hr><br>
    <div class="actions">
      <a href="#" class="btnn prev">Prev</a>
      <a href="#" class="btnn next">Next</a>
    </div>
    </div>

  <div class="card">
    <h3 class="card__title">Contact</h3>
        <section id="form">


      <div class="container">

      <div class="form-group">
        <label for="exampleInputMObile">Mobile no</label>
        <input type="text" class="form-control" name="mob" id="exampleInputMobile" placeholder="Mobile no">
      </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
</section>
<br><hr><br>
    <div class="actions">
      <a href="#" class="btnn prev">Prev</a>
      <input type="submit" class="btnn" name="sub">
    </div>
  </div>

</section>
</form>
</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="<?php echo base_url(); ?>/assets/reg/js/index.js"></script>
    <script  src="<?php echo base_url(); ?>/assets/reg/js/country.js"></script>




</body>

</html>
