<?php include_once 'myheader.php'; ?>

<title>Blog</title>


<!-- Mobile Specific Metas
  ––––––––––––––––––––––––––––––––––––––––––––––––––-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS
  ––––––––––––––––––––––––––––––––––––––––––––––––––-->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.con.font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    * {
        font-family: sans-serif;
        box-sizing: border-box;
    }

    .b-container {
        overflow: hidden;
        height: fit-content;
        width: fit-content;
        position: relative;
        padding: 50px;
        max-width: 1440px;

    }

    .in-container {
        background-color: white;
        box-shadow: 0 0 10px 2px #eee;
        /* border-radius: 10px 10px; */
        border: 1px solid #eee;
        /* width: fit-content; */
        padding: 50px;
    }

    .bg-form {
        margin: 0;
        width: 100%;
        background-color: white;

    }

    .i-width {

        width: 100%;
    }

    .bg-form p {

        padding: 0 5%;
    }

    .bg-form .row {
        padding: 0 5%;
    }

    .con-info {
        padding: 4% 4%;
        background-color: #e9ecef;
        word-wrap: break-word;

    }

    td,
    th {

        padding: 10px;
    }

    td {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        letter-spacing: 1px;
        font-family: sans-serif;

    }

    /* Desktop-mobile approach --------------------------------------------------------------*/

    /* smaller than Desktop HD */
    @media (max-width: 1200px) {}

    /* smaller than desktop */
    @media (max-width: 1000px) {}

    /* smaller than tablet */
    @media (max-width: 750px) {}

    /* smaller than phablet (also point when grid becomes active) */
    @media (max-width: 550px) {}

    /* smaller than mobile */
    @media (max-width: 400px) {}

</style>


<!-- Start of Document ----------------------------------------------->

<div class="b-container">
    <div class="container in-container slide-in-bottom">
        <div class="bg-form">
            <br>

            <h2 class="text-center mb-5" style="font-weight: 500">Blog Articles</h2>
            <p>We have a bunch of articles to guide and help you find the right moving company for your needs. Some movers often pose as legitimate businesses with quality services, but in the end you'll end up paying more than what is needed, or worse, get scammed. No worries, Moverzfax is here to help you find the right movers for you. With our report you will be able to identify which movers have a higher percentage of trust than others.</p>
            <p>So, keep coming back to this section for the latest articles as this will be updated regularly.</p>
            <p style="color: #721c24; font-weight: 500; font-style: italic;">PLEASE NOTE:<br>If you want to submit articles about the moving industry, feel free to contact us at blog@moverzfax.com and email it to us. Our board will review the article and post it on our site.</p>

            <hr>

            <div class="row">
                <div class="col-md-6" style="border-right: 1px solid black">
                    <h3 style="font-weight: 500">Recent Articles</h3>
                </div>

                <div class="col-md-6">
                    <h3 style="font-weight: 500">Useful articles from our Partners</h3>
                </div>
            </div>

            <hr>

            <div class="row text-center">
                <div class="col-sm-12"><img style="width:100%;" src="img/CAPTURE2.png"></div>
            </div>
        </div>

    </div>
</div>

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<br>
<br>
<?php include 'footer.php'; ?>