<?php include "myheader.php";
defined('LOGIN') or exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
?>
<title>My Reviews</title>
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
        border-radius: 10px 10px;
        border: 1px solid #eee;
        border-left: 5px solid #67bd3c;
        border-right: 5px solid #67bd3c;
        /* width: fit-content; */
        padding: 0;
        margin-bottom: 10px;
    }

    .bg-form {
        margin: 0;
        width: 100%;
        background-color: white;

    }

    .i-width {
        width: 100%;
    }

    .p_q {
        font-weight: bold;
    }

    .p_h {
        font-weight: bold;
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

    .date__box {
        position: absolute;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #ccc;
        border: 4px solid;
        font-weight: bold;
        padding: 5px 10px;
    }

    .date__box .date__day {
        font-size: 22px;
    }

    .blog-card {
        padding: 0;
        /* border: 1px solid #7aeb41; */
        position: relative;
        /* background-color: #ccc; */
    }

    .blog-card .date__box {
        opacity: 0;
        transform: scale(0.5);
        transition: 300ms ease-in-out;
    }

    .blog-card .blog-card__background,
    .blog-card .card__background--layer {
        z-index: -1;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .blog-card .blog-card__background {
        padding: 15px;
        background: white;
    }

    .blog-card .card__background--wrapper {
        height: 100%;
        clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
        position: relative;
        overflow: hidden;
    }

    .blog-card .card__background--main {
        height: 100%;
        position: relative;
        transition: 300ms ease-in-out;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .blog-card .card__background--layer {
        z-index: 0;
        opacity: 0;
        background: rgba(51, 51, 51, 0.9);
        transition: 300ms ease-in-out;
    }

    .blog-card .blog-card__head {
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .blog-card .blog-card__info {
        z-index: 10;
        background: white;
        border-radius: 10px;
        padding: 10px 15px 0 15px;
    }

    .blog-card .blog-card__info h5 {
        transition: 300ms ease-in-out;
    }

    .blog-card:hover .date__box {
        opacity: 1;
        transform: scale(1);
    }

    .blog-card:hover .card__background--main {
        transform: scale(1.2) rotate(5deg);
    }

    .blog-card:hover .card__background--layer {
        opacity: 1;
    }

    .blog-card:hover .blog-card__info h5 {
        color: #ffb535;
    }

    span.icon-link {
        color: #363738;
        transition: 200ms ease-in-out;
    }

    span.icon-link i {
        color: #ffb535;
    }

    span.icon-link:hover {
        color: #ffb535;
        text-decoration: none;
    }

    .btn {
        background: white;
        color: #363738;
        font-weight: bold;
        outline: none;
        box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.2);
        overflow: hidden;
        border-radius: 0;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        padding: 0;
        border: none;
    }

    .btn:focus {
        box-shadow: none;
    }

    .btn:hover {
        background: #ccc;
        color: #fff;
    }

    .btn.btn--with-icon {
        padding-right: 20px;
    }

    .btn.btn--with-icon i {
        padding: 0px 10px 0px 10px;
        margin-right: 3px;
        height: 30px;
        line-height: 30px;
        vertical-align: bottom;
        color: white;
        background: #ffb535;
        clip-path: polygon(0 0, 70% 0, 100% 100%, 0% 100%);
    }

    .btn.btn--only-icon {
        width: 30px;
    }

    .btn_reply{

        background-color: #89c467 ;
        color: #fff;
        height : 30px;
        width : 100px;
        border-radius : 5px;
        border:none;

    }
    .btn_reply:hover{
        background-color: #95d83f; 
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

<!-- <div class="b-container">
    <h2 class="text-center">My Reviews</h2>

    <?php //include '../model/my_review_model.php'; ?>
    
    
</div> -->

<div class="container" style="margin-top:10px; max-width: 100%">
		<div class="row text-justify">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<h1 class="text-center" style="font-weight: 500">Reviews Coming Soon</h1>
				<p>
                    This feature is not yet available on Moverzfax but we are working on implementing it soon. 
                    Since the section of Moverzfax internal review system isn't available, all customers will 
                    base their decision to hire a mover on all other reviews listed on the Moverzfax report. 
                    Stay tuned for updates.
				</p>
        </div>	
    </div>
</div>

<script src="../js/city_sort.js"></script>
<?php include 'footer.php' ?>