<?php
   
   if(isset($_SESSION['updated']) && $_SESSION['updated']==true)
	header("Location:successful.php");

	require_once 'db_connect.php';
    $sname="";
	$err_sname="";
	$cname = "";
	$err_cname="";
	$time="";
	$err_time="";

	$image="";

	$pri="";
	$err_pri="";
	$id=$_GET['id'];
	
	$hasError = true;


//Update User Function
    function updateUser( $id,$sname,$cname,$pri,$time,$image)
    {
        $query = "update sessions_info set sname='$sname', pri='$pri', cname ='$cname', image='$image'  where id='$id'";
        $result = execute($query);
		return $result;
	}
		
	if(isset($_POST["updateDetails"]))
	{
	 if(empty($_POST["sname"]))
         {
             $err_sname="[Name Requires]";
			 $hasError=false;
         }
         else
         {
             $sname=htmlspecialchars($_POST["sname"]);
         }
		 if(empty($_POST["cname"]))
		 {
			 $err_cname="[Coach Required]";
			 $hasError=false;
		 }
		 
		 else
		 {
			 $cname=htmlspecialchars($_POST["cname"]);
		 }
		if(empty($_POST["pri"]))
		 {
			 $err_pri="[price Required]";
			 $hasError=false;
		 }
         elseif(!is_numeric($_POST["pri"]))
         {
             $err_pri="[number should only contain neumeric value]";
			 $hasError=false;
         }		
		else{
			 $pri=htmlspecialchars($_POST["pri"]);
		 }
		
       
		if(empty($_POST["time"]))
        {
            $err_time="[time required]";
			$hasError=false;

        }
        elseif(!strpos($_POST["time"],":"))
        {
            $err_time="[time must contain ':' sign]";
			$hasError=false;
        }
        else
        {
            $pos_at  = strpos($_POST["time"],":");
            if(!strpos($_POST["time"],":",$pos_at))
            {
                $err_time="[at least one : needed]";
				$hasError=false;
            }
            else
            {
                $time=htmlspecialchars($_POST["time"]);
            }
             
         }
         
		$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));


	$allow = array('jpg','jpeg','png');
	if(!empty($fileName)){
	if (in_array($fileActualExt, $allow)) {
		if($fileError ===0){
			if($fileSize < 4194304){
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDes = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDes);
				$ppm = "Image sucessfully uploaded";
				$image = $fileDes;
			}
			else{
				$pperror = "File size too large (Maximum file size- 4MB)";
			}
		}
		else{
			$pperror = "There was an error uploading your file!";
		}
	}
	else{
		$pperror = "Only images are allowed (jpeg, jpg, png)";
	}
}
	else{
		$pperror = "Please Select an image";
	}
		
	 
	
	 
	 
	
	
      if(empty($err_time)  && empty($err_sname) && empty($err_cname)&& empty($err_pri))
        {
            
            if(isset($_POST["updateDetails"]))
            {
                $result = updateUser( $id,$cname,$sname,$pri,$time,$image);

				
				if($result){
					$_SESSION['message'] = "Successfully Updated!";
				}else{
					$_SESSION['message'] = "Failed to Update!";
				}
                
            }
        }else{
			$_SESSION['message'] = "There are one or many error!";
		}
		

		
	}




?>