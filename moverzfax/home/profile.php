<?php include "myheader.php";
defined('LOGIN') or exit('<h3 class="text-center my-5 py-5 ">Please Login First...</h3>');
?>
 <!-- Bootstrap CSS v5.0.2 -->
<style>

.form-control:focus {
    box-shadow: none;
    border-color: #82e546;
}
.profile-button {
    background: #82e546;
    box-shadow: none;
    border: none;
}
.profile-button:hover {
    background: rgba(102,255,51,.7);
}
.profile-button:focus {
    background: #82e546;
    box-shadow: none;
}
.profile-button:active {
    background: #82e546;
    box-shadow: none;
}
.back:hover {
    color: #82e546;
    cursor: pointer;
}
.labels {
    font-size: 11px
}
.add-experience:hover {
    background: #82e546;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>

<?php include '../model/profile_model.php'; ?>
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5 card-img" src="../img/user_image_dummy.png"><span class="text-black-50 ">Hello!</span><span class="font-weight-bold"><?php echo $_SESSION['first_name']." ".$_SESSION['last_name'] ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <form action="../model/update_user.php" method="post">
            <div class="p-3 py-5">
            <span style="color:red;font-size:14px;">Note : After Update the Profile Account will be Logged out. You Will Need to Login Again.</span>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" name="first_name" class="form-control" value="<?php echo $profile_details['first_name'];?>" ></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="last_name" class="form-control" value="<?php echo $profile_details['last_name'];?>" ></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" name="user_email" class="form-control" value="<?php echo $profile_details['email'];?>"></div>
                    <div class="col-md-12"><label class="labels">Contact Number</label><input type="text" name="user_contact" class="form-control" value="<?php echo $profile_details['contact_number'];?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">City</label><select name="user_city"  class="form-select" style="height:38px;"><?php include '../model/city.php'; ?></select></div>
                    <div class="col-md-6"><label class="labels">Zip Code</label><input type="text" name="user_zcode" class="form-control" value="<?php echo $profile_details['zip_code'];?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><select name="user_country"  class="form-select" style="height:38px;"><?php include '../model/country.php'; ?></select></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><select name="user_state"  class="form-select" style="height:38px;"><?php include '../model/state.php'; ?></select></div>
                </div>
                <div class="mt-5 text-center"><button class="btn profile-button" type="submit" name="submit" value="update_details">Update Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Change Password</span><button class="border px-3 add-experience" type="submit" name="submit" id="change_pass" value="change_pass"><i class="fa fa-key"></i>Update</button></div><br>
                <div class="col-md-12"><label class="labels">New Password</label><input id="npass" name="npass" type="password" class="form-control" placeholder="********" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Confirm New Password</label><input id="cnpass" oninput="confirmPass()" type="password" class="form-control" placeholder="********" value=""></div>
                <br>
                <span id="mess1" style="color:red; font-size:11px;"></span>
            </div>
        </div>
        </form>
    </div>
  </div>
  <script>
          function confirmPass(){
          var a = document.getElementById("npass").value;
          var b = document.getElementById("cnpass").value;
          var btn = document.getElementById("change_pass").value;

            if(a.length < 5){
                      document.getElementById("mess1").innerHTML="**Password Length Must Be greater than 5 digit**";
                      btn.style.display="none;";
                }   
                else if(a!=b){
                      document.getElementById("mess1").innerHTML="**Password And Confirm password are Not Mathing**";
                      return false;
                } 
                else{
                      document.getElementById("mess1").innerHTML="";
                }
            }
    </script>
  <?php include "footer.php" ?>
