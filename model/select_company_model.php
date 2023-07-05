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
            <td><input type="checkbox" id="<?php echo $res['id']; ?>" name="usdot_number" onclick="update_checkbox(<?php echo $res['id']; ?>);" <?php if ($res['is_selected'] == 1) { echo "checked";} ?>></td>
            <td><?= $res['company_name']; ?></td>
            <td><?= $res['usdot']; ?></td>
            <td class="d-none d-md-table-cell"><?= $res['company_url']; ?></td>
            <td class="d-none d-md-table-cell"><?= $res['stname']; ?></td>
            <td class="d-none d-md-table-cell"><?= $res['ciname']; ?></td>
            <td class="d-none d-md-table-cell"><?= $res['zipcode']; ?></td>
            <td class="d-none d-md-table-cell"><?= $res['phone']; ?></td>
            <td class="d-none d-md-table-cell"><?= $res['contact_person']; ?></td>
            <td class="text-center"><a href="../model/select_operation.php?id=<?php echo $id; ?>&function=delete" class="text-danger"><i class="fas fa-trash-alt"></a></i></td>
        </tr>

<?php }
}
else{
    echo "<tr><td colspan='10' align='center'>No companies added yet..</td></tr>";
} ?>