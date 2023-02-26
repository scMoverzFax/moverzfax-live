<tbody>
                    <?php
                    $usdotArray = array();
                    $a = array("10$","Free","3$","2$","1$"); 
                    $i = 0;
                    $numberOfReports = 0;
                    include "connection.php";
                    $sql = "SELECT mo.*,ci.name as ciname,st.name as stname FROM mover_cart AS mo
                            LEFT JOIN `city` as ci ON  ci.id = mo.city_id
                            LEFT JOIN `state` as st ON st.id = mo.state_id WHERE is_selected=1 AND mo.user_id = '".$user_id."' ";
                    // echo $sql; die(); 
                    $result = $con->query($sql);
                    if(mysqli_num_rows($result) > 0){ 
                        while($res = mysqli_fetch_array($result)){
                            array_push($usdotArray, $res['usdot']);
                            $numberOfReports++;
                    ?>
                        <tr>
                            <td><?= $res['company_name']; ?></td>
                            <td><?= $res['usdot']; ?></td>
                            <td><?= $res['stname']; ?></td>
                            <td><?= $res['ciname']; ?></td>
                            <td><?= $res['zipcode']; ?></td>
                            <td class="text-center"><?= $a[$i] ;?></td>
                        </tr>
                        
                   
                    <?php $i++; } } 
                    switch ($i){
                        case 1:
                            $total = 10;
                            break;
                        case 2:
                            $total = 10;
                            break;
                        case 3:
                            $total = 13;
                            break;
                        case 4:
                            $total = 15;
                            break;
                        case 5:
                            $total = 16;
                            break;
                    }
                    ?>
                    <tr >
                        <td colspan="4" class="font-weight-bold">Total</td>
                        <td class="text-center font-weight-bold" colspan="2" style="background:#FF4500;color:white"><?= $total;  ?>$</td>
                    </tr>
                    </tbody>