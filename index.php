<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Football</title>
</head>
<body>

<?php
    require 'classes/Pays_class.php';
    require 'classes/Equipe_class.php';
    require 'classes/Joueur_class.php';
    require 'classes/Carriere_class.php';

    $pays1 = new Pays ('France');
    $pays2 = new Pays ('Espagne');
    $pays3 = new Pays ('Angleterre');
    $pays4 = new Pays ('Italie');
    $pays5 = new Pays ('Portugal');
    $pays6 = new Pays ('Argentine');
    $pays7 = new Pays ('Bresil');

    $equipe1 = new Equipe ('PSG',$pays1,1970);
    $equipe2 = new Equipe ('Racing Club Stras',$pays1,1906);
    $equipe3 = new Equipe ('FC Barcelone',$pays2,1899);
    $equipe4 = new Equipe ('Juventus',$pays4,1897);
    $equipe5 = new Equipe ('Manchester United',$pays3,1878);
    $equipe6 = new Equipe ('Real Madrid',$pays2,1902);

    $joueur1 = new Joueur ('Mbappe','Killian','1998-12-20',$pays1);
    $joueur2 = new Joueur ('Ronaldo','Cristiano','1985-02-05',$pays5);
    $joueur3 = new Joueur ('Messi','Lionel','1987-06-24',$pays6);
    $joueur4 = new Joueur ('Junior','Neymar','1992-02-05',$pays6);

    $carriere1 = new Carriere ($joueur1,$equipe1,2017);
    $carriere2 = new Carriere ($joueur3,$equipe1,2017);
    $carriere3 = new Carriere ($joueur3,$equipe3,2004);
    $carriere4 = new Carriere ($joueur4,$equipe1,2017);
    $carriere5 = new Carriere ($joueur4,$equipe3,2013);
    $carriere6 = new Carriere ($joueur2,$equipe4,2018);

    echo'<div class="container">', 
     '<div class="card red">'.$pays1->afficherEquipes().'</div>',
     '<div class="card red">'.$pays2->afficherEquipes().'</div>',
     '<div class="card red">'.$pays3->afficherEquipes().'</div>',
     '<div class="card red">'.$pays4->afficherEquipes().'</div>',
     '</div>',

    '<div class="container">', 
     '<div class="card green">'.$equipe1->afficherJoueurs().'</div>',
     '<div class="card green">'.$equipe2->afficherJoueurs().'</div>',
     '<div class="card green">'.$equipe3->afficherJoueurs().'</div>',
     '<div class="card green">'.$equipe4->afficherJoueurs().'</div>',
     '<div class="card green">'.$equipe5->afficherJoueurs().'</div>',
     '<div class="card green">'.$equipe6->afficherJoueurs().'</div>',
     '</div>',

    '<div class="container">', 
     '<div class="card blue">'.$joueur1->afficherCarriere().'</div>',
     '<div class="card blue">'.$joueur2->afficherCarriere().'</div>',
     '<div class="card blue">'.$joueur3->afficherCarriere().'</div>',
     '<div class="card blue">'.$joueur4->afficherCarriere().'</div>',
     '</div>';
?>
    
</body>
</html>