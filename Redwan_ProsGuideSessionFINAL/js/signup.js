function get(id){
	return document.getElementById(id);
}
function checkUname(uname){
		var name=uname.value;
		var xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			 if(this.readyState==4 && this.status==200)
			 {
				 var rs=this.responseText;
				 rs=rs.trim();
				 if(rs == "true"){
				    get("err_uname").innerHTML="";
				 }
				 else{
					 get("err_uname").innerHTML= "Not Valid";
					 get("err_uname").style.color="red";
				
				 }
	            }
		};  
		xhttp.open("GET","checkuname.php?uname="+name,true);
		xhttp.send();
	}
	
	function checkNID(nid){
		var NID=nid.value;
		var xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			 if(this.readyState==4 && this.status==200)
			 {
				 var rs=this.responseText;
				 rs=rs.trim();
				 if(rs == "true"){
				    get("err_nid").innerHTML="";
				 }
				 else{
					 get("err_nid").innerHTML= "Already Registred";
					 get("err_nid").style.color="red";
				
				 }
	            }
		};  
		xhttp.open("GET","checknid.php?nid="+NID,true);
		xhttp.send();
	}
	