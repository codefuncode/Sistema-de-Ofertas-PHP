<!DOCTYPE html>
<html lang="en">
  <title>
    Panel Ofertas
  </title>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <!-- ------------------------------------------------------------------------------------ -->
  <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/>
  <link href="https://www.w3schools.com/lib/w3-theme-black.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <!-- ------------------------------------------------------------------------------------ -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
  </script>
  <!-- -->
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
    <div class="w3-top">
      <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-theme-l1" href="#">
          Panel administrativo
        </a>
      </div>
    </div>
    <div class="w3-main" style="margin-left:250px">
      <div class="w3-row w3-padding-64">
        <div class="w3-twothird w3-container">
          <!--  Contenedor que alberga los elementos para insertar la oferta en la base de datos  -->
          <div class="w3-container ">
            <h2>
              Ingrese la descripción de la oferta
            </h2>
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
              <button class="w3-button w3-green w3-block" id="enviar">
                Enviar
              </button>
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="../js/jquery.min.js" type="text/javascript">
    </script>
    <script src="../js/insert.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        panelofertas();
        });
    </script>
  </body>
</html>
