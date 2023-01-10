<?php 

include '../model/connection.php';
$scoresArray = array();

    //calculating and adding all scores from mover
    $sql = "SELECT usdot FROM mover ";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
		while ($rows = mysqli_fetch_assoc($result)) {
            if($rows['usdot']){
                $search = $rows['usdot'];
                $sql2 = "SELECT state_registration_listed, state_registration_link, safer_listed, safer_link,fmcsa_listed, safer_link,fmcsa_listed, fmcsa_link, bbb_listed,bbb_link,amsa_listed,amsa_link,hhgfaa_listed,hhgfaa_link,ripoffreport_listed,ripoffreport_link,movingscam_listed,movingscam_link,mymovingreviews_rating,mymovingreviews_link,yelp_rating,yelp_link,insiderpages_rating,insiderpages_link,kudzu_rating,kudzu_link,kudzu_rate,moversreviewed_rating,moversreviewed_link,reviewamover_rating,reviewamover_link,moverssearchandreviews_rating,moverssearchandreviews_link,angies_rating,angies_link,transportreviews_rating,transportreviews_link,transportreports_rating,transportreports_link,movingguardian_rating,movingguardian_link 
				FROM mover WHERE usdot = '" . $search . "';";

				$result2 = mysqli_query($con, $sql2);
				$resultCheck2 = mysqli_num_rows($result2);

				if ($resultCheck2 > 0) {
					while ($rows2 = mysqli_fetch_assoc($result2)) {
						// State registered
						$state_registration_listed = $rows2['state_registration_listed'];
						$state_registration_link = $rows2['state_registration_link'];

						// Federal registration 
						$safer_listed = $rows2['safer_listed'];
						$safer_link = $rows2['safer_link'];

						// licensing and inforamtion
						$fmcsa_listed = $rows2['fmcsa_listed'];
						$fmcsa_link = $rows2['fmcsa_link'];

						// MOVING ASSOCIATION
						// member of bbb
						$bbb_listed = $rows2['bbb_listed'];
						$bbb_link = $rows2['bbb_link'];

						// member of american moving and storage association
						$amsa_listed = $rows2['amsa_listed'];
						$amsa_link = $rows2['amsa_link'];

						// MEMBER OF HHGFFAA (Household Good Forwarders of America)?
						$hhgfaa_listed = $rows2['hhgfaa_listed'];
						$hhgfaa_link = $rows2['hhgfaa_link'];

						// Scam Alert Portal 
						// PRESENT ON RIPOFF REPORT? 
						$ripoffreport_listed = $rows2['ripoffreport_listed'];
						$ripoffreport_link = $rows2['ripoffreport_link'];

						// BLACKLISTED ON MOVING SCAM? 
						$movingscam_listed = $rows2['movingscam_listed'];
						$movingscam_link = $rows2['movingscam_link'];

						// Recommendation Portal
						// PRESENT ON MOVERZFAX?
						//IT WILL HAVE TO BE SELECTED FROM OUR DATABASE

						// PRESENT ON MY MOVING REVIEWS?
						$mymovingreviews_rating = $rows2['mymovingreviews_rating'];
						$mymovingreviews_link = $rows2['mymovingreviews_link'];

						// PRESENT ON YELP?
						$yelp_rating = $rows2['yelp_rating'];
						$yelp_link = $rows2['yelp_link'];

						//PRESENT ON INSIDER PAGES?
						$insiderpages_rating = $rows2['insiderpages_rating'];
						$insiderpages_link = $rows2['insiderpages_link'];

						// PRESENT ON MOVER REVIEWS?
						$moversreviewed_rating = $rows2['moversreviewed_rating'];
						$moversreviewed_link = $rows2['moversreviewed_link'];

						// PRESENT ON ANGIE'S LIST? 
						$angies_rating = $rows2['angies_rating'];
						$angies_link = $rows2['angies_link'];

						// PRESENT ON TRANSPORT REVIEWS? 
						$transportreviews_rating = $rows2['transportreviews_rating'];
						$transportreviews_link = $rows2['transportreviews_link'];

					}
				} else {
					echo "No data found " . $conn->error;
				}
									//ARE THEY STATE REGISTERED?
											if (!empty($state_registration_listed) && isset($state_registration_listed)) {
												$pointers_logo = 10;
											} else {
												$pointers_logo = 0;
											}
									//ARE THEY FEDERALLY REGISTERED?
												if ($safer_listed == "YES") {
													$pointers_registerd = 10;
												} else {
													$pointers_registerd = 0;
												}
									//DO THEY HAVE A PUBLIC LICENSE?
												if ($fmcsa_listed == "YES") {
													$pointers_licensing = 10;
												} else if ($fmcsa_listed == "NO") {
													$pointers_licensing = 0;
												}
									//MEMBER OF BETTER BUSINESS BUREAU?
												//$bbb_listed = '<img src="http://www.moverzfax.com/images/bbbicons/cbbb-accred-a.png">';
												$listing_value = substr($bbb_listed, 63, -6);

												if ($listing_value == 'a-plus' || $listing_value == 'a') {
													$points = 45;
												} else if ($listing_value == 'b-plus' || $listing_value == 'b') {
													$points = 35;
												} else if ($listing_value == 'c-plus' || $listing_value == 'c') {
													$points = 25;
												} else if ($listing_value == 'd-plus' || $listing_value == 'd' || $listing_value == 'e' || $listing_value == 'f') {
													$points = 15;
												} else {
													$points = 5;
												}
								//MEMBER OF MSC/PROMOVER?
												if ($amsa_listed == "YES") {
													$pointers_assosiation = 10;
												} else {
													$pointers_assosiation = 0;
												}
								//MEMBER OF HHGFFAA (Household Good Forwarders of America)?
												if ($hhgfaa_listed == "YES") {
													$pointers_member = 5;
												} else {
													$pointers_member = 0;
												}
								//PRESENT ON MOVERZFAX?

									//PRESENT ON GOOGLE?
									//PRESENT ON MY MOVING REVIEWS?
												$star_rating1 = substr($mymovingreviews_rating, 48, -11);
												if (!empty($star_rating1) && isset($star_rating1)) {
													$star_rating1 = $star_rating1;
												} else {
													$star_rating1 = 0;
												}
									//PRESENT ON YELP?
												$star_rating2 = substr($yelp_rating, 48, -11);
												if (!empty($star_rating2) && isset($star_rating2)) {
													$star_rating2 = $star_rating2;
												} else {
													$star_rating2 = 0;
												}
									//PRESENT ON INSIDER PAGES?
												$star_rating3 = substr($insiderpages_rating, 48, -11);
												if (!empty($star_rating3) && isset($star_rating3)) {
													$star_rating3 = $star_rating3;
												} else {
													$star_rating3 = 0;
												}
									//PRESENT ON MOVER REVIEWS?
												$star_rating5 = substr($moversreviewed_rating, 48, -11);
												if (!empty($star_rating5) && isset($star_rating5)) {
													$star_rating5 = $star_rating5;
												} else {
													$star_rating5 = 0;
												}
									//PRESENT ON TRANSPORT REVIEWS?
												$star_rating9 = substr($transportreviews_rating, 48, -11);
												if (!empty($star_rating9) && isset($star_rating9)) {
													$star_rating9 = $star_rating9;
												} else {
													$star_rating9 = 0;
												}
									//PRESENT ON ANGIES LIST?
												$star_rating10 = substr($angies_rating, 48, -11);
												if (!empty($star_rating10) && isset($star_rating10)) {
													$star_rating10 = $star_rating10;
												} else {
													$star_rating10 = 0;
												}
									//PRESENT ON TRUST PILOT?

									
						//Legal section
						$Legal_section = $pointers_logo + $pointers_registerd + $pointers_licensing;

						//Moving Association section percentage
						$Moving_Association_section = $points + $pointers_assosiation + $pointers_member;

						// stars total
						$total_star = $star_rating1 + $star_rating2 + $star_rating3 + $star_rating5 + $star_rating9 + $star_rating10;

						// Overall Percentage (out of 120 total points)
						$Overall_Percentage = (($Legal_section + $Moving_Association_section + $total_star) / 120) * 100;

                        $num = $Overall_Percentage;
                        
                        
                        //apply curve logic
						switch ($num) {
							case $num > 67:
								$result23 = $num + 13;
								break;
							case $num <= 67 && $num > 60:
								$result23 = $num + 14;
								break;
							case $num <= 60 && $num > 53.5:
								$result23 = $num + 15;
								break;
							case $num <= 53.5 && $num > 47:
								$result23 = $num + 16;
								break;
							case $num <= 47 && $num > 40:
								$result23 = $num + 17;
								break;
							case $num <= 40 && $num > 33:
								$result23 = $num + 18;
								break;
							case $num <= 33 && $num > 27:
								$result23 = $num + 19;
								break;
							case $num <= 27 && $num > 20:
								$result23 = $num + 20;
								break;
							default:
								$result23 = $num;
						}

						$Overall_Percentage = $result23;

                        array_push($scoresArray, $Overall_Percentage);

                        // if($Overall_Percentage > 74){
                        //     echo $search . ' scored a ' . $Overall_Percentage . '<br/>';
                        // }

            }
        }
    } else {
        echo "No data found " . $conn->error;
    }

    //calculating and adding all scores from mover_register
    $sql2 = "SELECT usdot FROM mover_register ";
	$result2 = mysqli_query($con, $sql2);
	$resultCheck2 = mysqli_num_rows($result2);
    if ($resultCheck2 > 0) {
		while ($rows2 = mysqli_fetch_assoc($result2)) {
            if($rows2['usdot']){
                //get the movers information from the mover_register table
                $search = $rows2['usdot'];
                // LEGAL INFORMATION
                $sql = "SELECT 
                                state_link,
                                federal_link,
                            --  public_link,

                                bbb_link,
                                bbb_grade,
                                msc_link,
                                hhgfaa_link,

                                ripoff_link,
                                moving_scam_link,

                                google_link,
                                google_stars,
                                mover_reviews_link,
                                mover_reviews_stars,
                                yelp_link,
                                yelp_stars,
                                insider_pages_link,
                                insider_pages_stars,
                                mover_reviews_link,
                                mover_reviews_stars,
                                transport_reviews_link,
                                transport_reviews_stars,
                                angies_link,
                                angies_stars,
                                trust_pilot_link,
                                trust_pilot_stars
                        FROM mover_register WHERE usdot = '" . $search . "';";

                $result = mysqli_query($con, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($rows = mysqli_fetch_assoc($result)) {

                        //Legal Information
                        $state_link = $rows['state_link'];
                        $federal_link = $rows['federal_link'];
                        //$licensing_and_information_link = $rows['public_link'];

                        //Moving Associations
                        $bbb_link = $rows['bbb_link'];
                        $bbb_grade = $rows['bbb_grade'];
                        $msc_link = $rows['msc_link'];
                        $hgfaa_link = $rows['hhgfaa_link'];

                        //Scam Alert Portal
                        $ripoff_link = $rows['ripoff_link'];
                        $moving_scam_link = $rows['moving_scam_link'];

                        //Recommended Portals
                        $google_link = $rows['google_link'];
                        $google_stars = $rows['google_stars'];
                        $mover_reviews_link = $rows['mover_reviews_link'];
                        $mover_reviews_stars = $rows['mover_reviews_stars'];
                        $yelp_link = $rows['yelp_link'];
                        $yelp_stars = $rows['yelp_stars'];
                        $insider_pages_link = $rows['insider_pages_link'];
                        $insider_pages_stars = $rows['insider_pages_stars'];
                        $moverreviews_link = $rows['mover_reviews_link'];
                        $moverreviews_stars = $rows['mover_reviews_stars'];
                        $transport_reviews_link = $rows['transport_reviews_link'];
                        $transport_reviews_stars = $rows['transport_reviews_stars'];
                        $angies_link = $rows['angies_link'];
                        $angies_stars = $rows['angies_stars'];
                        $trust_pilot_link = $rows['trust_pilot_link'];
                        $trust_pilot_stars = $rows['trust_pilot_stars'];
                    }
                } else {
                    echo "No data found " . $conn->error;
                }
                        //ARE THEY STATE REGISTERED?
                                if ($state_link) {
                                    $state_points = 10;
                                } else {
                                    $state_points = 0;
                                }
                        //ARE THEY FEDERALLY REGISTERED? HTML Link
                                    if ($federal_link) {
                                        $federal_points = 10;
                                    } else {
                                        $federal_points = 0;
                                    }
                        //DO THEY HAVE A PUBLIC LICENSE?
                                    // if ($state_link) {
                                    // 	echo "<strong style ='color: green'>YES</strong>";
                                    // } else {
                                    // 	echo "<strong style ='color: red'>NO</strong>";
                                    // }
                        //MEMBER OF BETTER BUSINESS BUREAU?
                                    $bbb_points = 0;
                                    switch ($bbb_grade) {
                                        case 'A+':
                                        case 'a+':
                                        case '+A':
                                        case '+a':
                                            $bbb_grade = "A+";
                                            $bbb_points = 8;
                                            break;
                                        case 'A':
                                        case 'a':
                                            $bbb_grade = "A";
                                            $bbb_points = 7;
                                            break;
                                        case 'A-':
                                        case 'a-':
                                        case '-A':
                                        case '-a':
                                            $bbb_grade = "A-";
                                            $bbb_points = 6;
                                            break;
                                        case 'B+':
                                        case 'b+':
                                        case '+B':
                                        case '+b':
                                            $bbb_grade = "B+";
                                            $bbb_points = 5;
                                            break;
                                        case 'B':
                                        case 'b':
                                            $bbb_grade = "B";
                                            $bbb_points = 4;
                                            break;
                                        case 'B-':
                                        case 'b-':
                                        case '-B':
                                        case '-b':
                                            $bbb_grade = "B-";
                                            $bbb_points = 3;
                                            break;
                                        case 'C+':
                                        case 'c+':
                                        case '+C':
                                        case '+c':
                                            $bbb_grade = "C+";
                                            $bbb_points = 2;
                                            break;
                                        case 'C':
                                        case 'c':
                                            $bbb_grade = "C";
                                            $bbb_points = 1;
                                            break;
                                        case 'C-':
                                        case 'c-':
                                        case '-C':
                                        case '-c':
                                            $bbb_grade = "C-";
                                            $bbb_points = 1;
                                            break;
                                    }
                        //MEMBER OF PROMOVER?
                                    if ($msc_link) {
                                        $msc_points = 1;
                                    } else {
                                        $msc_points = 0;
                                    }
                        //MEMBER OF HHGFFAA (Household Good Forwarders of America)?
                                    if ($hgfaa_link) {
                                        $hgfaa_points = 1;
                                    } else {
                                        $hgfaa_points = 0;
                                    }
                        //PRESENT ON RIPOFF REPORT?
                                    if ($ripoff_link) {
                                        $ripoff_points = 0;
                                    } else {
                                        $ripoff_points = 5;
                                    }
                        //BLACKLISTED ON MOVING SCAM?
                                    if ($moving_scam_link) {
                                        $moving_scam_points = 0;
                                    } else {
                                        $moving_scam_points = 5;
                                    }
                        //PRESENT ON MOVERZFAX?-->

                        //PRESENT ON GOOGLE?
                                    if ($google_link) {
                                        $google_points = $google_stars * 2;
                                    } else {
                                        $google_points = 0;
                                    }
                        //PRESENT ON MY MOVING REVIEWS?
                                    if ($mover_reviews_link) {
                                        $my_moving_points = $mover_reviews_stars * 2;
                                    } else {
                                        $my_moving_points = 0;
                                    }
                        //PRESENT ON YELP?
                                    if ($yelp_link) {
                                        $yelp_points = $yelp_stars * 2;
                                    } else {
                                        $yelp_points = 0;
                                    }
                        //PRESENT ON INSIDER PAGES?
                                    if ($insider_pages_link) {
                                        $insider_pages_points = $insider_pages_stars * 2;
                                    } else {
                                        $insider_pages_points = 0;
                                    }
                        //PRESENT ON MOVER REVIEWS?
                                    if ($moverreviews_link) {
                                        $mover_reviews_points = $moverreviews_stars * 2;
                                    } else {
                                        $mover_reviews_points = 0;
                                    }
                        //PRESENT ON TRANSPORT REVIEWS?
                                    if ($transport_reviews_link) {
                                        $transport_reviews_points = $transport_reviews_stars * 2;
                                    } else {
                                        $transport_reviews_points = 0;
                                    }
                        //PRESENT ON ANGIES LIST?
                                    if ($angies_link) {
                                        $angies_points = $angies_stars * 2;
                                    } else {
                                        $angies_points = 0;
                                    }
                        //PRESENT ON TRUST PILOT?
                                    if ($trust_pilot_link) {
                                        $trust_pilot_points = $trust_pilot_stars * 2;
                                    } else {
                                        $trust_pilot_points = 0;
                                    }
                        //Legal section
                        $Legal_section = $state_points + $federal_points;
                        //Moving Association section percentage
                        $Moving_Association_section = $bbb_points + $msc_points + $hgfaa_points;
                        //Scam Section
                        $Scam_Alert_section = $ripoff_points + $moving_scam_points;
                        //Reviews Portal
                        $Reviews_section = $google_points + $my_moving_points + $yelp_points + $insider_pages_points + $mover_reviews_points + $transport_reviews_points + $angies_points + $trust_pilot_points;
                        // Overall Percentage
                        $Overall_Percentage = (($Legal_section + $Moving_Association_section + $Scam_Alert_section + $Reviews_section) / 110) * 100;
                        array_push($scoresArray, $Overall_Percentage);
                        // if($Overall_Percentage > 70){
                        //     echo 'this usdot scored 79: ' . $rows2['usdot'];
                        // }
            }
        }
    } else {
        echo "No data found " . $conn->error;
    }
// rsort($scoresArray);
// echo '<pre>'; print_r($scoresArray); echo '</pre>';

function Stand_Deviation($arr)
    {
        $num_of_elements = count($arr);
          
        $variance = 0.0;
          
                // calculating mean using array_sum() method
        $average = array_sum($arr)/$num_of_elements;
          
        foreach($arr as $i)
        {
            // sum of squares of differences between 
                        // all numbers and means.
            $variance += pow(($i - $average), 2);
        }

        echo "The average is " . $average . "<br>";
          
        return (float)sqrt($variance/$num_of_elements);
    }

    print_r(Stand_Deviation($scoresArray));

?>