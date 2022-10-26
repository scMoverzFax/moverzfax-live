 <?php include 'myheader.php' ?>
  <title>Registration</title>
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
             padding: 0 5%;
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
            padding:0 5px;
             margin:0 50px 10px 0;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.18);
            -moz-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            -webkit-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            background-color: #85CA63;
            border-color: none;
        }
        .row .button-mf:hover{
            background-color: #67bd3c;
            color: white;
            transition:all .5s;
        }

        .row .button-reset{
            font-size: 15px;
            color: white;
           
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.18);
            -moz-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            -webkit-box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.18);
            background-color:#FF3333;
            border-color: none;
        }
        .row .button-reset:hover{
            background-color: #FF0000;
            color: white;
            transition:all .5s;
        }
        .bg-form hr{
            padding:0;
         }

        textarea{
            height: 100px;
            font-family: cursive;
        }
        /* Desktop-mobile approach --------------------------------------------------------------*/

/* smaller than Desktop HD */
@media (max-width: 1200px) {}

/* smaller than desktop */
@media (max-width: 900px) {
    .bg-form{
         margin: 0 auto;
         width: 90%;
         background-color: #f6f6f6;
         border-radius: 10px 10px;
     }
}

/* smaller than tablet */
@media (max-width: 660px) {
    
}

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
    </style>

 <!-- Start of Document ----------------------------------------------->

  <div class="b-container">
      <div class="in-container">
        <div class="bg-form">
        <h4 align="center">Register</h4>
        <hr>


        <form name="myform" action="data.php" method="post">
            <div class="row">
              <div class="twelve columns">
                <label>Your Catagory<sup style="color: red">*</sup></label>
                <label class="four columns">
                    <input type="radio" name="ca" vlaue="mo" id="flexRadioDefault1">
                    <span class="label-body">Mover</span>
                </label>
                <label class="four columns">
                    <input type="radio" name="ca" value="cu" id="flexRadioDefault2" checked>
                    <span class="label-body">Customer</span>
                </label>              
              </div>
            
            </div>
            <div class="row">
            <label for="respsectOfCost">Your Personal Details :</label>
              <div class="twelve columns">
                <label for="inputdefault">Email<sup style="color: red">*</sup></label>
                <input class="u-full-width" type="email" id="email" name="em" placeholder="Enter email" value="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@gmail.com">
              </div>
            </div>
            <div class="row">
                <div class="six columns">
                    <label for="inputlg">Country<sup style="color: red">*</sup><br></label>
                    <select class="u-full-width" name="co" id="co" required>
                        <option value="1"  selected>United States</option>
                        <option value="2" >Canada</option>
                    </select>
                  </div>
                <div class="six columns">
                    <label for="sel1">State<sup style="color: red">*</sup><br></label>
                    <select class="u-full-width" name="st" id="st" required>
                        <option value="" selected></option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                        <option value="DC">District of Columbia</option>
                        <option value="AB">Alberta</option>
                        <option value="BC">British Columbia</option>
                        <option value="MB">Manitoba</option>
                        <option value="NB">New Brunswick</option>
                        <option value="NL">New Foundland</option>
                        <option value="NT">NorthWest Territories</option>
                        <option value="NS">Nova Scotia</option>
                        <option value="ON">Ontario</option>
                        <option value="PE">Prince Edward Island</option>
                        <option value="QC">Quebec</option>
                        <option value="SK">Saskatchewan</option>
                        <option value="YT">Yukon</option>
                        <option value="NU">Nunavut</option>
                    </select>
                </div>
              </div>

            <div class="row">
            <div class="six columns">
                <label for="sel1">City<sup style="color: red">*</sup></label>
                <select class="u-full-width" name="cii" id="cii" required>
                    <option value="" selected></option>
                    <option value="NB">New Brunswick</option>
                    <option value="11838" >Aberdeen</option>
                    <option value="11839" >Abingdon</option>
                    <option value="11840" >Annapolis</option>
                    <option value="11841" >Arnold</option>
                    <option value="11244" >Baltimore</option>
                    <option value="11842" >Bel Air</option>
                    <option value="11843" >Beltsville</option>
                    <option value="11844" >Berlin</option>
                    <option value="11845" >Bishopville</option>
                    <option value="11846" >Bowie</option>
                    <option value="11847" >Brentwood</option>
                    <option value="11848" >Cambridge</option>
                    <option value="11849" >Capital Heights</option>
                    <option value="11850" >Capitol Heights</option>
                    <option value="11851" >Centreville</option>
                    <option value="11852" >Chester</option>
                    <option value="11853" >Chestertown</option>
                    <option value="11854" >Chevy Chase</option>
                    <option value="11855" >Clarksburg</option>
                    <option value="11856" >Clinton</option>
                    <option value="11857" >College Park</option>
                    <option value="11858" >Columbia</option>
                    <option value="11859" >Cumberland</option>
                    <option value="11860" >Davidsonville</option>
                    <option value="11861" >Derwood</option>
                    <option value="11862" >District Heights</option>
                    <option value="11863" >Easton</option>
                    <option value="11864" >Elkridge</option>
                    <option value="11865" >Elkton</option>
                    <option value="11866" >Ellicott City</option>
                    <option value="11867" >Finksburg</option>
                    <option value="11868" >Forestville</option>
                    <option value="11869" >Fort Washington</option>
                    <option value="11870" >Frederick</option>
                    <option value="11240" >Gaithersburg</option>
                    <option value="11871" >Germantown</option>
                    <option value="11872" >Glen Burnie</option>
                    <option value="11873" >Hagerstown</option>
                    <option value="11874" >Halethorpe</option>
                    <option value="11875" >Hampstead</option>
                    <option value="11876" >Hanover</option>
                    <option value="11877" >Hyattsville</option>
                    <option value="11878" >Ijamsville</option>
                    <option value="11879" >Jessep</option>
                    <option value="11880" >Jessup</option>
                    <option value="11881" >Kensington</option>
                    <option value="11882" >Keymar</option>
                    <option value="13146" >kkkkkkkk</option>
                    <option value="11883" >Landover</option>
                    <option value="11884" >Lanham</option>
                    <option value="11885" >Laurel</option>
                    <option value="11886" >Lexington Park</option>
                    <option value="11887" >Linthicum</option>
                    <option value="11888" >Linthicum Heights</option>
                    <option value="11889" >Lutherville</option>
                    <option value="11890" >Lutherville Timonium</option>
                    <option value="11891" >Manchester</option>
                    <option value="11892" >Mechanicsville</option>
                    <option value="11893" >Mitchellville</option>
                    <option value="11894" >Montgomerry Village</option>
                    <option value="11895" >Montgomery Village</option>
                    <option value="11896" >Mt Airy</option>
                    <option value="11897" >Newburg</option>
                    <option value="13145" >nuzvid</option>
                    <option value="11898" >Oakland</option>
                    <option value="11899" >Ocean City</option>
                    <option value="11900" >Odenton</option>
                    <option value="11901" >Owings</option>
                    <option value="11902" >Owings Mills</option>
                    <option value="11903" >Parkville</option>
                    <option value="11904" >Potomac</option>
                    <option value="11905" >Randallstown</option>
                    <option value="11906" >Reisterstown</option>
                    <option value="11246" >Rockville</option>
                    <option value="11241" >Rosedale</option>
                    <option value="11243" >Rossville</option>
                    <option value="11907" >Salisbury</option>
                    <option value="11908" >Savage</option>
                    <option value="11909" >Seat Plesant</option>
                    <option value="11910" >Severn</option>
                    <option value="11911" >Silver Spring</option>
                    <option value="11912" >Smithsburg</option>
                    <option value="11913" >Street</option>
                    <option value="11914" >Suitland</option>
                    <option value="11915" >Temple Hills</option>
                    <option value="11916" >Timonium</option>
                    <option value="11917" >Upper Marlboro</option>
                    <option value="11918" >Waldorf</option>
                    <option value="11919" >Westminster</option>
                    <option value="other">Other Location</option>
                </select>
                </div>
            <div class="six columns">
                <label for="inputdefault"> Zip Code<sup style="color: red">*</sup></label>
                <input class="u-full-width" type="number" name="zi" id="zi" placeholder="Enter Zip Code" value="" required>
            </div>
            </div>
            <div class="row">
                <div class="ten columns">
                    <label for="inputdefault"> Your Password<sup style="color: red">*</sup></label>
                    <input class="u-full-width"  type="password" id="" name="yo" placeholder="********" required>
                </div>
            </div>
            <div class="row">
                <div class="ten columns">
                    <label for="inputdefault"> Confirm Password<sup style="color: red"></sup></label>
                    <input class="u-full-width"  type="password" id="pas" oninput="myfun1()" name="po"  placeholder="********" required>
                    <br>
                    <span id="mess" style="color:red; font-size:15px;"></span>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <button value="submit" class="button button-mf float-left" type="submit">Create Account</button>
                    <button type="reset" class="button button-reset float-left">Reset</button>
                </div>
            </div>
          </form>


          <hr>
      </div>
   
    </div>
   
  </div>

