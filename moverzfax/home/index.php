<?php include "myheader.php" ?> 


<title>MoverZfax-Home</title>
 <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="fSbR7179ytQFETKa3rkDvn1fFmhbAymvwBsjj9JC">
    <meta content="MoverZfax UI description" name="description">
    <meta content="MoverZfax Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">
    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">	

    <link rel="shortcut icon" href="https://www.moversfax.com/frontend/m_icon.png">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="https://www.moversfax.com/frontend/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="https://www.moversfax.com/frontend/pages/css/animate.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="https://www.moversfax.com/frontend/pages/css/components.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/pages/css/slider.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/style.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/style-responsive.css" rel="stylesheet">
    <!--<link href="https://www.moversfax.com/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="https://www.moversfax.com/corporate/css/themes/green.css" rel="stylesheet" id="style-color">-->
    <link href="https://www.moversfax.com/frontend/corporate/css/themes/green.css" rel="stylesheet" id="style-color">

    <!-- formwidzard css -->
    <link href="https://www.moversfax.com/backend/css/style-metronic.css" rel="stylesheet">
    <link href="https://www.moversfax.com/backend/css/plugins.css" rel="stylesheet">
    <!-- <link href="css/uikit.min.css" rel="stylesheet"> -->

    <!-- this is a review_modal css -->
    <link href="https://www.moversfax.com/frontend/corporate/css/examples.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/bars-movie.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/star_style.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/custom.css" rel="stylesheet">
    <link href="https://www.moversfax.com/frontend/corporate/css/modal.css" rel="stylesheet">	
  <!-- CSS–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- Searchbox CSS start-->
<style>
    
    *,
    body{
        margin: 0;
        padding:0;
        box-sizing: border-box;
    }
    .b-contaoner{
        background-image: url(../img/MoverZfax_index_1.png); 
        background-repeat:no-repeat;
        background-position: top center; 
        background-size:contain; 
        margin-top: 0 !important; 
        display: flex;
        justify-content: center;
        align-items: center;
        height: 450px;
        width: 100vw;
        /*background-color: #85CA63;*/
        /*#67bd3c*/
    }

    .b-search{
        position: relative;
    }

    .b-search
    input, button{
        font-family: 'Poppins', sans-serif;
        letter-spacing: .8px;
    }
    .b-search .inner-form{
        display: -ms-flexbox;
        display: flex;
        width: 50vw;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
        box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        border-radius: 34px;
        overflow: hidden;
    }
    .b-search .inner-form .input-field {
        height: 55px;
    }
    .b-search .inner-form .input-field input {
        height: 100%;
        background: transparent;
        border: 0;
        display: block;
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #000;
    }

    .b-search form .inner-form .input-field input.placeholder {
        color: #222;
        font-size: 16px;
    }

    .b-search form .inner-form .input-field input:-moz-placeholder {
        color: #222;
        font-size: 16px;
    }

    .b-search form .inner-form .input-field input::-webkit-input-placeholder {
        color: #222;
        font-size: 16px;
    }

    .b-search form .inner-form .input-field input:hover, .b-search form .inner-form .input-field input:focus {
        box-shadow: none;
        outline: 0;
    }

    .b-search form .inner-form .input-field.first-wrap {
        -ms-flex-positive: 1;
            flex-grow: 1;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
            align-items: center;
        background: rgba(217, 241, 227,.7);
    }

    .b-search form .inner-form .input-field.first-wrap input {
        -ms-flex-positive: 1;
            flex-grow: 5;
    }

    .b-search form .inner-form .input-field.first-wrap .svg-wrapper {
        min-width: 80px;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
            justify-content: center;
        -ms-flex-align: center;
            align-items: center;
    }

    .b-search form .inner-form .input-field.first-wrap svg {
        width: 36px;
        height: 36px;
        fill: #222;
    }

    .b-search form .inner-form .input-field.second-wrap {
        min-width: 180px;
    }

    .b-search form .inner-form .input-field.second-wrap .btn-search {
        height: 100%;
        width: 100%;
        white-space: nowrap;
        color: #fff;
        border: 0;
        cursor: pointer;
        font-weight: 700;
        position: relative;
        z-index: 0;
        background: rgba(0, 173, 95,0.7);
        transition: all .2s ease-out, color .2s ease-out;
    }

    .b-search form .inner-form .input-field.second-wrap .btn-search:hover {
        background: #009451;
    }

    .b-search form .inner-form .input-field.second-wrap .btn-search:focus {
        outline: 0;
        box-shadow: none;
    }

    .b-search form .info {
        font-size: 15px;
        color: #ccc;
        padding-left: 26px;
    }

    @media screen and (max-width: 992px) {
        .b-search form .inner-form .input-field {
        height: 50px;
        }
        .b-search form .inner-form .input-field input.placeholder {
            color: #222;
            font-size: 13px;
        }

        .b-search form .inner-form .input-field input:-moz-placeholder {
            color: #222;
            font-size: 13px;
        }

        .b-search form .inner-form .input-field input::-webkit-input-placeholder {
            color: #222;
            font-size: 13px;
        }
        .b-search form .inner-form .input-field.second-wrap {
        min-width: 160px;
        }
        .b-contaoner{
            height:350px;
        }
    }

    @media screen and (max-width: 768px) {
        .b-search form .inner-form .input-field.first-wrap .svg-wrapper {
            min-width: 40px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
                justify-content: center;
            -ms-flex-align: center;
                align-items: center;
            padding: 0 10px;
        }
        .b-search form .inner-form .input-field.first-wrap svg {
            width: 26px;
            height: 26px;
            fill: #222;
        }
        .b-search form .inner-form .input-field.second-wrap {
           min-width: 100px;
        }
        .b-search .inner-form{
           width: 70vw;
        }
        .b-contaoner{
            height: 250px;
        }
        
    }
    /* smaller than phablet (also point when grid becomes active) */
    @media (max-width: 550px) {
        .b-search .inner-form{
        width: 90vw;
        }
        .b-search
        input, button{
            letter-spacing: 0px;
        }
        .b-contaoner{
            background-image: url(../img/MoverZfax_index_2.png); /* this may need to chang back in production */
        }
    }

    /* smaller than mobile */
    @media (max-width: 400px) {
        .b-search form .inner-form .input-field.second-wrap {
           min-width: 80px;
        }
        .b-contaoner{
        display: flex;
        justify-content: center;
        align-items: end;
        height: 230px;
        width: 100vw;
        /*background-color: #85CA63;*/
    }
    }

