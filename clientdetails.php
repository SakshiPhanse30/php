<html>
    <title>clientdetails></title>
    <head>
        <body>
            <h1 style="color: orange; border: 4px solid orange; letter-spacing: 5px; padding: 10px;" align="center">Client</h1>
</head>
</body>
</html><?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "website");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM user where email='dv@hadjk.com' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1 align=center>";
            echo "<tr>";
                echo "<th>username</th>";
                echo "<th>phone</th>";
                echo "<th>email</th>";
                echo "<th>gender</th>";
                echo "<th>action</th>";
                echo "<th>action</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo '<td><a href="delete.php?id=<?php echo $res["id"]; ?><input type="button" name="delete" value="delete"><a href="client.php"><input type="button" name="edit" value="edit"></a></td></a>';
                 echo '<td><a href="update.php?id=<?php echo $res["id"]; ?><input type="button" name="active" value="active"></a></td>';
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
