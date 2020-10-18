<!DOCTYPE html>
<html>
  <title>
    W3.CSS Template
  </title>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display: none}
  </style>
  <body class="w3-content w3-border-left w3-border-right">
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-light-grey w3-collapse w3-top" id="mySidebar" style="z-index:3;width:260px">
      <div class="w3-container w3-display-container w3-padding-16">
        <i class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright" onclick="w3_close()">
        </i>
        <h3>
          Rental
        </h3>
        <h3>
          from $99
        </h3>
        <h6>
          per night
        </h6>
        <hr/>
        <form action="/action_page.php" target="_blank">
          <p>
            <label>
              <i class="fa fa-calendar-check-o">
              </i>
              Check In
            </label>
          </p>
          <input class="w3-input w3-border" name="CheckIn" placeholder="DD MM YYYY" required="" type="text"/>
          <p>
            <label>
              <i class="fa fa-calendar-o">
              </i>
              Check Out
            </label>
          </p>
          <input class="w3-input w3-border" name="CheckOut" placeholder="DD MM YYYY" required="" type="text"/>
          <p>
            <label>
              <i class="fa fa-male">
              </i>
              Adults
            </label>
          </p>
          <input class="w3-input w3-border" max="6" min="1" name="Adults" type="number" value="1"/>
          <p>
            <label>
              <i class="fa fa-child">
              </i>
              Kids
            </label>
          </p>
          <input class="w3-input w3-border" max="6" min="0" name="Kids" type="number" value="0"/>
          <p>
            <button class="w3-button w3-block w3-green w3-left-align" type="submit">
              <i class="fa fa-search w3-margin-right">
              </i>
              Search availability
            </button>
          </p>
        </form>
      </div>
    </nav>
    <div class="w3-bar-block">
      <a class="w3-bar-item w3-button w3-padding-16" href="#apartment">
        <i class="fa fa-building">
        </i>
        Apartment
      </a>
      <a class="w3-bar-item w3-button w3-padding-16" href="javascript:void(0)" onclick="document.getElementById('subscribe').style.display='block'">
        <i class="fa fa-rss">
        </i>
        Subscribe
      </a>
      <a class="w3-bar-item w3-button w3-padding-16" href="#contact">
        <i class="fa fa-envelope">
        </i>
        Contact
      </a>
    </div>
    <!-- Top menu on small screens -->
    <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
      <span class="w3-bar-item">
        Rental
      </span>
      <a class="w3-right w3-bar-item w3-button" href="javascript:void(0)" onclick="w3_open()">
        <i class="fa fa-bars">
        </i>
      </a>
    </header>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
    </div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-white" style="margin-left:260px">
      <!-- Push down content on small screens -->
      <div class="w3-hide-large" style="margin-top:80px">
      </div>
      <!-- Slideshow Header -->
      <div class="w3-container" id="apartment">
        <h2 class="w3-text-green">
          Disney World Packages
        </h2>
        <div class="w3-display-container mySlides">
          <img src="/w3images/livingroom.jpg" style="width:100%;margin-bottom:-6px"/>
          <div class="w3-display-bottomleft w3-container w3-black">
            <p>
              Living Room
            </p>
          </div>
        </div>
        <div class="w3-display-container mySlides">
          <img src="/w3images/diningroom.jpg" style="width:100%;margin-bottom:-6px"/>
          <div class="w3-display-bottomleft w3-container w3-black">
            <p>
              Dining Room
            </p>
          </div>
        </div>
        <div class="w3-display-container mySlides">
          <img src="/w3images/bedroom.jpg" style="width:100%;margin-bottom:-6px"/>
          <div class="w3-display-bottomleft w3-container w3-black">
            <p>
              Bedroom
            </p>
          </div>
        </div>
        <div class="w3-display-container mySlides">
          <img src="/w3images/livingroom2.jpg" style="width:100%;margin-bottom:-6px"/>
          <div class="w3-display-bottomleft w3-container w3-black">
            <p>
              Living Room II
            </p>
          </div>
        </div>
      </div>
      <div class="w3-row-padding w3-section">
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" onclick="currentDiv(1)" src="/w3images/livingroom.jpg" style="width:100%;cursor:pointer" title="Living room"/>
        </div>
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" onclick="currentDiv(2)" src="/w3images/diningroom.jpg" style="width:100%;cursor:pointer" title="Dining room"/>
        </div>
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" onclick="currentDiv(3)" src="/w3images/bedroom.jpg" style="width:100%;cursor:pointer" title="Bedroom"/>
        </div>
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" onclick="currentDiv(4)" src="/w3images/livingroom2.jpg" style="width:100%;cursor:pointer" title="Second Living Room"/>
        </div>
      </div>
      <div class="w3-container">
        <h4>
          <strong>
            The space
          </strong>
        </h4>
        <div class="w3-row w3-large">
          <div class="w3-col s6">
            <p>
              <i class="fa fa-fw fa-male">
              </i>
              Max people: 4
            </p>
            <p>
              <i class="fa fa-fw fa-bath">
              </i>
              Bathrooms: 2
            </p>
            <p>
              <i class="fa fa-fw fa-bed">
              </i>
              Bedrooms: 1
            </p>
          </div>
          <div class="w3-col s6">
            <p>
              <i class="fa fa-fw fa-clock-o">
              </i>
              Check In: After 3PM
            </p>
            <p>
              <i class="fa fa-fw fa-clock-o">
              </i>
              Check Out: 12PM
            </p>
          </div>
        </div>
        <hr/>
        <h4>
          <strong>
            Amenities
          </strong>
        </h4>
        <div class="w3-row w3-large">
          <div class="w3-col s6">
            <p>
              <i class="fa fa-fw fa-shower">
              </i>
              Shower
            </p>
            <p>
              <i class="fa fa-fw fa-wifi">
              </i>
              WiFi
            </p>
            <p>
              <i class="fa fa-fw fa-tv">
              </i>
              TV
            </p>
          </div>
          <div class="w3-col s6">
            <p>
              <i class="fa fa-fw fa-cutlery">
              </i>
              Kitchen
            </p>
            <p>
              <i class="fa fa-fw fa-thermometer">
              </i>
              Heating
            </p>
            <p>
              <i class="fa fa-fw fa-wheelchair">
              </i>
              Accessible
            </p>
          </div>
        </div>
        <hr/>
        <h4>
          <strong>
            Extra Info
          </strong>
        </h4>
        <p>
          Our apartment is really clean and we like to keep it that way. Enjoy the lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p>
          We accept:
          <i class="fa fa-credit-card w3-large">
          </i>
          <i class="fa fa-cc-mastercard w3-large">
          </i>
          <i class="fa fa-cc-amex w3-large">
          </i>
          <i class="fa fa-cc-cc-visa w3-large">
          </i>
          <i class="fa fa-cc-paypal w3-large">
          </i>
        </p>
        <hr/>
        <h4>
          <strong>
            Rules
          </strong>
        </h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p>
          Subscribe to receive updates on available dates and special offers.
        </p>
        <p>
          <button class="w3-button w3-green w3-third" onclick="document.getElementById('subscribe').style.display='block'">
            Subscribe
          </button>
        </p>
      </div>
      <hr/>
      <!-- Contact -->
      <div class="w3-container" id="contact">
        <h2>
          Contact
        </h2>
        <i class="fa fa-map-marker" style="width:30px">
        </i>
        Chicago, US
        <br/>
        <i class="fa fa-phone" style="width:30px">
        </i>
        Phone: +00 151515
        <br/>
        <i class="fa fa-envelope" style="width:30px">
        </i>
        Email: mail@mail.com
        <br/>
        <p>
          Questions? Go ahead, ask them:
        </p>
        <form action="/action_page.php" target="_blank">
          <p>
            <input class="w3-input w3-border" name="Name" placeholder="Name" required="" type="text"/>
          </p>
          <p>
            <input class="w3-input w3-border" name="Email" placeholder="Email" required="" type="text"/>
          </p>
          <p>
            <input class="w3-input w3-border" name="Message" placeholder="Message" required="" type="text"/>
          </p>
          <button class="w3-button w3-green w3-third" type="submit">
            Send a Message
          </button>
        </form>
      </div>
      <footer class="w3-container w3-padding-16" style="margin-top:32px">
        Powered by
        <a class="w3-hover-text-green" href="https://www.w3schools.com/w3css/default.asp" target="_blank" title="W3.CSS">
          w3.css
        </a>
      </footer>
      <!-- End page content -->
    </div>
    <!-- Subscribe Modal -->
    <div class="w3-modal" id="subscribe">
      <div class="w3-modal-content w3-animate-zoom w3-padding-large">
        <div class="w3-container w3-white w3-center">
          <i class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent" onclick="document.getElementById('subscribe').style.display='none'">
          </i>
          <h2 class="w3-wide">
            SUBSCRIBE
          </h2>
          <p>
            Join our mailing list to receive updates on available dates and special offers.
          </p>
          <p>
            <input class="w3-input w3-border" placeholder="Enter e-mail" type="text"/>
          </p>
          <button class="w3-button w3-padding-large w3-green w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'" type="button">
            Subscribe
          </button>
        </div>
      </div>
    </div>
    <script>
      // Script to open and close sidebar when on tablets and phones
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
    </script>
    <script src="js/js.js" type="text/javascript">
    </script>
  </body>
</html>