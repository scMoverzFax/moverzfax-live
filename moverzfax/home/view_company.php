<?php include 'myheader.php'; 
defined('LOGIN') or exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
?>
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
        padding: 10px;
    }

    .bg-form {
        margin: 0;
        width: 100%;
        background-color: white;
    }
    .custom-btn-2 {
        width: 80px;
        height: 20px;
        border-radius: 0 40%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all .5s;
        /* position: absolute;
        top: -20px;
        right: 50px; */
    }
    .custom-btn-2:hover {
        transform: scale(1.1);
        transition: all .5s;
    }
    
    .card{ 
        height : fit-content;
        width: 100%;
    }
</style>
<div class="b-container">
    <?php include '../model/view_company_model.php';  ?>
</div>
<?php 
      include 'footer.php';
?>
