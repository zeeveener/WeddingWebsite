<?php
const DB_HOST = "localhost";
const DB_PORT = 3306;
const DB_USER = "zac_wedding";
const DB_PASS = "budgie";
const DB_DB = "wedding2018";
const DB_RSVP_TABLE = "RSVP";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB, DB_PORT);
$statement = $connection->prepare("
SELECT 
  `first_name` First, 
  `last_name` Last, 
  `email` Email, 
  CASE `coming` 
    WHEN 1 THEN 'Yes'
    WHEN 0 THEN 'No'
  END Coming
  FROM `RSVP`");
$statement->execute();

if(!$results = $statement->get_result()){
    echo "An Error Occurred: ";
    echo $connection->errno . "<br/>";
    echo $connection->error;
    exit;
}

?>
<!DOCTYPE html>
<html>
    <body>
        <h2>RSVPs</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Coming</th>
            </tr>
<?php
    while($row = $results->fetch_assoc()) {
?>
            <tr>
                <td><?php echo $row["First"] . " " . $row["Last"] ?></td>
                <td><?php echo $row["Email"] ?></td>
                <td><?php echo $row["Coming"] ?></td>
            </tr>
<?php
    }
?>
        </table>
    </body>
</html>
