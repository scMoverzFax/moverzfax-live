<html>

<head>
    <title>Moverz Link Collections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

    <div class="bg_container">
        <div class="wrapper_container">

            <div class="row">
                <div class="reportCard">
                    <a href="https://moverzfax.com">Moverzfax.com</a>
                    <h1 id="reportCard">Report Card</h1>
                    <p>This reputation data report is for 15 days to customers.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="image">
                        <img src="logo.png" id="logo">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="disclaimer">
                        <p id="disclamer">
                        <h2>DISCLAIMER</h2>
                        Information contained in this Report Card is factual and is based on real data gathered from reputable sites and government agencies. The GRADE presented is computed based on the data gathered on the exact date this report was generated. Thus, the links provided may no longer be updated if the current date is too far from the date this report was generated. Therefore, we advise you to login to your MoverZfax.com account and re-run the report to get the latest facts and information about this company.<br><br>
                        A link is provided in every section to verify the validity of the report presented.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- <form action="links_report.inc.php" method="POST" class="form-group"> -->
                    <div class="company-details">
                        <h3>COMPANY NAME <input type="text" name="name" placeholder="Company Name"></h3>
                        <span id="address"> ADDRESS <input type="text" name="address" placeholder="Company Address"></span>
                        <span>Wesbiste <input type="text" name="website" placeholder="Company Website"></span>
                        <table id="company-details">
                            <tr>
                                <td id="header">Contact Number</td>
                                <td id="head"><input type="tel" name="contact_number" placeholder="Contact Number"></td>
                            </tr>
                            <tr>
                                <td id="header">Contact Person</td>
                                <td id="head"><input type="text" name="contact_person" placeholder="Contact Person"></td>
                            </tr>
                            <tr>
                                <td id="header">Fax</td>
                                <td id="head"><input type="tel" name="fax" placeholder="Fax Number"></td>
                            </tr>
                            <tr>
                                <td id="header">USDOT#</td>
                                <td id="head"><input type="number" name="usdot" placeholder="USDOT#"></td>
                            </tr>
                            <tr>
                                <td id="header">MC#</td>
                                <td id="head"><input type="number" name="mc" placeholder="MC#"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- New  LEGAL INFORMATION-->
            <div class="row border my-5">
                <h3 class="text-center border">LEGAL INFORMATION</h3>
                <div class="col-md-12 border">
                    <label for="">ARE THEY STATE REGISTERED?</label>
                    <p>Make sure that your company is State registered. Click on detail below and type company name to determine it registration.</p>
                    <p><a href="http://sdat.resiusa.org/ucc-charter/Pages/CharterSearch/default.aspx">Check Details</a></p>
                    <label>Please check a radio (Yes/No)</label>
                    <input type="radio" name="stateregistered" id="stateregistered" value="Yes"> <label for="">Yes</label>
                    <input type="radio" name="stateregistered" id="stateregistered" value="No">  <label for="">No</label>
                </div>
                <div class="col-md-12 border">
                    <label for="">ARE THEY FEDERAL REGISTERED?</label>
                    <p>This company is federal registered</p>
                    <p><a href="https://ai.fmcsa.dot.gov/hhg/search.asp">Check Details</a></p>
                    <label>Please check a radio (Yes/No)</label>
                    <input type="radio" name="federalregistered" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="federalregistered" id="stateregistered" value="No"> No
                </div>
                <div class="col-md-12 border">
                    <label for="">LICENSING AND INFORMATION</label>
                    <p>This company is federal registered</p>
                    <p><a href="#">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="licesingandinformation" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="licesingandinformation" id="stateregistered" value="No"> No

                </div>
            </div>

            <!-- <div class="row">
                <div class="legalInfo">
                    <h2>LEGAL INFORMATION</h2>
                    <div class="header"> -->

                        <!-- <div class="legal"> -->
                            <!-- <div class="legal_info_img"><img src="legalinformation.png"></div> -->
                            <!-- <style> -->
                                <!-- .legal_info_img {
                                    float: left
                                } -->
                            <!-- </style> -->

                            <!-- <div class="inner">
                                <b>ARE THEY STATE REGISTERED?</b>

                                <p>
                                    Make sure that your company is State registered. Click on detail
                                    below and type company name to determine it registration.
                                    <br><br>
                                    Check <a href="http://sdat.resiusa.org/ucc-charter/Pages/CharterSearch/default.aspx">Details</a>
                                    <br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="stateregistered" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="stateregistered" id="stateregistered" value="No"> No
                                </p>
                            </div> -->
                        <!-- </div> -->

                        <!-- <div class="federal">
                            <div class="legal_info_img"><b>ARE THEY FEDERAL <br> REGISTERED?</b></div>
                            <div class="inner">
                                This company is federal registered
                                <br><br>
                                Check <a href="https://ai.fmcsa.dot.gov/hhg/search.asp">Details</a>
                                <br>
                                <span>Please check a radio (Yes/No)</span>
                                <input type="radio" name="federalregistered" id="stateregistered" value="Yes"> Yes
                                <input type="radio" name="federalregistered" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div> -->

                       <!-- <div class="licensing"> -->
                            <!-- <style>
                                .licensing {
                                    background-color: #fff;
                                    width: 100%;
                                    height: 90px;
                                    text-align: center;
                                    height: 150px;
                                    box-shadow: 5px 10px #888888;
                                    border-radius: 5px;
                                    border: green solid 1px;
                                    margin-left: 2px;
                                    margin-top: 20px;
                                }
                            </style> -->

                            <!-- <div class="legal_info_img"><b>LICENSING <br> AND INFORMATION</b></div> -->

                            <!-- <p> -->
                                <!-- This company is federal registered
                                <br><br> -->
                                <!-- Didnt find the link -->
                                <!-- Check <a href="#">Details</a>
                                <br><br>
                                <span>Please check a radio (Yes/No)</span>
                                <input type="radio" name="licesingandinformation" id="stateregistered" value="Yes"> Yes
                                <input type="radio" name="licesingandinformation" id="stateregistered" value="No"> No -->
                            <!-- </p> -->

                        <!-- </div>   -->

                    <!-- </div>
                </div>
            </div> -->

            <!-- New  MOVING ASSOCIATIONS-->
            <div class="row border my-5">
                <h3 class="text-center border">MOVING ASSOCIATIONS</h3>
                <div class="col-md-12 border">
                    <label for="">MEMBER OF BETTER BUSINESS BUREAU?</label>
                    <p>Is this compan a member of BBB?</p>
                    <p><a href="https://bbb.org">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="bbbregistered" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="bbbregistered" id="stateregistered" value="No"> No
                </div>
                <div class="col-md-12 border">
                    <label for="">MEMBER OF AMERICAN MOVING AND STORAGE ASSOCIATION?</label>
                    <p>Is this compamy a member of american moving and association?</p>
                    <p><a href="http://www.moving.org/">Check Details</a></p>
                    <label>Please check a radio (Yes/No)</label>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="americanmovingassiciation" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="americanmovingassiciation" id="stateregistered" value="No"> No
                </div>
                <div class="col-md-12 border">
                    <label for="">MEMBER OF HHGFFAA (Household Good Forwarders of America?)</label>
                    <p>Is this compamy a member of HHGFFAA ?</p>
                    <p><a href="http://www.moving.org/">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="hhgffaa" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="hhgffaa" id="stateregistered" value="No"> No

                </div>
            </div>

            <!-- <div class="row">
                <h2>MOVING ASSOCIATIONS</h2>
                <div class="movingAssociations">

                    <div class="header">
                        <div class="member_of_bbb">
                            <style>
                                .legal_info_img {
                                    float: left;
                                    margin: 40px;
                                }
                            </style>
                            <div class="legal_info_img"><img src="aplus.PNG" alt=""></div>
                            <div class="inner">
                                <p>
                                    <br>
                                <h5>MEMBER OF BETTER BUSINESS BUREAU?</h5>
                                Is this compan a member of BBB?
                                <br><br>
                                Didnt find the link
                                Check <a href="https://bbb.org">Details</a>
                                <br><br>
                                <span>Please check a radio (Yes/No)</span>
                                <input type="radio" name="bbbregistered" id="stateregistered" value="Yes"> Yes
                                <input type="radio" name="bbbregistered" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div>
                        <div class="member_of_amca">
                            <div class="legal_info_img">
                                <h5>MEMBER OF <br> AMERICAN MOVING <BR> AND STORAGE <br> ASSOCIATION?</h5>
                            </div>
                            <div class="inner">
                                <p>
                                    Is this compamy a member of american moving and association?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.moving.org/">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="americanmovingassiciation" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="americanmovingassiciation" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <div class="member_of_hhgffa">
                            <div class="legal_info_img">
                                <h5>
                                    <h5>MEMBER OF HHGFFAA <BR> (Household Good <br> Forwarders of America?)</BR></h5>
                            </div>
                            <div class="inner">
                                <p>
                                    Is this compamy a member of HHGFFAA ?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.moving.org/">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="hhgffaa" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="hhgffaa" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->

            <!-- New  SCAM ALERT PORTAL-->
            <div class="row border my-5">
                <h3 class="text-center border">SCAM ALERT PORTAL</h3>
                <div class="col-md-12 border">
                    <label for="">PRESENT ON RIPOFF REPORT</label>
                    <p>Is this compamy present on Ripoff Report ?</p>
                    <p><a href="http://www.ripoffreport.com/">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="ripoff" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="ripoff" id="stateregistered" value="No"> No
                </div>
                <div class="col-md-12 border">
                    <label for="">PRESENT ON RIPOFF REPORT</label>
                    <p>Is this compamy blacklisted on moving scam?</p>
                    <p><a href="#">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="movingscam" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="movingscam" id="stateregistered" value="No"> No
                </div>
            </div>

            <!-- <div class="row">
                <h2>SCAM ALERT PORTAL</h2>
                <div class="scamAlert">

                    <div class="header">
                        <style>
                            .scam-alerts,
                            .present-on-moverzfax,
                            .present-on-yelp,
                            .present-on-kudzu,
                            .present-on-review-a-mover,
                            .present-on-mover-epinion,
                            .angies-list,
                            .transport-reports {
                                float: left;
                                text-align: left;
                                width: 49%;
                                height: 150px;
                                box-shadow: 5px 10px #888888;
                                border-radius: 5px;
                                border: green solid 1px;
                                margin-left: 2px;
                                margin-top: 20px;

                            }

                            select {
                                float: right;
                                width: 67%;
                                height: 20px;
                                border: 1px solid #000;
                            }
                        </style>
                        <div class="scam-alerts">
                            <div class="legal_info_img">
                                <h5>PRESENT ON RIPOFF REPORT</BR></h5>
                            </div>
                            <div class="inner">
                                <p>
                                    Is this compamy present on Ripoff Report ?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.ripoffreport.com/">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="ripoff" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="ripoff" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div>
                        <div class="moving-scam">
                            <style>
                                .moving-scam,
                                .present-on-my-moving-reviews,
                                .present-on-insider-pages,
                                .present-on-mover-reviews,
                                .present-on-mover-search-and-reviews,
                                .present-on-transport-reviews,
                                .moving-gaurdian,
                                .movers-reviewed {
                                    float: right;
                                    text-align: left;
                                    width: 49%;
                                    height: 150px;
                                    box-shadow: 5px 10px #888888;
                                    border-radius: 5px;
                                    border: green solid 1px;
                                    margin-left: 2px;
                                    margin-top: 20px;
                                }
                            </style>
                            <div class="legal_info_img">
                                <h5>PRESENT ON RIPOFF REPORT</BR></h5>
                            </div>
                            <div class="inner">
                                <p>
                                    Is this compamy blacklisted on moving scam?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="#">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="movingscam" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="movingscam" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->

            <!-- New  RECOMMENDED PORTALSL-->
            <div class="row border my-5">
                <h3 class="text-center border">RECOMMENDED PORTALS</h3>
                <div class="col-md-6 border">
                    <label for="">PRESENT ON MOVERZFAX</label>
                    <p>Is this compamy present on moverzfax?</p>
                    <p><a href="https://www.moverzfax.com/mover-get-detail/proace-moving-and-storage-llc-7963">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="moverzfax" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="moverzfax" id="stateregistered" value="No"> No
                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON MY MOVING REVIEWS</label>
                    <p>Is this compamy present on my moving reviews?</p>
                    <p><a href="http://www.moverreviews.com/company/ProAce-Moving-and-Storage-LLC.asp">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="moverzfax" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="moverzfax" id="stateregistered" value="No"> No
                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON YELP</label>
                    <p>Is this compamy present on YELP?</p>
                    <p<a href="http://www.yelp.com/dc">Check Details</a></p>
                        <span>Please check a radio (Yes/No)</span>
                        <input type="radio" name="yelp" id="stateregistered" value="Yes"> Yes
                        <input type="radio" name="yelp" id="stateregistered" value="No"> No
                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON INSIDER PAGES</label>
                    <p>Is this compamy present on insider pages?</p>
                    <p><a href="http://www.yelp.com/dc">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="yelp" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="yelp" id="stateregistered" value="No"> No
                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON KUDZU</label>
                    <p>s this company rated out of 5 at KUDZU?</p>
                    <p><a href="http://www.kudzu.com/m/ProAce-International-Moving-and-Storage-16671090">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="kudzu" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="kudzu" id="stateregistered" value="No"> No
                    <span>Rate out of 5</span> <br>
                    <select name="kudzurating" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON MOVER REVIEWS</label>
                    <p>Is this company rated out of 5 at mover reviews?</p>
                    <p><a href="http://www.moverreviews.com/company/ProAce-Moving-and-Storage-LLC.asp">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="moverreviews" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="moverreviews" id="stateregistered" value="No"> No
                    <span>Rate out of 5</span> <br>
                    <select name="moverreview" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON REVIEW A MOVER </label>
                    <p>Is this company rated out of 5 at mover reviews?</p>
                    <p><a href="http://www.moverreviews.com/company/ProAce-Moving-and-Storage-LLC.asp">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="review_a_mover" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="review_a_mover" id="stateregistered" value="No"> No
                    <span>Rate out of 5</span> <br>
                    <select name="moverreview" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON MOVER SEARCH AND REVIEW</label>
                    <p>Is this company rated out of 5 at MOVER SEARCH AND REVIEWS?</p>
                    <p><a href="http://www.moverssearchandreviews.com/ProAce-Movers-LLC-Reviews">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="mover_search_and_review" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="mover_search_and_review" id="stateregistered" value="No"> No
                    <span>Rate out of 5</span> <br>
                    <select name="mover_search_review_rating" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON MOVER EPINIONS</label>
                    <p>Is this company listed on Epinions?</p>
                    <p><a href="#">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="epinions" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="epinions" id="stateregistered" value="No"> No

                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON TRANSPORT REVIEWS</label>
                    <p>Is this company listed at transport reviews?</p>
                    <p><a href="http://transportreviews.com/">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                            <input type="radio" name="transport_reviews" id="stateregistered" value="Yes"> Yes
                            <input type="radio" name="transport_reviews" id="stateregistered" value="No"> No
                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON ANGIE'S LIST</label>
                    <p>Is this company rated out of 5 at Angie's List?</p>
                    <p><a href="http://www.angieslist.com/">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="angies_list" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="angies_list" id="stateregistered" value="No"> No
                    <span>Rate out of 5</span> <br>
                    <select name="angies_list_rating" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON MOVING GAURDIAN</label>
                    <p>Is this company rated out of 5 at moving guardian?</p>
                    <p><a href="http://movingguardian.org/moving-review-website/moving-reviews/Pro-Ace-Intl-Moving-Storage">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="moving_guardian" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="moving_guardian" id="stateregistered" value="No"> No
                    <span>Rate out of 5</span> <br>
                    <select name="moving_guardian_rating" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON TRANSPORT REPORTS</label>
                    <p>Is this company listed at transport reports?</p>
                    <p><a href="http://transportreports.com/">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="transport_reports" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="transport_reports" id="stateregistered" value="No"> No

                </div>

                <div class="col-md-6 border">
                    <label for="">PRESENT ON MOVERS REVIEWED</label>
                    <p>Is this company rated out of 5 at movers reviewed?</p>
                    <p><a href="http://www.moversreviewed.com/reviews/300183/proace-moving-and-storage-llc">Check Details</a></p>
                    <span>Please check a radio (Yes/No)</span>
                    <input type="radio" name="mover_reviewed" id="stateregistered" value="Yes"> Yes
                    <input type="radio" name="mover_reviewed" id="stateregistered" value="No"> No
                    <span>Rate out of 5</span> <br>
                    <select name="mover_reviewed_rating" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>

            <!-- <div class="row">
                <h2> RECOMMENDED PORTALS</h2>
                <div class="recommenadedportals">
                    <div class="header">
                        <div class="present-on-moverzfax">
                            <div class="legal_info_img">
                                <h5>PRESENT ON MOVERZFAX</h5>
                            </div>
                            <div class="inner">
                                <p>
                                    Is this compamy present on moverzfax?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="https://www.moverzfax.com/mover-get-detail/proace-moving-and-storage-llc-7963">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="moverzfax" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="moverzfax" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div>

                        <div class="present-on-my-moving-reviews">
                            <div class="legal_info_img">
                                <h5>PRESENT ON MY MOVING REVIEWS</h5>
                            </div>
                            <div class="inner">
                                <p>
                                    Is this compamy present on my moving reviews?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.moverreviews.com/company/ProAce-Moving-and-Storage-LLC.asp">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="moverzfax" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="moverzfax" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div>

                        <div class="present-on-yelp">
                            <div class="legal_info_img">
                                <h5>PRESENT ON YELP</h5>
                            </div>
                            <div class="inner">
                                <p>
                                    Is this compamy present on YELP?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.yelp.com/dc">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="yelp" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="yelp" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div>

                        <div class="present-on-insider-pages">
                            <div class="legal_info_img">
                                <h5>PRESENT ON INSIDER PAGES </h5>
                            </div>
                            <div class="inner">
                                <p>
                                    Is this compamy present on insider pages?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.yelp.com/dc">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="yelp" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="yelp" id="stateregistered" value="No"> No
                                </p>
                            </div>
                        </div>

                        <div class="present-on-kudzu">
                            <div class="legal_info_img">
                                <h5>PRESENT ON KUDZU </h5>
                            </div>
                            <div class="inner">
                                <p>
                                    Is this company rated out of 5 at KUDZU?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.kudzu.com/m/ProAce-International-Moving-and-Storage-16671090">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="kudzu" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="kudzu" id="stateregistered" value="No"> No
                                    <br>
                                    <span>Rate out of 5</span> <br>
                                    <select name="kudzurating" id="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </p>
                            </div>
                        </div>

                        <div class="present-on-mover-reviews">
                            <div class="legal_info_img">
                                <h5>
                                    <h5>PRESENT ON MOVER REVIEWS </h5>
                            </div>
                            <style>

                            </style>
                            <div class="inner">
                                Is this company rated out of 5 at mover reviews?
                                <br><br>
                                <p>
                                    Didnt find the link
                                    Check <a href="http://www.moverreviews.com/company/ProAce-Moving-and-Storage-LLC.asp">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="moverreviews" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="moverreviews" id="stateregistered" value="No"> No
                                    <br>
                                    <span>Rate out of 5</span> <br>
                                    <select name="moverreview" id="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </p>
                            </div>
                        </div>

                        <div class="present-on-review-a-mover">
                            <div class="legal_info_img">
                                <h5>PRESENT ON REVIEW A MOVER </h5>
                            </div>
                            <style>

                            </style>
                            <div class="inner">
                                Is this company rated out of 5 at mover reviews?
                                <br><br>
                                <p>
                                    Didnt find the link
                                    Check <a href="http://www.moverreviews.com/company/ProAce-Moving-and-Storage-LLC.asp">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="review_a_mover" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="review_a_mover" id="stateregistered" value="No"> No
                                    <br>
                                    <span>Rate out of 5</span> <br>
                                    <select name="moverreview" id="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </p>
                            </div>
                        </div>

                        <div class="present-on-mover-search-and-reviews">
                            <div class="legal_info_img">
                                <h5>PRESENT ON MOVER <br> SEARCH AND REVIEW </h5>
                            </div>
                            <style>

                            </style>
                            <div class="inner">
                                <p>
                                    Is this company rated out of 5 at MOVER SEARCH AND REVIEWS?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.moverssearchandreviews.com/ProAce-Movers-LLC-Reviews">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="mover_search_and_review" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="mover_search_and_review" id="stateregistered" value="No"> No
                                    <br>
                                    <span>Rate out of 5</span> <br>
                                    <select name="mover_search_review_rating" id="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </p>
                            </div>
                        </div>

                        <div class="present-on-mover-epinion">
                            <div class="legal_info_img">
                                <h5>PRESENT ON MOVER EPINIONS </h5>
                            </div>
                            <style>

                            </style>
                            <div class="inner">
                                <p>
                                    Is this company listed on Epinions?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="#">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="epinions" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="epinions" id="stateregistered" value="No"> No
                                    <br>
                                </p>
                            </div>
                        </div>

                        <div class="present-on-transport-reviews">
                            <div class="legal_info_img">
                                <h5>PRESENT ON TRANSPORT REVIEWS </h5>
                            </div>
                            <style>

                            </style>
                            <div class="inner">
                                <p>
                                    Is this company listed at transport reviews?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://transportreviews.com/">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="transport_reviews" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="transport_reviews" id="stateregistered" value="No"> No
                                    <br>
                                </p>
                            </div>
                        </div>

                        <div class="angies-list">
                            <div class="legal_info_img">
                                <h5>PRESENT ON ANGIE'S LIST </h5>
                            </div>
                            <style>

                            </style>
                            <div class="inner">
                                <p>
                                    Is this company rated out of 5 at Angie's List?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.angieslist.com/">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="angies_list" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="angies_list" id="stateregistered" value="No"> No
                                    <br>
                                    <span>Rate out of 5</span> <br>
                                    <select name="angies_list_rating" id="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </p>
                            </div>
                        </div>

                        <div class="moving-gaurdian">
                            <div class="legal_info_img">
                                <h5>PRESENT ON MOVING GAURDIAN </h5>
                            </div>
                            <style>

                            </style>
                            <div class="inner">
                                <p>
                                    Is this company rated out of 5 at moving guardian?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://movingguardian.org/moving-review-website/moving-reviews/Pro-Ace-Intl-Moving-Storage">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="moving_guardian" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="moving_guardian" id="stateregistered" value="No"> No
                                    <br>
                                    <span>Rate out of 5</span> <br>
                                    <select name="moving_guardian_rating" id="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </p>
                            </div>
                        </div>

                        <div class="transport-reports">
                            <div class="legal_info_img">
                                <h5>PRESENT ON TRANSPORT REPORTS </h5>
                            </div>
                            <style>

                            </style>
                            <div class="inner">
                                <p>
                                    Is this company listed at transport reports?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://transportreports.com/">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="transport_reports" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="transport_reports" id="stateregistered" value="No"> No
                                    <br>
                                </p>
                            </div>
                        </div>

                        <div class="transport-reports">
                            <div class="legal_info_img">
                                <h5>PRESENT ON MOVERS REVIEWED </h5>
                            </div>
                            <style>

                            </style>
                            <div class="inner">
                                <p>
                                    Is this company rated out of 5 at movers reviewed?
                                    <br><br>
                                    Didnt find the link
                                    Check <a href="http://www.moversreviewed.com/reviews/300183/proace-moving-and-storage-llc">Details</a>
                                    <br><br>
                                    <span>Please check a radio (Yes/No)</span>
                                    <input type="radio" name="mover_reviewed" id="stateregistered" value="Yes"> Yes
                                    <input type="radio" name="mover_reviewed" id="stateregistered" value="No"> No
                                    <br>
                                    <span>Rate out of 5</span> <br>
                                    <select name="mover_reviewed_rating" id="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->

        </div>
        <style>

        </style>
        <div class="submit_information">
            <input type="submit" name="submit" value="Add Information" id="submit">
        </div>
    </div>

    <!-- </form> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>