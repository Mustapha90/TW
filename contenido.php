<div id="centro2">
	<div id="centro_header">

<?php 
switch ($seccion) {
    case 'home':
        include 'html/portada.html';
        break;
    case 'miembros':
        include 'html/miembros.html';
        break;
	case 'publicaciones':
        include 'html/publicaciones.html';
        break;
    case 'proyectos':
        include 'html/proyectos.html';
        break;
	case 'addpub':
        include 'html/addpub.html';
        break;
	case 'addproyecto':
        include 'html/addproyecto.html';
        break;
	case 'editarusuarios':
        include 'html/editarusuarios.html';
        break;
	case 'adduser':
        include 'src/adduser.php';
        break;
	case 'verlog':
        include 'html/verlog.html';
        break;
        break;
	case 'login':
        include 'src/login.php';
        break;
	case 'logout':
        include 'src/logout.php';
        break;
	case 'mapadelsitio':
        include 'html/mapadelsitio.html';
        break;
	case 'busqueda':
        include 'src/busqueda.php';
        break;
	case 'terminosdeuso':
        include 'html/terminosdeuso.html';
        break;
	case 'contacto':
        include 'html/contacto.html';
        break;
    default:
        include 'html/portada.html';
        break;
}
?>


</div>

