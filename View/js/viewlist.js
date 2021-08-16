   function view()
    {   

        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if (this.status===200) {
                  document.getElementById("viewajax").innerHTML = this.responseText;
            }
        }
        xhttp.open("GET","ViewlistAjax.php");
        xhttp.send();
    }