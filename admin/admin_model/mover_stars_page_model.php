<style>
.text-danger:hover {
    cursor: pointer;
}
</style>
<?php 
function linkDisplay($siteName, $linkName, $starsValue, $starsName){
    $id = $_GET['id'];
        // (!$linkName) ? ($linkName = 'n/a') : ($linkName = $linkName);
        // (!$starsName) ? ($starsName = 'n/a') : ($starsName = $starsName);
	?>
	<tr>
        <td><?= $siteName ?></td>
        <td><a href=<?= $linkName ?> target="_blank"><?= $linkName ?></a></td>
        <td class="text-center">
            <input type="number" step="any" value=<?= $starsValue ? $starsValue : '' ?> name=<?php echo $starsName ?> class="form-control"/>
        </td>
	</tr>
	<?php
}
?>

<tbody>

<?php
    include '../model/connection.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM `mover_register` WHERE id = '".$id."'";
    $result = mysqli_query($con , $sql);
    if(mysqli_num_rows($result) > 0){
        while($res = mysqli_fetch_assoc($result)) {
            // linkDisplay('BBB', $res['bbb_link'], $res['bbb_grade'], 'bbb_grade');
            ?>
            <tr>
                <td>BBB</td>
                <td><a href=<?= $res['bbb_link'] ?> target="_blank"><?= $res['bbb_link'] ?></a></td>
                <td class="text-center">
                    <input type="text" value="<?php echo $res['bbb_grade']; ?>" name='bbb_grade' class="form-control"/>
                </td>
            </tr>
            <?php

            linkDisplay('Google My Business', $res['google_link'], $res['google_stars'], 'google_stars');
            linkDisplay('My Moving Reviews', $res['my_moving_reviews_link'], $res['moving_reviews_stars'], 'moving_reviews_stars');
            linkDisplay('Yelp', $res['yelp_link'], $res['yelp_stars'], 'yelp_stars');
            linkDisplay('Insider Pages', $res['insider_pages_link'], $res['insider_pages_stars'], 'insider_pages_stars');
            linkDisplay('Mover Reviews', $res['mover_reviews_link'], $res['mover_reviews_stars'], 'mover_reviews_stars');
            linkDisplay('Transport Reviews', $res['transport_reviews_link'], $res['transport_reviews_stars'], 'transport_reviews_stars');
            linkDisplay('Angies List', $res['angies_link'], $res['angies_stars'], 'angie_stars');
            linkDisplay('Trust Pilot', $res['trust_pilot_link'], $res['trust_pilot_stars'], 'trust_pilot_stars');
        }
    } 
?>

</tbody>