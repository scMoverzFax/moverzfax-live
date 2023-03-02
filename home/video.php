<?php include 'myheader.php'; ?>

<title>Promotional Video</title>

<!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
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

    .embed {
        width: 500px;
        height: 350px;
    }

    .embed-1 {
        margin-left: 0;
    }

    .embed-2 {
        margin-left: 0;
    }

    .bg-form h4 {
        padding-top: 30px;
    }

    .bg-form .row {
        margin-left: 0;
        margin-right: 0;
        padding: 0 10%;
    }

    .i-width {
        width: 100%;
    }

    .row .button-mf {
        font-size: 15px;
        color: rgb(255, 255, 255);
        box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        -moz-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        -webkit-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
        background-color: #7aeb41;
        border-color: none;
    }

    .button-mf:hover {
        background-color: #67bd3c;
        border-color: none;
    }

    .bg-form hr {
        margin: 20px 0;
    }

    /* Desktop-mobile approach --------------------------------------------------------------*/

    /* smaller than Desktop HD */
    @media (max-width: 1200px) {
        .embed-2 {
            margin-left: -30%;
        }

        .embed-1 {
            margin-left: 30%;
        }
    }

    /* smaller than desktop */
    @media (max-width: 900px) {
        .bg-form {
            padding: 0 0;
        }

        .embed {
            width: 450px;
            height: 300px;
        }
    }

    /* smaller than tablet */
    @media (max-width: 600px) {
        .embed {
            width: 300px;
            height: 200px;
        }

    }

    /* smaller than phablet (also point when grid becomes active) */
    @media (max-width: 500px) {
        .embed {
            width: 300px;
            height: 200px;
        }
    }

    /* smaller than mobile */
    @media (max-width: 450px) {
        .embed {
            width: 250px;
            height: 150px;
        }
    }

    @media (max-width: 380px) {
        .embed {
            width: 200px;
            height: 150px;
        }
    }
</style>

<!-- Start of Document ----------------------------------------------->

<div class="b-container">
    <div class="container in-container slide-in-bottom">
        <div class="bg-form">
            <h2 class="text-center">Video Testimonials</h2>
            <hr>
            <div class="text-center">
                <embed class="embed embed-1" src="https://www.youtube.com/embed/nqKHdrEUvaE"></embed>
                <embed class="embed embed-2" src="https://www.youtube.com/embed/Fgx8nTYEe90"></embed>
            </div>
            <hr>
        </div>
    </div>
</div>

<!-- End Document ––––––––––––––––––––––––––––––––––––––––––––––––––-->

<!--<p style="text-align:center; font-size:30px; font-familt:serif; color:gray">Video Testimonials </p>-->
<!--   <hr>-->
<!--        <embed style="margin-left:200px; width:441px; height:420px;" src="https://www.youtube.com/embed/nqKHdrEUvaE">-->
<!--        <embed style="width:441px; height:420px;" src="https://www.youtube.com/embed/Fgx8nTYEe90">-->
<!--    </embed>-->
<!--   <hr>-->







<?php include_once 'footer.php'; ?>