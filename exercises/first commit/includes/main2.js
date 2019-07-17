var arrOfObj =[];
var flag = 0;
var counter = 0;


function addImage(){//this function in calles here and in line 222 - need to check who i need
    console.log("addImage");
    var img = document.createElement("img");
    img.setAttribute("src","images/tahini.png");
    var x = getElementById("starters");
    x.appendChild(img);
}



(function() {
    var obj;
    var count=0;


    
    $(document).ready(function(){

        //person image
        var x = getElementById("personImage");
        console.log(x);

        // $('#personImage').setAttribute()

        //Starters
        var query = "SELECT Title,pic,Description,Type FROM tbl_products_209 WHERE Type='Starters';";
        addProducts(query);
        //Main Dishes
        query = "SELECT Title,pic,Description,Type FROM tbl_products_209 WHERE Type='Main Dishes';";
        addProducts(query,);
        //Desserts
        query = "SELECT Title,pic,Description,Type FROM tbl_products_209 WHERE Type='Desserts';";
        addProducts(query);


    });
    var addProducts = function (query){
        $.post('query.php', { query: query }, function (res) {//switch to query.php
            console.log(query);
            if(res == '[]'){
                console.log('error occured1 - username or password are invalid');
            }
            else if (res == "NULL")
                console.log('error occured2 - if there a problem in the query');
            else {
                //authantication
                obj = JSON.parse(res);//make res an JSON object
                console.log(obj);
                $.each(obj, function(key, val) { 
                    var div = document.createElement("div");
                    div.className = "box1";
                    var img = document.createElement("img");
                    var p = document.createElement("p");
                    p.innerHTML = val.Title;//check this!
                    img.className = "img-thumbnail thumb m-r";
                    img.width = "250" + 'px';
                    img.setAttribute("src",val.pic);
                    img.setAttribute("width" , "250");
                    img.setAttribute("height" , "150");
                    img.id = "img_" + count;
                    count++;
            
                    div.appendChild(img);
                    div.appendChild(p);
                    div.addEventListener("click",showOptions2);
                    // div.setAttribute("pointer-events" , "none");
                    div.style.cursor = "pointer";
                    var type = val.Type;
                    var addImages = document.getElementById(type);
                    addImages.append(div);
                })
            }
        });
    };

    //click buttons
    $('#delete').click(function(){
        alert("Are you sure?");
        var obj = document.getElementById('modalLabel').innerHTML;

        var query = "DELETE FROM tbl_products_209 WHERE Title='"+obj +"';";
        console.log(query);
        $.post('query.php', { query: query }, function (res) {//switch to query.php
            if(res == '[]'){
                console.log('error occured1 - username or password are invalid');
            }
            else if (res == "NULL" || res == "null")
                console.log('error occured2 - if there a problem in the query');
            else {
                console.log("success");
                window.location = "./myMenu.php";
            }
        });
    });

    $('#update').click(function(){
        var x = document.getElementById('modalLabel').innerHTML;
        // var query = "SELECT * FROM tbl_products_209 Where Title='"+x+"';";
        // console.log(query);
        window.location = "./edit_product.php?Title="+ x +"";

    });

 })();

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

function addImage(){ 
    startersPic.push({"pic" : "images/tahini.png", "description" : "Tahini"});
  }

function showOptions2() {
    $('#optionModal').modal('show'); 
    document.getElementById("modalLabel").innerHTML = this.innerText;
    console.log(document.getElementById("modalLabel").innerHTML);
    return;
}