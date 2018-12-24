<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jesse Showalter Starter Kit</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/main.min.css" />
<style>
@import url("https://fonts.googleapis.com/css?family=Roboto:400,500,900");
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%; }

body {
  margin: 0;
  padding: 0; }

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block; }

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline; }

audio:not([controls]) {
  display: none;
  height: 0; }

[hidden],
template {
  display: none; }

a {
  background-color: transparent; }

a:active,
a:hover {
  outline: 0; }

abbr[title] {
  border-bottom: 1px dotted; }

b,
strong {
  font-weight: bold; }

dfn {
  font-style: italic; }

h1 {
  font-size: 2em;
  margin: 0.67em 0; }

mark {
  background: #ff0;
  color: #000; }

small {
  font-size: 80%; }

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }

sup {
  top: -0.5em; }

sub {
  bottom: -0.25em; }

img {
  border: 0; }

svg:not(:root) {
  overflow: hidden; }

figure {
  margin: 1em 40px; }

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0; }

pre {
  overflow: auto; }

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0; }

button {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer; }

button[disabled],
html input[disabled] {
  cursor: default; }

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0; }

input {
  line-height: normal; }

input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0; }

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto; }

input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box; }

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em; }

legend {
  border: 0;
  padding: 0; }

textarea {
  overflow: auto; }

optgroup {
  font-weight: bold; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

td,
th {
  padding: 0; }

html {
  box-sizing: border-box; }

*,
*:before,
*:after {
  box-sizing: inherit; }

body {
  font-size: 14px;
  line-height: 1.6;
  font-size: 14px;
  color: black;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%; }

.wrapper {
  width: 90%;
  max-width: 1100px;
  margin: 0 auto; }


.discountLayout{
  text-align: center;
}
.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
  display: inline-block;
  padding: 20px 60px;
  color: black;
  text-align: center;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  text-decoration: none;
  white-space: nowrap;
  background-color: white;
  border-radius: 4px;
  cursor: pointer;
  box-sizing: border-box;
  transition: all 0.2s ease;
  box-shadow: 0 20px 12px -15px rgba(0, 0, 0, 0.2); }
  .button:hover, .button:active, .button:focus,
  button:hover,
  button:active,
  button:focus,
  input[type="submit"]:hover,
  input[type="submit"]:active,
  input[type="submit"]:focus,
  input[type="reset"]:hover,
  input[type="reset"]:active,
  input[type="reset"]:focus,
  input[type="button"]:hover,
  input[type="button"]:active,
  input[type="button"]:focus {
    outline: 0;
    transform: scale(1.01);
    transform: translateY(3px); }

a {
  color: white;
  text-decoration: none;
  outline: 0; }
  a:hover, a:focus {
    color: #F012BE; }

.main-nav {
  display: flex;
  margin-top: 20px; }
  .main-nav li {
    list-style: none; }
  .main-nav li:first-child {
    margin-right: auto; }
  .main-nav a {
    color: white;
    display: block;
    border-radius: 4px;
    padding: 10px 50px;
    text-decoration: none;
    font-weight: 900;
    text-transform: uppercase;
    transition: all 0.2s ease; }
  .main-nav a:hover, .main-nav a:active {
    color: white; }

a.download {
  background: white;
  color: #00adff;
  box-shadow: 0 12px 10px -10px rgba(0, 0, 0, 0.2); }

::selection {
  background: #FFF498; }

::-moz-selection {
  background: #FFF498; }

img::selection {
  background: transparent; }

img::-moz-selection {
  background: transparent; }

body {
  -webkit-tap-highlight-color: #FFF498; }

.gigantic, .huge, .large, .bigger, .big,
h1, h2, h3, h4, h5, h6 {
  color: #222;
  font-weight:bolder;
  font-family: 'Roboto', sans-serif;
   }

.gigantic {
  font-size: 110px;
  line-height: 1.09;
  letter-spacing: -2px; }

.huge, h1 {
  margin-top: 150px;
  font-size: 68px;
  line-height: 1.05; }
  @media only screen and (max-width: 680px) {
    .huge, h1 {
      font-size: 44px; }
      #download .button{
        width: auto!important;
      }
      input[type="text"]{
        width: 90%!important;

      }
    }

.large, h2 {
  font-size: 42px;
  line-height: 1.14; }
  @media only screen and (max-width: 680px) {
    .large, h2 {
      font-size: 32px; } }

.bigger, h3 {
  font-size: 26px;
  line-height: 1.38; }
  @media only screen and (max-width: 680px) {
    .bigger, h3 {
      font-size: 22px; } }

.big, h4 {
  font-size: 22px;
  line-height: 1.38; }
  @media only screen and (max-width: 680px) {
    .big, h4 {
      font-size: 18px; } }

.small, small {
  font-size: 10px;
  line-height: 1.2; }

p {

  font-family: sans-serif;
  font-size: 15px; }

em {
  font-style: italic; }

strong {
  font-weight: bold; }

hr {
  border: solid #ddd;
  border-width: 1px 0 0;
  clear: both;
  margin: 10px 0 30px;
  height: 0; }

.main-nav {
  display: flex;
  margin-top: 20px; }
  .main-nav li {
    padding: 5px;
    list-style: none; }
  .main-nav a {
    color: white;
    display: block;
    border-radius: 4px;
    padding: 10px 50px;
    text-decoration: none;
    font-weight: 900;
    text-transform: uppercase; }

a.download {

    background: none;
    border: .5px solid black;
    border-radius: 25px;
    color: black;
    font-size: .8em;
    font-weight: bold;
    padding: 1em 3em;
    text-transform: uppercase;

  }
  .download:hover {
    color:white;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    background: black;
  }

li.nav-toggle {
  display: none; }

.responsive-nav {
  width: auto; }

.responsive-nav li {
  display: inline-block; }

@media only screen and (max-width: 680px) {
  .responsive-nav {
    display: none; }
  .responsive-nav.unfold {
    display: block;
    width: 100%;
    background: #1f1f1f;
    position: absolute;
    top: 0;
    right: 0; }
  li.toggle {
    display: block;
    z-index: 1000; }
  .responsive-nav.unfold li {
    display: block; }
  .responsive-nav.unfold a {
    padding: 40px;
    display: block;
    text-align: center; }
  .responsive-nav.unfold a:hover {
    transform: translate(0);
    color: black; }
  .responsive-nav.unfold a.download {
    background: inherit;
    color: white;
    margin-left: 0; } }
    #header {
      background-color: white;
      background-size: cover;
      height: 700px;
      color: black;
      text-align: center;
      overflow: hidden; }
      @media only screen and (max-width: 680px) {
        #header {
          height: 500px; } }
      #header img {
        max-width: 500px;
        width: 100%; }
      #header h1 {
        color: black;
        text-transform: none; }
      #header article {
        width: 80%;
        margin: 0 auto; }
        @media only screen and (max-width: 680px) {
          #header article {
            width: 100%; } }
        #header article h1 {
          margin-bottom: 10px; }
          @media only screen and (max-width: 680px) {
            #header article h1 {
              margin-top: 60px; } }
        #header article p {
          font-weight:0;
        font-weight: lighter;
      font-size: 18px;}
          @media only screen and (max-width: 680px) {
            #header article p {
              margin-bottom: 60px; } }

              input[type="text"] {
                width: 50%;
                border: 2px solid #aaa;
                border-radius: 15px;
                margin: 8px 0;
                outline: none;
                padding: 8px;
                box-sizing: border-box;
                transition: 0.3s;
              }

              input[type="text"]:focus {
                border-color: dodgerBlue;
                box-shadow: 0 0 8px 0 dodgerBlue;
              }

              .inputWithIcon {
                position: relative;
              }

              .inputWithIcon i {
                position: absolute;
                right: 0;
                top: 8px;
                padding: 15px 0px;
                margin-right: 14px;
                color: #aaa;
                transition: 0.3s;
              }

              .inputWithIcon input[type="text"]:focus + i {
                color: dodgerBlue;
              }

              .inputWithIcon.inputIconBg i {
                background-color: #aaa;
                color: #fff;
                padding: 9px 4px;
                border-radius: 4px 0 0 4px;
              }

              .inputWithIcon.inputIconBg input[type="text"]:focus + i {
                color: #fff;
                background-color: dodgerBlue;
              }
              @media only screen and (max-width: 768px) {
                  /* For mobile phones: */
                  .download {
                    padding: .4em .4em;
                  }
              }
</style>
</head>
<body>
  <section id="header">
      <div class="wrapper">

          <nav>
              <ul class="main-nav">
                  <li><a href="#" class="logo"><png width="139" height="25"  ><img src="assets/img/fb.png" alt="">
                    </a></li>

                  <div id="responsive-nav" class="responsive-nav">
                      <li><a href="home/signin" class="download button">Log in</a></li>
                      <li><a href="home/join" class="download button">Join us</a></li>
                  </div>

                  <li class="nav-toggle"><a href="javascript:void(0);" onclick="showNav();"><img src="assets/img/fb.png" alt=""></a></li>
              </ul>

          </nav>

          <article>

          <h1>We frames your <br>beautiful life</h1>
          <p>make a shoot with the world's best freelancers, professionals or plikx team </p>


      </article>
      <div class="inputWithIcon">
        <input type="text" placeholder="Location">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      </div>
  </section>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dream</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/main.min.css" />

<style>


/*! normalize.css v3.0.2 | MIT License | git.io/normalize * */
@import url("https://fonts.googleapis.com/css?family=Roboto:400,500,900");
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%; }

body {
  font-size: 14px;
  line-height: 1.6;
  font-size: 14px;
  color: black;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%; }

.wrapper {
  width: 90%;
  max-width: 1100px;
  margin: 0 auto; }



.button,
button,
input[type="submit"],
input[type="reset"],
input[type="button"] {
  display: inline-block;
  padding: 20px 60px;
  color: black;
  text-align: center;
  font-size: 14px;
  font-weight: 600;
  text-transform: none;

  text-decoration: none;
  white-space: nowrap;
  background-color: white;
  border-radius: 25px;
  cursor: pointer;
  box-sizing: border-box;
  transition: all 0.2s ease;
  box-shadow: 0 20px 12px -15px rgba(0, 0, 0, 0.2); }
  .button:hover, .button:active, .button:focus,
  button:hover,
  button:active,
  button:focus,
  input[type="submit"]:hover,
  input[type="submit"]:active,
  input[type="submit"]:focus,
  input[type="reset"]:hover,
  input[type="reset"]:active,
  input[type="reset"]:focus,
  input[type="button"]:hover,
  input[type="button"]:active,
  input[type="button"]:focus {
    outline: 0;
    transform: scale(1.01);
    transform: translateY(3px); }



body {
  -webkit-tap-highlight-color: #FFF498; }

.gigantic, .huge, .large, .bigger, .big,
h1, h2, h3, h4, h5, h6 {
  color: #222;
  font-weight: bold;
  font-family: 'Roboto', sans-serif;
  font-weight: 900;
  text-shadow: 0 2px 0 rgba(0, 0, 0, 0.07); }

.gigantic {
  font-size: 110px;
  line-height: 1.09;
  letter-spacing: -2px; }



.large, h2 {
  font-size: 45px;
  line-height: 1.14; }
  @media only screen and (max-width: 680px) {
    .large, h2 {
      font-size: 32px; } }

      .bigger, h3 {
        text-align: center;
        font-size: 75px;
        line-height: 1.38; }
        @media only screen and (max-width: 680px) {
          .bigger, h3 {
            font-size: 22px; } }

p {
  margin: 0 0 20px 0;
  font-weight: 400;
  font-size: 20px; }


#discount {
  margin-top: 65px; }

.discountLayout {
  display: flex;
  align-items: center;
  justify-content: center; }
  @media only screen and (max-width: 680px) {
    .discountLayout {
      display: block; } }
  .discountLayout picture img {
    width: 50%;
  }
  .discountLayout img {
    width: 90% !important; }
    @media only screen and (max-width: 680px) {
      .discountLayout img {
        width: 100%; } }
.align{text-align: center;}
.offer {
  width: 70%;
  margin: 0 auto; }
  @media only screen and (max-width: 680px) {
    .offer {
      width: 100%;
      text-align: center; } }

.offer .button {
  background: black;
  background:black;
  color: white;
  padding: 10px 40px;
  font-size: 18px; }


  #download {

    background-color: black ;
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 100px 0; }
    @media only screen and (max-width: 680px) {
      #download {
        background-color:black no-repeat;
        margin-top: 70px;
        padding: 60px; } }
    #download h4 {
      font-size: 68px;
      margin: 0;
      text-transform: none;
      font-weight: 900;
      color: white;
      font-weight: 900; }
      @media only screen and (max-width: 680px) {
        #download h4 {
          font-size: 44px; } }
    #download p {
      color: white;
      width: 100%;
      max-width: 450px;
      margin: 20px auto; }
    #download .button {
      width: 250px;
      margin: 0 15px;
      position: relative;
      padding-left: 50px; }
      @media only screen and (max-width: 680px) {
        #download .button {
          margin: 10px 15px; } }


          #footer {float: bottom;
            position: absolute;
            left: 0;
            background: white;
            width: 100%;
            padding: 10px;
            font-family: Verdana;
            font-size: 16px;
            letter-spacing: 1px;
            color: #fff;
          }
          #footer span {
            display: inline-block;
            min-width: 230px;
            margin: 10px 0 10px 0;
            text-align: center;
          }
          #footer span a {
            text-decoration: none;
            color: black;
            transition: all 0.2s ease-in;
          }
          #footer span a:hover {
            color: violet;
          }

</style>
<body>
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

