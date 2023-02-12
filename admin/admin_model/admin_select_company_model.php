<?php include "connection.php";
session_start();
if(isset($_SESSION["id"])){
    $user_id = $_SESSION["id"];
}else{
    $user_id = 0;
}
// $user_id = isset($_REQUEST['user_id']) && !empty($_REQUEST['user_id'])?$_REQUEST['user_id']:" ";

$sql = "SELECT mo.*,ci.name as ciname,st.name as stname FROM mover_cart AS mo
                            LEFT JOIN `city` as ci ON  ci.id = mo.city_id
                            LEFT JOIN `state` as st ON st.id = mo.state_id WHERE mo.user_id = '".$user_id."'";
// echo $sql;die();
$result = $con->query($sql);
if (mysqli_num_rows($result) > 0) {
    while ($res = mysqli_fetch_array($result)) {
        $id = $res['id'];
?>
        <tr>
            <td><?= $res['usdot']; ?></td>
            <td><?= $res['company_name']; ?></td>
            <td><?= $res['stname']; ?></td>
            <td><?= $res['ciname']; ?></td>
            <td><a href="../model/template.php?usdot=<?= $res['usdot']; ?>" target="_blank" class="btn btn-primary">Download Report</a></td>
            <td class="text-center"><a href="../admin/admin_model/admin_select_operation.php?id=<?php echo $id; ?>&function=delete" class="text-danger"><i class="fas fa-trash-alt"></a></i></td>
        </tr>

<?php }
}
else{
    echo "<tr><td colspan='10' align='center'>No companies added yet..</td></tr>";
} ?>