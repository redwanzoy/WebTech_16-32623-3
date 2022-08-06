function get(id){
	return document.getElementById(id);
}
function searchSession(e){ 
       if(e.value ==""){
		   get("suggesstion").innerHTML ="";
		   return;
	   }
	var xhr = new XMLHttpRequest();
	xhr.open("GET","search_session.php?key="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState == 4 && this.status == 200){
			get("suggesstion").innerHTML = this.responseText;
		}
	};
	xhr.send();
}