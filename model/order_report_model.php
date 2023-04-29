<!--  File no longer in use. basically the same as my_order_model so we will use it instead. -->
<tbody>
    <?php
    include 'connection.php';
    $sr_no = 1;
    $sql = "SELECT * FROM mover_cart WHERE is_selected=1 AND user_id = '".$user_id."' ";
    $result = $con->query($sql);
        if(mysqli_num_rows($result) > 0){ 
            while($res = mysqli_fetch_array($result)){
            $usdot = $res['usdot'];
    ?>
    <tr>
        <td><?= $sr_no; ?></td>
        <td><?= $res['company_name']; ?></td>
        <td><?= $usdot; ?></td>
        <td class="text-center"><a href="../model/template.php?usdot=<?php echo $usdot; ?>" target="_blank" class="btn text-light font-weight-bold" style="background-color:green">Check And Download Report</a></td>
    </tr>
    <?php $sr_no++; } } ?>
</tbody> 