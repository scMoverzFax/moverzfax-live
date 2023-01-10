<style>
.text-danger:hover {
    cursor: pointer;
}
</style>
<?php 
function linkDisplay($siteName, $linkName, $starsName){
    $id = $_GET['id'];
        // (!$linkName) ? ($linkName = 'n/a') : ($linkName = $linkName);
        // (!$starsName) ? ($starsName = 'n/a') : ($starsName = $starsName);
	?>
	<tr>
        <td><?= $siteName ?></td>
        <td><a href=<?= $linkName ?> target="_blank"><?= $linkName ?></a></td>
        <td class="text-center"><?= $starsName ?></td>
        <td class="text-center">
            <input class="form-check-input" type="checkbox" value="" id="flagThisLink" 
                onclick='window.location.assign("admin_model/admin_operation.php?action=flag_link&val=0&link=<?php echo $linkName ?>&id=<?php echo $id ?>")'/>
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
        echo linkDisplay('State Registration', $res['state_link'], '');
        linkDisplay('Federal Registration', $res['federal_link'], '');

        linkDisplay('BBB', $res['bbb_link'], $res['bbb_grade']);
        linkDisplay('ProMover', $res['msc_link'], '');
        linkDisplay('HHGFFAA', $res['hhgfaa_link'], '');

        linkDisplay('Ripoff Report', $res['ripoff_link'], '');
        linkDisplay('Moving Scam', $res['moving_scam_link'], '');

        linkDisplay('Google My Business', $res['google_link'], $res['google_stars']);
        linkDisplay('My Moving Reviews', $res['my_moving_reviews_link'], $res['moving_reviews_stars']);
        linkDisplay('Yelp', $res['yelp_link'], $res['yelp_stars']);
        linkDisplay('Insider Pages', $res['insider_pages_link'], $res['insider_pages_stars']);
        linkDisplay('Mover Reviews', $res['mover_reviews_link'], $res['mover_reviews_stars']);
        linkDisplay('Transport Reviews', $res['transport_reviews_link'], $res['transport_reviews_stars']);
        linkDisplay('Angies List', $res['angies_link'], $res['angies_stars']);
        linkDisplay('Trust Pilot', $res['trust_pilot_link'], $res['trust_pilot_stars']);
    }
    } ?>
    </tbody>
</table>