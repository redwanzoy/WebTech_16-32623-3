<?php
	require_once 'db_connect.php';
	
	$name="";
	$err_name="";
	$price="";
	$err_price="";
	$pimage="";
	$err_pimage="";
	
	$err_db="";

	$sname="";
	$err_sname="";
	$cname = "";
	$err_cname="";
	$pri="";
	$err_pri="";
	$time="";
	$err_time="";
	$image = "";
	$pperror = "";

	
	
	$hasError = false;  

	
	
	
	if(isset($_POST["add_session"]))
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
             $err_number="[number should only contain neumeric value]";
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
                $err_time="[at least one : needed";
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
		
		 
 
	if(empty($err_time) && empty($err_pri)&& empty($err_cname))
        {
            
            if(isset($_POST["add_session"]))
            {
                $result = insertSession($sname,$cname,$pri,$time,$image);
				
				if($result){
					header('Location:allsession.php');
				}else{
					$_SESSION['message'] = "Failed to upload!";
				}
                
            }
        }else{
			$_SESSION['message'] = "There are one or many error!";
		}
		
		
		
		
	
		
	}
            

				



	
	
	function insertSession($sname,$cname,$pri,$time,$image)
    {
        $query = "insert into sessions_info values(NULL,'$sname','$cname','$pri','$time','$image')";
		//echo $query;
        $result = execute($query);
		return $result;
    }
	function getSessions(){

		$query="select * from sessions_info";
		$rs = get($query);
		return $rs;
	}
	
	function getSession($id){
		$query="select * from sessions_info where id=$id";
		$rs = get($query);
		return $rs[0];
	}
	function updateSession($quantity){
		$query = "update sessions_info set pri='$quantity' where id='$id'";
		return execute($query);
		
	}
		
	function searchSession($key){
		$query = "select * from sessions_info where sname like '%$key%'";
		$rs = get ($query);
		return $rs;
	}
?>