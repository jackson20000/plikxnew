<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jesse Showalter Starter Kit</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/header.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/footer.css" />

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: white;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: white;
  width: 100%;
  border: .5px solid black;
  border-radius: 25px;
  color: black;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {

  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: black;
  width: 100%;
  border: 2px;
  padding: 15px;
  color: #FFFFFF;
  font-size: 18px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  margin-top: 15px;
  font-weight: bold;
}
.form button:hover,.form button:active,.form button:focus {
  background:black;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: white; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, white);
  background: -moz-linear-gradient(right, white);
  background: -o-linear-gradient(right, white);
  background: linear-gradient(to left, white);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
label{
  font-family: sans-serif;
  font-weight:bold;
  font-size: 15px;
  float: left;
  padding:15px;
  color: grey;
}
p{
  font-family: sans-serif;
  font-weight: bold;
  font-family: 15px;

}
h1{
  font-weight: bold;
  font-family: sans-serif;
}
a {float: left;
  text-decoration:none;
  color:violet;
  transition:.5s ease;
  &:hover {
    color:pink;
  }
}
</style>
<body>
  <div>
    <nav>
              <ul class="main-nav">
                  <li><a href="<?php echo base_url() ?>" class="logo"><png width="139" height="25"  ><img src="<?php echo base_url() ?>assets/img/fb.png" alt="">
                    </a></li>

                  <div id="responsive-nav" class="responsive-nav">
                      <li><a href="home/signin" class="download button">Log in</a></li>
                      <li><a href="home/join" class="download button">Join us</a></li>
                  </div>

                  <li class="nav-toggle"><a href="javascript:void(0);" onclick="showNav();"><img src="assets/img/fb.png" alt=""></a></li>
              </ul>

          </nav>
  </div>
<div class="login-page">
  <h1 class="Form-title">Log in</h1>

  <div class="form">

    <form class="register-form">
      <label for="inputAddress">Name</label>
      <input type="text" placeholder="name"/>
      <label for="inputAddress">Password</label>
      <input type="password" placeholder="password"/>
      <label for="inputAddress">email adress</label>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
<label for="inputAddress">EMAIL</label>
      <input type="text"/>
      <label for="inputAddress">PASSWORD</label>
      <input type="password"/>

      <button type="submit" class="btnn">l o g  i n</button>
    <p class="forgot"><a href="#">Forgot Password?</a></p>
    </form>
  </div>
</div>
<section id="footer" style="text-align: center;">
        <div class="wrapper">

      <span><a> 2018 plikx, Inc.</a></span>
    <span><a href="mailto:example@example.com">Privacy</a></span>
      <span><a href="mailto:example@example.com">Terms</a></span>

</div>
</section>
<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>
