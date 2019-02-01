<?php
if (!empty($_GET['q']))
{
    include 'connect.php';
    $q=$_GET['q'];
    $query="select * from Disease_Symptom where Symptom like '%$q%'";
    $result=mysqli_query($conn,$query);
    while($output=mysqli_fetch_assoc($result))
    {
        echo '<a>'.$output ['Symptom'].'</a>';

    }


}
?>  