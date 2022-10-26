<tbody>
    <?php
    include 'connection.php';
    $sr_no = 1;
    $sql = "SELECT * FROM mover_cart WHERE is_selected=1";
    $result = $con->query($sql);
        if(mysqli_num_rows($result) > 0){ 
            while($res = mysqli_fetch_array($result)){
            $usdot = $res['usdot'];
    ?>
    <tr>
        <td><?= $sr_no; ?></td>
        <td><?= $res['company_name']; ?></td>
        <td><?= $usdot; ?></td>
        <td class="text-center"><a href="../template.php?usdot=<?php echo $usdot; ?>" target="_blank" class="btn text-light font-weight-bold" style="background-color:green">Check And Download Report</a></td>
    </tr>
    <?php $sr_no++; } } ?>
</tbody>