</style>
<!-- Searchbox CSS end -->

<style>

        * {
           
          box-sizing: border-box;
        }
		
        .b-container{
            width: 100%;
			margin:0;
            padding:0;
            overflow: hidden;

		}
     
        .in-container{
            width: 90%;
            margin: 19px auto;
            

         }
         .bg-form{
             margin: 0 auto;
             padding: 0 10%;
             width:80%;
             background-color: #f6f6f6;
             border-radius: 10px 10px;
         }
         .bg-form h4{
             padding-top:30px;
         }
        .bg-form .row{
            margin-left:0;
            margin-right:0;
            padding: 0 10%;
        }
        .i-width{
            width: 100%;
        }
        .row .button-mf{
            font-size: 15px;
            color: rgb(255, 255, 255);
            box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            -moz-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            -webkit-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            background-color: #7aeb41;
            border-color: none;
        }
        .button-mf:hover{
            background-color: #67bd3c;
            border-color: none;
        }
        .bg-form hr{
            padding:20px 0;
        }
</style>

<style>
    .main{
        margin:0;
        padding:0;
        overflow: hidden;
    }
    /*.services{*/
    /*    margin-left: 5% ;*/
    /*    margin-right: 5% ;*/
    /*}*/
    .wo-image{
        float: left;
        width: 25%;
        padding-right: 1% ;
    }
    .wo-services{
        float: left;
        width: 75%;
    }
    
    .container-partners{
        width:90%;
        height:fit-content;
        margin:2% auto;
    }
    .front-step{
        height:200px;
    }
    
     /* Desktop-mobile approach --------------------------------------------------------------*/

    /* smaller than Desktop HD */
    @media (max-width: 1200px) {}

    /* smaller than desktop */
    @media (max-width: 900px) {}

    /* smaller than tablet */
    @media (max-width: 750px) {
        .wo-image{
            width: 35%;
        }
        .wo-services{
            width: 65%;
        }
        #partners{
            height:350px;
        }
        .container-partners{
            width:95%;
            height:fit-content;
            margin:2% auto;
        }
    }

    /* smaller than phablet (also point when grid becomes active) */
    @media (max-width: 550px) {
        .services{
            margin-left: 1% ;
            margin-right: 1% ;
        }
        #partners{
            height:300px;
        }
        #tabs-nav{
            padding-left:5px;
            padding-right:5px;
            font-size:80%;
        }
    }

    /* smaller than mobile */
    @media (max-width: 350px) {
        #tabs-nav{
            padding-left:2px;
            padding-right:2px;
            font-size:70%;
        }

    }

