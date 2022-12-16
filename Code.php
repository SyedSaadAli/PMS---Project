<?php 

include('security.php');

// echo "Working";

if(isset($_POST['Appointment']))
{
	// echo "Working";
if(isset($_SESSION['Email']))
{
  $Name = $_POST['Name'];
  $Phone = $_POST['Phone'];
  $Email = $_POST['Email'];
  $DOB = $_POST['DOB'];
  $Gender = $_POST['Gender'];
  

  $query = "INSERT INTO appointment (P_Name,P_DOB,P_Gender,P_Phone,P_Email) VALUES 
  ('$Name','$DOB','$Gender','$Phone','$Email')";
  $query_run = mysqli_query($connection, $query);

    $query = "SELECT * FROM appointment";
    $query_run = mysqli_query($connection, $query);

     if(mysqli_num_rows($query_run) > 0){
                while($row = mysqli_fetch_assoc($query_run)){
                           $Appointment_No = $row['Appointment_ID'];

                }}


   if($query_run)
    {
        $_SESSION['status'] = "Appointment Fixed! Your Appointment No is ".$Appointment_No;
        $_SESSION['status_code'] = "success";
        header('Location: appointment.php');
    }
    else
    {
        $_SESSION['status'] = "Appointment Not Fixed!";
        $_SESSION['status_code'] = "error";
        header('Location: appointment.php');
    }
}else{
        $_SESSION['status'] = "Please SignIn First!";
        $_SESSION['status_code'] = "error";
        header('Location: signin.php');
}
}

//--------------------------------------------------------------------------------------------

if(isset($_POST['Contact']))
{
   //echo "Working";
if(isset($_SESSION['Email']))
{

  $Name = $_POST['Name'];
  $Phone = $_POST['Phone'];
  $Email = $_POST['Email'];
  $Message = $_POST['Message'];
  

  $query = "INSERT INTO contact (Name,Email,Phone,Message) VALUES 
  ('$Name','$Email','$Phone','$Message')";
  $query_run = mysqli_query($connection, $query);
  

   if($query_run)
    {
        $_SESSION['status'] = "Message Delivered !";
        $_SESSION['status_code'] = "success";
        header('Location: contact-us.php');
    }
    else
    {
        $_SESSION['status'] = "Message Not Delivered !";
        $_SESSION['status_code'] = "error";
        header('Location: contact-us.php');
    }
}else{
        $_SESSION['status'] = "Please SignIn First!";
        $_SESSION['status_code'] = "error";
        header('Location: signin.php');
}
}


//--------------------------------------------------------------------------------------------

if(isset($_POST['SignUp_Btn']))
{
   // echo "Working";

  if($_POST['Password'] == $_POST['CP']){

  $FName = $_POST['FName'];
  $LName = $_POST['LName'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
 

  $query = "INSERT INTO register_user (F_Name,L_Name,Email,Password) VALUES 
  ('$FName','$LName','$Email','$Password')";
  $query_run = mysqli_query($connection, $query);
header('Location: signin.php');
  

}else{
   $_SESSION['status'] = "Password And Confirm Password Do Not Match!";
        $_SESSION['status_code'] = "success";
   header('Location: signup.php');
     
}

}
//--------------------------------------------------------------------------------------------



if(isset($_POST['signin_btn']))
{

  $Email = $_POST['Email'];
  $Password = $_POST['Password'];

     $query = "SELECT * FROM admin";
    $query_run = mysqli_query($connection, $query);

     if(mysqli_num_rows($query_run) > 0){
                while($row1 = mysqli_fetch_assoc($query_run)){
                   if($row1['Email'] === $Email AND $row1['Password'] ===  $Password ){

                     $_SESSION['Email'] = $row1['Email'] ;
                     

                      header('Location: admin/index.php');
                   }

                }
             }


    $query2 = "SELECT * FROM register_user";
    $query_run2 = mysqli_query($connection, $query2);

     if(mysqli_num_rows($query_run2) > 0){
                while($row2 = mysqli_fetch_assoc($query_run2)){
                   if($row2['Email'] === $Email AND $row2['Password'] ===  $Password ){
                     $_SESSION['Email'] = $row2['Email'] ;

                      header('Location: index.php');
                   }

                }
             }

                 $query3 = "SELECT * FROM doctor";
    $query_run3 = mysqli_query($connection, $query3);

     if(mysqli_num_rows($query_run3) > 0){
                while($row3 = mysqli_fetch_assoc($query_run3)){
                   if($row3['D_Email'] === $Email AND $row3['Password'] ===  $Password ){
                     $_SESSION['Email'] = $row3['D_Email'] ;

                      header('Location: doctor/index.php');
                   }

                }
             }
            if(!isset($_SESSION['Email'])){
   $_SESSION['status'] = "Wrong Email And Password !";
   $_SESSION['status_code'] = "success";
   header('Location: signin.php');
     
}

}

//--------------------------------------------------------------------------------------------

?>