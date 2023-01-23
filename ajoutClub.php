<?php include './Club.php';
$club = new Club(
    $_POST['id'],
    $_POST['name'],
    $_POST['description'],
    $_POST['adresse'],
    $_POST['domaine']
);
echo var_dump($club->afficherClub());
?>