<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 
 
 
 
<!--<div class="container">-->
<!-- <center> <h4 style="color:grey;">Home > Register</h4> </center>-->
  
<!--  <form name="myform" action="data.php" method="post">-->
<!--  <div class="form-group">-->
<!--	<label>Your Catagory<sup style="color: red">*</sup></label>-->
	
<!--	<div class="form-check">-->
<!--	  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">-->
<!--	  Mover-->
<!--	</div>-->
<!--	<div class="form-check">-->
<!--	  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>-->
<!--	  <label class="form-check-label" for="flexRadioDefault2">-->
<!--		Customer-->
<!--	  </label>-->
<!--	</div>-->
    		
<!--  </div>-->

<!--   <div class="form-group">-->
<!--    <b>Your Personal Details</b><br><br>-->

<!--      <label for="inputdefault">Email<sup style="color: red">*</sup></label>-->
<!--      <input class="form-control"  type="email" id="email" name="em" placeholder="Enter email" value="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@gmail.com">-->
<!--    </div>-->


<!--    <div class="form-group">-->
<!--      <label for="inputlg">Country<sup style="color: red">*</sup><br></label>-->
<!--      <select class="form-control" name="co" required >-->
<!--	     <option value="1"  selected="">United States</option>-->
<!--	     <option value="2" >Canada</option>-->
<!--        </select>-->
<!--    </div>-->

