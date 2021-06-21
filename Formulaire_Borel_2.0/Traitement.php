<!-- connect to Database -->
<?php 

  if ( isset($_POST) )
  {
    $Bdd = new PDO( 'mysql:host=localhost;dbname=inchclass','root','',array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
    $requete = $Bdd->prepare( 'INSERT INTO inch_group ( Noms, Prenoms, Sexe, Date_Naissance, Telephone, Email, Pswd, Pays, Photo_Profil) VALUES(?,?,?,?,?,?,?,?,?)' );
    $requete->execute( array( 
                 $_POST['Noms'], $_POST['Prenoms'], $_POST['Sexe'], 
                 $_POST['Date_Naissance'], $_POST['Telephone'], $_POST['Email'],
                 $_POST['Pswd'], $_POST['Pays'],$_FILES['Photo_Profil']['name']
              ) );  
  }


  if (isset($_FILES['Photo_Profil']) AND $_FILES['Photo_Profil']['error'] == 0)
  {
    if ($_FILES['Photo_Profil']['size'] <= 100000000)
    {
      $infosfichier = pathinfo($_FILES['Photo_Profil']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'png','JPG','JPEG','PNG');
      if (in_array($extension_upload, $extensions_autorisees))
      {
        move_uploaded_file($_FILES['Photo_Profil']['tmp_name'], 'Images/' .basename($_FILES['Photo_Profil']['name']));
        $p = $_FILES['Photo_Profil']['name'];
      }
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>visualisation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
  <style type="text/css">
      .corps{
          color: white;
          background-image:url(Images/bg.jpg) ; 
          background-size: cover; background-position: fixed;
        }
    .imgtab {
      height: 50px;
      width: 50px;
    }
    @media screen and (min-width: 0px) and (max-width: 768px) {
    .tab-phone {
        display: none;
    }
    }

    td{
      color: grey;
    }
  </style>
</head>
<body class="corps"> 
<div class="container-fluid"> 
<div class="container forme2">
<div class="row"> 
  <h2 class="text-center" style="color:blue;"> LISTE DES INSCRITS </h2>
</div>  
<div class="row">
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
<table class="table table-striped table-dark table-sm table-bordered">
<thead>
    <tr>
      <th scope="col">Ordre</th>
      <th scope="col">Photo de profils</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col" class="tab-phone">Date de naissance</th>
      <th scope="col" class="tab-phone">sexe</th>
      <th scope="col" class="tab-phone">pays</th>
      <th scope="col" class="tab-phone">telephone</th> 
    </tr>
  </thead>  
  <?php   
$response = $Bdd->query('SELECT* FROM inch_group ORDER BY id DESC');

$i=0;
  while($donnees=$response->fetch()){
    $b=$donnees['Photo_Profil'];
    $i++;
echo 
"   

  
  <tbody>
    <tr>
      <td>".$i."</td>
      <td class=\"text-center\"><a href='Images/".$b."'><img src='Images/".$b. "' class='img-rounded imgtab' alt='photo_profil' title='cliquez ici pour agrandir' /></a></td>
      <td>".$donnees['Noms']."</td>
      <td>".$donnees['Prenoms']."</td>
      <td>".$donnees['Email']."</td>
      <td class='tab-phone'>".$donnees['Date_Naissance']."</td>
      <td class='tab-phone'>".$donnees['Sexe']."</td>
      <td class='tab-phone'>".$donnees['Pays']."</td>
      <td class='tab-phone'>".$donnees['Telephone']."</td>
      
    </tr>
  </tbody>
";
}
 ?>
 </table>
</div>
</div>
</div>
</div>

</body>
</html>