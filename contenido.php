<div id="centro2">
	<div id="centro_header">

<?php 
switch ($seccion) {
    case 'home':
        include 'html/portada.html';
        break;
    case 'miembros':
        include 'src/miembros.php';
        break;
	case 'publicaciones':
        include 'src/publicaciones.php';
        break;
    case 'proyectos':
        include 'src/proyectos.php';
        break;
	case 'addpub':
        include 'src/addpub.php';
        break;
	case 'addproyecto':
        include 'src/addproyecto.php';
        break;
	case 'editarusuarios':
        include 'src/editarusuarios.php';
        break;
	case 'adduser':
        include 'src/adduser.php';
        break;
	case 'log':
        include 'src/log.php';
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
	case 'deleteuser':
        include 'src/deleteuser.php';
        break;
	case 'blockuser':
        include 'src/blockuser.php';
        break;
	case 'busqueda':
        include 'src/busqueda.php';
        break;
	case 'terminosdeuso':
        include 'html/terminosdeuso.html';
        break;
	case 'backup':
        include 'src/backup.php';
        break;
	case 'edituser':
        include 'src/edituser.php';
        break;
	case 'restore':
        include 'src/restore.php';
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

