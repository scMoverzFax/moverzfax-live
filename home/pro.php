<?php include_once 'myheader.php'; ?>

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

    .bg-form h4 {
        padding-top: 30px;
    }

    .bg-form .row {
        margin-left: 0;
        margin-right: 0;
        padding: 0 10%;
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
    @media (max-width: 1200px) {}

    /* smaller than desktop */
    @media (max-width: 900px) {}

    /* smaller than tablet */
    @media (max-width: 600px) {
        .embed {
            width: 450px;
            height: 300px;
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
    @media (max-width: 400px) {
        .in-container {
            width: 100%;
            overflow: hidden;
        }

        .bg-form {
            width: 100%;
        }

        .embed {
            width: 100%;
            height: 150%;
        }
    }
</style>

<!-- Start of Document ----------------------------------------------->

<div class="b-container">
    <div class="container in-container slide-in-bottom">
        <div class="bg-form">
            <h2 align="center">Promotional Video</h2>
            <hr>
            <div align="center">
                <embed class="embed" src="https://www.youtube.com/embed/b5pjq-Wr82k">
                </embed>
            </div>
            <hr>
        </div>
    </div>
</div>

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->


<!--<div class="pa">-->
<!--   <p style="text-align:center; font-size:30px; font-familt:serif; color:gray">Promotional Video</p>-->
<!--   <hr>-->
<!--        <embed style="width:700px; height:400px;" src="https://www.youtube.com/embed/b5pjq-Wr82k">-->

<!--    </embed>-->
<!--   <hr>-->
<!--</div>-->

<?php include_once 'footer.php'; ?>