<?php

$conn = mysqli_init();
mysqli_real_connect($conn,'dataif.mysql.database.azure.com', 'it63070113@dataif', 'EMLcnk22', 'itflab', 3306);

$id = $_GET['name'];

$del = mysqli_query($conn,"DELETE * FROM guestbook = '$name'");

if($del)
{
    mysqli_close($conn);
    header("location:show.php");
    exit;
}
else
{
    echo "Error deleting record";
}
?>
