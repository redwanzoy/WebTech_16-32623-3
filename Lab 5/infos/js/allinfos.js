
function MyAjaxFunc() {
  var xhttp = new XMLHttpRequest();
 
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      res = JSON.parse(this.responseText);
    
      var maincontainer = document.getElementById("main-container");
      var name;
      var l = Object.keys(res).length;
      console.log(l);
      var f;
      var e;
      var a;
      var r;
   

      for (i = 0; i < l; i++) {
        f = document.createElement("div");
        f.innerHTML = `
        <div class="infos-grid-container">
            <p>Infos Id :</p>
            <p>`+res[i].id+`</p>
            <p>Infos Status :</p>
            <p>`+res[i].status+`</p>
            <p>Category :</p>
            <p>`+res[i].catagory+`</p>
            <p>Publish Date :</p>
            <p>`+res[i].date+`</p>
            <img id="infos-img" ; src="`+res[i].images+`" alt="" srcset="">

            <p>Infos Title :</p>
            <p class="infos-title">`+res[i].title+`</p>
            <p>Infos Body :</p>
            <p class="infos-title">`+res[i].body+`</p>
            <br>
            
        

        `;

        maincontainer.appendChild(f);
      }
    }
	
  };

  xhttp.open("GET", "http://localhost/lab5/infos/control/getsentinfos.php", true);
 
  xhttp.send();
}