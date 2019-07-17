globalVar = 0;


var updateProduct = function (){
    console.log(this);
    // window.location = "./edit_product.php?Title="+ this+"";
}

function deleteProduct(){
    console.log(this.id);
    var txt;
    var r = confirm("Do you want to delete '" +this.id+"' from the menu?");
    if (r == true) {    
        var query = "DELETE FROM tbl_products_209 WHERE Title='"+this.id +"';";
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
    } 
    else {
        // window.location = "./myMenu.php";
    }
}

$(document).ready(function(){

    //user image
    var pl = 1;
    var imagePerson = document.getElementById("personLink" +pl);
    var person = imagePerson.innerText.substring(1, imagePerson.innerText.length);
    console.log(person);
    var query = "SELECT Image FROM tb_users_209_1 WHERE username='"+person+"';";
    getImage(query,pl);
    pl++;

    var imagePerson = document.getElementById("personLink" +pl);
    var person = imagePerson.innerText.substring(1, imagePerson.innerText.length);
    console.log(person);
    var query = "SELECT Image FROM tb_users_209_1 WHERE username='"+person+"';";
    getImage(query,pl);
    pl++;

    //Starters
    var query = "SELECT Title,pic,Description,Type FROM tbl_products_209 WHERE Type='Starters';";
    addProducts(query);
    //Main Dishes
    query = "SELECT Title,pic,Description,Type FROM tbl_products_209 WHERE Type='Main Dishes';";
    addProducts(query);
    //Desserts
    query = "SELECT Title,pic,Description,Type FROM tbl_products_209 WHERE Type='Desserts';";
    addProducts(query);


});

var getImage = function(query,pl){
    $.post('query.php', { query: query }, function (res) {//switch to query.php
        console.log(query);
        if(res == '[]'){
            console.log('error occured1 - username or password are invalid');
        }
        else if (res == "NULL"){
            console.log('error occured2 - if there a problem in the query');
        }
        else {
            obj = JSON.parse(res)[0];//make res an JSON object

            document.getElementById("personImage" + pl).className = "circle";
            $("#personImage" + pl).attr("width","25px");
            $("#personImage" + pl).attr("height","25px");
            $("#personImage" + pl).attr("src", obj.Image);
        }
    });
} 


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
            console.log(res);
            obj = JSON.parse(res);//make res an JSON object
            var main = document.getElementsByClassName("mainDemo")[0];
            // main.innerHTML = obj[0].Type;
            for(i=0;i<obj.length;++i){
                var container = document.createElement("div");
                // container.class = "container";
                container.className = "container";
                var h3 = document.createElement("h3");
                h3.className = "h3";
                var row = document.createElement("div");
                // row.className = "row";

                var column = document.createElement("div");
                // column.className = "col-md-3 col-sm-6";
                column.className = "col-md-3";

                var product = document.createElement("div");
                product.className = "product-grid3";

                var imgProduct = document.createElement("div");
                imgProduct.className = "product-image3";

                var link = document.createElement("a");
                link.href = "#";
                var img = document.createElement("img");
                img.className = "img-thumbnail";
                img.src = obj[i].pic;
                // img.src(obj[0].pic);//need to place here link
                link.append(img);

                var ul = document.createElement("ul");
                ul.className = "social";
                var li1 = document.createElement("li");
                var linkIn1 = document.createElement("a");
                linkIn1.id = obj[i].Title;
                // linkIn1.id = "img_" + globalVar++;
                linkIn1.addEventListener("click",deleteProduct);
                // linkIn1.innerHTML = obj[i].Title;

                var i1 = document.createElement("i");
                i1.className = "fa fa-trash";

                linkIn1.append(i1);
                li1.append(linkIn1);
                ul.append(li1);

                var li2 = document.createElement("li");
                var linkIn2 = document.createElement("a");
                linkIn2.href = "./edit_product.php?Title="+ obj[i].Title+"";
                
                var i2 = document.createElement("i");
                i2.className = "fa fa-wrench";
                i2.addEventListener("click",updateProduct);
                linkIn2.append(i2);
                li2.append(linkIn2);
                ul.append(li2);
                var newProduct = document.createElement("span");
                newProduct.className = "product-new-label";

                imgProduct.append(link);
                imgProduct.append(ul);
                
                product.append(imgProduct);
                var content = document.createElement("div");
                content.className = "product-content";
                var newh3 = document.createElement("h3");
                newh3.className = "title";
                var newLink = document.createElement("a");
                newLink.href = "#";
                newLink.innerHTML = obj[i].Title;

                newh3.append(newLink);
                content.append(newh3);

                product.append(content);

                column.append(product);

                row.append(column);

                container.append(h3);
                container.append(row);
                var type = obj[0].Type;
                var typeLocation = document.getElementById(type);
                typeLocation.append(container);
            }
        }
    });
    
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

