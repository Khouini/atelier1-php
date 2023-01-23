<?php
include './Club.php';
class config
{
    private static $instance = null;
    public static function getConnexion()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO(
                'mysql:host=localhost;dbname=clubEsprit',
                'root',
                ''
            );
        }
        return self::$instance;
    }
    function afficherClub()
    {
        $data = $this->getConnexion()
            ->query('SELECT * FROM club')
            ->fetchAll();

        if (!$data) {
            echo 'no Result';
        } else {
            echo "<table>  
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Adresse</th>
        <th>Domaine</th>
      </tr>";
            foreach ($data as $row) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
                echo '<td>' . $row['adresse'] . '</td>';
                echo '<td>' . $row['domaine'] . '</td>';
                echo '</tr>';
            }
            echo '</table> ';
        }
    }
}
$db = new Config();
echo $db->afficherClub();
?>
