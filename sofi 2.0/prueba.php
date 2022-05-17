<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>


    <!-- CSS -->
    <link href="/favicon.ico" rel="shortcut icon">
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">

    <!-- Respond.js soporte de media queries para Internet Explorer 8 -->
    <!-- ie8.js EventTarget para cada nodo en Internet Explorer 8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/0.2.2/ie8.js"></script>
    <![endif]-->

  </head>
  
  <body>
  
  <h3> Iniciar sesión </h3>
<hr class="red">
    <!-- Contenido -->
    <main class="page">
      
       




    <div class="form-group">
            <label class="col-sm-3 control-label" >Respuesta:</label>
              <div class="col-sm-9"> 
              <div class="checkbox">
                <label>
                  <input type="checkbox" id="respuesta"> Si
                </label>
                <label>
                  <input type="checkbox" value="no" id="respuestab"> No
                </label>
                <script>
                  function respuesta(){
                    var a=document.getElementById("respuesta").value;
                    var b=document.getElementById("respuestab").value;
                    if (a=="si"){
                      document.write("si");
                    }            
                    else if (b=="no"){
                      document.write("no");
                    }            
                  }
                </script>
                <button class="btn btn-primary pull-left" onclick="respuesta()">Guardar</button>
              </div>
              </div>
          </div>





    </main>

    <!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
 
  </body>
</html>