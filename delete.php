<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'dataif.mysql.database.azure.com', 'it63070113@dataif', 'EMLcnk22', 'itflab', 3306);

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"guestbook= '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:show.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
