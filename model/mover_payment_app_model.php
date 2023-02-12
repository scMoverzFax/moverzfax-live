<?php 

include "connection.php";
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    $id = isset($_GET['id'])?$_GET['id']:" ";
    $sql = " SELECT ad.origin_zip_code, ad.destination_zip_code, ci.name AS cioname , st.name AS stoname, c.name AS cidname, s.name AS stdname FROM add_jobs AS ad
            LEFT JOIN `city` AS ci ON  ci.id = ad.origin_city
            LEFT JOIN `state` AS st ON st.code = ad.origin_state
            LEFT JOIN `city` AS c ON  c.id = ad.destination_city
            LEFT JOIN `state` AS s ON s.code = ad.destination_state WHERE ad.id = '".$id."' ";
            // echo $sql;die();
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 1)
    {
        $res = mysqli_fetch_assoc($result); ?>

        <tr>
            <td><?= $res['cioname']; ?></td>
            <td><?= $res['stoname']; ?></td>
            <td><?= $res['origin_zip_code']; ?></td>
            <td><?= $res['cidname']; ?></td>
            <td><?= $res['stdname']; ?></td>
            <td><?= $res['destination_zip_code']; ?></td>
            <td> 8$ </td>
        </tr>

<?php
    }
}
?>