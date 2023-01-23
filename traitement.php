<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>A basic HTML table</h2>

<?php if (
    $_GET['id'] &&
    $_GET['name'] &&
    $_GET['description'] &&
    $_GET['adresse'] &&
    $_GET['domaine']
) { ?>
    <table style="width:100%">

  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Adresse</th>
    <th>Domaine</th>
  </tr>
  <tr>
    <td><?php echo $_GET['id']; ?></td>
    <td><?php echo $_GET['name']; ?></td>
    <td><?php echo $_GET['description']; ?></td>
    <td><?php echo $_GET['adresse']; ?></td>
    <td><?php echo $_GET['domaine']; ?></td>
  </tr>
</table> 
<?php } else {echo 'Champs manquants';} ?>


<p>To understand the example better, we have added borders to the table.</p>

</body>
</html>

