<style>
.text-danger:hover {
    cursor: pointer;
}
</style>
<?php 
function linkDisplay($siteName, $linkName, $starsName, $flagName, $flagValue){
    $id = $_GET['id'];
        // (!$linkName) ? ($linkName = 'n/a') : ($linkName = $linkName);
        // (!$starsName) ? ($starsName = 'n/a') : ($starsName = $starsName);
	?>
	<tr>
        <td><?= $siteName ?></td>
        <td><a href=<?= $linkName ?> target="_blank"><?= $linkName ?></a></td>
        <td class="text-center"><?= $starsName ?></td>
        <?php if($flagValue == 1) { ?>
        <td class="text-center">
            <input class="form-check-input" type="checkbox" value="" id="flagThisLink" checked
                onclick='window.location.assign("admin_model/admin_operation.php?action=flag_link&val=1&flag=<?php echo $flagName ?>&id=<?php echo $id ?>")'/>
        </td>
        <?php } else { ?>
        <td class="text-center">
            <input class="form-check-input" type="checkbox" value="" id="flagThisLink"
                onclick='window.location.assign("admin_model/admin_operation.php?action=flag_link&val=0&flag=<?php echo $flagName ?>&id=<?php echo $id ?>")'/>
        </td>
        <?php } ?>
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
        echo linkDisplay('State Registration', $res['state_link'], '', 'state_flag', $res['state_flag']);
        linkDisplay('Federal Registration', $res['federal_link'], '', 'federal_flag', $res['federal_flag']);

        linkDisplay('BBB', $res['bbb_link'], $res['bbb_grade'], 'bbb_flag', $res['bbb_flag']);
        linkDisplay('ProMover', $res['msc_link'], '', 'msc_flag', $res['msc_flag']);
        linkDisplay('HHGFFAA', $res['hhgfaa_link'], '', 'hhgfaa_flag', $res['hhgfaa_flag']);

        linkDisplay('Ripoff Report', $res['ripoff_link'], '', 'ripoff_flag', $res['ripoff_flag']);
        linkDisplay('Moving Scam', $res['moving_scam_link'], '', 'moving_scam_flag', $res['moving_scam_flag']);

        linkDisplay('Google My Business', $res['google_link'], $res['google_stars'], 'google_flag', $res['google_flag']);
        linkDisplay('My Moving Reviews', $res['my_moving_reviews_link'], $res['moving_reviews_stars'], 'my_moving_reviews_flag', $res['my_moving_reviews_flag']);
        linkDisplay('Yelp', $res['yelp_link'], $res['yelp_stars'], 'yelp_flag', $res['yelp_flag']);
        linkDisplay('Insider Pages', $res['insider_pages_link'], $res['insider_pages_stars'], 'insider_pages_flag', $res['insider_pages_flag']);
        linkDisplay('Mover Reviews', $res['mover_reviews_link'], $res['mover_reviews_stars'], 'mover_reviews_flag', $res['mover_reviews_flag']);
        linkDisplay('Transport Reviews', $res['transport_reviews_link'], $res['transport_reviews_stars'], 'transport_reviews_flag', $res['transport_reviews_flag']);
        linkDisplay('Angies List', $res['angies_link'], $res['angies_stars'], 'angies_flag', $res['angies_flag']);
        linkDisplay('Trust Pilot', $res['trust_pilot_link'], $res['trust_pilot_stars'], 'trust_pilot_flag', $res['trust_pilot_flag']);
    }
    } ?>
    </tbody>
</table>