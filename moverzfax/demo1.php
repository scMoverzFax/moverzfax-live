<?php include 'myheader.php' ?>
<style>
    body {
  background-color:  #eee;
}
.title {
    text-transform: uppercase;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
     
}
.card {

    font-size: 1em;
    overflow: hidden;
    padding: 5;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin:10px;
    padding-left:20px;
    padding-bottom:10px;
    border-radius : 15px;
}
.card .fas{
    color:green;
}
</style>
<div class="container-fluid">
  <div class="title h3 text-center">MoverzFax Reviews</div>
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-12 px-3">
        <div class="card-block px-6">
          <h4 class="card-title inline"> Company ABCD </h4><h5 class="inline">From California</h5>
          <div class="float-right">
            Rating :  
            <img src="img/golden_star_100.png" class="rounded-start" alt="" style="width: 20px;">
            <img src="img/golden_star_100.png" class="rounded-start" alt="" style="width: 20px;">
            <img src="img/golden_star_100.png" class="rounded-start" alt="" style="width: 20px;">
          </div>
            <div class="col-md-12 ps-4">
                <div class="col-md-12 p-0">
                    <p class="mb-2">Your moving review : It was Nice Experience. And Mover is Very Frindlly And Goood Person. Estamited Cost is nice <br>
                    Did the company respected estimated Cost? : Yes<br>
                    Was the mover professional? : Yes<br>
                    Did the mover arrived in time? : Yes</p>
                </div>
            </div>
        </div>
        <span class="inline ms-5"><i class="fas fa-user me-1"></i> Review By - </span><label class="inline"> Jhon D.</label> <span class="inline ms-5"><i class="fas fa-phone-alt"></i>Company Contact Number -</span><label class="inline"> 8108747825</label>
        <span class="inline ms-5"><i class="fas fa-truck-moving"></i> Moved From - </span><label class="inline"> Topeka</label>
        <span class="inline ms-4"> Moved To - </span><label class="inline"> Arkansas</label>
        <label class="float-right me-5 "> <?php echo date('m-d-y'); ?></label>
        <span class="float-right me-2"><i class="fas fa-calendar-alt"></i> Review Publish On - </span>
      </div>
    </div>
  </div>
</div>

 