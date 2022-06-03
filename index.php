<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div class="container">
    <table>
      <tr>
        <td><h4 id="nuevoInput"></h4></td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="agregarInput()">Agregar</button></td>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="calcular()">Calcular</button></td>
      </tr>
    </table>
    </div>
<br>
<div class="cont-resultado">
    <h4 class="op">&nbsp &nbsp Mayor: </h4><h4 id="mayor">&nbsp </h4>
    <br>
    <h4 class="op">&nbsp &nbsp Menor: </h4><h4 id="menor">&nbsp </h4>

    <a href="index.php" class="volver"><input type="button" class="btn btn-dark align" value="Volver"></a>

</div>
<script>
a = 0;
function agregarInput(){
    a++;

    var h4 = document.createElement('h4');
    h4.setAttribute('class', 'form-group');
        h4.innerHTML = '<input id="valor_'+a+'" name="valor_'+a+'" class="sin_clase" type="number" min="0" step="1" value="0" placeholder="Valor"/><div class="form-group col-md-2"><button type="button" class="btn btn-dark" onclick="removeValor(div'+a+')">-</button>';
        document.getElementById('nuevoInput').appendChild(h4);
}
function eliminarInput(elemento){
  document.getElementById('nuevoInput').removeChild(elemento)
}
function calcular(){
  var sin_clase = document.getElementsByClassName("sin_clase");
  var mayor=0;
  var menor=9999999;
  for (var i = 0; i < sin_clase.length; i++) {
      if(sin_clase[i].value != "") {
        if (sin_clase[i].value>mayor) {
          mayor=sin_clase[i].value;
          document.getElementById("mayor").innerHTML = mayor;
        }
        if (sin_clase[i].value<menor){
          menor=sin_clase[i].value;
          document.getElementById("menor").innerHTML = menor;
        }
      }
  }
}
</script>
  </body>
</html>
