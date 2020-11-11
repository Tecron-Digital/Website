
var allpost = document.querySelector('#allPosts');

function returnsearch(){
    var search = document.querySelector("#searchValue").value
    var url = "../includes/returnsearch.php?postsearch="+search+"";
   
var xhttp = new XMLHttpRequest();
allpost.innerHTML = "<center><i class='fa fa-loading' style ='font-size:50px'></i></center>";

xhttp.onload=function(){

allpost.innerHTML = this.responseText

}

xhttp.open("GET",url,true);
xhttp.send()

}
