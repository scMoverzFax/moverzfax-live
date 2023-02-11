<?php
    session_start();
    if(isset($_SESSION["id"])){
		$user_id = $_SESSION["id"];
    }else{
        $user_id = 0;
    }

    include 'connection.php';
    $function = isset($_REQUEST['function']) && !empty($_REQUEST['function'])?$_REQUEST['function']:" ";
    if($function == "search")
    {
            $usdot = isset($_REQUEST["usdot"])?$_REQUEST["usdot"]:NULL; 
            $sql = "SELECT usdot FROM mover_cart WHERE usdot = '".$usdot."' AND user_id = '".$user_id."'";
            $result = $con->query($sql);
            //if the usdot is not in the mover cart, search for it in mover register
            if(mysqli_num_rows($result) <= 0){
                $sql1 = "SELECT * FROM mover_register WHERE usdot = '".$usdot."'";
                // echo $sql1;die();
                $result1 = $con->query($sql1);
                if(mysqli_num_rows($result1) > 0){
                    $res = mysqli_fetch_assoc($result1);
                    $company_name = $res['company_name'];
                    $usdot = $res['usdot'];
                    $company_url = $res['company_website'];

                    //using the states abbreviation from mover_register to select for the state code from the state table
                    $sql2 = "SELECT id FROM state WHERE state.code = '".$res['states']."'";
                    $result2 = $con->query($sql2);
                    $res2 = mysqli_fetch_assoc($result2);
                    $state_id = $res2['id'];

                    $city_id = $res['city'];
                    $zipcode = $res['zip_code'];
                    $phone = $res['contact_number'];
                    $contact_person = $res['contact_person'];
                        $sql1 = "INSERT INTO mover_cart (company_name,usdot,company_url,state_id,city_id,zipcode,phone,contact_person,user_id)
                                VALUES ('".$company_name."',".$usdot.",'".$company_url."','".$state_id."','".$city_id."','".$zipcode."','".$phone."','".$contact_person."',".$user_id.")";
                        // echo $sql1; die();
                            if($con->query($sql1) === TRUE)
                            {
                                header('Location: ../home/select_company.php?usdot='.$usdot.'&status=as');//added sucessfully
                            }
                            else{ 
                                header('Location: ../home/select_company.php?usdot='.$usdot.'&status=rf');//request failed
                            }
                }
                else{
                    //this is where we want to check for the mover in the mover table and return stuff
                    $sql2 = "SELECT * FROM mover WHERE usdot = '".$usdot."'";
                    // echo $sql1;die();
                    $result2 = $con->query($sql2);
                    if(mysqli_num_rows($result2) > 0){
                        $res1 = mysqli_fetch_assoc($result2);
                        $company_name = $res1['name'];
                        $usdot = $res1['usdot'];
                        $company_url = $res1['url'];
                        $state_id = $res1['state_id'];
                        $city_id = $res1['city_id'];
                        $zipcode = $res1['zipcode'];
                        $phone = $res1['phone'];
                        $contact_person = $res1['contact_person'];
                            $sql4 = "INSERT INTO mover_cart (company_name,usdot,company_url,state_id,city_id,zipcode,phone,contact_person,user_id)
                                    VALUES ('".$company_name."',".$usdot.",'".$company_url."','".$state_id."','".$city_id."','".$zipcode."','".$phone."','".$contact_person."',".$user_id.")";
                            // echo $sql1; die();
                                if($con->query($sql4) === TRUE)
                                {
                                    header('Location: ../home/select_company.php?usdot='.$usdot.'&status=as');//added sucessfully
                                }
                                else{
                                    header('Location: ../home/select_company.php?usdot='.$usdot.'&status=rf');//request failed
                                }
                    } else{
                        header('Location: ../home/select_company.php?usdot='.$usdot.'&status=nr');
                    }
                }
            } else {
                header('Location: ../home/select_company.php?usdot='.$usdot.'&status=ae');//already exists
            }
                
    }
    else if($function == "delete")
    {
        $id = isset($_GET["id"])?$_GET["id"]:" ";
        $sql2 = "DELETE FROM mover_cart where id = ".$id."";
        
        if(mysqli_query($con,$sql2))
        {
            header('Location: ../home/select_company.php');
        }
        else{
            header('Location: ../home/index.php');
        }
    }
    else if($function == "select")
    {  
        $id = isset($_REQUEST["id"])?$_REQUEST["id"]:" ";
        $select = isset($_REQUEST["select"])?$_REQUEST["select"]:" ";
        if($select == "yes")
        {
            $sql3 = "UPDATE mover_cart SET is_selected = 1 WHERE id=".$id."" ;
            if(mysqli_query($con,$sql3))
            {
                header('Location: ../home/select_company.php');
            }
            else
            {
                header('Location: ../home/index.php');
            }
        }
        else
        {
            $sql3 = "UPDATE mover_cart SET is_selected = 0 WHERE id=".$id."" ;
            if(mysqli_query($con,$sql3))
            {
                header('Location: ../home/select_company.php');
            }
            else
            {
                header('Location: ../home/index.php');
            }
        }

    }
    else
    {
        header('Location: ../home/index.php');
    }
