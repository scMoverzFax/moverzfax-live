<?php //include "../home/myheader.php"; ?>
<html>
    <head>
        <title>Moverz Link Collections</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="mlcstyle.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="in-container">
                <!-- <div class="reportCard">
                    <p>
                        <br><br>
                        <a href="https://moverzfax.com">Moverzfax.com</a>
                        <br><br><br><br><br><br><br>
                        <h1 id="reportCard">Report Card</h1>
                        <br><br><br><br><br><br><br>
                        <p>This reputation data report is <br><br><br><br>
                            for 15 days to customers.
                        </p>
                    </p>
                </div>
                <div class="image"> 
                    <img src="../img/logo.png" id="logo">
                </div><br><br><br><br><br><br> -->
                <style>
                    .business-validility{
                        text-align: center;
                        color: skyblue;
                    }
                    .star{
                        
                        font-size: 2rem;
                        color: green;
                        background-color: unset;
                        border: none;
                    }
                    .star_rating {
                        user-select: none; 
                    }
                    .star:hover{
                        cursor: pointer;
                    }
                </style>
                <div class="business-validility">
                    <h1> <u>CLAIM YOUR BUSINESS VALIDILITY</u> </h1>
                </div>
                <div class="disclaimer">
                    <p id="disclamer">
                        <h2>DISCLAIMER</h2>
                        Information contained in this Report Card is factual and is based on real data gathered from reputable sites and government agencies. The GRADE presented is computed based on the data gathered on the exact date this report was generated. Thus, the links provided may no longer be updated if the current date is too far from the date this report was generated. Therefore, we advise you to login to your MoverZfax.com account and re-run the report to get the latest facts and information about this company.<br><br>
                        A link is provided in every section to verify the validity of the report presented. All information submitted here will be reviewed by the Moverzfax team for validity.
                    </p>
                </div>
                <!-- Form start -->
                <form action="../model/mover_links_model.php" method="post" enctype="multipart/form-data">
                    <div class="company-details">
                        <h2>COMPANY INFORMATION</h2>
                        <!-- <h3>COMPANY NAME <br> <input type="text" name="name" placeholder="Company Name"></h3>
                        <span id="address"> ADDRESS : <input type="text" name="address" placeholder="Company Address"></span><br>
                        <span>Website : <input type="text" name="website" placeholder="Company Website"> </span>
                        <br>
                        <br> -->
                        <table id="company-details">
                            <tr>
                                <td id="header">Company Name</td>
                                <td id="head"><input type="text" name="name" placeholder="Company Name"></td>
                            </tr>
                            <tr>
                                <td id="header">Address</td>
                                <td id="head"><input type="text" name="address" placeholder="Company Address"></td>
                            </tr>
                            <tr>
                                <td id="header">Website</td>
                                <td id="head"><input type="text" name="website" placeholder="Company Website"></td>
                            </tr>
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
                    <div class="legalInfo">
                        <h2>LEGAL INFORMATION</h2>
                        <div class="header">
                                <div class="legal">
                                    <!-- <div class="legal_info_img"><img src="legalinformation.png"></div> -->
                                    <style>
                                        .legal, .federal{
                                            height: 100%;
                                        }
                                        .legal_info_img{
                                        float: left
                                        }
                                    </style>
                                    <!-- <td> -->
                                    <div class="inner" style="height: 100%;">
                                        <br>
                                        <b><u>ARE THEY STATE REGISTERED?</u></b>  
                                        
                                        <p>
                                            Make sure that your company is State registered. Review the link below to confirm.
                                            <br>
                                            Check <a href="http://sdat.resiusa.org/ucc-charter/Pages/CharterSearch/default.aspx" target="_blank">Details</a>
                                            <br><br>
                                            <style>
                                                #link{
                                                    width: 95%;
                                                    height: 10px;
                                                    padding: 15px;
                                                    border-radius: 0px;
                                                    border: 1px solid green;
                                                }
                                            </style>
                                            <span>Paste the link to your company's state registration if applicable.</span>
                                            <input type="text" id="link"name="state_registration_link" placeholder="State Registration Link">
                                            <br>
                                            <br>

                                        </p>
                                    </div>
                                </div>
                                <div class="federal">
                                    <!-- <div class="legal_info_img"></div> -->
                                    <div class="inner" style="margin-left: 10px;">
                                        <br>
                                        <b><u>ARE THEY FEDERALLY REGISTERED?</u></b> 
                                        <p>
                                            Make sure that your company is Federally registered. Review the link below to confirm.
                                            <br>
                                            Check <a href="https://ai.fmcsa.dot.gov/hhg/search.asp">Details</a>
                                            <br><br>
                                            <style>
                                                #link{
                                                    width: 95%;
                                                    height: 10px;
                                                    padding: 15px;
                                                    border-radius: 0px;
                                                    border: 1px solid green;
                                                }
                                                /* .paste-link{
                                                    margin-left:80px;
                                                } */
                                            </style>
                                            <!-- <div class="paste-link"> -->
                                            <span>Paste the link to your company's federal registration if applicable.</span>
                                            <input type="text" id="link"name="federal_registration_link" placeholder="Federal Registration Link">
                                                <!-- Check <a href="http://sdat.resiusa.org/ucc-charter/Pages/CharterSearch/default.aspx">Details</a> -->
                                                
                                            <!-- </div> -->
                                            <br>
                                            <br>

                                        </p>
                                    </div>
                                </div>
                                <div class="licensing">
                                    <style>
                                        .licensing{
                                            background-color: #fff; 
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            /* height: 200px; */
                                            box-shadow: 5px 10px #888888;
                                            border-radius: 5px;
                                            border: green solid 1px;
                                            margin-left: 2px;
                                            margin-top: 20px;
                                        }
                                    </style>
                                    <div class="legal_info_img"> </div>
                                    <p>
                                        <b><u>LICENSING  AND INFORMATION</u></b>
                                        <br>
                                        DO THEY HAVE A PUBLIC LICENSE?
                                        <br>
                                        Check <a href="#">Details</a>
                                        <br>
                                        <style>
                                            #link{
                                                width: 95%;
                                                height: 10px;
                                                padding: 15px;
                                                border-radius: 0px;
                                                border: 1px solid green;
                                            }
                                            .paste-link{
                                                margin-left:80px;
                                            }
                                        </style>
                                        <div class="paste-link">
                                            <span>Paste the link to your company's public liscense if applicable.</span>
                                            <input required type="text" id="link" name="licensing_and_information" placeholder="Licesing and Infomation Link"><br>
                                            <!-- Didnt find the link -->
                                            <br>
                                            
                                        </div>
                                    </p>                            
                                </div>
                            <!-- </table> -->
                        </div>
                        <br>
                        <h2>MOVING ASSOCIATIONS</h2>
                        <div class="movingAssociations">
                            <div class="header">
                                <div class="member_of_bbb">
                                    <style>
                                        .legal_info_img{
                                            float: left;
                                            margin: 40px;
                                            
                                        }
                                        .member_of_bbb, .member_of_amca, .member_of_hhgffa{
                                            height: 100%;
                                        }
                                    </style>
                                    <div class="legal_info_img"><img src="aplus.PNG" alt=""></div>
                                    <div class="inner" style="height: 100%;">
                                        <p>
                                            <br>
                                            <h5><u>MEMBER OF BETTER BUSINESS BUREAU?</u> </h5>
                                            Is this company a member of BBB?
                                            <br>
                                            <style>
                                                #link{
                                                    width: 95%;
                                                    height: 10px;
                                                    padding: 15px;
                                                    border-radius: 0px;
                                                    border: 1px solid green;
                                                }
                                                .paste-link{
                                                    margin-left:80px;
                                                }
                                            </style>
                                            <div class="paste-link">
                                                Check <a href="https://bbb.org">Details</a><br><br>
                                                <span> Paste the link to your company's BBB page if applicable.</span>
                                                <input type="text" id="link" name="member_of_bbb" placeholder="Memeber of BBB Link">
                                                <br><br>
                                                <div class="star_rating">
                                                    <span> What is your star rating on BBB? <input name="bbb_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.00" />
                                                </div>
                                            </div>
                                            <br>
                                            
                                        </p>
                                    </div>
                                </div>
                                <div class="member_of_amca">
                                    <div class="legal_info_img"></div>
                                    <div class="inner">
                                        <p>
                                        <h5><u>MEMBER OF  AMERICAN MOVING  AND STORAGE  ASSOCIATION?</u> </h5><br>
                                            
                                            <!-- Didnt find the link -->
                                            <style>
                                                #link{
                                                    width: 95%;
                                                    height: 10px;
                                                    padding: 15px;
                                                    border-radius: 0px;
                                                    border: 1px solid green;
                                                }
                                                .paste-link{
                                                    margin-left:80px;
                                                }
                                            </style>
                                            <div class="paste-link">
                                                Is this compamy a member of american moving and storage association?
                                                <br>
                                                Check <a href="http://www.moving.org/">Details</a><br><br>
                                                <span> Paste the link to your company's AMSA membership if applicable.</span><br>
                                                <input type="text" id="link" name="member_of_amca" placeholder="Memeber of American Moving associations Link"><br>
                                                <!-- Didnt find the link -->
                                                <br>
                                                
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="member_of_hhgffa">
                                    <div class="legal_info_img"></div>
                                    <div class="inner">
                                        <p>
                                            <h5> <u>MEMBER OF HHGFFAA  (Household Good  Forwarders of America?)</u></h5><br>
                                            Is this compamy a member of HHGFFAA ?
                                            <br><br>
                                            <style>
                                                #link{
                                                    width: 95%;
                                                    height: 10px;
                                                    padding: 15px;
                                                    border-radius: 0px;
                                                    border: 1px solid green;
                                                }
                                                .paste-link{
                                                    margin-left:80px;
                                                }
                                            </style>
                                            <div class="paste-link">
                                                Check <a href="http://www.moving.org/">Details</a><br><br>
                                                <span>Paste the link to your HHGFFAA page if applicable.</span>
                                                <input type="text" id="link" name="member_of_hhgffaa" placeholder="Memeber of HHGFFAA Link"><br>
                                                <!-- Didnt find the link -->
                                                <br>
                                                
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <h2>SCAM ALERT PORTAL</h2>
                            <div class="scamAlert">
                                <div class="header">
                                    <style>
                                        .scam-alerts, .present-on-moverzfax, .present-on-yelp, .present-on-kudzu, .present-on-review-a-mover, .present-on-mover-epinion, .angies-list, .transport-reports{
                                            float: left;
                                            text-align: left;
                                            width: 49%;
                                            height: 100%;
                                            box-shadow: 5px 10px #888888;
                                            border-radius: 5px;
                                            border: green solid 1px;
                                            margin-left: 2px;
                                            margin-top: 20px;

                                        }
                                        select{
                                            float: right;
                                            width: 67%;
                                            height: 20px;
                                            border: 1px solid #000;
                                        }
                                    </style>
                                    <div class="scam-alerts">
                                        <div class="legal_info_img"></div>
                                        <div class="inner">
                                            <p>
                                                <h5> <u>PRESENT ON RIPOFF REPORT</u></h5>
                                                Is this compamy present on Ripoff Report ?
                                                <br><br>
                                                <span>Please check a radio (Yes/No)</span>
                                                <input type="radio" name="ripoff" id="stateregistered" value="Yes"> Yes
                                                <input type="radio" name="ripoff" id="stateregistered" value="No"> No
                                                <!-- Didnt find the link -->
                                                <style>
                                                #link{
                                                    width: 95%;
                                                    height: 10px;
                                                    padding: 15px;
                                                    border-radius: 0px;
                                                    border: 1px solid green;
                                                }
                                                .paste-link{
                                                    margin-left:80px;
                                                }
                                            </style>
                                            <div class="paste-link">
                                                <span> Paste a link <br> <input type="text" id="link" name="present_on_ripff_report" placeholder="Memeber of Rip-Off Link"> </span> <br>
                                                <!-- Didnt find the link -->
                                                <br>
                                                Check <a href="http://www.ripoffreport.com/">Details</a>
                                            </div>
                                                
                                                <br><br>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="moving-scam">
                                        <style>
                                            .moving-scam, .present-on-my-moving-reviews, .present-on-insider-pages, .present-on-mover-reviews, .present-on-mover-search-and-reviews, .present-on-transport-reviews, .moving-gaurdian, .movers-reviewed{
                                                float: right;
                                                text-align: left;
                                                width: 49%;
                                                height: 100%;
                                                box-shadow: 5px 10px #888888;
                                                border-radius: 5px;
                                                border: green solid 1px;
                                                margin-left: 2px;
                                                margin-top: 20px;
                                            }
                                        </style>
                                        <div class="legal_info_img"></div>
                                        <div class="inner">
                                            <p>
                                                <h5> <U>PRESENT ON MOVING SCAM</U></h5>
                                                Is this compamy blacklisted on moving scam?
                                                <br><br>
                                                <span>Please check a radio (Yes/No)</span>
                                                <input type="radio" name="movingscam" id="stateregistered" value="Yes"> Yes
                                                <input type="radio" name="movingscam" id="stateregistered" value="No"> No
                                                <!-- Didnt find the link -->
                                                <style>
                                                #link{
                                                    width: 95%;
                                                    height: 10px;
                                                    padding: 15px;
                                                    border-radius: 0px;
                                                    border: 1px solid green;
                                                }
                                                .paste-link{
                                                    margin-left:80px;
                                                }
                                            </style>
                                            <div class="paste-link">
                                                <span> Paste a link <br> <input type="text" id="link" name="present_on_moving_scam" placeholder="Memeber of Moving Scam Link"> </span> <br>
                                                <!-- Didnt find the link -->
                                                <br>
                                                Check <a href="#">Details</a>
                                            </div>
                                                
                                                <br><br>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <h2> RECOMMENDED PORTALS</h2>
                                <div class="recommenadedportals">
                                    <div class="header">
                                        <div class="present-on-moverzfax">
                                            <div class="legal_info_img"></div>
                                            <div class="inner">
                                                <p>
                                                    <h5> <u>PRESENT ON MOVERZFAX</u></h5>
                                                    Is this compamy present on moverzfax?
                                                    <br><br>
                                                    <span>Please check a radio (Yes/No)</span>
                                                    <input type="radio" name="moverzfax" id="stateregistered" value="Yes"> Yes
                                                    <input type="radio" name="moverzfax" id="stateregistered" value="No"> No
                                                    <!-- Didnt find the link -->
                                                    <style>
                                                        #link{
                                                            width: 95%;
                                                            height: 10px;
                                                            padding: 15px;
                                                            border-radius: 0px;
                                                            border: 1px solid green;
                                                        }
                                                        .paste-link{
                                                            margin-left:80px;
                                                        }
                                                    </style>
                                                    <div class="paste-link">
                                                        <span> Paste a link <br> <input type="text" id="link" name="present_on_moverzfax" placeholder="Moverzfax Link"> </span> <br>
                                                        <!-- Didnt find the link -->
                                                        <br>
                                                        Check <a href="http://www.moverzfax.com/mover-get-detail/proace-moving-and-storage-llc-7963">Details</a>
                                                    </div>
                                                    
                                                    <br><br>

                                                </p>
                                            </div>
                                        </div>
                                        <div class="present-on-my-moving-reviews">
                                            <div class="legal_info_img"></div>
                                            <div class="inner">
                                                <p>
                                                    <h5> <u>PRESENT ON MY MOVING REVIEWS</u></h5>
                                                    Is this compamy present on my moving reviews?
                                                    <br><br>
                                                    <!-- Didnt find the link -->
                                                    <span>Please check a radio (Yes/No)</span>
                                                    <input type="radio" name="mover_reviews" id="stateregistered" value="Yes"> Yes
                                                    <input type="radio" name="mover_reviews" id="stateregistered" value="No"> No
                                                    <style>
                                                        #link{
                                                            width: 95%;
                                                            height: 10px;
                                                            padding: 15px;
                                                            border-radius: 0px;
                                                            border: 1px solid green;
                                                        }
                                                        .paste-link{
                                                            margin-left:80px;
                                                        }
                                                    </style>
                                                    <div class="paste-link">
                                                        <span> Paste a link <br> <input type="text" id="link" name="present_on_moving_reviews" placeholder=" Mover Reviews Link"> </span> <br>
                                                        <!-- Didnt find the link -->
                                                        <br>
                                                        Check <a href="http://www.moverreviews.com/company/ProAce-Moving-and-Storage-LLC.asp">Details</a>  
                                                    </div>
                                                    <div class="star_rating">
                                                        <span> What is your star rating on this site? <input name="moving_reviews_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="present-on-yelp">
                                            <div class="legal_info_img"></div>
                                            <div class="inner">
                                                <p>
                                                    <h5> <u>PRESENT ON YELP</u></h5>
                                                    Is this compamy present on YELP?
                                                    <br><br>
                                                    <span>Please check a radio (Yes/No)</span>
                                                    <input type="radio" name="yelp" id="stateregistered" value="Yes"> Yes
                                                    <input type="radio" name="yelp" id="stateregistered" value="No"> No
                                                    <style>
                                                        #link{
                                                            width: 95%;
                                                            height: 10px;
                                                            padding: 15px;
                                                            border-radius: 0px;
                                                            border: 1px solid green;
                                                        }
                                                        .paste-link{
                                                            margin-left:80px;
                                                        }
                                                    </style>
                                                    <div class="paste-link">
                                                        <span> Paste a link <br> <input type="text" id="link" name="present_on_yelp" placeholder=" Yelp Link"> </span> <br>
                                                        <!-- Didnt find the link -->
                                                        <br>
                                                        Check <a href="http://www.yelp.com/dc">Details</a> 
                                                    </div>
                                                    <div class="star_rating">
                                                        <span> What is your star rating on this site? <input name="yelp_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="present-on-insider-pages">
                                            <div class="legal_info_img"></div>
                                            <div class="inner">
                                                <p>
                                                    <h5> <u>PRESENT ON INSIDER PAGES</u> </h5>
                                                    Is this compamy present on insider pages?
                                                    <br><br>
                                                    <!-- Didnt find the link -->
                                                    <span>Please check a radio (Yes/No)</span>
                                                    <input type="radio" name="insider_pages" id="stateregistered" value="Yes"> Yes
                                                    <input type="radio" name="insider_pages" id="stateregistered" value="No"> No

                                                    <style>
                                                        #link{
                                                            width: 95%;
                                                            height: 10px;
                                                            padding: 15px;
                                                            border-radius: 0px;
                                                            border: 1px solid green;
                                                        }
                                                        .paste-link{
                                                            margin-left:80px;
                                                        }
                                                    </style>
                                                    <div class="paste-link">
                                                        <span> Paste a link <br> <input type="text" id="link" name="present_on_insider_pages" placeholder=" Insider Pages Link"> </span> <br>
                                                        <!-- Didnt find the link -->
                                                        <br>
                                                        Check <a href="http://www.yelp.com/dc">Details</a>
                                                    </div>
                                                    <div class="star_rating">
                                                        <span> What is your star rating on this site? <input name="insider_pages_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="present-on-kudzu"> 
                                            <!-- <div class="legal_info_img"></div> -->
                                            <div class="inner">
                                                <style>
                                                    .present-on-kudzu{
                                                        text-align: justify;
                                                    }
                                                    .rated{
                                                        margin-left: 20px;
                                                    }
                                                </style>
                                                <div class="rated">
                                                    <p id="intent">
                                                        <h5> <u> PRESENT ON KUDZU</u> </h5> <br>
                                                        Is this company rated out of 5 at KUDZU?
                                                    
                                                        <!-- Didnt find the link -->
                                                    
                                                        <br>
                                                        <span>Please check a radio (Yes/No)</span>
                                                        <input type="radio" name="kudzu" id="stateregistered" value="Yes"> Yes
                                                        <input type="radio" name="kudzu" id="stateregistered" value="No"> No
                                                    
                                                        <div class="past-link">
                                                            <span> Paste a link <br> <input type="text" id="link" name="present_on_kudzu" placeholder=" Kudzu Link"> </span> <br>
                                                            <!-- Didnt find the link -->
                                                            <br>
                                                            Check <a href="http://www.kudzu.com/m/ProAce-International-Moving-and-Storage-16671090">Details</a>
                                                        </div>
                                                        <br>
                                                        <div class="star_rating">
                                                            <span> What is your star rating on this site? <input name="kudzu_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="present-on-mover-reviews">
                                            <!-- <div class="legal_info_img"></div> -->
                                            <style>
                                        
                                            </style>
                                            <div class="inner">
                                                    <div class="rated">
                                                        <h5> <u>PRESENT ON MOVER REVIEWS</u> </h5>
                                                        <br>
                                                        Is this company rated out of 5 at mover reviews?
                                                        <br>
                                                        <p>
                                                    
                                                            <span>Please check a radio (Yes/No)</span>
                                                            <input type="radio" name="moverreviews" id="stateregistered" value="Yes"> Yes
                                                            <input type="radio" name="moverreviews" id="stateregistered" value="No"> No
                                                            <br>
                                                            <div class="past-link">
                                                                <span> Paste a link <br> <input type="text" id="link" name="present_on_mover_reviews" placeholder=" Mover Reviews Link"> </span> <br>
                                                                <!-- Didnt find the link -->
                                                                <br>
                                                                Check <a href="http://www.moverreviews.com/company/ProAce-Moving-and-Storage-LLC.asp">Details</a>
                                                            </div>
                                                            <div class="star_rating">
                                                                <span> What is your star rating on this site? <input name="mover_reviews_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                            </div>
                                                        </p>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="present-on-review-a-mover">
                                            <!-- <div class="legal_info_img"></div> -->
                                            <style>
                                        
                                            </style>
                                            <div class="inner">
                                                <div class="rated">
                                                    <h5><u>PRESENT ON REVIEW A MOVER</u> </h5><br>
                                                    Is this company rated out of 5 at mover reviews?<br>
                                                    
                                                    <p>
                                                    
                                                        <span>Please check a radio (Yes/No)</span>
                                                        <input type="radio" name="review_a_mover" id="stateregistered" value="Yes"> Yes
                                                        <input type="radio" name="review_a_mover" id="stateregistered" value="No"> No
                                                        <br>
                                                        <div class="past-link">
                                                            <span> Paste a link <br> <input type="text" id="link" name="present_on_review_a_mover" placeholder=" Review a mover Link"> </span> <br>
                                                            <!-- Didnt find the link -->
                                                            <br>
                                                            Check <a href="http://www.moverreviews.com/company/ProAce-Moving-and-Storage-LLC.asp">Details</a>
                                                        </div>
                                                        <div class="star_rating">
                                                            <span> What is your star rating on this site? <input name="review_a_mover_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="present-on-mover-search-and-reviews">
                                            <!-- <div class="legal_info_img"></div> -->
                                            <style>
                                        
                                            </style>
                                            <div class="inner">
                                                <div class="rated">
                                                    <p>
                                                        <h5> <u>PRESENT ON MOVER SEARCH AND REVIEW</u> </h5> <br>
                                                        Is this company rated out of 5 at MOVER SEARCH AND REVIEWS?
                                                        <br>
                                                        <span>Please check a radio (Yes/No)</span>
                                                        <input type="radio" name="mover_search_and_review" id="stateregistered" value="Yes"> Yes
                                                        <input type="radio" name="mover_search_and_review" id="stateregistered" value="No"> No
                                                        <br>
                                                        <div class="past-link">
                                                            <span> Paste a link <br> <input type="text" id="link" name="present_on_mover_search_and_review" placeholder=" Mover Search And Reviews Link"> </span> <br>
                                                            <!-- Didnt find the link -->
                                                            <br>
                                                            Check <a href="http://www.moverssearchandreviews.com/ProAce-Movers-LLC-Reviews">Details</a>
                                                        </div>
                                                        <div class="star_rating">
                                                            <span> What is your star rating on this site? <input name="mover_search_and_reviews_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="present-on-mover-epinion">
                                            <div class="legal_info_img"></div>
                                            <style>
                                        
                                            </style>
                                            <div class="inner">
                                                <p>
                                                    <h5> <u>PRESENT ON MOVER EPINIONS</u> </h5>
                                                    Is this company listed on Epinions?
                                                    <br><br>
                                                    <!-- Didnt find the link -->
                                                    
                                                    
                                                    <span>Please check a radio (Yes/No)</span>
                                                    <input type="radio" name="epinions" id="stateregistered" value="Yes"> Yes
                                                    <input type="radio" name="epinions" id="stateregistered" value="No"> No
                                                    <br>
                                                    <style>
                                                        #link{
                                                            width: 95%;
                                                            height: 10px;
                                                            padding: 15px;
                                                            border-radius: 0px;
                                                            border: 1px solid green;
                                                        }
                                                        .paste-link{
                                                            margin-left:80px;
                                                        }
                                                    </style>
                                                    <div class="paste-link">
                                                        <span> Paste a link <br> <input type="text" id="link" name="present_on_movr_epinions" placeholder=" Mover Eepinions Link"> </span> <br>
                                                        <!-- Didnt find the link -->
                                                        <br>
                                                        Check <a href="#">Details</a>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="present-on-transport-reviews">
                                            <div class="legal_info_img"></div>
                                            <style>
                                        
                                            </style>
                                            <div class="inner">
                                                <p>
                                                <h5> <u>PRESENT ON TRANSPORT REVIEWS</u></h5>
                                                    Is this company listed at transport reviews?
                                                    <br><br>
                                                    <!-- Didnt find the link -->
                                                    
                                                    <span>Please check a radio (Yes/No)</span>
                                                    <input type="radio" name="transport_reviews" id="stateregistered" value="Yes"> Yes
                                                    <input type="radio" name="transport_reviews" id="stateregistered" value="No"> No
                                                    <br>
                                                    <style>
                                                        #link{
                                                            width: 95%;
                                                            height: 10px;
                                                            padding: 15px;
                                                            border-radius: 0px;
                                                            border: 1px solid green;
                                                        }
                                                        .paste-link{
                                                            margin-left:80px;
                                                        }
                                                    </style>
                                                    <div class="paste-link">
                                                        <span> Paste a link <br> <input type="text" id="link" name="present_on_transport_reviews" placeholder=" Transport Reviews Link"> </span> <br>
                                                        <!-- Didnt find the link -->
                                                        <br>
                                                        Check <a href="http://transportreviews.com/">Details</a>
                                                    </div>
                                                    <div class="star_rating">
                                                        <span> What is your star rating on this site? <input name="transport_reviews_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="angies-list">
                                            <!-- <div class="legal_info_img"></div> -->
                                            <style>
                                        
                                            </style>
                                            <div class="inner">
                                                <div class="rated">
                                                    <h5> <u>PRESENT ON ANGIE'S LIST</u> </h5><br>
                                                    <p>
                                                        Is this company rated out of 5 at Angie's List?
                                                        <br>
                                                        <span>Please check a radio (Yes/No)</span>
                                                        <input type="radio" name="angies_list" id="stateregistered" value="Yes"> Yes
                                                        <input type="radio" name="angies_list" id="stateregistered" value="No"> No
                                                        <br>
                                                        <div class="past-link">
                                                            <span> Paste a link <br> <input type="text" id="link" name="present_on_angies_list" placeholder=" Angie's List Link"> </span> <br>
                                                            <!-- Didnt find the link -->
                                                            <br>
                                                            Check <a href="http://www.angieslist.com/">Details</a>
                                                        </div>
                                                        <span>Rate out of 5</span> <br>
                                                        <div class="star_rating">
                                                            <button class="star" name="star1" value="1">&#9734;</button>
                                                            <button class="star" name="star2" value="2">&#9734;</button>
                                                            <button class="star" name="star3" value="3">&#9734;</button>
                                                            <button class="star" name="star4" value="4">&#9734;</button>
                                                            <button class="star" name="star4" value="5">&#9734;</button>
                                                                
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moving-gaurdian">
                                            <!-- <div class="legal_info_img"></div> -->
                                            <style>
                                        
                                            </style>
                                            <div class="inner">
                                                <div class="rated">
                                                    <p>
                                                        <h5><u>PRESENT ON MOVING GAURDIAN</u> </h5><br>
                                                        Is this company rated out of 5 at moving guardian?
                                                    
                                                        <br>
                                                        <span>Please check a radio (Yes/No)</span>
                                                        <input type="radio" name="moving_guardian" id="stateregistered" value="Yes"> Yes
                                                        <input type="radio" name="moving_guardian" id="stateregistered" value="No"> No
                                                        <br>
                                                        <div class="past-link">
                                                            <span> Paste a link <br> <input type="text" id="link" name="present_on_moving_guardian" placeholder=" Moving Gaurdian Link"> </span> <br>
                                                            <!-- Didnt find the link -->
                                                            <br>
                                                            Check <a href="http://movingguardian.org/moving-review-website/moving-reviews/Pro-Ace-Intl-Moving-Storage">Details</a>
                                                        </div>
                                                        <div class="star_rating">
                                                            <span> What is your star rating on this site? <input name="moving_guardian_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="transport-reports">
                                            <div class="legal_info_img"></div>
                                            <style>
                                        
                                            </style>
                                            <div class="inner">
                                                <p>
                                                <h5> <u>PRESENT ON TRANSPORT REPORTS</u> </h5>
                                                    Is this company listed at transport reports?
                                                    <br><br>
                                                    <!-- Didnt find the link -->
                                                    
                                                    <span>Please check a radio (Yes/No)</span>
                                                    <input type="radio" name="transport_reports" id="stateregistered" value="Yes"> Yes
                                                    <input type="radio" name="transport_reports" id="stateregistered" value="No"> No
                                                    <br>
                                                    <style>
                                                        #link{
                                                            width: 95%;
                                                            height: 10px;
                                                            padding: 15px;
                                                            border-radius: 0px;
                                                            border: 1px solid green;
                                                        }
                                                        .paste-link{
                                                            margin-left:80px;
                                                        }
                                                    </style>
                                                    <div class="paste-link">
                                                        <span> Paste a link <br> <input type="text" id="link" name="present_on_transport_reports" placeholder=" Transport Reports Link"> </span> <br>
                                                        <!-- Didnt find the link -->
                                                        <br>
                                                        Check <a href="http://transportreports.com/">Details</a>
                                                    </div>
                                                    <div class="star_rating">
                                                        <span> What is your star rating on this site? <input name="transport_reports_stars" type="number" pattern="\d+\.?\d?(?!\d)" placeholder="0.0" />
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="movers-reviewed">
                                            <!-- <div class="legal_info_img"></div> -->
                                            <style>
                                        
                                            </style>
                                            <div class="inner">
                                                <div class="rated">
                                                    <h5> <u>PRESENT ON MOVERS REVIEWED</u> </h5><br>
                                                    <p>
                                                        Is this company rated out of 5 at movers reviewed?
                                                        <br>
                                                        <span>Please check a radio (Yes/No)</span>
                                                        <input type="radio" name="mover_reviewed" id="stateregistered" value="Yes"> Yes
                                                        <input type="radio" name="mover_reviewed" id="stateregistered" value="No"> No
                                                        <br>
                                                        <div class="past-link">
                                                            <span> Paste a link <br> <input type="text" id="link" name="present_movers_reviewed" placeholder=" Movers Reviewed Link"> </span> <br>
                                                            <!-- Didnt find the link -->
                                                            <br>
                                                            Check <a href="http://www.moversreviewed.com/reviews/300183/proace-moving-and-storage-llc">Details</a>
                                                        </div>
                                                        <span>Rate out of 5</span> <br>
                                                        <div class="star_rating">
                                                            <button class="star" name="star1" value="1">&#9734;</button>
                                                            <button class="star" name="star2" value="2">&#9734;</button>
                                                            <button class="star" name="star3" value="3">&#9734;</button>
                                                            <button class="star" name="star4" value="4">&#9734;</button>
                                                            <button class="star" name="star4" value="5">&#9734;</button>
                                                                
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .legalInfo .submit_information #submit{
                                border: #888888 1px solid;
                                background-color: green;
                                height: 30px;
                                width: 200px;
                                margin-top: 20px;
                                margin-bottom: 20px;
                                color: #fff;
                                font-weight: bold;
                            }
                        </style>
                        <div class="submit_information">
                            <a href="../home/confirmation.php"><input type="submit" name="submit" value="Submit for Approval" id="submit"></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
		<script>
			const allStars = document.querySelectorAll('.star');
			let current_rating = document.querySelector('.current_rating');
			allStars.forEach((star, i) => {
				star.onclick = function (){
					let current_star_level = i + 1;
					current_rating.innerText = `${current_star_level} of 5`;
					
					allStars.forEach((star, j) => {
						if(current_star_level >= j + 1){
							star.innerHTML = '&#9733';
						}
						else{
							star.innerHTML = '&#9734'
						}
					})
				}
			})
		</script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<?php //include "../home/footer.php"; ?>