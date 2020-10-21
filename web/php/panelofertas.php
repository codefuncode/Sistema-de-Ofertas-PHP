<!DOCTYPE html>
<html lang="en">
  <title>
    Panel
  </title>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/>
  <link href="https://www.w3schools.com/lib/w3-theme-black.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
  </style>
  <body>
    <!-- Navbar -->
    <div class="w3-top">
      <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()">
          <i class="fa fa-bars">
          </i>
        </a>
        <a class="w3-bar-item w3-button w3-theme-l1" href="#">
          Logo
        </a>
        <a class="w3-bar-item w3-button w3-hide-small w3-hover-white" href="#">
          About
        </a>
        <a class="w3-bar-item w3-button w3-hide-small w3-hover-white" href="#">
          Values
        </a>
        <a class="w3-bar-item w3-button w3-hide-small w3-hover-white" href="#">
          News
        </a>
        <a class="w3-bar-item w3-button w3-hide-small w3-hover-white" href="#">
          Contact
        </a>
        <a class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white" href="#">
          Clients
        </a>
        <a class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white" href="#">
          Partners
        </a>
      </div>
    </div>
    <!-- Sidebar -->
    <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
      <a class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" href="javascript:void(0)" onclick="w3_close()" title="Close Menu">
        <i class="fa fa-remove">
        </i>
      </a>
      <h4 class="w3-bar-item">
        <b>
          Menu
        </b>
      </h4>
      <a class="w3-bar-item w3-button w3-hover-black" href="#">
        Link
      </a>
      <a class="w3-bar-item w3-button w3-hover-black" href="#">
        Link
      </a>
      <a class="w3-bar-item w3-button w3-hover-black" href="#">
        Link
      </a>
      <a class="w3-bar-item w3-button w3-hover-black" href="#">
        Link
      </a>
    </nav>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
    </div>
    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main" style="margin-left:250px">
      <div class="w3-row w3-padding-64">
        <div class="w3-twothird w3-container">
          <div class="w3-container ">
            <form>
            <h2>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quam rem eligendi illo?
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Ea quas aliquid ipsum commodi fugit beatae, eveniet consectetur aliquam fuga eos, atque labore, non quaerat nisi quasi in hic magnam praesentium?
            </p>
            <p>
              <label>
                Nombre de la Oferta
              </label>
              <input class="w3-input w3-border" id="nombreOferta" name="nombreOferta" type="text"/>
            </p>
            <p>
              <label>
                Descripción  de la Oferta
              </label>
              <br/>
              <textarea cols="75" id="descripcionOferta" name="descripcionOferta" rows="4" style="width: 100%; height: 200px; resize: none;">
              </textarea>
            </p>
            <p>
              <label>
                Precio
              </label>
              <input class="w3-input w3-border" id="precio" name="precio" type="number"/>
            </p>
            <p>
              <label>
                Fecha Vigencia
              </label>
              <input class="w3-input w3-border" id="fechavigencia" name="fechavigencia" type="date"/>
            </p>
            <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
            <!--  Input de tipo file para subir ficheros  -->
            <p>
              <label>
                video
              </label>
              <input class="" id="video" name="video" type="file"/>
            </p>
            <p>
              <label>
                imagen
              </label>
              <input class="" id="imagen" name="imagen" type="file"/>
            </p>
            <p>
              <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
              <button class="w3-button w3-green w3-block" id="enviar">
                Enviar
              </button>
            </p>
          </form>
          </div>
        </div>
        <div class="w3-third w3-container">
          <p class="w3-border w3-padding-large w3-padding-32 w3-center">
            AD
          </p>
          <p class="w3-border w3-padding-large w3-padding-64 w3-center">
            AD
          </p>
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-twothird w3-container">
          <h1 class="w3-text-teal">
            Heading
          </h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
        <div class="w3-third w3-container">
          <p class="w3-border w3-padding-large w3-padding-32 w3-center">
            AD
          </p>
          <p class="w3-border w3-padding-large w3-padding-64 w3-center">
            AD
          </p>
        </div>
      </div>
      <div class="w3-row w3-padding-64">
        <div class="w3-twothird w3-container">
          <h1 class="w3-text-teal">
            Heading
          </h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
        <div class="w3-third w3-container">
          <p class="w3-border w3-padding-large w3-padding-32 w3-center">
            AD
          </p>
          <p class="w3-border w3-padding-large w3-padding-64 w3-center">
            AD
          </p>
        </div>
      </div>
      <!-- Pagination -->
      <div class="w3-center w3-padding-32">
        <div class="w3-bar">
          <a class="w3-button w3-black" href="#">
            1
          </a>
          <a class="w3-button w3-hover-black" href="#">
            2
          </a>
          <a class="w3-button w3-hover-black" href="#">
            3
          </a>
          <a class="w3-button w3-hover-black" href="#">
            4
          </a>
          <a class="w3-button w3-hover-black" href="#">
            5
          </a>
          <a class="w3-button w3-hover-black" href="#">
            »
          </a>
        </div>
      </div>
      <footer id="myFooter">
        <div class="w3-container w3-theme-l2 w3-padding-32">
          <h4>
            Footer
          </h4>
        </div>
        <div class="w3-container w3-theme-l1">
          <p>
            Powered by
            <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">
              w3.css
            </a>
          </p>
        </div>
      </footer>
      <!-- END MAIN -->
    </div>
    <script>
      // Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
    </script>
    <script src="../js/jquery.min.js" type="text/javascript">
    </script>
    <script src="../js/js.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
panelofertas();
    });
    </script>
  </body>
</html>
