<?php 

use App\Controller\ProfilController;
use App\Controller\AmisController;
use App\Controller\AccueilController;

if(array_key_exists("page",$_GET))
{
    switch ($_GET["page"]) :

        // case 'profil' || 'profil_erreur':
        //     $controller = new ProfilController();
        //     $controller->render();
        //     break;
        case 'amis':
            $controller = new AmisController();
            $controller->render();
            break;
        default:
            $controller = new  AccueilController();
            $controller->render();
        endswitch;
    

} else {
    $controller = new  AccueilController();
    $controller->render();
}