<!--  <div class="form-group">-->
<!--      <label for="sel1">State<sup style="color: red">*</sup><br></label>-->
<!--      <select class="form-control" name="st" id="st" required>-->
<!--	        	                  <option value="" selected></option>-->
<!--                                                    <option value="AL">Alabama</option>-->
<!--                                                    <option value="AK">Alaska</option>-->
<!--                                                    <option value="AZ">Arizona</option>-->
<!--                                                    <option value="AR">Arkansas</option>-->
<!--                                                    <option value="CA">California</option>-->
<!--                                                    <option value="CO">Colorado</option>-->
<!--                                                    <option value="CT">Connecticut</option>-->
<!--                                                    <option value="DE">Delaware</option>-->
<!--                                                    <option value="FL">Florida</option>-->
<!--                                                    <option value="GA">Georgia</option>-->
<!--                                                    <option value="HI">Hawaii</option>-->
<!--                                                    <option value="ID">Idaho</option>-->
<!--                                                    <option value="IL">Illinois</option>-->
<!--                                                    <option value="IN">Indiana</option>-->
<!--                                                    <option value="IA">Iowa</option>-->
<!--                                                    <option value="KS">Kansas</option>-->
<!--                                                    <option value="KY">Kentucky</option>-->
<!--                                                    <option value="LA">Louisiana</option>-->
<!--                                                    <option value="ME">Maine</option>-->
<!--                                                    <option value="MD">Maryland</option>-->
<!--                                                    <option value="MA">Massachusetts</option>-->
<!--                                                    <option value="MI">Michigan</option>-->
<!--                                                    <option value="MN">Minnesota</option>-->
<!--                                                    <option value="MS">Mississippi</option>-->
<!--                                                    <option value="MO">Missouri</option>-->
<!--                                                    <option value="MT">Montana</option>-->
<!--                                                    <option value="NE">Nebraska</option>-->
<!--                                                    <option value="NV">Nevada</option>-->
<!--                                                    <option value="NH">New Hampshire</option>-->
<!--                                                    <option value="NJ">New Jersey</option>-->
<!--                                                    <option value="NM">New Mexico</option>-->
<!--                                                    <option value="NY">New York</option>-->
<!--                                                    <option value="NC">North Carolina</option>-->
<!--                                                    <option value="ND">North Dakota</option>-->
<!--                                                    <option value="OH">Ohio</option>-->
<!--                                                    <option value="OK">Oklahoma</option>-->
<!--                                                    <option value="OR">Oregon</option>-->
<!--                                                    <option value="PA">Pennsylvania</option>-->
<!--                                                    <option value="RI">Rhode Island</option>-->
<!--                                                    <option value="SC">South Carolina</option>-->
<!--                                                    <option value="SD">South Dakota</option>-->
<!--                                                    <option value="TN">Tennessee</option>-->
<!--                                                    <option value="TX">Texas</option>-->
<!--                                                    <option value="UT">Utah</option>-->
<!--                                                    <option value="VT">Vermont</option>-->
<!--                                                    <option value="VA">Virginia</option>-->
<!--                                                    <option value="WA">Washington</option>-->
<!--                                                    <option value="WV">West Virginia</option>-->
<!--                                                    <option value="WI">Wisconsin</option>-->
<!--                                                    <option value="WY">Wyoming</option>-->
<!--                                                    <option value="DC">District of Columbia</option>-->
<!--                                                    <option value="AB">Alberta</option>-->
<!--                                                    <option value="BC">British Columbia</option>-->
<!--                                                    <option value="MB">Manitoba</option>-->
<!--                                                    <option value="NB">New Brunswick</option>-->
<!--                                                    <option value="NL">New Foundland</option>-->
<!--                                                    <option value="NT">NorthWest Territories</option>-->
<!--                                                    <option value="NS">Nova Scotia</option>-->
<!--                                                    <option value="ON">Ontario</option>-->
<!--                                                    <option value="PE">Prince Edward Island</option>-->
<!--                                                    <option value="QC">Quebec</option>-->
<!--                                                    <option value="SK">Saskatchewan</option>-->
<!--                                                    <option value="YT">Yukon</option>-->
<!--                                                    <option value="NU">Nunavut</option>-->
<!--	          </select>-->
<!--    </div>-->


