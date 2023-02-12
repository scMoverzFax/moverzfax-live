    <tbody>
<?php
include '../model/connection.php';
$limit = 15;
$page = isset($_GET['page'])?$_GET['page'] : "1";
$offset = ($page - 1) * $limit;


$sr_no = ($page * $limit) - ($limit - 1);

$sql = "SELECT * FROM payment ORDER BY id DESC LIMIT {$offset} , {$limit} ";
$result = mysqli_query($con , $sql);
if(mysqli_num_rows($result) > 0){
    while($res = mysqli_fetch_assoc($result)) { ?> 
        <tr>
            <td><?= $sr_no; ?></td>
            <td><?= $res['tr_full_name']; ?></td>
            <td><?= $res['tr_id']; ?></td>
            <td><?= $res['tr_amount']; ?></td>
            <td><?= $res['tr_email_address']; ?></td>
            <td><?= $res['tr_status']; ?></td>
            <td><?= $res['tr_currency_code']; ?></td>
            <td><?= $res['tr_country_code']; ?></td>
            <td><?= $res['tr_payer_id']; ?></td>
            <td><?= $res['tr_create_time']; ?></td>
        </tr>
    <?php $sr_no++; } } ?>
    </tbody>
</table>
<?php 
$sql1 = "SELECT * FROM payment";
$result1 = mysqli_query($con, $sql1);

if(mysqli_num_rows($result1) > 0){
    $total_recods = mysqli_num_rows($result1);
 
    $total_pages = ceil($total_recods / $limit);
    echo '<ul class="pagination">';
    if($page > 1){
        echo '<li class="page-item"><a href="admin_cs_transaction.php?page='.($page - 1).'">Prev</a></li>';
    }
    
    for($i = 1;$i <= $total_pages; $i++){
        if($i == $page){
            $active = "active";
        }
        else{
            $active = "";
        }
        echo '<li class="page-item '.$active.'"><a class="page-link" href="admin_cs_transaction.php?page='.$i.'">'.$i.'</a></li>';
    }
    if($total_pages > $page){
        echo '<li class="page-item"><a href="admin_cs_transaction.php?page='.($page + 1).'">Next</a></li>';
    }
    
    echo '</ul>';
}
else{
    echo "<div><h3 class='text-center'>Sorry No Record Found!</h3></div>";
}
?>






