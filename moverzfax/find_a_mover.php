<?php include_once 'myheader.php'?>
<title>Find Mover</title>

	<style type="text/css">
	
		/*.mover-content {*/
		/*    height:300px;*/
  /*          box-shadow: 1px 1px 3px 3px #e4e6e8;*/
  /*          padding-top: 20px;*/
  /*          margin-bottom: 50px;*/
  /*          border: solid 1px #e4e6e8;*/
  /*          background: whitesmoke;*/
  /*      }*/
  /*      .row {*/
  /*          margin-right: -15px;*/
  /*          margin-left: -15px;*/
  /*      }*/
  /*      .text-left{*/
  /*          display: block;*/
  /*          text-align: left;*/
  /*          font-weight: 500;*/
            /*margin-top: -6px;*/
  /*      }*/
        /*.search-form {*/
        /* margin-left: 20px;*/

            /*border-bottom: solid 1px #e4e6e8;*/
        /*}*/
        /*.form-without-legend {*/
        /*	padding-top: 25px;*/
        /*}*/

  /*      .input-group{*/
  /*          padding-right:20px;*/
  /*          width:100%;*/
  /*      }*/
        
        
          
		/*.input1{*/
		    
		/*	height: 32px;*/
		/*	width: 70%;*/
		/*	display: block;*/
		/*	font-size: 15px;*/
		/*	float: left;*/
		/*	outline: none;*/
		/*	border:1px solid green;*/
		/*	border-right: none;*/
		/*	border-color: #dbdbdb;*/
  /*      	color: #777;*/
  /*      	font: 14px Arial, sans-serif;*/
  /*      	border-radius: 0;*/
  /*      	box-shadow: none;*/
		/*}*/
		/*.input1:focus {*/
  /*      	box-shadow: none;*/
  /*      	border: solid 1px #dbdbdb;*/
  /*      	border-right: none;*/
  /*      }*/
		/*.button1{*/
		/*	float: left;*/
		/*	right: -5px;*/
		/*	top: 0;*/
		/*	width: 30%;*/
		/*	background: #67bd3c;*/
		/*	color: #fff;*/
		/*	font-size: 15px;*/
		/*	outline: none;*/
		/*	border:none;*/
		/*	font-weight: normal;*/
		/*	height: 32px;*/

		/*}*/
		/*.button1 i{*/
		/*	color:white;*/
		/*	font-size: 15px;*/
		/*	font-weight: normal;*/
		/*	padding-left: 5px;*/
		/*	padding-right: 5px;*/
		/*}*/
		/*.search-container .search, hr{*/
		/*	margin-left: 80px;*/
		/*	margin-right: 80px;*/
		/*}*/
	
		/*.filter-mover{*/
			
		/*	border: 1px solid grey;*/
		/*	background: #67bd3c;*/
		/*	height: 32px;*/
		/*	padding: 2px;*/
		/*    width: 80%;*/
		/*	padding-left: 20px;*/
		/*	margin-left: 20px;*/
		/*}*/
		/*.filter-mover a{*/
		/*	color: #fff;*/
		/*	text-decoration: none;*/
		/*}*/
		/*.filter-mover a:hover{*/
		/*	color: #fff;*/
		/*}*/
		/*.filter-mover i{*/
		/*	margin-left: 2px;*/
		/*	margin-right: 10px;*/
		/*}*/
        
  /*      .hr{*/
         
  /*          width:100%;*/
            
  /*      }*/
        
  /*      @media all and (max-width:350px){*/
  /*          .button1{*/
		
		/*	font-size: 0px;}*/
            
  /*      }*/
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
         .bg-form hr{
            padding:0;
        }
        .bg-form .row{
            margin-left:0;
            margin-right:0;
            padding: 0 10%;
        }
        .i-width{
           width: 100%;  
        }

        .row .button-search,
        .row .button-filter{
        
            width: 150px;
            border-radius: 0;
            font-size: 15px;
            color: rgb(255, 255, 255);
            box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            -moz-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            -webkit-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            background-color: #85CA63;
            border-color: none;
        }
        .row .button-filter{
            width:200px;
        }
        .button-search:hover,
        .button-filter:hover{
            background-color: #67bd3c;
            border-color: none;
        }
        .button-filter a{
            text-decoration: none;
            color: rgb(255, 255, 255);

        }
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
    <div class="row">
      <div class="in-container">
        <div class="bg-form">
        <h4 align="center">Find a Mover</h4>
        <hr>
       
            <div class="row">
                
            <form class="" method="POST" action="findaMover.inc.php"></form>
              <div class="i-width">
                <input class="eight columns" type="text" name="findaMover" placeholder="Search USDOT#" id="">
                <button class="button-search" type="submit" value="Submit" name="submit"><i class="fa fa-search"></i>Search</button>
              </div>
            </form>
            
              <div class="twelve columns">
                <button class="button-filter"><a href="filterMover.php"><i class="fa fa-filter"></i>Filter Mover</button>
              </div>
            </div>
          <hr>
      </div>
    </div>
    </div>
   </div>
 

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->
		    
			    
			    
			    
			    
			    
			    
			<!--<div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">-->
			<!--    <h4 class="text-left">Find A Mover</h4>-->
	  <!--      <form class="form-horizontal form-without-legend search-form" search-form" method="POST" actio="findaMover.inc.php">-->
	  <!--      	<div class="row inputs">-->
	  <!--      	   <div class="col-xm-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">-->
	  <!--      	    <div class="input-group">    -->
	  <!--      		<input type="text" name="findaMover" class="" placeholder="Search USDOT#">-->
	  <!--      		<button type="submit" class="button" name="submit"><i class="fa fa-search"></i>Search</button>-->
	  <!--      	  </div>	-->
	  <!--      	</div>-->
	        	<!--Filtering a mover-->
	  <!--      		<div class="filter-mover col-xm-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">-->
			<!--			<a href="filterMover.php"><i class="fa fa-filter"></i>Filter a mover</a>-->
	  <!--      		</div>-->
	  <!--      	</div> -->
	  <!--      </form>-->
	  <!--      </div>-->
	                
 <br><br>
 
<?php include 'footer.php'; ?>