<!--    <div class="form-group">-->
<!--      <label for="sel1">City<sup style="color: red">*</sup></label>-->
<!--      <select class="form-control" name="cii" id="cii" required><option value="" selected></option>-->
		
<!--        <option value="NB">New Brunswick</option>-->
<!--        <option value="11838" >Aberdeen</option>-->
<!--        <option value="11839" >Abingdon</option>-->
<!--        <option value="11840" >Annapolis</option>-->
<!--        <option value="11841" >Arnold</option>-->
<!--        <option value="11244" >Baltimore</option>-->
<!--        <option value="11842" >Bel Air</option>-->
<!--        <option value="11843" >Beltsville</option>-->
<!--        <option value="11844" >Berlin</option>-->
<!--        <option value="11845" >Bishopville</option>-->
<!--        <option value="11846" >Bowie</option>-->
<!--        <option value="11847" >Brentwood</option>-->
<!--    <option value="11848" >Cambridge</option>-->
<!--    <option value="11849" >Capital Heights</option>-->
<!--    <option value="11850" >Capitol Heights</option>-->
<!--    <option value="11851" >Centreville</option>-->
<!--    <option value="11852" >Chester</option>-->
<!--    <option value="11853" >Chestertown</option>-->
<!--    <option value="11854" >Chevy Chase</option>-->
<!--    <option value="11855" >Clarksburg</option>-->
<!--    <option value="11856" >Clinton</option>-->
<!--    <option value="11857" >College Park</option>-->
<!--    <option value="11858" >Columbia</option>-->
<!--    <option value="11859" >Cumberland</option>-->
<!--    <option value="11860" >Davidsonville</option>-->
<!--    <option value="11861" >Derwood</option>-->
<!--    <option value="11862" >District Heights</option>-->
<!--    <option value="11863" >Easton</option>-->
<!--    <option value="11864" >Elkridge</option>-->
<!--    <option value="11865" >Elkton</option>-->
<!--    <option value="11866" >Ellicott City</option>-->
<!--    <option value="11867" >Finksburg</option>-->
<!--    <option value="11868" >Forestville</option>-->
<!--    <option value="11869" >Fort Washington</option>-->
<!--    <option value="11870" >Frederick</option>-->
<!--    <option value="11240" >Gaithersburg</option>-->
<!--    <option value="11871" >Germantown</option>-->
<!--    <option value="11872" >Glen Burnie</option>-->
<!--    <option value="11873" >Hagerstown</option>-->
<!--    <option value="11874" >Halethorpe</option>-->
<!--    <option value="11875" >Hampstead</option>-->
<!--    <option value="11876" >Hanover</option>-->
<!--    <option value="11877" >Hyattsville</option>-->
<!--    <option value="11878" >Ijamsville</option>-->
<!--    <option value="11879" >Jessep</option>-->
<!--    <option value="11880" >Jessup</option>-->
<!--    <option value="11881" >Kensington</option>-->
<!--    <option value="11882" >Keymar</option>-->
<!--    <option value="13146" >kkkkkkkk</option>-->
<!--    <option value="11883" >Landover</option>-->
<!--    <option value="11884" >Lanham</option>-->
<!--    <option value="11885" >Laurel</option>-->
<!--    <option value="11886" >Lexington Park</option>-->
<!--    <option value="11887" >Linthicum</option>-->
<!--    <option value="11888" >Linthicum Heights</option>-->
<!--    <option value="11889" >Lutherville</option>-->
<!--    <option value="11890" >Lutherville Timonium</option>-->
<!--    <option value="11891" >Manchester</option>-->
<!--    <option value="11892" >Mechanicsville</option>-->
<!--    <option value="11893" >Mitchellville</option>-->
<!--    <option value="11894" >Montgomerry Village</option>-->
<!--    <option value="11895" >Montgomery Village</option>-->
<!--    <option value="11896" >Mt Airy</option>-->
<!--    <option value="11897" >Newburg</option>-->
<!--    <option value="13145" >nuzvid</option>-->
<!--    <option value="11898" >Oakland</option>-->
<!--    <option value="11899" >Ocean City</option>-->
<!--    <option value="11900" >Odenton</option>-->
<!--    <option value="11901" >Owings</option>-->
<!--    <option value="11902" >Owings Mills</option>-->
<!--    <option value="11903" >Parkville</option>-->
<!--    <option value="11904" >Potomac</option>-->
<!--    <option value="11905" >Randallstown</option>-->
<!--    <option value="11906" >Reisterstown</option>-->
<!--    <option value="11246" >Rockville</option>-->
<!--    <option value="11241" >Rosedale</option>-->
<!--    <option value="11243" >Rossville</option>-->
<!--    <option value="11907" >Salisbury</option>-->
<!--    <option value="11908" >Savage</option>-->
<!--    <option value="11909" >Seat Plesant</option>-->
<!--    <option value="11910" >Severn</option>-->
<!--    <option value="11911" >Silver Spring</option>-->
<!--    <option value="11912" >Smithsburg</option>-->
<!--    <option value="11913" >Street</option>-->
<!--    <option value="11914" >Suitland</option>-->
<!--    <option value="11915" >Temple Hills</option>-->
<!--    <option value="11916" >Timonium</option>-->
<!--    <option value="11917" >Upper Marlboro</option>-->
<!--    <option value="11918" >Waldorf</option>-->
<!--    <option value="11919" >Westminster</option>-->
<!--        <option value="other">Other Location</option>	-->
<!--	      </select>-->
<!--    </div>-->


