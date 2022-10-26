<?php include_once 'myheader.php'?>
<title>Sign In</title>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

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
            width: 80%;
            margin: 19px auto;
            overflow: hidden;

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
            color: white;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.18);
            -moz-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            -webkit-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            background-color: #85CA63;
            border-radius:15px 15px 15px 15px;
            border-color: none;
        }
        .row .button-mf:hover{
            background-color: #67bd3c;
            color: white;
            transition:all .5s;
        }
        .bg-form hr{
            padding:20px 0;
        }
        
 /* Desktop-mobile approach --------------------------------------------------------------*/

/* smaller than Desktop HD */
@media (max-width: 1200px) {}

/* smaller than desktop */
@media (max-width: 900px) {
    .bg-form{
         margin: 0 auto;
         width: 70%;
         background-color: #f6f6f6;
         border-radius: 10px 10px;
     }
}

/* smaller than tablet */
@media (max-width: 750px) {}

/* smaller than phablet (also point when grid becomes active) */
@media (max-width: 550px) {
    .bg-form{
         margin: 0 auto;
         width: 100%;
         background-color: #f6f6f6;
         border-radius: 10px 10px;
     }
}

/* smaller than mobile */
@media (max-width: 400px) {}



/*input[type=email], input[type=password] {*/
/*  width: 50%;*/
/*  padding: 12px;*/
/*  border: 1px solid black;*/

/*  resize: vertical;*/
/*}*/

/*label {*/
/*  padding: 12px 12px 12px 0;*/
/*  display: inline-block;*/
/*}*/

/*input[type=submit] {*/
/*  background-color: green;*/
/*  color: white;*/
/*  padding: 12px 20px;*/
/*  border: none;*/
/*  cursor: pointer;*/
/*  float: right;*/

/*}*/

/*input[type=submit]:hover {*/
/*  background-color: #45a049;*/
/*}*/

/*.container {*/

/*  border-radius: 5px;*/
/*  background-color: #f9f9f9;*/
/*  padding: 20px;*/
/*}*/
/*h2{*/
/*    margin-top:40px;*/
/*}*/
/*.btn-primary{*/
/*    background-color:#67bd3c;*/
/*    border:none;*/
/*}*/
/*.col-25 {*/
/*  float: left;*/
/*  width: 25%;*/
/*  margin-top: 6px;*/
/*}*/

/*.col-75 {*/
/*  float: left;*/
/*  width: 75%;*/
/*  margin-top: 6px;*/
/*}*/

/* Clear floats after the columns */
/*.row:after {*/
/*  content: "";*/
/*  display: table;*/
/*  clear: both;*/
/*}*/

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
/*@media screen and (max-width: 600px) {*/
/*    input[type=submit] {*/
/*    width: 100%;*/
/*    margin-top: 0;*/
/*  }*/
/*}*/
</style>

<!-- Start of Document ----------------------------------------------->

  <div class="b-container">
      <div class="in-container">
        <div class="bg-form">
        <h4 align="center">LOGIN</h4>
        <hr>
        <form action="signin.inc.php" method="POST">
            <div class="row">
                <div class="twelve columns">
                    <label for="fname">USER TYPE </label>
                    <select name= "catagory" id="fname">
                        <option = ""> Select User type </option>
                        <option value = "Customer"> Customer </option>
                        <option value = "mover"> Mover </option>
                    </select>
                </div>
                <div class="twelve columns">
                    <label for="fname">USERNAME</label>
                    <input class="i-width" type="email" placeholder="USERNAME" id="fname" name="email" >
                </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="password">PASSWORD</label>
                <input class="i-width" type="password" placeholder="PASSWORD" id="fname" name="password">
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                 <input  class="button button-mf" type="submit" value="Submit" name="submit">
              </div>
            </div>
          </form>
          <hr>
      </div>
    </div>
    </div>

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!--<div class="row">-->
    <!--  <div class="col-25">-->
    <!--    <label for="fname">USERNAME</label>-->
    <!--  </div>-->
    <!--  <div class="col-75">-->
    <!--    <input type="email" id="fname" name="email" placeholder="USERNAME">-->
    <!--  </div>-->
    <!--</div>-->
    <!--<div class="row">-->
    <!--  <div class="col-25">-->
    <!--    <label for="country">PASSWORD</label>-->
    <!--  </div>-->
    <!--  <div class="col-75">-->
    <!--  	<input type="password" id="fname" name="password" placeholder="PASWORD">-->
    <!--  </div>-->
    <!--</div>-->
    <!--<div class="row">-->
    <!--  <input type="submit" value="Submit" name="submitx">-->
    <!--</div>-->


<br><br>
<?php include_once 'footer.php';?>