<script >!function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(C,e){"use strict";var t=[],E=C.document,r=Object.getPrototypeOf,a=t.slice,g=t.concat,u=t.push,i=t.indexOf,n={},o=n.toString,y=n.hasOwnProperty,s=y.toString,l=s.call(Object),m={},v=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType},x=function(e){return null!=e&&e===e.window},c={type:!0,src:!0,noModule:!0};function b(e,t,n){var r,i=(t=t||E).createElement("script");if(i.text=e,n)for(r in c)n[r]&&(i[r]=n[r]);t.head.appendChild(i).parentNode.removeChild(i)}function w(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?n[o.call(e)]||"object":typeof e}var S=function(e,t){return new S.fn.init(e,t)},f=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;function d(e){var t=!!e&&"length"in e&&e.length,n=w(e);return!v(e)&&!x(e)&&("array"===n||0===t||"number"==typeof t&&0<t&&t-1 in e)}S.fn=S.prototype={jquery:"3.3.1",constructor:S,length:0,toArray:function(){return a.call(this)},get:function(e){return null==e?a.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=S.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return S.each(this,e)},map:function(n){return this.pushStack(S.map(this,function(e,t){return n.call(e,t,e)}))},slice:function(){return this.pushStack(a.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(0<=n&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:u,sort:t.sort,splice:t.splice},S.extend=S.fn.extend=function(){var e,t,n,r,i,o,s=arguments[0]||{},a=1,u=arguments.length,l=!1;for("boolean"==typeof s&&(l=s,s=arguments[a]||{},a++),"object"==typeof s||v(s)||(s={}),a===u&&(s=this,a--);a<u;a++)if(null!=(e=arguments[a]))for(t in e)n=s[t],s!==(r=e[t])&&(l&&r&&(S.isPlainObject(r)||(i=Array.isArray(r)))?(i?(i=!1,o=n&&Array.isArray(n)?n:[]):o=n&&S.isPlainObject(n)?n:{},s[t]=S.extend(l,o,r)):void 0!==r&&(s[t]=r));return s},S.extend({expando:"jQuery"+("3.3.1"+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==o.call(e)||(t=r(e))&&("function"!=typeof(n=y.call(t,"constructor")&&t.constructor)||s.call(n)!==l))},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e){b(e)},each:function(e,t){var n,r=0;if(d(e))for(n=e.length;r<n&&!1!==t.call(e[r],r,e[r]);r++);else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},trim:function(e){return null==e?"":(e+"").replace(f,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(d(Object(e))?S.merge(n,"string"==typeof e?[e]:e):u.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:i.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,s=!n;i<o;i++)!t(e[i],i)!==s&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,s=[];if(d(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&s.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&s.push(i);return g.apply([],s)},guid:1,support:m}),"function"==typeof Symbol&&(S.fn[Symbol.iterator]=t[Symbol.iterator]),S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){n["[object "+t+"]"]=t.toLowerCase()});var p=function(n){var e,p,b,o,i,h,f,g,w,u,l,T,C,s,E,y,a,c,m,S="sizzle"+1*new Date,v=n.document,k=0,r=0,d=se(),x=se(),N=se(),A=function(e,t){return e===t&&(l=!0),0},j={}.hasOwnProperty,t=[],D=t.pop,q=t.push,L=t.push,O=t.slice,H=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},P="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",R="[\\x20\\t\\r\\n\\f]",M="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",I="\\["+R+"*("+M+")(?:"+R+"*([*^$|!~]?=)"+R+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+M+"))|)"+R+"*\\]",W=":("+M+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+I+")*)|.*)\\)|)",F=new RegExp(R+"+","g"),$=new RegExp("^"+R+"+|((?:^|[^\\\\])(?:\\\\.)*)"+R+"+$","g"),B=new RegExp("^"+R+"*,"+R+"*"),z=new RegExp("^"+R+"*([>+~]|"+R+")"+R+"*"),_=new RegExp("="+R+"*([^\\]'\"]*?)"+R+"*\\]","g"),X=new RegExp(W),U=new RegExp("^"+M+"$"),V={ID:new RegExp("^#("+M+")"),CLASS:new RegExp("^\\.("+M+")"),TAG:new RegExp("^("+M+"|[*])"),ATTR:new RegExp("^"+I),PSEUDO:new RegExp("^"+W),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+R+"*(even|odd|(([+-]|)(\\d*)n|)"+R+"*(?:([+-]|)"+R+"*(\\d+)|))"+R+"*\\)|)","i"),bool:new RegExp("^(?:"+P+")$","i"),needsContext:new RegExp("^"+R+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+R+"*((?:-\\d)?\\d*)"+R+"*\\)|)(?=[^-]|$)","i")},Y=/^(?:input|select|textarea|button)$/i,G=/^h\d$/i,Q=/^[^{]+\{\s*\[native \w/,J=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,K=/[+~]/,Z=new RegExp("\\\\([\\da-f]{1,6}"+R+"?|("+R+")|.)","ig"),ee=function(e,t,n){var r="0x"+t-65536;return r!=r||n?t:r<0?String.fromCharCode(r+65536):String.fromCharCode(r>>10|55296,1023&r|56320)},te=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ne=function(e,t){return t?"\0"===e?"�":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},re=function(){T()},ie=ve(function(e){return!0===e.disabled&&("form"in e||"label"in e)},{dir:"parentNode",next:"legend"});try{L.apply(t=O.call(v.childNodes),v.childNodes),t[v.childNodes.length].nodeType}catch(n){L={apply:t.length?function(e,t){q.apply(e,O.call(t))}:function(e,t){for(var n=e.length,r=0;e[n++]=t[r++];);e.length=n-1}}}function oe(e,t,n,r){var i,o,s,a,u,l,c,f=t&&t.ownerDocument,d=t?t.nodeType:9;if(n=n||[],"string"!=typeof e||!e||1!==d&&9!==d&&11!==d)return n;if(!r&&((t?t.ownerDocument||t:v)!==C&&T(t),t=t||C,E)){if(11!==d&&(u=J.exec(e)))if(i=u[1]){if(9===d){if(!(s=t.getElementById(i)))return n;if(s.id===i)return n.push(s),n}else if(f&&(s=f.getElementById(i))&&m(t,s)&&s.id===i)return n.push(s),n}else{if(u[2])return L.apply(n,t.getElementsByTagName(e)),n;if((i=u[3])&&p.getElementsByClassName&&t.getElementsByClassName)return L.apply(n,t.getElementsByClassName(i)),n}if(p.qsa&&!N[e+" "]&&(!y||!y.test(e))){if(1!==d)f=t,c=e;else if("object"!==t.nodeName.toLowerCase()){for((a=t.getAttribute("id"))?a=a.replace(te,ne):t.setAttribute("id",a=S),o=(l=h(e)).length;o--;)l[o]="#"+a+" "+me(l[o]);c=l.join(","),f=K.test(e)&&ge(t.parentNode)||t}if(c)try{return L.apply(n,f.querySelectorAll(c)),n}catch(e){}finally{a===S&&t.removeAttribute("id")}}}return g(e.replace($,"$1"),t,n,r)}function se(){var r=[];return function e(t,n){return r.push(t+" ")>b.cacheLength&&delete e[r.shift()],e[t+" "]=n}}function ae(e){return e[S]=!0,e}function ue(e){var t=C.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function le(e,t){for(var n=e.split("|"),r=n.length;r--;)b.attrHandle[n[r]]=t}function ce(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)for(;n=n.nextSibling;)if(n===t)return-1;return e?1:-1}function fe(t){return function(e){return"input"===e.nodeName.toLowerCase()&&e.type===t}}function de(n){return function(e){var t=e.nodeName.toLowerCase();return("input"===t||"button"===t)&&e.type===n}}function pe(t){return function(e){return"form"in e?e.parentNode&&!1===e.disabled?"label"in e?"label"in e.parentNode?e.parentNode.disabled===t:e.disabled===t:e.isDisabled===t||e.isDisabled!==!t&&ie(e)===t:e.disabled===t:"label"in e&&e.disabled===t}}function he(s){return ae(function(o){return o=+o,ae(function(e,t){for(var n,r=s([],e.length,o),i=r.length;i--;)e[n=r[i]]&&(e[n]=!(t[n]=e[n]))})})}function ge(e){return e&&void 0!==e.getElementsByTagName&&e}for(e in p=oe.support={},i=oe.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return!!t&&"HTML"!==t.nodeName},T=oe.setDocument=function(e){var t,n,r=e?e.ownerDocument||e:v;return r!==C&&9===r.nodeType&&r.documentElement&&(s=(C=r).documentElement,E=!i(C),v!==C&&(n=C.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",re,!1):n.attachEvent&&n.attachEvent("onunload",re)),p.attributes=ue(function(e){return e.className="i",!e.getAttribute("className")}),p.getElementsByTagName=ue(function(e){return e.appendChild(C.createComment("")),!e.getElementsByTagName("*").length}),p.getElementsByClassName=Q.test(C.getElementsByClassName),p.getById=ue(function(e){return s.appendChild(e).id=S,!C.getElementsByName||!C.getElementsByName(S).length}),p.getById?(b.filter.ID=function(e){var t=e.replace(Z,ee);return function(e){return e.getAttribute("id")===t}},b.find.ID=function(e,t){if(void 0!==t.getElementById&&E){var n=t.getElementById(e);return n?[n]:[]}}):(b.filter.ID=function(e){var n=e.replace(Z,ee);return function(e){var t=void 0!==e.getAttributeNode&&e.getAttributeNode("id");return t&&t.value===n}},b.find.ID=function(e,t){if(void 0!==t.getElementById&&E){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];for(i=t.getElementsByName(e),r=0;o=i[r++];)if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),b.find.TAG=p.getElementsByTagName?function(e,t){return void 0!==t.getElementsByTagName?t.getElementsByTagName(e):p.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){for(;n=o[i++];)1===n.nodeType&&r.push(n);return r}return o},b.find.CLASS=p.getElementsByClassName&&function(e,t){if(void 0!==t.getElementsByClassName&&E)return t.getElementsByClassName(e)},a=[],y=[],(p.qsa=Q.test(C.querySelectorAll))&&(ue(function(e){s.appendChild(e).innerHTML="<a id='"+S+"'></a><select id='"+S+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&y.push("[*^$]="+R+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||y.push("\\["+R+"*(?:value|"+P+")"),e.querySelectorAll("[id~="+S+"-]").length||y.push("~="),e.querySelectorAll(":checked").length||y.push(":checked"),e.querySelectorAll("a#"+S+"+*").length||y.push(".#.+[+~]")}),ue(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=C.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&y.push("name"+R+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&y.push(":enabled",":disabled"),s.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&y.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),y.push(",.*:")})),(p.matchesSelector=Q.test(c=s.matches||s.webkitMatchesSelector||s.mozMatchesSelector||s.oMatchesSelector||s.msMatchesSelector))&&ue(function(e){p.disconnectedMatch=c.call(e,"*"),c.call(e,"[s!='']:x"),a.push("!=",W)}),y=y.length&&new RegExp(y.join("|")),a=a.length&&new RegExp(a.join("|")),t=Q.test(s.compareDocumentPosition),m=t||Q.test(s.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)for(;t=t.parentNode;)if(t===e)return!0;return!1},A=t?function(e,t){if(e===t)return l=!0,0;var n=!e.compareDocumentPosition-!t.compareDocumentPosition;return n||(1&(n=(e.ownerDocument||e)===(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!p.sortDetached&&t.compareDocumentPosition(e)===n?e===C||e.ownerDocument===v&&m(v,e)?-1:t===C||t.ownerDocument===v&&m(v,t)?1:u?H(u,e)-H(u,t):0:4&n?-1:1)}:function(e,t){if(e===t)return l=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,s=[e],a=[t];if(!i||!o)return e===C?-1:t===C?1:i?-1:o?1:u?H(u,e)-H(u,t):0;if(i===o)return ce(e,t);for(n=e;n=n.parentNode;)s.unshift(n);for(n=t;n=n.parentNode;)a.unshift(n);for(;s[r]===a[r];)r++;return r?ce(s[r],a[r]):s[r]===v?-1:a[r]===v?1:0}),C},oe.matches=function(e,t){return oe(e,null,null,t)},oe.matchesSelector=function(e,t){if((e.ownerDocument||e)!==C&&T(e),t=t.replace(_,"='$1']"),p.matchesSelector&&E&&!N[t+" "]&&(!a||!a.test(t))&&(!y||!y.test(t)))try{var n=c.call(e,t);if(n||p.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(e){}return 0<oe(t,C,null,[e]).length},oe.contains=function(e,t){return(e.ownerDocument||e)!==C&&T(e),m(e,t)},oe.attr=function(e,t){(e.ownerDocument||e)!==C&&T(e);var n=b.attrHandle[t.toLowerCase()],r=n&&j.call(b.attrHandle,t.toLowerCase())?n(e,t,!E):void 0;return void 0!==r?r:p.attributes||!E?e.getAttribute(t):(r=e.getAttributeNode(t))&&r.specified?r.value:null},oe.escape=function(e){return(e+"").replace(te,ne)},oe.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},oe.uniqueSort=function(e){var t,n=[],r=0,i=0;if(l=!p.detectDuplicates,u=!p.sortStable&&e.slice(0),e.sort(A),l){for(;t=e[i++];)t===e[i]&&(r=n.push(i));for(;r--;)e.splice(n[r],1)}return u=null,e},o=oe.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=o(e)}else if(3===i||4===i)return e.nodeValue}else for(;t=e[r++];)n+=o(t);return n},(b=oe.selectors={cacheLength:50,createPseudo:ae,match:V,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(Z,ee),e[3]=(e[3]||e[4]||e[5]||"").replace(Z,ee),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||oe.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&oe.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return V.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=h(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(Z,ee).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=d[e+" "];return t||(t=new RegExp("(^|"+R+")"+e+"("+R+"|$)"))&&d(e,function(e){return t.test("string"==typeof e.className&&e.className||void 0!==e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(n,r,i){return function(e){var t=oe.attr(e,n);return null==t?"!="===r:!r||(t+="","="===r?t===i:"!="===r?t!==i:"^="===r?i&&0===t.indexOf(i):"*="===r?i&&-1<t.indexOf(i):"$="===r?i&&t.slice(-i.length)===i:"~="===r?-1<(" "+t.replace(F," ")+" ").indexOf(i):"|="===r&&(t===i||t.slice(0,i.length+1)===i+"-"))}},CHILD:function(h,e,t,g,y){var m="nth"!==h.slice(0,3),v="last"!==h.slice(-4),x="of-type"===e;return 1===g&&0===y?function(e){return!!e.parentNode}:function(e,t,n){var r,i,o,s,a,u,l=m!==v?"nextSibling":"previousSibling",c=e.parentNode,f=x&&e.nodeName.toLowerCase(),d=!n&&!x,p=!1;if(c){if(m){for(;l;){for(s=e;s=s[l];)if(x?s.nodeName.toLowerCase()===f:1===s.nodeType)return!1;u=l="only"===h&&!u&&"nextSibling"}return!0}if(u=[v?c.firstChild:c.lastChild],v&&d){for(p=(a=(r=(i=(o=(s=c)[S]||(s[S]={}))[s.uniqueID]||(o[s.uniqueID]={}))[h]||[])[0]===k&&r[1])&&r[2],s=a&&c.childNodes[a];s=++a&&s&&s[l]||(p=a=0)||u.pop();)if(1===s.nodeType&&++p&&s===e){i[h]=[k,a,p];break}}else if(d&&(p=a=(r=(i=(o=(s=e)[S]||(s[S]={}))[s.uniqueID]||(o[s.uniqueID]={}))[h]||[])[0]===k&&r[1]),!1===p)for(;(s=++a&&s&&s[l]||(p=a=0)||u.pop())&&((x?s.nodeName.toLowerCase()!==f:1!==s.nodeType)||!++p||(d&&((i=(o=s[S]||(s[S]={}))[s.uniqueID]||(o[s.uniqueID]={}))[h]=[k,p]),s!==e)););return(p-=y)===g||p%g==0&&0<=p/g}}},PSEUDO:function(e,o){var t,s=b.pseudos[e]||b.setFilters[e.toLowerCase()]||oe.error("unsupported pseudo: "+e);return s[S]?s(o):1<s.length?(t=[e,e,"",o],b.setFilters.hasOwnProperty(e.toLowerCase())?ae(function(e,t){for(var n,r=s(e,o),i=r.length;i--;)e[n=H(e,r[i])]=!(t[n]=r[i])}):function(e){return s(e,0,t)}):s}},pseudos:{not:ae(function(e){var r=[],i=[],a=f(e.replace($,"$1"));return a[S]?ae(function(e,t,n,r){for(var i,o=a(e,null,r,[]),s=e.length;s--;)(i=o[s])&&(e[s]=!(t[s]=i))}):function(e,t,n){return r[0]=e,a(r,null,n,i),r[0]=null,!i.pop()}}),has:ae(function(t){return function(e){return 0<oe(t,e).length}}),contains:ae(function(t){return t=t.replace(Z,ee),function(e){return-1<(e.textContent||e.innerText||o(e)).indexOf(t)}}),lang:ae(function(n){return U.test(n||"")||oe.error("unsupported lang: "+n),n=n.replace(Z,ee).toLowerCase(),function(e){var t;do{if(t=E?e.lang:e.getAttribute("xml:lang")||e.getAttribute("lang"))return(t=t.toLowerCase())===n||0===t.indexOf(n+"-")}while((e=e.parentNode)&&1===e.nodeType);return!1}}),target:function(e){var t=n.location&&n.location.hash;return t&&t.slice(1)===e.id},root:function(e){return e===s},focus:function(e){return e===C.activeElement&&(!C.hasFocus||C.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:pe(!1),disabled:pe(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!b.pseudos.empty(e)},header:function(e){return G.test(e.nodeName)},input:function(e){return Y.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:he(function(){return[0]}),last:he(function(e,t){return[t-1]}),eq:he(function(e,t,n){return[n<0?n+t:n]}),even:he(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:he(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:he(function(e,t,n){for(var r=n<0?n+t:n;0<=--r;)e.push(r);return e}),gt:he(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=b.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})b.pseudos[e]=fe(e);for(e in{submit:!0,reset:!0})b.pseudos[e]=de(e);function ye(){}function me(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function ve(a,e,t){var u=e.dir,l=e.next,c=l||u,f=t&&"parentNode"===c,d=r++;return e.first?function(e,t,n){for(;e=e[u];)if(1===e.nodeType||f)return a(e,t,n);return!1}:function(e,t,n){var r,i,o,s=[k,d];if(n){for(;e=e[u];)if((1===e.nodeType||f)&&a(e,t,n))return!0}else for(;e=e[u];)if(1===e.nodeType||f)if(i=(o=e[S]||(e[S]={}))[e.uniqueID]||(o[e.uniqueID]={}),l&&l===e.nodeName.toLowerCase())e=e[u]||e;else{if((r=i[c])&&r[0]===k&&r[1]===d)return s[2]=r[2];if((i[c]=s)[2]=a(e,t,n))return!0}return!1}}function xe(i){return 1<i.length?function(e,t,n){for(var r=i.length;r--;)if(!i[r](e,t,n))return!1;return!0}:i[0]}function be(e,t,n,r,i){for(var o,s=[],a=0,u=e.length,l=null!=t;a<u;a++)(o=e[a])&&(n&&!n(o,r,i)||(s.push(o),l&&t.push(a)));return s}function we(p,h,g,y,m,e){return y&&!y[S]&&(y=we(y)),m&&!m[S]&&(m=we(m,e)),ae(function(e,t,n,r){var i,o,s,a=[],u=[],l=t.length,c=e||function(e,t,n){for(var r=0,i=t.length;r<i;r++)oe(e,t[r],n);return n}(h||"*",n.nodeType?[n]:n,[]),f=!p||!e&&h?c:be(c,a,p,n,r),d=g?m||(e?p:l||y)?[]:t:f;if(g&&g(f,d,n,r),y)for(i=be(d,u),y(i,[],n,r),o=i.length;o--;)(s=i[o])&&(d[u[o]]=!(f[u[o]]=s));if(e){if(m||p){if(m){for(i=[],o=d.length;o--;)(s=d[o])&&i.push(f[o]=s);m(null,d=[],i,r)}for(o=d.length;o--;)(s=d[o])&&-1<(i=m?H(e,s):a[o])&&(e[i]=!(t[i]=s))}}else d=be(d===t?d.splice(l,d.length):d),m?m(null,t,d,r):L.apply(t,d)})}function Te(e){for(var i,t,n,r=e.length,o=b.relative[e[0].type],s=o||b.relative[" "],a=o?1:0,u=ve(function(e){return e===i},s,!0),l=ve(function(e){return-1<H(i,e)},s,!0),c=[function(e,t,n){var r=!o&&(n||t!==w)||((i=t).nodeType?u(e,t,n):l(e,t,n));return i=null,r}];a<r;a++)if(t=b.relative[e[a].type])c=[ve(xe(c),t)];else{if((t=b.filter[e[a].type].apply(null,e[a].matches))[S]){for(n=++a;n<r&&!b.relative[e[n].type];n++);return we(1<a&&xe(c),1<a&&me(e.slice(0,a-1).concat({value:" "===e[a-2].type?"*":""})).replace($,"$1"),t,a<n&&Te(e.slice(a,n)),n<r&&Te(e=e.slice(n)),n<r&&me(e))}c.push(t)}return xe(c)}return ye.prototype=b.filters=b.pseudos,b.setFilters=new ye,h=oe.tokenize=function(e,t){var n,r,i,o,s,a,u,l=x[e+" "];if(l)return t?0:l.slice(0);for(s=e,a=[],u=b.preFilter;s;){for(o in n&&!(r=B.exec(s))||(r&&(s=s.slice(r[0].length)||s),a.push(i=[])),n=!1,(r=z.exec(s))&&(n=r.shift(),i.push({value:n,type:r[0].replace($," ")}),s=s.slice(n.length)),b.filter)!(r=V[o].exec(s))||u[o]&&!(r=u[o](r))||(n=r.shift(),i.push({value:n,type:o,matches:r}),s=s.slice(n.length));if(!n)break}return t?s.length:s?oe.error(e):x(e,a).slice(0)},f=oe.compile=function(e,t){var n,y,m,v,x,r,i=[],o=[],s=N[e+" "];if(!s){for(t||(t=h(e)),n=t.length;n--;)(s=Te(t[n]))[S]?i.push(s):o.push(s);(s=N(e,(y=o,m=i,v=0<m.length,x=0<y.length,r=function(e,t,n,r,i){var o,s,a,u=0,l="0",c=e&&[],f=[],d=w,p=e||x&&b.find.TAG("*",i),h=k+=null==d?1:Math.random()||.1,g=p.length;for(i&&(w=t===C||t||i);l!==g&&null!=(o=p[l]);l++){if(x&&o){for(s=0,t||o.ownerDocument===C||(T(o),n=!E);a=y[s++];)if(a(o,t||C,n)){r.push(o);break}i&&(k=h)}v&&((o=!a&&o)&&u--,e&&c.push(o))}if(u+=l,v&&l!==u){for(s=0;a=m[s++];)a(c,f,t,n);if(e){if(0<u)for(;l--;)c[l]||f[l]||(f[l]=D.call(r));f=be(f)}L.apply(r,f),i&&!e&&0<f.length&&1<u+m.length&&oe.uniqueSort(r)}return i&&(k=h,w=d),c},v?ae(r):r))).selector=e}return s},g=oe.select=function(e,t,n,r){var i,o,s,a,u,l="function"==typeof e&&e,c=!r&&h(e=l.selector||e);if(n=n||[],1===c.length){if(2<(o=c[0]=c[0].slice(0)).length&&"ID"===(s=o[0]).type&&9===t.nodeType&&E&&b.relative[o[1].type]){if(!(t=(b.find.ID(s.matches[0].replace(Z,ee),t)||[])[0]))return n;l&&(t=t.parentNode),e=e.slice(o.shift().value.length)}for(i=V.needsContext.test(e)?0:o.length;i--&&(s=o[i],!b.relative[a=s.type]);)if((u=b.find[a])&&(r=u(s.matches[0].replace(Z,ee),K.test(o[0].type)&&ge(t.parentNode)||t))){if(o.splice(i,1),!(e=r.length&&me(o)))return L.apply(n,r),n;break}}return(l||f(e,c))(r,t,!E,n,!t||K.test(e)&&ge(t.parentNode)||t),n},p.sortStable=S.split("").sort(A).join("")===S,p.detectDuplicates=!!l,T(),p.sortDetached=ue(function(e){return 1&e.compareDocumentPosition(C.createElement("fieldset"))}),ue(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||le("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),p.attributes&&ue(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||le("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ue(function(e){return null==e.getAttribute("disabled")})||le(P,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),oe}(C);S.find=p,S.expr=p.selectors,S.expr[":"]=S.expr.pseudos,S.uniqueSort=S.unique=p.uniqueSort,S.text=p.getText,S.isXMLDoc=p.isXML,S.contains=p.contains,S.escapeSelector=p.escape;var h=function(e,t,n){for(var r=[],i=void 0!==n;(e=e[t])&&9!==e.nodeType;)if(1===e.nodeType){if(i&&S(e).is(n))break;r.push(e)}return r},T=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},k=S.expr.match.needsContext;function N(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var A=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function j(e,n,r){return v(n)?S.grep(e,function(e,t){return!!n.call(e,t,e)!==r}):n.nodeType?S.grep(e,function(e){return e===n!==r}):"string"!=typeof n?S.grep(e,function(e){return-1<i.call(n,e)!==r}):S.filter(n,e,r)}S.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?S.find.matchesSelector(r,e)?[r]:[]:S.find.matches(e,S.grep(t,function(e){return 1===e.nodeType}))},S.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(S(e).filter(function(){for(t=0;t<r;t++)if(S.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)S.find(e,i[t],n);return 1<r?S.uniqueSort(n):n},filter:function(e){return this.pushStack(j(this,e||[],!1))},not:function(e){return this.pushStack(j(this,e||[],!0))},is:function(e){return!!j(this,"string"==typeof e&&k.test(e)?S(e):e||[],!1).length}});var D,q=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(S.fn.init=function(e,t,n){var r,i;if(!e)return this;if(n=n||D,"string"==typeof e){if(!(r="<"===e[0]&&">"===e[e.length-1]&&3<=e.length?[null,e,null]:q.exec(e))||!r[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(r[1]){if(t=t instanceof S?t[0]:t,S.merge(this,S.parseHTML(r[1],t&&t.nodeType?t.ownerDocument||t:E,!0)),A.test(r[1])&&S.isPlainObject(t))for(r in t)v(this[r])?this[r](t[r]):this.attr(r,t[r]);return this}return(i=E.getElementById(r[2]))&&(this[0]=i,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):v(e)?void 0!==n.ready?n.ready(e):e(S):S.makeArray(e,this)}).prototype=S.fn,D=S(E);var L=/^(?:parents|prev(?:Until|All))/,O={children:!0,contents:!0,next:!0,prev:!0};function H(e,t){for(;(e=e[t])&&1!==e.nodeType;);return e}S.fn.extend({has:function(e){var t=S(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(S.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],s="string"!=typeof e&&S(e);if(!k.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(s?-1<s.index(n):1===n.nodeType&&S.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(1<o.length?S.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?i.call(S(e),this[0]):i.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(S.uniqueSort(S.merge(this.get(),S(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),S.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return h(e,"parentNode")},parentsUntil:function(e,t,n){return h(e,"parentNode",n)},next:function(e){return H(e,"nextSibling")},prev:function(e){return H(e,"previousSibling")},nextAll:function(e){return h(e,"nextSibling")},prevAll:function(e){return h(e,"previousSibling")},nextUntil:function(e,t,n){return h(e,"nextSibling",n)},prevUntil:function(e,t,n){return h(e,"previousSibling",n)},siblings:function(e){return T((e.parentNode||{}).firstChild,e)},children:function(e){return T(e.firstChild)},contents:function(e){return N(e,"iframe")?e.contentDocument:(N(e,"template")&&(e=e.content||e),S.merge([],e.childNodes))}},function(r,i){S.fn[r]=function(e,t){var n=S.map(this,i,e);return"Until"!==r.slice(-5)&&(t=e),t&&"string"==typeof t&&(n=S.filter(t,n)),1<this.length&&(O[r]||S.uniqueSort(n),L.test(r)&&n.reverse()),this.pushStack(n)}});var P=/[^\x20\t\r\n\f]+/g;function R(e){return e}function M(e){throw e}function I(e,t,n,r){var i;try{e&&v(i=e.promise)?i.call(e).done(t).fail(n):e&&v(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}S.Callbacks=function(r){var e,n;r="string"==typeof r?(e=r,n={},S.each(e.match(P)||[],function(e,t){n[t]=!0}),n):S.extend({},r);var i,t,o,s,a=[],u=[],l=-1,c=function(){for(s=s||r.once,o=i=!0;u.length;l=-1)for(t=u.shift();++l<a.length;)!1===a[l].apply(t[0],t[1])&&r.stopOnFalse&&(l=a.length,t=!1);r.memory||(t=!1),i=!1,s&&(a=t?[]:"")},f={add:function(){return a&&(t&&!i&&(l=a.length-1,u.push(t)),function n(e){S.each(e,function(e,t){v(t)?r.unique&&f.has(t)||a.push(t):t&&t.length&&"string"!==w(t)&&n(t)})}(arguments),t&&!i&&c()),this},remove:function(){return S.each(arguments,function(e,t){for(var n;-1<(n=S.inArray(t,a,n));)a.splice(n,1),n<=l&&l--}),this},has:function(e){return e?-1<S.inArray(e,a):0<a.length},empty:function(){return a&&(a=[]),this},disable:function(){return s=u=[],a=t="",this},disabled:function(){return!a},lock:function(){return s=u=[],t||i||(a=t=""),this},locked:function(){return!!s},fireWith:function(e,t){return s||(t=[e,(t=t||[]).slice?t.slice():t],u.push(t),i||c()),this},fire:function(){return f.fireWith(this,arguments),this},fired:function(){return!!o}};return f},S.extend({Deferred:function(e){var o=[["notify","progress",S.Callbacks("memory"),S.Callbacks("memory"),2],["resolve","done",S.Callbacks("once memory"),S.Callbacks("once memory"),0,"resolved"],["reject","fail",S.Callbacks("once memory"),S.Callbacks("once memory"),1,"rejected"]],i="pending",s={state:function(){return i},always:function(){return a.done(arguments).fail(arguments),this},catch:function(e){return s.then(null,e)},pipe:function(){var i=arguments;return S.Deferred(function(r){S.each(o,function(e,t){var n=v(i[t[4]])&&i[t[4]];a[t[1]](function(){var e=n&&n.apply(this,arguments);e&&v(e.promise)?e.promise().progress(r.notify).done(r.resolve).fail(r.reject):r[t[0]+"With"](this,n?[e]:arguments)})}),i=null}).promise()},then:function(t,n,r){var u=0;function l(i,o,s,a){return function(){var n=this,r=arguments,e=function(){var e,t;if(!(i<u)){if((e=s.apply(n,r))===o.promise())throw new TypeError("Thenable self-resolution");t=e&&("object"==typeof e||"function"==typeof e)&&e.then,v(t)?a?t.call(e,l(u,o,R,a),l(u,o,M,a)):(u++,t.call(e,l(u,o,R,a),l(u,o,M,a),l(u,o,R,o.notifyWith))):(s!==R&&(n=void 0,r=[e]),(a||o.resolveWith)(n,r))}},t=a?e:function(){try{e()}catch(e){S.Deferred.exceptionHook&&S.Deferred.exceptionHook(e,t.stackTrace),u<=i+1&&(s!==M&&(n=void 0,r=[e]),o.rejectWith(n,r))}};i?t():(S.Deferred.getStackHook&&(t.stackTrace=S.Deferred.getStackHook()),C.setTimeout(t))}}return S.Deferred(function(e){o[0][3].add(l(0,e,v(r)?r:R,e.notifyWith)),o[1][3].add(l(0,e,v(t)?t:R)),o[2][3].add(l(0,e,v(n)?n:M))}).promise()},promise:function(e){return null!=e?S.extend(e,s):s}},a={};return S.each(o,function(e,t){var n=t[2],r=t[5];s[t[1]]=n.add,r&&n.add(function(){i=r},o[3-e][2].disable,o[3-e][3].disable,o[0][2].lock,o[0][3].lock),n.add(t[3].fire),a[t[0]]=function(){return a[t[0]+"With"](this===a?void 0:this,arguments),this},a[t[0]+"With"]=n.fireWith}),s.promise(a),e&&e.call(a,a),a},when:function(e){var n=arguments.length,t=n,r=Array(t),i=a.call(arguments),o=S.Deferred(),s=function(t){return function(e){r[t]=this,i[t]=1<arguments.length?a.call(arguments):e,--n||o.resolveWith(r,i)}};if(n<=1&&(I(e,o.done(s(t)).resolve,o.reject,!n),"pending"===o.state()||v(i[t]&&i[t].then)))return o.then();for(;t--;)I(i[t],s(t),o.reject);return o.promise()}});var W=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;S.Deferred.exceptionHook=function(e,t){C.console&&C.console.warn&&e&&W.test(e.name)&&C.console.warn("jQuery.Deferred exception: "+e.message,e.stack,t)},S.readyException=function(e){C.setTimeout(function(){throw e})};var F=S.Deferred();function $(){E.removeEventListener("DOMContentLoaded",$),C.removeEventListener("load",$),S.ready()}S.fn.ready=function(e){return F.then(e).catch(function(e){S.readyException(e)}),this},S.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--S.readyWait:S.isReady)||((S.isReady=!0)!==e&&0<--S.readyWait||F.resolveWith(E,[S]))}}),S.ready.then=F.then,"complete"===E.readyState||"loading"!==E.readyState&&!E.documentElement.doScroll?C.setTimeout(S.ready):(E.addEventListener("DOMContentLoaded",$),C.addEventListener("load",$));var B=function(e,t,n,r,i,o,s){var a=0,u=e.length,l=null==n;if("object"===w(n))for(a in i=!0,n)B(e,t,a,n[a],!0,o,s);else if(void 0!==r&&(i=!0,v(r)||(s=!0),l&&(s?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(S(e),n)})),t))for(;a<u;a++)t(e[a],n,s?r:r.call(e[a],a,t(e[a],n)));return i?e:l?t.call(e):u?t(e[0],n):o},z=/^-ms-/,_=/-([a-z])/g;function X(e,t){return t.toUpperCase()}function U(e){return e.replace(z,"ms-").replace(_,X)}var V=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function Y(){this.expando=S.expando+Y.uid++}Y.uid=1,Y.prototype={cache:function(e){var t=e[this.expando];return t||(t={},V(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[U(t)]=n;else for(r in t)i[U(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][U(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(U):(t=U(t))in r?[t]:t.match(P)||[]).length;for(;n--;)delete r[t[n]]}(void 0===t||S.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!S.isEmptyObject(t)}};var G=new Y,Q=new Y,J=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,K=/[A-Z]/g;function Z(e,t,n){var r,i;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(K,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n="true"===(i=n)||"false"!==i&&("null"===i?null:i===+i+""?+i:J.test(i)?JSON.parse(i):i)}catch(e){}Q.set(e,t,n)}else n=void 0;return n}S.extend({hasData:function(e){return Q.hasData(e)||G.hasData(e)},data:function(e,t,n){return Q.access(e,t,n)},removeData:function(e,t){Q.remove(e,t)},_data:function(e,t,n){return G.access(e,t,n)},_removeData:function(e,t){G.remove(e,t)}}),S.fn.extend({data:function(n,e){var t,r,i,o=this[0],s=o&&o.attributes;if(void 0===n){if(this.length&&(i=Q.get(o),1===o.nodeType&&!G.get(o,"hasDataAttrs"))){for(t=s.length;t--;)s[t]&&0===(r=s[t].name).indexOf("data-")&&(r=U(r.slice(5)),Z(o,r,i[r]));G.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof n?this.each(function(){Q.set(this,n)}):B(this,function(e){var t;if(o&&void 0===e){if(void 0!==(t=Q.get(o,n)))return t;if(void 0!==(t=Z(o,n)))return t}else this.each(function(){Q.set(this,n,e)})},null,e,1<arguments.length,null,!0)},removeData:function(e){return this.each(function(){Q.remove(this,e)})}}),S.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=G.get(e,t),n&&(!r||Array.isArray(n)?r=G.access(e,t,S.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=S.queue(e,t),r=n.length,i=n.shift(),o=S._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,function(){S.dequeue(e,t)},o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return G.get(e,n)||G.access(e,n,{empty:S.Callbacks("once memory").add(function(){G.remove(e,[t+"queue",n])})})}}),S.fn.extend({queue:function(t,n){var e=2;return"string"!=typeof t&&(n=t,t="fx",e--),arguments.length<e?S.queue(this[0],t):void 0===n?this:this.each(function(){var e=S.queue(this,t,n);S._queueHooks(this,t),"fx"===t&&"inprogress"!==e[0]&&S.dequeue(this,t)})},dequeue:function(e){return this.each(function(){S.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=S.Deferred(),o=this,s=this.length,a=function(){--r||i.resolveWith(o,[o])};for("string"!=typeof e&&(t=e,e=void 0),e=e||"fx";s--;)(n=G.get(o[s],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(a));return a(),i.promise(t)}});var ee=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,te=new RegExp("^(?:([+-])=|)("+ee+")([a-z%]*)$","i"),ne=["Top","Right","Bottom","Left"],re=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&S.contains(e.ownerDocument,e)&&"none"===S.css(e,"display")},ie=function(e,t,n,r){var i,o,s={};for(o in t)s[o]=e.style[o],e.style[o]=t[o];for(o in i=n.apply(e,r||[]),t)e.style[o]=s[o];return i};function oe(e,t,n,r){var i,o,s=20,a=r?function(){return r.cur()}:function(){return S.css(e,t,"")},u=a(),l=n&&n[3]||(S.cssNumber[t]?"":"px"),c=(S.cssNumber[t]||"px"!==l&&+u)&&te.exec(S.css(e,t));if(c&&c[3]!==l){for(u/=2,l=l||c[3],c=+u||1;s--;)S.style(e,t,c+l),(1-o)*(1-(o=a()/u||.5))<=0&&(s=0),c/=o;c*=2,S.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var se={};function ae(e,t){for(var n,r,i=[],o=0,s=e.length;o<s;o++)(r=e[o]).style&&(n=r.style.display,t?("none"===n&&(i[o]=G.get(r,"display")||null,i[o]||(r.style.display="")),""===r.style.display&&re(r)&&(i[o]=(f=l=u=void 0,l=(a=r).ownerDocument,c=a.nodeName,(f=se[c])||(u=l.body.appendChild(l.createElement(c)),f=S.css(u,"display"),u.parentNode.removeChild(u),"none"===f&&(f="block"),se[c]=f)))):"none"!==n&&(i[o]="none",G.set(r,"display",n)));var a,u,l,c,f;for(o=0;o<s;o++)null!=i[o]&&(e[o].style.display=i[o]);return e}S.fn.extend({show:function(){return ae(this,!0)},hide:function(){return ae(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){re(this)?S(this).show():S(this).hide()})}});var ue=/^(?:checkbox|radio)$/i,le=/<([a-z][^\/\0>\x20\t\r\n\f]+)/i,ce=/^$|^module$|\/(?:java|ecma)script/i,fe={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function de(e,t){var n;return n=void 0!==e.getElementsByTagName?e.getElementsByTagName(t||"*"):void 0!==e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&N(e,t)?S.merge([e],n):n}function pe(e,t){for(var n=0,r=e.length;n<r;n++)G.set(e[n],"globalEval",!t||G.get(t[n],"globalEval"))}fe.optgroup=fe.option,fe.tbody=fe.tfoot=fe.colgroup=fe.caption=fe.thead,fe.th=fe.td;var he,ge,ye=/<|&#?\w+;/;function me(e,t,n,r,i){for(var o,s,a,u,l,c,f=t.createDocumentFragment(),d=[],p=0,h=e.length;p<h;p++)if((o=e[p])||0===o)if("object"===w(o))S.merge(d,o.nodeType?[o]:o);else if(ye.test(o)){for(s=s||f.appendChild(t.createElement("div")),a=(le.exec(o)||["",""])[1].toLowerCase(),u=fe[a]||fe._default,s.innerHTML=u[1]+S.htmlPrefilter(o)+u[2],c=u[0];c--;)s=s.lastChild;S.merge(d,s.childNodes),(s=f.firstChild).textContent=""}else d.push(t.createTextNode(o));for(f.textContent="",p=0;o=d[p++];)if(r&&-1<S.inArray(o,r))i&&i.push(o);else if(l=S.contains(o.ownerDocument,o),s=de(f.appendChild(o),"script"),l&&pe(s),n)for(c=0;o=s[c++];)ce.test(o.type||"")&&n.push(o);return f}he=E.createDocumentFragment().appendChild(E.createElement("div")),(ge=E.createElement("input")).setAttribute("type","radio"),ge.setAttribute("checked","checked"),ge.setAttribute("name","t"),he.appendChild(ge),m.checkClone=he.cloneNode(!0).cloneNode(!0).lastChild.checked,he.innerHTML="<textarea>x</textarea>",m.noCloneChecked=!!he.cloneNode(!0).lastChild.defaultValue;var ve=E.documentElement,xe=/^key/,be=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,we=/^([^.]*)(?:\.(.+)|)/;function Te(){return!0}function Ce(){return!1}function Ee(){try{return E.activeElement}catch(e){}}function Se(e,t,n,r,i,o){var s,a;if("object"==typeof t){for(a in"string"!=typeof n&&(r=r||n,n=void 0),t)Se(e,a,n,r,t[a],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Ce;else if(!i)return e;return 1===o&&(s=i,(i=function(e){return S().off(e),s.apply(this,arguments)}).guid=s.guid||(s.guid=S.guid++)),e.each(function(){S.event.add(this,t,i,r,n)})}S.event={global:{},add:function(t,e,n,r,i){var o,s,a,u,l,c,f,d,p,h,g,y=G.get(t);if(y)for(n.handler&&(n=(o=n).handler,i=o.selector),i&&S.find.matchesSelector(ve,i),n.guid||(n.guid=S.guid++),(u=y.events)||(u=y.events={}),(s=y.handle)||(s=y.handle=function(e){return void 0!==S&&S.event.triggered!==e.type?S.event.dispatch.apply(t,arguments):void 0}),l=(e=(e||"").match(P)||[""]).length;l--;)p=g=(a=we.exec(e[l])||[])[1],h=(a[2]||"").split(".").sort(),p&&(f=S.event.special[p]||{},p=(i?f.delegateType:f.bindType)||p,f=S.event.special[p]||{},c=S.extend({type:p,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&S.expr.match.needsContext.test(i),namespace:h.join(".")},o),(d=u[p])||((d=u[p]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(t,r,h,s)||t.addEventListener&&t.addEventListener(p,s)),f.add&&(f.add.call(t,c),c.handler.guid||(c.handler.guid=n.guid)),i?d.splice(d.delegateCount++,0,c):d.push(c),S.event.global[p]=!0)},remove:function(e,t,n,r,i){var o,s,a,u,l,c,f,d,p,h,g,y=G.hasData(e)&&G.get(e);if(y&&(u=y.events)){for(l=(t=(t||"").match(P)||[""]).length;l--;)if(p=g=(a=we.exec(t[l])||[])[1],h=(a[2]||"").split(".").sort(),p){for(f=S.event.special[p]||{},d=u[p=(r?f.delegateType:f.bindType)||p]||[],a=a[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),s=o=d.length;o--;)c=d[o],!i&&g!==c.origType||n&&n.guid!==c.guid||a&&!a.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(d.splice(o,1),c.selector&&d.delegateCount--,f.remove&&f.remove.call(e,c));s&&!d.length&&(f.teardown&&!1!==f.teardown.call(e,h,y.handle)||S.removeEvent(e,p,y.handle),delete u[p])}else for(p in u)S.event.remove(e,p+t[l],n,r,!0);S.isEmptyObject(u)&&G.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,s,a=S.event.fix(e),u=new Array(arguments.length),l=(G.get(this,"events")||{})[a.type]||[],c=S.event.special[a.type]||{};for(u[0]=a,t=1;t<arguments.length;t++)u[t]=arguments[t];if(a.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,a)){for(s=S.event.handlers.call(this,a,l),t=0;(i=s[t++])&&!a.isPropagationStopped();)for(a.currentTarget=i.elem,n=0;(o=i.handlers[n++])&&!a.isImmediatePropagationStopped();)a.rnamespace&&!a.rnamespace.test(o.namespace)||(a.handleObj=o,a.data=o.data,void 0!==(r=((S.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,u))&&!1===(a.result=r)&&(a.preventDefault(),a.stopPropagation()));return c.postDispatch&&c.postDispatch.call(this,a),a.result}},handlers:function(e,t){var n,r,i,o,s,a=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&1<=e.button))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],s={},n=0;n<u;n++)void 0===s[i=(r=t[n]).selector+" "]&&(s[i]=r.needsContext?-1<S(i,this).index(l):S.find(i,this,null,[l]).length),s[i]&&o.push(r);o.length&&a.push({elem:l,handlers:o})}return l=this,u<t.length&&a.push({elem:l,handlers:t.slice(u)}),a},addProp:function(t,e){Object.defineProperty(S.Event.prototype,t,{enumerable:!0,configurable:!0,get:v(e)?function(){if(this.originalEvent)return e(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[t]},set:function(e){Object.defineProperty(this,t,{enumerable:!0,configurable:!0,writable:!0,value:e})}})},fix:function(e){return e[S.expando]?e:new S.Event(e)},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==Ee()&&this.focus)return this.focus(),!1},delegateType:"focusin"},blur:{trigger:function(){if(this===Ee()&&this.blur)return this.blur(),!1},delegateType:"focusout"},click:{trigger:function(){if("checkbox"===this.type&&this.click&&N(this,"input"))return this.click(),!1},_default:function(e){return N(e.target,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},S.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},S.Event=function(e,t){if(!(this instanceof S.Event))return new S.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?Te:Ce,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&S.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[S.expando]=!0},S.Event.prototype={constructor:S.Event,isDefaultPrevented:Ce,isPropagationStopped:Ce,isImmediatePropagationStopped:Ce,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=Te,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=Te,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=Te,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},S.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,char:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&xe.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&be.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},S.event.addProp),S.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,i){S.event.special[e]={delegateType:i,bindType:i,handle:function(e){var t,n=e.relatedTarget,r=e.handleObj;return n&&(n===this||S.contains(this,n))||(e.type=r.origType,t=r.handler.apply(this,arguments),e.type=i),t}}}),S.fn.extend({on:function(e,t,n,r){return Se(this,e,t,n,r)},one:function(e,t,n,r){return Se(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,S(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Ce),this.each(function(){S.event.remove(this,e,n,t)})}});var ke=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,Ne=/<script|<style|<link/i,Ae=/checked\s*(?:[^=]|=\s*.checked.)/i,je=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function De(e,t){return N(e,"table")&&N(11!==t.nodeType?t:t.firstChild,"tr")&&S(e).children("tbody")[0]||e}function qe(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function Le(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Oe(e,t){var n,r,i,o,s,a,u,l;if(1===t.nodeType){if(G.hasData(e)&&(o=G.access(e),s=G.set(t,o),l=o.events))for(i in delete s.handle,s.events={},l)for(n=0,r=l[i].length;n<r;n++)S.event.add(t,i,l[i][n]);Q.hasData(e)&&(a=Q.access(e),u=S.extend({},a),Q.set(t,u))}}function He(n,r,i,o){r=g.apply([],r);var e,t,s,a,u,l,c=0,f=n.length,d=f-1,p=r[0],h=v(p);if(h||1<f&&"string"==typeof p&&!m.checkClone&&Ae.test(p))return n.each(function(e){var t=n.eq(e);h&&(r[0]=p.call(this,e,t.html())),He(t,r,i,o)});if(f&&(t=(e=me(r,n[0].ownerDocument,!1,n,o)).firstChild,1===e.childNodes.length&&(e=t),t||o)){for(a=(s=S.map(de(e,"script"),qe)).length;c<f;c++)u=e,c!==d&&(u=S.clone(u,!0,!0),a&&S.merge(s,de(u,"script"))),i.call(n[c],u,c);if(a)for(l=s[s.length-1].ownerDocument,S.map(s,Le),c=0;c<a;c++)u=s[c],ce.test(u.type||"")&&!G.access(u,"globalEval")&&S.contains(l,u)&&(u.src&&"module"!==(u.type||"").toLowerCase()?S._evalUrl&&S._evalUrl(u.src):b(u.textContent.replace(je,""),l,u))}return n}function Pe(e,t,n){for(var r,i=t?S.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||S.cleanData(de(r)),r.parentNode&&(n&&S.contains(r.ownerDocument,r)&&pe(de(r,"script")),r.parentNode.removeChild(r));return e}S.extend({htmlPrefilter:function(e){return e.replace(ke,"<$1></$2>")},clone:function(e,t,n){var r,i,o,s,a,u,l,c=e.cloneNode(!0),f=S.contains(e.ownerDocument,e);if(!(m.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||S.isXMLDoc(e)))for(s=de(c),r=0,i=(o=de(e)).length;r<i;r++)a=o[r],u=s[r],void 0,"input"===(l=u.nodeName.toLowerCase())&&ue.test(a.type)?u.checked=a.checked:"input"!==l&&"textarea"!==l||(u.defaultValue=a.defaultValue);if(t)if(n)for(o=o||de(e),s=s||de(c),r=0,i=o.length;r<i;r++)Oe(o[r],s[r]);else Oe(e,c);return 0<(s=de(c,"script")).length&&pe(s,!f&&de(e,"script")),c},cleanData:function(e){for(var t,n,r,i=S.event.special,o=0;void 0!==(n=e[o]);o++)if(V(n)){if(t=n[G.expando]){if(t.events)for(r in t.events)i[r]?S.event.remove(n,r):S.removeEvent(n,r,t.handle);n[G.expando]=void 0}n[Q.expando]&&(n[Q.expando]=void 0)}}}),S.fn.extend({detach:function(e){return Pe(this,e,!0)},remove:function(e){return Pe(this,e)},text:function(e){return B(this,function(e){return void 0===e?S.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return He(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||De(this,e).appendChild(e)})},prepend:function(){return He(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=De(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return He(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return He(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(S.cleanData(de(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return S.clone(this,e,t)})},html:function(e){return B(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!Ne.test(e)&&!fe[(le.exec(e)||["",""])[1].toLowerCase()]){e=S.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(S.cleanData(de(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var n=[];return He(this,arguments,function(e){var t=this.parentNode;S.inArray(this,n)<0&&(S.cleanData(de(this)),t&&t.replaceChild(e,this))},n)}}),S.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,s){S.fn[e]=function(e){for(var t,n=[],r=S(e),i=r.length-1,o=0;o<=i;o++)t=o===i?this:this.clone(!0),S(r[o])[s](t),u.apply(n,t.get());return this.pushStack(n)}});var Re=new RegExp("^("+ee+")(?!px)[a-z%]+$","i"),Me=function(e){var t=e.ownerDocument.defaultView;return t&&t.opener||(t=C),t.getComputedStyle(e)},Ie=new RegExp(ne.join("|"),"i");function We(e,t,n){var r,i,o,s,a=e.style;return(n=n||Me(e))&&(""!==(s=n.getPropertyValue(t)||n[t])||S.contains(e.ownerDocument,e)||(s=S.style(e,t)),!m.pixelBoxStyles()&&Re.test(s)&&Ie.test(t)&&(r=a.width,i=a.minWidth,o=a.maxWidth,a.minWidth=a.maxWidth=a.width=s,s=n.width,a.width=r,a.minWidth=i,a.maxWidth=o)),void 0!==s?s+"":s}function Fe(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function e(){if(u){a.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",u.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",ve.appendChild(a).appendChild(u);var e=C.getComputedStyle(u);n="1%"!==e.top,s=12===t(e.marginLeft),u.style.right="60%",o=36===t(e.right),r=36===t(e.width),u.style.position="absolute",i=36===u.offsetWidth||"absolute",ve.removeChild(a),u=null}}function t(e){return Math.round(parseFloat(e))}var n,r,i,o,s,a=E.createElement("div"),u=E.createElement("div");u.style&&(u.style.backgroundClip="content-box",u.cloneNode(!0).style.backgroundClip="",m.clearCloneStyle="content-box"===u.style.backgroundClip,S.extend(m,{boxSizingReliable:function(){return e(),r},pixelBoxStyles:function(){return e(),o},pixelPosition:function(){return e(),n},reliableMarginLeft:function(){return e(),s},scrollboxSize:function(){return e(),i}}))}();var $e=/^(none|table(?!-c[ea]).+)/,Be=/^--/,ze={position:"absolute",visibility:"hidden",display:"block"},_e={letterSpacing:"0",fontWeight:"400"},Xe=["Webkit","Moz","ms"],Ue=E.createElement("div").style;function Ve(e){var t=S.cssProps[e];return t||(t=S.cssProps[e]=function(e){if(e in Ue)return e;for(var t=e[0].toUpperCase()+e.slice(1),n=Xe.length;n--;)if((e=Xe[n]+t)in Ue)return e}(e)||e),t}function Ye(e,t,n){var r=te.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function Ge(e,t,n,r,i,o){var s="width"===t?1:0,a=0,u=0;if(n===(r?"border":"content"))return 0;for(;s<4;s+=2)"margin"===n&&(u+=S.css(e,n+ne[s],!0,i)),r?("content"===n&&(u-=S.css(e,"padding"+ne[s],!0,i)),"margin"!==n&&(u-=S.css(e,"border"+ne[s]+"Width",!0,i))):(u+=S.css(e,"padding"+ne[s],!0,i),"padding"!==n?u+=S.css(e,"border"+ne[s]+"Width",!0,i):a+=S.css(e,"border"+ne[s]+"Width",!0,i));return!r&&0<=o&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-a-.5))),u}function Qe(e,t,n){var r=Me(e),i=We(e,t,r),o="border-box"===S.css(e,"boxSizing",!1,r),s=o;if(Re.test(i)){if(!n)return i;i="auto"}return s=s&&(m.boxSizingReliable()||i===e.style[t]),("auto"===i||!parseFloat(i)&&"inline"===S.css(e,"display",!1,r))&&(i=e["offset"+t[0].toUpperCase()+t.slice(1)],s=!0),(i=parseFloat(i)||0)+Ge(e,t,n||(o?"border":"content"),s,r,i)+"px"}function Je(e,t,n,r,i){return new Je.prototype.init(e,t,n,r,i)}S.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=We(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,s,a=U(t),u=Be.test(t),l=e.style;if(u||(t=Ve(a)),s=S.cssHooks[t]||S.cssHooks[a],void 0===n)return s&&"get"in s&&void 0!==(i=s.get(e,!1,r))?i:l[t];"string"==(o=typeof n)&&(i=te.exec(n))&&i[1]&&(n=oe(e,t,i),o="number"),null!=n&&n==n&&("number"===o&&(n+=i&&i[3]||(S.cssNumber[a]?"":"px")),m.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),s&&"set"in s&&void 0===(n=s.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,s,a=U(t);return Be.test(t)||(t=Ve(a)),(s=S.cssHooks[t]||S.cssHooks[a])&&"get"in s&&(i=s.get(e,!0,n)),void 0===i&&(i=We(e,t,r)),"normal"===i&&t in _e&&(i=_e[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),S.each(["height","width"],function(e,a){S.cssHooks[a]={get:function(e,t,n){if(t)return!$e.test(S.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?Qe(e,a,n):ie(e,ze,function(){return Qe(e,a,n)})},set:function(e,t,n){var r,i=Me(e),o="border-box"===S.css(e,"boxSizing",!1,i),s=n&&Ge(e,a,n,o,i);return o&&m.scrollboxSize()===i.position&&(s-=Math.ceil(e["offset"+a[0].toUpperCase()+a.slice(1)]-parseFloat(i[a])-Ge(e,a,"border",!1,i)-.5)),s&&(r=te.exec(t))&&"px"!==(r[3]||"px")&&(e.style[a]=t,t=S.css(e,a)),Ye(0,t,s)}}}),S.cssHooks.marginLeft=Fe(m.reliableMarginLeft,function(e,t){if(t)return(parseFloat(We(e,"marginLeft"))||e.getBoundingClientRect().left-ie(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),S.each({margin:"",padding:"",border:"Width"},function(i,o){S.cssHooks[i+o]={expand:function(e){for(var t=0,n={},r="string"==typeof e?e.split(" "):[e];t<4;t++)n[i+ne[t]+o]=r[t]||r[t-2]||r[0];return n}},"margin"!==i&&(S.cssHooks[i+o].set=Ye)}),S.fn.extend({css:function(e,t){return B(this,function(e,t,n){var r,i,o={},s=0;if(Array.isArray(t)){for(r=Me(e),i=t.length;s<i;s++)o[t[s]]=S.css(e,t[s],!1,r);return o}return void 0!==n?S.style(e,t,n):S.css(e,t)},e,t,1<arguments.length)}}),((S.Tween=Je).prototype={constructor:Je,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||S.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(S.cssNumber[n]?"":"px")},cur:function(){var e=Je.propHooks[this.prop];return e&&e.get?e.get(this):Je.propHooks._default.get(this)},run:function(e){var t,n=Je.propHooks[this.prop];return this.options.duration?this.pos=t=S.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):Je.propHooks._default.set(this),this}}).init.prototype=Je.prototype,(Je.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=S.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){S.fx.step[e.prop]?S.fx.step[e.prop](e):1!==e.elem.nodeType||null==e.elem.style[S.cssProps[e.prop]]&&!S.cssHooks[e.prop]?e.elem[e.prop]=e.now:S.style(e.elem,e.prop,e.now+e.unit)}}}).scrollTop=Je.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},S.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},S.fx=Je.prototype.init,S.fx.step={};var Ke,Ze,et,tt,nt=/^(?:toggle|show|hide)$/,rt=/queueHooks$/;function it(){Ze&&(!1===E.hidden&&C.requestAnimationFrame?C.requestAnimationFrame(it):C.setTimeout(it,S.fx.interval),S.fx.tick())}function ot(){return C.setTimeout(function(){Ke=void 0}),Ke=Date.now()}function st(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=ne[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function at(e,t,n){for(var r,i=(ut.tweeners[t]||[]).concat(ut.tweeners["*"]),o=0,s=i.length;o<s;o++)if(r=i[o].call(n,t,e))return r}function ut(o,e,t){var n,s,r=0,i=ut.prefilters.length,a=S.Deferred().always(function(){delete u.elem}),u=function(){if(s)return!1;for(var e=Ke||ot(),t=Math.max(0,l.startTime+l.duration-e),n=1-(t/l.duration||0),r=0,i=l.tweens.length;r<i;r++)l.tweens[r].run(n);return a.notifyWith(o,[l,n,t]),n<1&&i?t:(i||a.notifyWith(o,[l,1,0]),a.resolveWith(o,[l]),!1)},l=a.promise({elem:o,props:S.extend({},e),opts:S.extend(!0,{specialEasing:{},easing:S.easing._default},t),originalProperties:e,originalOptions:t,startTime:Ke||ot(),duration:t.duration,tweens:[],createTween:function(e,t){var n=S.Tween(o,l.opts,e,t,l.opts.specialEasing[e]||l.opts.easing);return l.tweens.push(n),n},stop:function(e){var t=0,n=e?l.tweens.length:0;if(s)return this;for(s=!0;t<n;t++)l.tweens[t].run(1);return e?(a.notifyWith(o,[l,1,0]),a.resolveWith(o,[l,e])):a.rejectWith(o,[l,e]),this}}),c=l.props;for(function(e,t){var n,r,i,o,s;for(n in e)if(i=t[r=U(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(s=S.cssHooks[r])&&"expand"in s)for(n in o=s.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(c,l.opts.specialEasing);r<i;r++)if(n=ut.prefilters[r].call(l,o,c,l.opts))return v(n.stop)&&(S._queueHooks(l.elem,l.opts.queue).stop=n.stop.bind(n)),n;return S.map(c,at,l),v(l.opts.start)&&l.opts.start.call(o,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),S.fx.timer(S.extend(u,{elem:o,anim:l,queue:l.opts.queue})),l}S.Animation=S.extend(ut,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return oe(n.elem,e,te.exec(t),n),n}]},tweener:function(e,t){v(e)?(t=e,e=["*"]):e=e.match(P);for(var n,r=0,i=e.length;r<i;r++)n=e[r],ut.tweeners[n]=ut.tweeners[n]||[],ut.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,s,a,u,l,c,f="width"in t||"height"in t,d=this,p={},h=e.style,g=e.nodeType&&re(e),y=G.get(e,"fxshow");for(r in n.queue||(null==(s=S._queueHooks(e,"fx")).unqueued&&(s.unqueued=0,a=s.empty.fire,s.empty.fire=function(){s.unqueued||a()}),s.unqueued++,d.always(function(){d.always(function(){s.unqueued--,S.queue(e,"fx").length||s.empty.fire()})})),t)if(i=t[r],nt.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!y||void 0===y[r])continue;g=!0}p[r]=y&&y[r]||S.style(e,r)}if((u=!S.isEmptyObject(t))||!S.isEmptyObject(p))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=y&&y.display)&&(l=G.get(e,"display")),"none"===(c=S.css(e,"display"))&&(l?c=l:(ae([e],!0),l=e.style.display||l,c=S.css(e,"display"),ae([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===S.css(e,"float")&&(u||(d.done(function(){h.display=l}),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",d.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),u=!1,p)u||(y?"hidden"in y&&(g=y.hidden):y=G.access(e,"fxshow",{display:l}),o&&(y.hidden=!g),g&&ae([e],!0),d.done(function(){for(r in g||ae([e]),G.remove(e,"fxshow"),p)S.style(e,r,p[r])})),u=at(g?y[r]:0,r,d),r in y||(y[r]=u.start,g&&(u.end=u.start,u.start=0))}],prefilter:function(e,t){t?ut.prefilters.unshift(e):ut.prefilters.push(e)}}),S.speed=function(e,t,n){var r=e&&"object"==typeof e?S.extend({},e):{complete:n||!n&&t||v(e)&&e,duration:e,easing:n&&t||t&&!v(t)&&t};return S.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in S.fx.speeds?r.duration=S.fx.speeds[r.duration]:r.duration=S.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){v(r.old)&&r.old.call(this),r.queue&&S.dequeue(this,r.queue)},r},S.fn.extend({fadeTo:function(e,t,n,r){return this.filter(re).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(t,e,n,r){var i=S.isEmptyObject(t),o=S.speed(e,n,r),s=function(){var e=ut(this,S.extend({},t),o);(i||G.get(this,"finish"))&&e.stop(!0)};return s.finish=s,i||!1===o.queue?this.each(s):this.queue(o.queue,s)},stop:function(i,e,o){var s=function(e){var t=e.stop;delete e.stop,t(o)};return"string"!=typeof i&&(o=e,e=i,i=void 0),e&&!1!==i&&this.queue(i||"fx",[]),this.each(function(){var e=!0,t=null!=i&&i+"queueHooks",n=S.timers,r=G.get(this);if(t)r[t]&&r[t].stop&&s(r[t]);else for(t in r)r[t]&&r[t].stop&&rt.test(t)&&s(r[t]);for(t=n.length;t--;)n[t].elem!==this||null!=i&&n[t].queue!==i||(n[t].anim.stop(o),e=!1,n.splice(t,1));!e&&o||S.dequeue(this,i)})},finish:function(s){return!1!==s&&(s=s||"fx"),this.each(function(){var e,t=G.get(this),n=t[s+"queue"],r=t[s+"queueHooks"],i=S.timers,o=n?n.length:0;for(t.finish=!0,S.queue(this,s,[]),r&&r.stop&&r.stop.call(this,!0),e=i.length;e--;)i[e].elem===this&&i[e].queue===s&&(i[e].anim.stop(!0),i.splice(e,1));for(e=0;e<o;e++)n[e]&&n[e].finish&&n[e].finish.call(this);delete t.finish})}}),S.each(["toggle","show","hide"],function(e,r){var i=S.fn[r];S.fn[r]=function(e,t,n){return null==e||"boolean"==typeof e?i.apply(this,arguments):this.animate(st(r,!0),e,t,n)}}),S.each({slideDown:st("show"),slideUp:st("hide"),slideToggle:st("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,r){S.fn[e]=function(e,t,n){return this.animate(r,e,t,n)}}),S.timers=[],S.fx.tick=function(){var e,t=0,n=S.timers;for(Ke=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||S.fx.stop(),Ke=void 0},S.fx.timer=function(e){S.timers.push(e),S.fx.start()},S.fx.interval=13,S.fx.start=function(){Ze||(Ze=!0,it())},S.fx.stop=function(){Ze=null},S.fx.speeds={slow:600,fast:200,_default:400},S.fn.delay=function(r,e){return r=S.fx&&S.fx.speeds[r]||r,e=e||"fx",this.queue(e,function(e,t){var n=C.setTimeout(e,r);t.stop=function(){C.clearTimeout(n)}})},et=E.createElement("input"),tt=E.createElement("select").appendChild(E.createElement("option")),et.type="checkbox",m.checkOn=""!==et.value,m.optSelected=tt.selected,(et=E.createElement("input")).value="t",et.type="radio",m.radioValue="t"===et.value;var lt,ct=S.expr.attrHandle;S.fn.extend({attr:function(e,t){return B(this,S.attr,e,t,1<arguments.length)},removeAttr:function(e){return this.each(function(){S.removeAttr(this,e)})}}),S.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return void 0===e.getAttribute?S.prop(e,t,n):(1===o&&S.isXMLDoc(e)||(i=S.attrHooks[t.toLowerCase()]||(S.expr.match.bool.test(t)?lt:void 0)),void 0!==n?null===n?void S.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=S.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!m.radioValue&&"radio"===t&&N(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(P);if(i&&1===e.nodeType)for(;n=i[r++];)e.removeAttribute(n)}}),lt={set:function(e,t,n){return!1===t?S.removeAttr(e,n):e.setAttribute(n,n),n}},S.each(S.expr.match.bool.source.match(/\w+/g),function(e,t){var s=ct[t]||S.find.attr;ct[t]=function(e,t,n){var r,i,o=t.toLowerCase();return n||(i=ct[o],ct[o]=r,r=null!=s(e,t,n)?o:null,ct[o]=i),r}});var ft=/^(?:input|select|textarea|button)$/i,dt=/^(?:a|area)$/i;function pt(e){return(e.match(P)||[]).join(" ")}function ht(e){return e.getAttribute&&e.getAttribute("class")||""}function gt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(P)||[]}S.fn.extend({prop:function(e,t){return B(this,S.prop,e,t,1<arguments.length)},removeProp:function(e){return this.each(function(){delete this[S.propFix[e]||e]})}}),S.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&S.isXMLDoc(e)||(t=S.propFix[t]||t,i=S.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=S.find.attr(e,"tabindex");return t?parseInt(t,10):ft.test(e.nodeName)||dt.test(e.nodeName)&&e.href?0:-1}}},propFix:{for:"htmlFor",class:"className"}}),m.optSelected||(S.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),S.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){S.propFix[this.toLowerCase()]=this}),S.fn.extend({addClass:function(t){var e,n,r,i,o,s,a,u=0;if(v(t))return this.each(function(e){S(this).addClass(t.call(this,e,ht(this)))});if((e=gt(t)).length)for(;n=this[u++];)if(i=ht(n),r=1===n.nodeType&&" "+pt(i)+" "){for(s=0;o=e[s++];)r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(a=pt(r))&&n.setAttribute("class",a)}return this},removeClass:function(t){var e,n,r,i,o,s,a,u=0;if(v(t))return this.each(function(e){S(this).removeClass(t.call(this,e,ht(this)))});if(!arguments.length)return this.attr("class","");if((e=gt(t)).length)for(;n=this[u++];)if(i=ht(n),r=1===n.nodeType&&" "+pt(i)+" "){for(s=0;o=e[s++];)for(;-1<r.indexOf(" "+o+" ");)r=r.replace(" "+o+" "," ");i!==(a=pt(r))&&n.setAttribute("class",a)}return this},toggleClass:function(i,t){var o=typeof i,s="string"===o||Array.isArray(i);return"boolean"==typeof t&&s?t?this.addClass(i):this.removeClass(i):v(i)?this.each(function(e){S(this).toggleClass(i.call(this,e,ht(this),t),t)}):this.each(function(){var e,t,n,r;if(s)for(t=0,n=S(this),r=gt(i);e=r[t++];)n.hasClass(e)?n.removeClass(e):n.addClass(e);else void 0!==i&&"boolean"!==o||((e=ht(this))&&G.set(this,"__className__",e),this.setAttribute&&this.setAttribute("class",e||!1===i?"":G.get(this,"__className__")||""))})},hasClass:function(e){var t,n,r=0;for(t=" "+e+" ";n=this[r++];)if(1===n.nodeType&&-1<(" "+pt(ht(n))+" ").indexOf(t))return!0;return!1}});var yt=/\r/g;S.fn.extend({val:function(n){var r,e,i,t=this[0];return arguments.length?(i=v(n),this.each(function(e){var t;1===this.nodeType&&(null==(t=i?n.call(this,e,S(this).val()):n)?t="":"number"==typeof t?t+="":Array.isArray(t)&&(t=S.map(t,function(e){return null==e?"":e+""})),(r=S.valHooks[this.type]||S.valHooks[this.nodeName.toLowerCase()])&&"set"in r&&void 0!==r.set(this,t,"value")||(this.value=t))})):t?(r=S.valHooks[t.type]||S.valHooks[t.nodeName.toLowerCase()])&&"get"in r&&void 0!==(e=r.get(t,"value"))?e:"string"==typeof(e=t.value)?e.replace(yt,""):null==e?"":e:void 0}}),S.extend({valHooks:{option:{get:function(e){var t=S.find.attr(e,"value");return null!=t?t:pt(S.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,s="select-one"===e.type,a=s?null:[],u=s?o+1:i.length;for(r=o<0?u:s?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!N(n.parentNode,"optgroup"))){if(t=S(n).val(),s)return t;a.push(t)}return a},set:function(e,t){for(var n,r,i=e.options,o=S.makeArray(t),s=i.length;s--;)((r=i[s]).selected=-1<S.inArray(S.valHooks.option.get(r),o))&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),S.each(["radio","checkbox"],function(){S.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=-1<S.inArray(S(e).val(),t)}},m.checkOn||(S.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),m.focusin="onfocusin"in C;var mt=/^(?:focusinfocus|focusoutblur)$/,vt=function(e){e.stopPropagation()};S.extend(S.event,{trigger:function(e,t,n,r){var i,o,s,a,u,l,c,f,d=[n||E],p=y.call(e,"type")?e.type:e,h=y.call(e,"namespace")?e.namespace.split("."):[];if(o=f=s=n=n||E,3!==n.nodeType&&8!==n.nodeType&&!mt.test(p+S.event.triggered)&&(-1<p.indexOf(".")&&(p=(h=p.split(".")).shift(),h.sort()),u=p.indexOf(":")<0&&"on"+p,(e=e[S.expando]?e:new S.Event(p,"object"==typeof e&&e)).isTrigger=r?2:3,e.namespace=h.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=n),t=null==t?[e]:S.makeArray(t,[e]),c=S.event.special[p]||{},r||!c.trigger||!1!==c.trigger.apply(n,t))){if(!r&&!c.noBubble&&!x(n)){for(a=c.delegateType||p,mt.test(a+p)||(o=o.parentNode);o;o=o.parentNode)d.push(o),s=o;s===(n.ownerDocument||E)&&d.push(s.defaultView||s.parentWindow||C)}for(i=0;(o=d[i++])&&!e.isPropagationStopped();)f=o,e.type=1<i?a:c.bindType||p,(l=(G.get(o,"events")||{})[e.type]&&G.get(o,"handle"))&&l.apply(o,t),(l=u&&o[u])&&l.apply&&V(o)&&(e.result=l.apply(o,t),!1===e.result&&e.preventDefault());return e.type=p,r||e.isDefaultPrevented()||c._default&&!1!==c._default.apply(d.pop(),t)||!V(n)||u&&v(n[p])&&!x(n)&&((s=n[u])&&(n[u]=null),S.event.triggered=p,e.isPropagationStopped()&&f.addEventListener(p,vt),n[p](),e.isPropagationStopped()&&f.removeEventListener(p,vt),S.event.triggered=void 0,s&&(n[u]=s)),e.result}},simulate:function(e,t,n){var r=S.extend(new S.Event,n,{type:e,isSimulated:!0});S.event.trigger(r,null,t)}}),S.fn.extend({trigger:function(e,t){return this.each(function(){S.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return S.event.trigger(e,t,n,!0)}}),m.focusin||S.each({focus:"focusin",blur:"focusout"},function(n,r){var i=function(e){S.event.simulate(r,e.target,S.event.fix(e))};S.event.special[r]={setup:function(){var e=this.ownerDocument||this,t=G.access(e,r);t||e.addEventListener(n,i,!0),G.access(e,r,(t||0)+1)},teardown:function(){var e=this.ownerDocument||this,t=G.access(e,r)-1;t?G.access(e,r,t):(e.removeEventListener(n,i,!0),G.remove(e,r))}}});var xt=C.location,bt=Date.now(),wt=/\?/;S.parseXML=function(e){var t;if(!e||"string"!=typeof e)return null;try{t=(new C.DOMParser).parseFromString(e,"text/xml")}catch(e){t=void 0}return t&&!t.getElementsByTagName("parsererror").length||S.error("Invalid XML: "+e),t};var Tt=/\[\]$/,Ct=/\r?\n/g,Et=/^(?:submit|button|image|reset|file)$/i,St=/^(?:input|select|textarea|keygen)/i;function kt(n,e,r,i){var t;if(Array.isArray(e))S.each(e,function(e,t){r||Tt.test(n)?i(n,t):kt(n+"["+("object"==typeof t&&null!=t?e:"")+"]",t,r,i)});else if(r||"object"!==w(e))i(n,e);else for(t in e)kt(n+"["+t+"]",e[t],r,i)}S.param=function(e,t){var n,r=[],i=function(e,t){var n=v(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(Array.isArray(e)||e.jquery&&!S.isPlainObject(e))S.each(e,function(){i(this.name,this.value)});else for(n in e)kt(n,e[n],t,i);return r.join("&")},S.fn.extend({serialize:function(){return S.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=S.prop(this,"elements");return e?S.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!S(this).is(":disabled")&&St.test(this.nodeName)&&!Et.test(e)&&(this.checked||!ue.test(e))}).map(function(e,t){var n=S(this).val();return null==n?null:Array.isArray(n)?S.map(n,function(e){return{name:t.name,value:e.replace(Ct,"\r\n")}}):{name:t.name,value:n.replace(Ct,"\r\n")}}).get()}});var Nt=/%20/g,At=/#.*$/,jt=/([?&])_=[^&]*/,Dt=/^(.*?):[ \t]*([^\r\n]*)$/gm,qt=/^(?:GET|HEAD)$/,Lt=/^\/\//,Ot={},Ht={},Pt="*/".concat("*"),Rt=E.createElement("a");function Mt(o){return function(e,t){"string"!=typeof e&&(t=e,e="*");var n,r=0,i=e.toLowerCase().match(P)||[];if(v(t))for(;n=i[r++];)"+"===n[0]?(n=n.slice(1)||"*",(o[n]=o[n]||[]).unshift(t)):(o[n]=o[n]||[]).push(t)}}function It(t,i,o,s){var a={},u=t===Ht;function l(e){var r;return a[e]=!0,S.each(t[e]||[],function(e,t){var n=t(i,o,s);return"string"!=typeof n||u||a[n]?u?!(r=n):void 0:(i.dataTypes.unshift(n),l(n),!1)}),r}return l(i.dataTypes[0])||!a["*"]&&l("*")}function Wt(e,t){var n,r,i=S.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&S.extend(!0,e,r),e}Rt.href=xt.href,S.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:xt.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(xt.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Pt,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":S.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?Wt(Wt(e,S.ajaxSettings),t):Wt(S.ajaxSettings,e)},ajaxPrefilter:Mt(Ot),ajaxTransport:Mt(Ht),ajax:function(e,t){"object"==typeof e&&(t=e,e=void 0),t=t||{};var c,f,d,n,p,r,h,g,i,o,y=S.ajaxSetup({},t),m=y.context||y,v=y.context&&(m.nodeType||m.jquery)?S(m):S.event,x=S.Deferred(),b=S.Callbacks("once memory"),w=y.statusCode||{},s={},a={},u="canceled",T={readyState:0,getResponseHeader:function(e){var t;if(h){if(!n)for(n={};t=Dt.exec(d);)n[t[1].toLowerCase()]=t[2];t=n[e.toLowerCase()]}return null==t?null:t},getAllResponseHeaders:function(){return h?d:null},setRequestHeader:function(e,t){return null==h&&(e=a[e.toLowerCase()]=a[e.toLowerCase()]||e,s[e]=t),this},overrideMimeType:function(e){return null==h&&(y.mimeType=e),this},statusCode:function(e){var t;if(e)if(h)T.always(e[T.status]);else for(t in e)w[t]=[w[t],e[t]];return this},abort:function(e){var t=e||u;return c&&c.abort(t),l(0,t),this}};if(x.promise(T),y.url=((e||y.url||xt.href)+"").replace(Lt,xt.protocol+"//"),y.type=t.method||t.type||y.method||y.type,y.dataTypes=(y.dataType||"*").toLowerCase().match(P)||[""],null==y.crossDomain){r=E.createElement("a");try{r.href=y.url,r.href=r.href,y.crossDomain=Rt.protocol+"//"+Rt.host!=r.protocol+"//"+r.host}catch(e){y.crossDomain=!0}}if(y.data&&y.processData&&"string"!=typeof y.data&&(y.data=S.param(y.data,y.traditional)),It(Ot,y,t,T),h)return T;for(i in(g=S.event&&y.global)&&0==S.active++&&S.event.trigger("ajaxStart"),y.type=y.type.toUpperCase(),y.hasContent=!qt.test(y.type),f=y.url.replace(At,""),y.hasContent?y.data&&y.processData&&0===(y.contentType||"").indexOf("application/x-www-form-urlencoded")&&(y.data=y.data.replace(Nt,"+")):(o=y.url.slice(f.length),y.data&&(y.processData||"string"==typeof y.data)&&(f+=(wt.test(f)?"&":"?")+y.data,delete y.data),!1===y.cache&&(f=f.replace(jt,"$1"),o=(wt.test(f)?"&":"?")+"_="+bt+++o),y.url=f+o),y.ifModified&&(S.lastModified[f]&&T.setRequestHeader("If-Modified-Since",S.lastModified[f]),S.etag[f]&&T.setRequestHeader("If-None-Match",S.etag[f])),(y.data&&y.hasContent&&!1!==y.contentType||t.contentType)&&T.setRequestHeader("Content-Type",y.contentType),T.setRequestHeader("Accept",y.dataTypes[0]&&y.accepts[y.dataTypes[0]]?y.accepts[y.dataTypes[0]]+("*"!==y.dataTypes[0]?", "+Pt+"; q=0.01":""):y.accepts["*"]),y.headers)T.setRequestHeader(i,y.headers[i]);if(y.beforeSend&&(!1===y.beforeSend.call(m,T,y)||h))return T.abort();if(u="abort",b.add(y.complete),T.done(y.success),T.fail(y.error),c=It(Ht,y,t,T)){if(T.readyState=1,g&&v.trigger("ajaxSend",[T,y]),h)return T;y.async&&0<y.timeout&&(p=C.setTimeout(function(){T.abort("timeout")},y.timeout));try{h=!1,c.send(s,l)}catch(e){if(h)throw e;l(-1,e)}}else l(-1,"No Transport");function l(e,t,n,r){var i,o,s,a,u,l=t;h||(h=!0,p&&C.clearTimeout(p),c=void 0,d=r||"",T.readyState=0<e?4:0,i=200<=e&&e<300||304===e,n&&(a=function(e,t,n){for(var r,i,o,s,a=e.contents,u=e.dataTypes;"*"===u[0];)u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in a)if(a[i]&&a[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}s||(s=i)}o=o||s}if(o)return o!==u[0]&&u.unshift(o),n[o]}(y,T,n)),a=function(e,t,n,r){var i,o,s,a,u,l={},c=e.dataTypes.slice();if(c[1])for(s in e.converters)l[s.toLowerCase()]=e.converters[s];for(o=c.shift();o;)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(s=l[u+" "+o]||l["* "+o]))for(i in l)if((a=i.split(" "))[1]===o&&(s=l[u+" "+a[0]]||l["* "+a[0]])){!0===s?s=l[i]:!0!==l[i]&&(o=a[0],c.unshift(a[1]));break}if(!0!==s)if(s&&e.throws)t=s(t);else try{t=s(t)}catch(e){return{state:"parsererror",error:s?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}(y,a,T,i),i?(y.ifModified&&((u=T.getResponseHeader("Last-Modified"))&&(S.lastModified[f]=u),(u=T.getResponseHeader("etag"))&&(S.etag[f]=u)),204===e||"HEAD"===y.type?l="nocontent":304===e?l="notmodified":(l=a.state,o=a.data,i=!(s=a.error))):(s=l,!e&&l||(l="error",e<0&&(e=0))),T.status=e,T.statusText=(t||l)+"",i?x.resolveWith(m,[o,l,T]):x.rejectWith(m,[T,l,s]),T.statusCode(w),w=void 0,g&&v.trigger(i?"ajaxSuccess":"ajaxError",[T,y,i?o:s]),b.fireWith(m,[T,l]),g&&(v.trigger("ajaxComplete",[T,y]),--S.active||S.event.trigger("ajaxStop")))}return T},getJSON:function(e,t,n){return S.get(e,t,n,"json")},getScript:function(e,t){return S.get(e,void 0,t,"script")}}),S.each(["get","post"],function(e,i){S[i]=function(e,t,n,r){return v(t)&&(r=r||n,n=t,t=void 0),S.ajax(S.extend({url:e,type:i,dataType:r,data:t,success:n},S.isPlainObject(e)&&e))}}),S._evalUrl=function(e){return S.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,throws:!0})},S.fn.extend({wrapAll:function(e){var t;return this[0]&&(v(e)&&(e=e.call(this[0])),t=S(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){for(var e=this;e.firstElementChild;)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(n){return v(n)?this.each(function(e){S(this).wrapInner(n.call(this,e))}):this.each(function(){var e=S(this),t=e.contents();t.length?t.wrapAll(n):e.append(n)})},wrap:function(t){var n=v(t);return this.each(function(e){S(this).wrapAll(n?t.call(this,e):t)})},unwrap:function(e){return this.parent(e).not("body").each(function(){S(this).replaceWith(this.childNodes)}),this}}),S.expr.pseudos.hidden=function(e){return!S.expr.pseudos.visible(e)},S.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},S.ajaxSettings.xhr=function(){try{return new C.XMLHttpRequest}catch(e){}};var Ft={0:200,1223:204},$t=S.ajaxSettings.xhr();m.cors=!!$t&&"withCredentials"in $t,m.ajax=$t=!!$t,S.ajaxTransport(function(i){var o,s;if(m.cors||$t&&!i.crossDomain)return{send:function(e,t){var n,r=i.xhr();if(r.open(i.type,i.url,i.async,i.username,i.password),i.xhrFields)for(n in i.xhrFields)r[n]=i.xhrFields[n];for(n in i.mimeType&&r.overrideMimeType&&r.overrideMimeType(i.mimeType),i.crossDomain||e["X-Requested-With"]||(e["X-Requested-With"]="XMLHttpRequest"),e)r.setRequestHeader(n,e[n]);o=function(e){return function(){o&&(o=s=r.onload=r.onerror=r.onabort=r.ontimeout=r.onreadystatechange=null,"abort"===e?r.abort():"error"===e?"number"!=typeof r.status?t(0,"error"):t(r.status,r.statusText):t(Ft[r.status]||r.status,r.statusText,"text"!==(r.responseType||"text")||"string"!=typeof r.responseText?{binary:r.response}:{text:r.responseText},r.getAllResponseHeaders()))}},r.onload=o(),s=r.onerror=r.ontimeout=o("error"),void 0!==r.onabort?r.onabort=s:r.onreadystatechange=function(){4===r.readyState&&C.setTimeout(function(){o&&s()})},o=o("abort");try{r.send(i.hasContent&&i.data||null)}catch(e){if(o)throw e}},abort:function(){o&&o()}}}),S.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),S.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return S.globalEval(e),e}}}),S.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),S.ajaxTransport("script",function(n){var r,i;if(n.crossDomain)return{send:function(e,t){r=S("<script>").prop({charset:n.scriptCharset,src:n.url}).on("load error",i=function(e){r.remove(),i=null,e&&t("error"===e.type?404:200,e.type)}),E.head.appendChild(r[0])},abort:function(){i&&i()}}});var Bt,zt=[],_t=/(=)\?(?=&|$)|\?\?/;S.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=zt.pop()||S.expando+"_"+bt++;return this[e]=!0,e}}),S.ajaxPrefilter("json jsonp",function(e,t,n){var r,i,o,s=!1!==e.jsonp&&(_t.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&_t.test(e.data)&&"data");if(s||"jsonp"===e.dataTypes[0])return r=e.jsonpCallback=v(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,s?e[s]=e[s].replace(_t,"$1"+r):!1!==e.jsonp&&(e.url+=(wt.test(e.url)?"&":"?")+e.jsonp+"="+r),e.converters["script json"]=function(){return o||S.error(r+" was not called"),o[0]},e.dataTypes[0]="json",i=C[r],C[r]=function(){o=arguments},n.always(function(){void 0===i?S(C).removeProp(r):C[r]=i,e[r]&&(e.jsonpCallback=t.jsonpCallback,zt.push(r)),o&&v(i)&&i(o[0]),o=i=void 0}),"script"}),m.createHTMLDocument=((Bt=E.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===Bt.childNodes.length),S.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(m.createHTMLDocument?((r=(t=E.implementation.createHTMLDocument("")).createElement("base")).href=E.location.href,t.head.appendChild(r)):t=E),o=!n&&[],(i=A.exec(e))?[t.createElement(i[1])]:(i=me([e],t,o),o&&o.length&&S(o).remove(),S.merge([],i.childNodes)));var r,i,o},S.fn.load=function(e,t,n){var r,i,o,s=this,a=e.indexOf(" ");return-1<a&&(r=pt(e.slice(a)),e=e.slice(0,a)),v(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),0<s.length&&S.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,s.html(r?S("<div>").append(S.parseHTML(e)).find(r):e)}).always(n&&function(e,t){s.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},S.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){S.fn[t]=function(e){return this.on(t,e)}}),S.expr.pseudos.animated=function(t){return S.grep(S.timers,function(e){return t===e.elem}).length},S.offset={setOffset:function(e,t,n){var r,i,o,s,a,u,l=S.css(e,"position"),c=S(e),f={};"static"===l&&(e.style.position="relative"),a=c.offset(),o=S.css(e,"top"),u=S.css(e,"left"),("absolute"===l||"fixed"===l)&&-1<(o+u).indexOf("auto")?(s=(r=c.position()).top,i=r.left):(s=parseFloat(o)||0,i=parseFloat(u)||0),v(t)&&(t=t.call(e,n,S.extend({},a))),null!=t.top&&(f.top=t.top-a.top+s),null!=t.left&&(f.left=t.left-a.left+i),"using"in t?t.using.call(e,f):c.css(f)}},S.fn.extend({offset:function(t){if(arguments.length)return void 0===t?this:this.each(function(e){S.offset.setOffset(this,t,e)});var e,n,r=this[0];return r?r.getClientRects().length?(e=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:e.top+n.pageYOffset,left:e.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===S.css(r,"position"))t=r.getBoundingClientRect();else{for(t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;e&&(e===n.body||e===n.documentElement)&&"static"===S.css(e,"position");)e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=S(e).offset()).top+=S.css(e,"borderTopWidth",!0),i.left+=S.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-S.css(r,"marginTop",!0),left:t.left-i.left-S.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){for(var e=this.offsetParent;e&&"static"===S.css(e,"position");)e=e.offsetParent;return e||ve})}}),S.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(t,i){var o="pageYOffset"===i;S.fn[t]=function(e){return B(this,function(e,t,n){var r;if(x(e)?r=e:9===e.nodeType&&(r=e.defaultView),void 0===n)return r?r[i]:e[t];r?r.scrollTo(o?r.pageXOffset:n,o?n:r.pageYOffset):e[t]=n},t,e,arguments.length)}}),S.each(["top","left"],function(e,n){S.cssHooks[n]=Fe(m.pixelPosition,function(e,t){if(t)return t=We(e,n),Re.test(t)?S(e).position()[n]+"px":t})}),S.each({Height:"height",Width:"width"},function(s,a){S.each({padding:"inner"+s,content:a,"":"outer"+s},function(r,o){S.fn[o]=function(e,t){var n=arguments.length&&(r||"boolean"!=typeof e),i=r||(!0===e||!0===t?"margin":"border");return B(this,function(e,t,n){var r;return x(e)?0===o.indexOf("outer")?e["inner"+s]:e.document.documentElement["client"+s]:9===e.nodeType?(r=e.documentElement,Math.max(e.body["scroll"+s],r["scroll"+s],e.body["offset"+s],r["offset"+s],r["client"+s])):void 0===n?S.css(e,t,i):S.style(e,t,n,i)},a,n?e:void 0,n)}})}),S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,n){S.fn[n]=function(e,t){return 0<arguments.length?this.on(n,null,e,t):this.trigger(n)}}),S.fn.extend({hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),S.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)}}),S.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),v(e))return r=a.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(a.call(arguments)))}).guid=e.guid=e.guid||S.guid++,i},S.holdReady=function(e){e?S.readyWait++:S.ready(!0)},S.isArray=Array.isArray,S.parseJSON=JSON.parse,S.nodeName=N,S.isFunction=v,S.isWindow=x,S.camelCase=U,S.type=w,S.now=Date.now,S.isNumeric=function(e){var t=S.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},"function"==typeof define&&define.amd&&define("jquery",[],function(){return S});var Xt=C.jQuery,Ut=C.$;return S.noConflict=function(e){return C.$===S&&(C.$=Ut),e&&C.jQuery===S&&(C.jQuery=Xt),S},e||(C.jQuery=C.$=S),S}),function(){"use strict";var d,e;function t(e){return void 0===this||Object.getPrototypeOf(this)!==t.prototype?new t(e):((d=this).version="3.4.0",d.tools=new o,d.isSupported()?(d.tools.extend(d.defaults,e||{}),d.defaults.container=p(d.defaults),d.store={elements:{},containers:[]},d.sequences={},d.history=[],d.uid=0,d.initialized=!1):"undefined"!=typeof console&&null!==console&&console.log("ScrollReveal is not supported in this browser."),d)}function p(e){if(e&&e.container){if("string"==typeof e.container)return window.document.documentElement.querySelector(e.container);if(d.tools.isNode(e.container))return e.container;console.log('ScrollReveal: invalid container "'+e.container+'" provided.'),console.log("ScrollReveal: falling back to default container.")}return d.defaults.container}function h(){return++d.uid}function g(e,t,n){t.container&&(t.container=n),e.config?e.config=d.tools.extendClone(e.config,t):e.config=d.tools.extendClone(d.defaults,t),"top"===e.config.origin||"bottom"===e.config.origin?e.config.axis="Y":e.config.axis="X"}function y(e){var t=window.getComputedStyle(e.domEl);e.styles||(e.styles={transition:{},transform:{},computed:{}},e.styles.inline=e.domEl.getAttribute("style")||"",e.styles.inline+="; visibility: visible; ",e.styles.computed.opacity=t.opacity,t.transition&&"all 0s ease 0s"!==t.transition?e.styles.computed.transition=t.transition+", ":e.styles.computed.transition=""),e.styles.transition.instant=n(e,0),e.styles.transition.delayed=n(e,e.config.delay),e.styles.transform.initial=" -webkit-transform:",e.styles.transform.target=" -webkit-transform:",r(e),e.styles.transform.initial+="transform:",e.styles.transform.target+="transform:",r(e)}function n(e,t){var n=e.config;return"-webkit-transition: "+e.styles.computed.transition+"-webkit-transform "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s, opacity "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s; transition: "+e.styles.computed.transition+"transform "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s, opacity "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s; "}function r(e){var t,n=e.config,r=e.styles.transform;t="top"===n.origin||"left"===n.origin?/^-/.test(n.distance)?n.distance.substr(1):"-"+n.distance:n.distance,parseInt(n.distance)&&(r.initial+=" translate"+n.axis+"("+t+")",r.target+=" translate"+n.axis+"(0)"),n.scale&&(r.initial+=" scale("+n.scale+")",r.target+=" scale(1)"),n.rotate.x&&(r.initial+=" rotateX("+n.rotate.x+"deg)",r.target+=" rotateX(0)"),n.rotate.y&&(r.initial+=" rotateY("+n.rotate.y+"deg)",r.target+=" rotateY(0)"),n.rotate.z&&(r.initial+=" rotateZ("+n.rotate.z+"deg)",r.target+=" rotateZ(0)"),r.initial+="; opacity: "+n.opacity+";",r.target+="; opacity: "+e.styles.computed.opacity+";"}function m(e){var t=e.config.container;t&&-1===d.store.containers.indexOf(t)&&d.store.containers.push(e.config.container),d.store.elements[e.id]=e}function v(){if(d.isSupported()){i();for(var e=0;e<d.store.containers.length;e++)d.store.containers[e].addEventListener("scroll",a),d.store.containers[e].addEventListener("resize",a);d.initialized||(window.addEventListener("scroll",a),window.addEventListener("resize",a),d.initialized=!0)}return d}function a(){e(i)}function i(){var r,i,n,o,s;d.tools.forOwn(d.sequences,function(e){s=d.sequences[e],n=!1;for(var t=0;t<s.elemIds.length;t++)o=s.elemIds[t],l(d.store.elements[o])&&!n&&(n=!0);s.active=n}),d.tools.forOwn(d.store.elements,function(e){var t,n;i=d.store.elements[e],n=(t=i).config.useDelay,r="always"===n||"onload"===n&&!d.initialized||"once"===n&&!t.seen,function(e){if(e.sequence){var t=d.sequences[e.sequence.id];return t.active&&!t.blocked&&!e.revealing&&!e.disabled}return l(e)&&!e.revealing&&!e.disabled}(i)?(i.config.beforeReveal(i.domEl),r?i.domEl.setAttribute("style",i.styles.inline+i.styles.transform.target+i.styles.transition.delayed):i.domEl.setAttribute("style",i.styles.inline+i.styles.transform.target+i.styles.transition.instant),u("reveal",i,r),i.revealing=!0,i.seen=!0,i.sequence&&function(e,t){var n=0,r=0,i=d.sequences[e.sequence.id];i.blocked=!0,t&&"onload"===e.config.useDelay&&(r=e.config.delay);e.sequence.timer&&(n=Math.abs(e.sequence.timer.started-new Date),window.clearTimeout(e.sequence.timer));e.sequence.timer={started:new Date},e.sequence.timer.clock=window.setTimeout(function(){i.blocked=!1,e.sequence.timer=null,a()},Math.abs(i.interval)+r-n)}(i,r)):function(e){if(e.sequence){var t=d.sequences[e.sequence.id];return!t.active&&e.config.reset&&e.revealing&&!e.disabled}return!l(e)&&e.config.reset&&e.revealing&&!e.disabled}(i)&&(i.config.beforeReset(i.domEl),i.domEl.setAttribute("style",i.styles.inline+i.styles.transform.initial+i.styles.transition.instant),u("reset",i),i.revealing=!1)})}function u(e,t,n){var r=0,i=0,o="after";switch(e){case"reveal":i=t.config.duration,n&&(i+=t.config.delay),o+="Reveal";break;case"reset":i=t.config.duration,o+="Reset"}t.timer&&(r=Math.abs(t.timer.started-new Date),window.clearTimeout(t.timer.clock)),t.timer={started:new Date},t.timer.clock=window.setTimeout(function(){t.config[o](t.domEl),t.timer=null},i-r)}function x(e){for(var t=0,n=0,r=e.offsetHeight,i=e.offsetWidth;isNaN(e.offsetTop)||(t+=e.offsetTop),isNaN(e.offsetLeft)||(n+=e.offsetLeft),e=e.offsetParent;);return{top:t,left:n,height:r,width:i}}function l(e){var t,n,r,i,o,s,a,u,l,c=x(e.domEl),f={width:(t=e.config.container).clientWidth,height:t.clientHeight},d=function(e){if(e&&e!==window.document.documentElement){var t=x(e);return{x:e.scrollLeft+t.left,y:e.scrollTop+t.top}}return{x:window.pageXOffset,y:window.pageYOffset}}(e.config.container),p=e.config.viewFactor,h=c.height,g=c.width,y=c.top,m=c.left;return n=y+h*p,r=m+g*p,i=y+h-h*p,o=m+g-g*p,s=d.y+e.config.viewOffset.top,a=d.x+e.config.viewOffset.left,u=d.y-e.config.viewOffset.bottom+f.height,l=d.x-e.config.viewOffset.right+f.width,n<u&&s<i&&r<l&&a<o||"fixed"===window.getComputedStyle(e.domEl).position}function o(){}t.prototype.defaults={origin:"bottom",distance:"20px",duration:500,delay:0,rotate:{x:0,y:0,z:0},opacity:0,scale:.9,easing:"cubic-bezier(0.6, 0.2, 0.1, 1)",container:window.document.documentElement,mobile:!0,reset:!1,useDelay:"always",viewFactor:.2,viewOffset:{top:0,right:0,bottom:0,left:0},beforeReveal:function(e){},beforeReset:function(e){},afterReveal:function(e){},afterReset:function(e){}},t.prototype.isSupported=function(){var e=document.documentElement.style;return"WebkitTransition"in e&&"WebkitTransform"in e||"transition"in e&&"transform"in e},t.prototype.reveal=function(e,t,n,r){var i,o,s,a,u,l,c;if(void 0!==t&&"number"==typeof t?(n=t,t={}):null==t&&(t={}),!(o=function(e,t){{if("string"==typeof e)return Array.prototype.slice.call(t.querySelectorAll(e));if(d.tools.isNode(e))return[e];if(d.tools.isNodeList(e))return Array.prototype.slice.call(e);if(Array.isArray(e))return e.filter(d.tools.isNode)}return[]}(e,i=p(t))).length)return console.log('ScrollReveal: reveal on "'+e+'" failed, no elements found.'),d;n&&"number"==typeof n&&(l=h(),u=d.sequences[l]={id:l,interval:n,elemIds:[],active:!1});for(var f=0;f<o.length;f++)(a=o[f].getAttribute("data-sr-id"))?s=d.store.elements[a]:(s={id:h(),domEl:o[f],seen:!1,revealing:!1}).domEl.setAttribute("data-sr-id",s.id),u&&(s.sequence={id:u.id,index:u.elemIds.length},u.elemIds.push(s.id)),g(s,t,i),y(s),m(s),d.tools.isMobile()&&!s.config.mobile||!d.isSupported()?(s.domEl.setAttribute("style",s.styles.inline),s.disabled=!0):s.revealing||s.domEl.setAttribute("style",s.styles.inline+s.styles.transform.initial);return!r&&d.isSupported()&&(c={target:e,config:t,interval:n},d.history.push(c),d.initTimeout&&window.clearTimeout(d.initTimeout),d.initTimeout=window.setTimeout(v,0)),d},t.prototype.sync=function(){if(d.history.length&&d.isSupported()){for(var e=0;e<d.history.length;e++){var t=d.history[e];d.reveal(t.target,t.config,t.interval,!0)}v()}else console.log("ScrollReveal: sync failed, no reveals found.");return d},o.prototype.isObject=function(e){return null!==e&&"object"==typeof e&&e.constructor===Object},o.prototype.isNode=function(e){return"object"==typeof window.Node?e instanceof window.Node:e&&"object"==typeof e&&"number"==typeof e.nodeType&&"string"==typeof e.nodeName},o.prototype.isNodeList=function(e){var t=Object.prototype.toString.call(e);return"object"==typeof window.NodeList?e instanceof window.NodeList:e&&"object"==typeof e&&/^\[object (HTMLCollection|NodeList|Object)\]$/.test(t)&&"number"==typeof e.length&&(0===e.length||this.isNode(e[0]))},o.prototype.forOwn=function(e,t){if(!this.isObject(e))throw new TypeError('Expected "object", but received "'+typeof e+'".');for(var n in e)e.hasOwnProperty(n)&&t(n)},o.prototype.extend=function(t,n){return this.forOwn(n,function(e){this.isObject(n[e])?(t[e]&&this.isObject(t[e])||(t[e]={}),this.extend(t[e],n[e])):t[e]=n[e]}.bind(this)),t},o.prototype.extendClone=function(e,t){return this.extend(this.extend({},e),t)},o.prototype.isMobile=function(){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)},e=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)},"function"==typeof define&&"object"==typeof define.amd&&define.amd?define(function(){return t}):"undefined"!=typeof module&&module.exports?module.exports=t:window.ScrollReveal=t}();
</script>
<script>


window.sr = ScrollReveal();

sr.reveal('h3',{
  delay:200,
  duration:300,
  origin:'top',
  distance:'100px'
});

sr.reveal('#discount div.offer', {
    delay: 200,
    duration: 300,
    origin: 'right',
    distance: '100px'
});

sr.reveal('#discount .discountLayout', {
    delay: 200,
    duration: 300,
    origin: 'left',
    distance: '200px'
});

sr.reveal('#discount picture', {
    delay: 200,
    duration: 300,
    origin: 'left',
    distance: '200px'
})

</script>
</body>
</html>