<!--    <div class="form-group">-->
<!--      <label for="inputdefault"> Zip Code<sup style="color: red">*</sup></label>-->
<!--      <input class="form-control"  type="number" name="zi" id="zi" placeholder="Enter Zip Code" value="" required>-->
<!--    </div>-->

<!-- <div class="form-group">-->
<!--      <label for="inputdefault"> Your Password<sup style="color: red">*</sup></label>-->
<!--      <input class="form-control"  type="password" id="pass" name="yo" placeholder="********" required>-->
<!--    </div>-->

<!-- <div class="form-group">-->
<!--      <label for="inputdefault"> Confirm Password<sup style="color: red">*</sup></label>-->
<!--      <input class="form-control"  type="password" id="pas" oninput="myfun1()" name="po"  placeholder="********" required>-->
<!--      <br>-->
<!--      <span id="mess" style="color:red; font-size:15px;"></span>-->
<!--    </div>-->

<!--	<div class="form-group">-->
<!--		<button value="submit" class="btn btn-success" type="submit"><b>Create An Account</b></button>-->
	
<!--		<button type="reset" class="btn btn-danger" ><b>Cancle</b></button>-->
<!--	</div>-->
<!--  </form>-->
<!--</div>-->

<br>
<br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
          function myfun1(){
          var a = document.getElementById("pass").value;
          var b = document.getElementById("pas").value;
            if(a.length < 5){
                      document.getElementById("mess").innerHTML="**Password Length Must Be greater than 5 digit**";   
                }   
                else if(a!=b){
                      document.getElementById("mess").innerHTML="**Password And Confirm password are Not Mathing**";
                      return false;
                } 
                else{
                      document.getElementById("mess").innerHTML="";
                }
            }
    </script>
<?php include_once 'footer.php';?> 

