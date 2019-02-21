<!DOCTYPE html>
<html lang="en">
<head>
    <title>Plikx | Photographer Company</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/home/style.css" />
    <link rel="stylesheet" href="assets/nav.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/easy-autocomplete.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/easy-autocomplete.themes.min.css">
</head>
<body>
  <header>
        <div class="container">
          <nav id="navigation">
            <a href="#" class="logo"><img src="assets/img/logo.png"></a>
            <a aria-label="mobile menu" class="nav-toggle">
              <span></span>
              <span></span>
              <span></span>
            </a>
              <ul class="menu-left">
                <li><a href="#about">Login</a></li>
                <li><a href="#exp">SignUp</a></li>
              </ul>
          </nav>
        </div>
    </header>

  <section id="header">
      <div class="wrapper">
        <div class="logoimg">
          <img src="assets/img/logo1.png">
        </div>
          <article>
          <h1>We frames your <br>beautiful life</h1>
          <p>make a shoot with the world's best freelancers, professionals or plikx team </p>
      </article>
      <div class="inputWithIcon">
        <input type="text" placeholder="Location" id="search">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      </div>
  </section>

  <h3>Grab your shoot !</h3>

<section id="discount">
    <div class="wrapper">

        <div class="discountLayout">
            <picture>
                <source media="(min-width: 681px)" srcset="assets/img/pi4.png">
                <source media="(max-width:   680px)" srcset="assets/img/pi1.png">
                <img src="assets/img/pi3.png"  alt="Shoe App Rocks" >
            </picture>


        <div class="offer">
            <h2>Search & Select</h2>
            <p>you can search and select yours favourate photographer/videographers to make your shoot </p>

                <a href="#" class="button">Try now</a>
        </div>
        </div>
    </div>
</section>
<section id="discount">
    <div class="wrapper">

        <div class="discountLayout">
        <div class="offer">
            <h2>Get ready for the shoot</h2>
            <p>ours freelancers/professionals will reach you on the sheduled date  and make your shoot a nice one</p>
        </div>

            <picture>
                <source media="(min-width: 681px)" srcset="assets/img/pi3.png">
                <source media="(max-width:   680px)" srcset="assets/img/pi1.png">
                <img src="assets/img/pi.png"  alt="Shoe App Rocks" >
            </picture>
        </div>
    </div>
</section>

<section id="discount">
    <div class="wrapper">

        <div class="discountLayout">


            <picture>
                <source media="(min-width: 681px)" srcset="assets/img/pi4.png">
                <source media="(max-width:   680px)" srcset="assets/img/pi1.png">
                <img src="assets/img/pi4.png"  alt="Shoe App Rocks" >
            </picture>


        <div class="offer">
            <h2>Handleover your project</h2>
            <p>They will handleover your product  within the specified date and time</p>


        </div>
        </div>
    </div>
</section>



<section id="download">
    <div class="wrapper">
            <h4>Why are you waiting</h4>

            <p>Grab your shoots with the worlds best ones</p>
          <div class="align">
                <a href="#" class="button">Book now</a>
              </div>

    </div>
  </section>
    <section id="footer" style="text-align: center;">
        <div class="wrapper">

      <span><a>© 2018 plikx, Inc.</a></span>
    <span><a href="mailto:example@example.com">Privacy</a></span>
      <span><a href="mailto:example@example.com">Terms</a></span>

</div>
</section>
<script type="text/javascript" src="assets/home/script.js"></script>
<script type="text/javascript" src="assets/nav.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript" src="assets/js/jquery.easy-autocomplete.min.js"></script>
<script type="text/javascript">
  var options = {
    // url: function(phrase) { 
    //     if (phrase !== "") {
    //         return "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=" + phrase + "&key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&sessiontoken=1234567890";    
    //     } else {
    //         //duckduckgo doesn't support empty strings
    //         return "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=&key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&sessiontoken=1234567890";
    //     }
    // },
    url: "assets/cities.json",
    getValue: "name",

    template: {
        type: "description",
        fields: {
            description: "state"
        }
    },

    list: {
        maxNumberOfElements: 4,
        match: {
            enabled: true
        },
        sort: {
            enabled: true
        },
        showAnimation: {
            type: "slide",
            time: 300
        },
        hideAnimation: {
            type: "slide",
            time: 300
        }
    },
    theme: "round"
};

$("#search").easyAutocomplete(options);
</script>
</body>
</html>
