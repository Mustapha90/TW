<h3>Añadir/editar datos de proyectos</h3>
</div>


<style>

.dropdown {
  position: absolute;
  transform: translateY(-50%);
}

a {
  color: #fff;
}

.dropdown dd,
.dropdown dt {
  margin: 0px;
  padding: 0px;
}

.dropdown ul {
  margin: -1px 0 0 0;
}

.dropdown dd {
  position: relative;
}

.dropdown a,
.dropdown a:visited {
  color: #fff;
  text-decoration: none;
  outline: none;
  font-size: 12px;
}

.dropdown dt a {
  background-color: #4F6877;
  display: block;
  padding: 8px 20px 5px 10px;
  min-height: 25px;
  line-height: 24px;
  overflow: hidden;
  border: 0;
  width: 272px;
}

.dropdown dt a span,
.multiSel span {
  cursor: pointer;
  display: inline-block;
  padding: 0 3px 2px 0;
}

.dropdown dd ul {
  background-color: #4F6877;
  border: 0;
  color: #fff;
  display: none;
  left: 0px;
  padding: 2px 15px 2px 5px;
  position: absolute;
  top: 2px;
  width: 280px;
  list-style: none;
  height: 100px;
  overflow: auto;
}

.dropdown span.value {
  display: none;
}

.dropdown dd ul li a {
  padding: 5px;
  display: block;
}

.dropdown dd ul li a:hover {
  background-color: #fff;
}

</style>

<div id="centro_content">
	
<div id="containerRegistro">	

	<form action="" method="post" enctype="multipart/form-data">
		<label for="codpro">Código del proyecto:</label>
		<input class="login" type="text" id="codpro" name="codpro" >


		<label for="titulopro">Título:</label>
		<input class="login" type="text" id="titulo" name="titulo" >


		<label for="descripro">Descripción:</label><br><br>
		<textarea class="textinput" id="descripcion" name="descripcion"></textarea>




		Fecha de comienzo:<br><br>
		<input type="date" id="fechacomienzo" name="fechacomienzo" max="2017-06-15"><br><br>

		
		Fecha de fin:<br><br>
		<input type="date" id="fechafin" name="fechafin" min="2030-06-15"><br><br>	

		<label for="entidadcol">Entidades colaboradoras:</label>
		<input class="login" type="text" id="entidades" name="entidades">
		<br>		
		
		<label for="cuantipro">Cuantía concedida:</label><br><br>		
		<input type="number" id="cuantia" name="cuantia" min="1" max="20000">
		<br><br>

		<label for="titulopro">Investigador principal:</label>
		<input class="login" type="text" id="investigador" name="investigador">


		<label for="titulopro">Investigadores colaboradores:</label><br><br>
<script src="js/addInput.js" language="Javascript" type="text/javascript"></script>


		<label for="miembros">Investigadores miembros:</label>




			<select id="miembros" name="miembros">

    <?php while($row = $res->fetch_assoc()):?>
			  <option value="<?php echo($row["email"]);?>"><?php echo($row["nombre"]);?> <?php echo($row["apellidos"]);?> | (<?php echo($row["email"]);?>)</option>
     <?php endwhile; ?> 	
		</select>
	<br><br>






<dl class="dropdown"> 
  
    <dt>
    <a href="#">
      <span class="hida">Select</span>    
      <p class="multiSel"></p>  
    </a>
    </dt>
  
    <dd>
        <div class="mutliSelect">
            <ul>
                <li>
                    <input type="checkbox" value="Apple" />Apple</li>
                <li>
                    <input type="checkbox" value="Blackberry" />Blackberry</li>
                <li>
                    <input type="checkbox" value="HTC" />HTC</li>
                <li>
                    <input type="checkbox" value="Sony Ericson" />Sony Ericson</li>
                <li>
                    <input type="checkbox" value="Motorola" />Motorola</li>
                <li>
                    <input type="checkbox" value="Nokia" />Nokia</li>
            </ul>
        </div>
    </dd>
</dl>



<script>
/*
	Dropdown with Multiple checkbox select with jQuery - May 27, 2013
	(c) 2013 @ElmahdiMahmoud
	license: https://www.opensource.org/licenses/mit-license.php
*/

$(".dropdown dt a").on('click', function() {
  $(".dropdown dd ul").slideToggle('fast');
});

$(".dropdown dd ul li a").on('click', function() {
  $(".dropdown dd ul").hide();
});

function getSelectedValue(id) {
  return $("#" + id).find("dt a span.value").html();
}

$(document).bind('click', function(e) {
  var $clicked = $(e.target);
  if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
});

$('.mutliSelect input[type="checkbox"]').on('click', function() {

  var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
    title = $(this).val() + ",";

  if ($(this).is(':checked')) {
    var html = '<span title="' + title + '">' + title + '</span>';
    $('.multiSel').append(html);
    $(".hida").hide();
  } else {
    $('span[title="' + title + '"]').remove();
    var ret = $(".hida");
    $('.dropdown dt a').append(ret);

  }
});
</script>









	 <label for="nomiembros">Investigadores externos:</label>
     <div id="dynamicInput">
	<br>
          Nombre Investigador 1:<br><input type="text" name="myInputs[]">
     </div>
     <input type="button" value="Añadir investigador" onClick="addInput('dynamicInput');">


<br><br>
		
		<label for="url">URL:</label>
		<input class="login" type="text" id="url" name="url" >
		<br>




		<div id="lower">
			<input class="login" type="submit" value="Añadir el proyecto">
		</div>
	
	
	</form>
	
	 </div>
	
</div>
