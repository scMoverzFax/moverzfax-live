<tbody>
<?php
include '../model/connection.php';
$limit = 15;
$page = isset($_GET['page'])?$_GET['page'] : "1";
$offset = ($page - 1) * $limit;

$sr_no = ($page * $limit) - ($limit - 1);

$sql = "SELECT cr.*,st.name AS user_state ,ci.name AS user_city FROM `customer_register` AS cr 
        LEFT JOIN `state` AS st ON st.code = cr.states 
        LEFT JOIN `city` AS ci ON ci.id = cr.city
        ORDER BY id ASC LIMIT {$offset} , {$limit} "; 
$result = mysqli_query($con , $sql);
if(mysqli_num_rows($result) > 0){
    while($res = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $sr_no; ?></td>
            <td><?= $res['first_name']; ?></td>
            <td><?= $res['last_name']; ?></td>
            <td><?= $res['contact_number']; ?></td>
            <td><?= $res['email']; ?></td>
            <td><?= $res['country']; ?></td>
            <td><?= $res['user_state']; ?></td>
            <td><?= $res['user_city']; ?></td>
            <td><?= $res['zip_code']; ?></td>
            <td><a href="admin_model/admin_operation.php?action=delete_user&id=<?= $res['id']; ?>"><i class="fas fa-trash-alt text-danger"></i></a></td>
            <?php if($res['is_active'] == 1) { ?>
            <td><a href="admin_model/admin_operation.php?action=block_user&id=<?= $res['id']; ?>"><i class="fas fa-ban text-dark"></i></a></td>
            <?php } else { ?>
            <td><a href="admin_model/admin_operation.php?action=unblock_user&id=<?= $res['id']; ?>"><i class="fas fa-undo text-dark"></i></a></td>
            <?php } ?>
        </tr>
    <?php $sr_no++; } } ?>
    </tbody>
</table>
<?php 
$sql1 = "SELECT * FROM customer_register";
$result1 = mysqli_query($con, $sql1);

if(mysqli_num_rows($result1) > 0){
    $total_recods = mysqli_num_rows($result1);
 
    $total_pages = ceil($total_recods / $limit);
    echo '<ul class="pagination">';
    if($page > 1){
        echo '<li class="page-item"><a href="admin_cs_user.php?page='.($page - 1).'">Prev</a></li>';
    }
    
    for($i = 1;$i <= $total_pages; $i++){
        if($i == $page){
            $active = "active";
        }
        else{
            $active = "";
        }
        echo '<li class="page-item '.$active.'"><a class="page-link" href="admin_cs_user.php?page='.$i.'">'.$i.'</a></li>';
    }
    if($total_pages > $page){
        echo '<li class="page-item"><a href="admin_cs_user.php?page='.($page + 1).'">Next</a></li>';
    }
    
    echo '</ul>';
}
else{
    echo "<div><h3 class='text-center'>Sorry No Record Found!</h3></div>";
}
?>