</style>


<!-- Start of Document ----------------------------------------------->
  <main>
        <div class="b-contaoner">
            <div class="b-search">
                <!-- <form method="post" action="payment_app.php"> -->
                <form method="post" action="../model/select_operation.php">
                    <input type="hidden" name="_token" value="SD49uC9YMu0Jcm972BpNLVnuT4gcNjI0pZ3HQBk4">
                    <div class="inner-form">
                        <div class="input-field first-wrap">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                </svg>
                            </div>
                            <input id="search" name="usdot" type="text" placeholder="Search USDOT Registration..." required>
                            <input name="function" type="hidden" value="search">
                        </div>
                        <div class="input-field second-wrap">
                            <button class="btn-search" type="submit" required>USDOT #</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="in-container">
            <!-- BEGIN SERVICE BOX -->
            <div class="row clearfix">
                
                <div class="wo-image mt-20">
                    <img src="https://www.moversfax.com/frontend/img/wo.png" width="100%">
                </div>
                <div class="wo-services">
                   
                    <div class="row mt-20">
                        <div class="col-sm-12 text-center">
                            <h2 class="section-title">Features and Services</h2>
                            <span class="">Tons of websites out there provide online recommendations about moving companies. However, they are all dispersed which can make the research dreadful for many, hence,ending up choosing the wrong mover.</span>
                        </div>
                    </div>

                    
                    <div class="row mt-20">
                        <div class="col-sm-6">
                            <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m ">
                                <div class="wo-card-height">
                                    <div class="uk-grid-small uk-flex-middle ">
                                        <div class="uk-width-auto ">
                                            <img class="uk-border-square" src="https://www.moversfax.com/frontend/img/stf.png">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h2 class="uk-card-title uk-margin-remove-bottom">Special Moving Task Force</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Have you been cheated? Have you hired a rogue mover?</p>
                                </div>
                                <div class="uk-card-footer">
                                    <a class="uk-button uk-button-text" href="task_force.php">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle">
                                        <div class="uk-width-auto"><img class="uk-border-square" height="40" src="https://www.moversfax.com/frontend/img/truck.png" width="40"></div>
                                        <div class="uk-width-expand">
                                            <h2 class="uk-card-title uk-margin-remove-bottom">Post a Moving Job</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Post your moving job here and ONLY top reputable mover will reply.</p>
                                </div>
                                <div class="uk-card-footer">
                                    <a class="uk-button uk-button-text" href="post_a_moving_job.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-sm-6">
                            <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle">
                                        <div class="uk-width-auto"><img class="uk-border-square" height="40" src="https://www.moversfax.com/frontend/img/navigate.png" width="40"></div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom">How to Navigate Website</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Click READ MORE to check for a easy to navigate guide and read all the steps.</p>
                                </div>
                                <div class="uk-card-footer">
                                    <a class="uk-button uk-button-text" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle">
                                        <div class="uk-width-auto"><img class="uk-border-square" height="35" src="https://www.moversfax.com/frontend/img/report_card.png" width="35"></div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom">Sample Report Card Snapshot</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Check for a sample screenshot of report card generated by MoverZfax.</p>
                                </div>
                                <div class="uk-card-footer">
                                    <a class="uk-button uk-button-text" href="https://www.moversfax.com/frontend/img/report_card.png" target="_blank">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-sm-6">
                            <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle">
                                        <div class="uk-width-auto"><img class="uk-border-square" height="50" src="https://www.moversfax.com/frontend/img/cseal.png" width="50"></div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom">MoverZfax Certified Seal</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>This seal is ONLY available to the moving companies with 85% grade and above.</p><br>
                                </div>
                                <div class="uk-card-footer">
                                    <a class="uk-button uk-button-text" href="certified_seal.html">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="uk-card uk-card-default uk-card-small uk-card-hover uk-width-1@m">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle">
                                        <div class="uk-width-auto"><img class="uk-border-square" height="40" src="https://www.moversfax.com/frontend/img/info.png" width="40"></div>
                                        <div class="uk-width-expand">
                                            <h3 class="uk-card-title uk-margin-remove-bottom">Get Informed</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>We're here to provide it. Let us help you navigate through this labyrinth of what we call the Internet.</p>
                                </div>
                                <div class="uk-card-footer">
                                    <a class="uk-button uk-button-text" href="get_informed.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-footer mt-2 float-right">
                            <a class="btn btn-info" href="get_informed.php">Read more</a>
                        </div>
                </div>
            </div>
        </div>

        <div class="container-partners">
            <!-- END SERVICE BOX -->
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img class="img-fluid" src="https://www.moversfax.com/frontend/img/our_mission.png">
                </div>
            </div><hr>

            <!-- BEGIN TABS AND TESTIMONIALS -->
            <div class="row mix-block margin-bottom-40">
                <!-- TABS -->
                <div class="col-lg-7 tab-style-1">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-1" id="tabs-nav" data-toggle="tab" aria-expanded="true">About us</a></li>
                        <li class=""><a href="#tab-2" id="tabs-nav" data-toggle="tab" aria-expanded="false">Finding Movers</a></li>
                        <li class=""><a href="#tab-3" id="tabs-nav" data-toggle="tab" aria-expanded="false">Moverzfax Mission</a></li>
                        <li class=""><a href="#tab-4" id="tabs-nav" data-toggle="tab" aria-expanded="false">Tips &amp; Advice</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane row fade active in" id="tab-1">
                            <div class="col-md-3 col-sm-3">
                                <a href="https://www.moversfax.com/frontend/temp/photos/img7.jpg" class="fancybox-button" title="Image Title" data-rel="fancybox-button">
                                    <img class="img-responsive" src="https://www.moversfax.com/frontend/pages/img/photos/img7.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <p class="margin-bottom-10">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
                                <p><a class="more" href="javascript:;">Read more <i class="icon-angle-right"></i></a></p>
                            </div>
                        </div>
                        <div class="tab-pane row fade" id="tab-2">
                            <div class="col-md-9 col-sm-9">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <a href="https://www.moversfax.com/frontend/temp/photos/img10.jpg" class="fancybox-button" title="Image Title" data-rel="fancybox-button">
                                    <img class="img-responsive" src="https://www.moversfax.com/frontend/pages/img/photos/img10.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                        <div class="tab-pane fade" id="tab-4">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>
                    </div>
                </div>
                <!-- END TABS -->

                <!-- TESTIMONIALS -->
                <div class="col-lg-5 testimonials-v1">
                    <div id="myCarousel" class="carousel slide">
                        <h1 class="text-left" style="font-weight: bold; padding-left:30px; font-size:20px;">Offers and Promotions</h1>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <img class="pull-left" src="https://www.moversfax.com/frontend/img/banner1.png" alt="">
                            </div>
                            <div class="item">
                                <img class="pull-left" src="https://www.moversfax.com/frontend/img/banner2.png" alt="">
                            </div>
                            <div class="item">
                                <img class="pull-left" src="https://www.moversfax.com/frontend/img/banner3.png" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Carousel nav -->
                    <a class="left-btn" href="#myCarousel" data-slide="prev"></a>
                    <a class="right-btn" href="#myCarousel" data-slide="next"></a>
                </div>
            </div>
            <!-- END TESTIMONIALS -->
        </div>
        <!-- END TABS AND TESTIMONIALS -->

        <!-- BEGIN STEPS -->
        <div class="container-partners">
            <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
                <div class="col-md-4 col-sm-4 front-step-col" >
                    <div class="front-step front-step1">
                        <h2>Goal definition</h2>
                        <p>Eliminate all potential scammer in the north American moving industry.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 front-step-col">
                    <div class="front-step front-step2">
                        <h2>Analyse</h2>
                        <p>Providing detailed history report on every movers through reviews, licensing and so much more.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 front-step-col">
                    <div class="front-step front-step3">
                        <h2>Implementation</h2>
                        <p>Ordering your Moverzfax report and have a piece of mind throughout your upcoming move.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- END STEPS -->
        <div class="container-partners" id="partners">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="font-weight: 500">Partners and Collaborators</h1>
                </div>
                <div class="col-md-12 m-b15">
                    <span class="client-item " style="width: 23%">
                        <a href="javascript:;">
                        <img src="https://www.moversfax.com/frontend/img/01.png" class="img-responsive first-item" style="display: block;" alt="">
                        <img src="https://www.moversfax.com/frontend/img/01-g.png" class="color-img img-responsive" style="display: none;" alt="">
                        </a>
                    </span>
                    <span class="client-item" style="width: 13%">
                        <a href="javascript:;">
                        <img src="https://www.moversfax.com/frontend/img/02.png" class="img-responsive first-item" style="display: block;" alt="">
                        <img src="https://www.moversfax.com/frontend/img/02-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                        </a>
                    </span>
                    <span class="client-item" style="width: 27%">
                        <a href="javascript:;">
                        <img src="https://www.moversfax.com/frontend/img/03.png" class="img-responsive first-item" style="display: none;" alt="">
                        <img src="https://www.moversfax.com/frontend/img/03-g.png" class="color-img img-responsive" style="display: block; border: solid;" alt="">
                        </a>
                    </span>
                    <span class="client-item" style="width: 14%">
                        <a href="javascript:;">
                        <img src="https://www.moversfax.com/frontend/img/04.png" class="img-responsive first-item" style="display: block;" alt="">
                        <img src="https://www.moversfax.com/frontend/img/04-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                        </a>
                    </span>
                    <span class="client-item" style="width: 10%">
                        <a href="javascript:;">
                        <img src="https://www.moversfax.com/frontend/img/05.png" class="img-responsive first-item" style="display: block;" alt="">
                        <img src="https://www.moversfax.com/frontend/img/05-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                        </a>
                    </span>
                    <span class="client-item last-item" style="width: 13%">
                        <a href="javascript:;">
                        <img src="https://www.moversfax.com/frontend/img/06.png" class="img-responsive first-item" style="display: block;" alt="">
                        <img src="https://www.moversfax.com/frontend/img/06-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                        </a>
                    </span>
                </div>
                <div class="col-md-12 m-b15">
                <span class="client-item" style="width: 24%">
                    <a href="javascript:;">
                    <img src="https://www.moversfax.com/frontend/img/07.png" class="img-responsive first-item" style="display: block;" alt="">
                    <img src="https://www.moversfax.com/frontend/img/07-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                    </a>
                </span>
                <span class="client-item" style="width:36%">
                    <a href="javascript:;">
                    <img src="https://www.moversfax.com/frontend/img/08.png" class="img-responsive first-item" style="display: block;" alt="">
                    <img src="https://www.moversfax.com/frontend/img/08-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                    </a>
                </span>
                <span class="client-item " style="width: 25%">
                    <a href="javascript:;">
                    <img src="https://www.moversfax.com/frontend/img/09.png" class="img-responsive first-item" style="display: block;" alt="">
                    <img src="https://www.moversfax.com/frontend/img/09-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                    </a>
                </span>
                <span class="client-item " style="width: 15%">
                    <a href="javascript:;">
                    <img src="https://www.moversfax.com/frontend/img/10.png" class="img-responsive first-item" style="display: block;" alt="">
                    <img src="https://www.moversfax.com/frontend/img/10-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                    </a>
                </span>
                </div>
                <div class="col-md-12 m-b15">
                <span class="client-item " style="width: 38%">
                    <a href="javascript:;">
                    <img src="https://www.moversfax.com/frontend/img/11.png" class="img-responsive first-item" style="display: block;" alt="">
                    <img src="https://www.moversfax.com/frontend/img/11-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                    </a>
                </span>
                    <span class="client-item" style="width: 11%">
                    <a href="javascript:;">
                    <img src="https://www.moversfax.com/frontend/img/12.png" class="img-responsive first-item" style="display: block;" alt="">
                    <img src="https://www.moversfax.com/frontend/img/12-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                    </a>
                </span>
                    <span class="client-item " style="width: 18%">
                    <a href="javascript:;">
                    <img src="https://www.moversfax.com/frontend/img/13.png" class="img-responsive first-item" style="display: block;" alt="">
                    <img src="https://www.moversfax.com/frontend/img/13-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                    </a>
                </span>
                    <span class="client-item " style="width: 33%">
                    <a href="javascript:;">
                    <img src="https://www.moversfax.com/frontend/img/14.png" class="img-responsive first-item" style="display: block;" alt="">
                    <img src="https://www.moversfax.com/frontend/img/14-g.png" class="color-img img-responsive" style="display: none; border: solid;" alt="">
                    </a>
                </span>
                </div>
            </div>
        </div>
        <!--
        <div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 10px; cursor: pointer; opacity: 1;">
            <img src="../img/up.png" style="width:40px; height:40px">
        </div>
-->
    </>

    
<div class="row margin-bottom-40"></div>
<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php include "footer.php" ?>


