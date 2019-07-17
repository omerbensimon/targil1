
$(document).ready(function () {
    $("#submitAdd").attr("onclick", "addMeal()");
    console.log("ready");

    $.getJSON( 'includes/dynamic_data.json', function( data ) {
        var span1 = document.createElement("span");
        var span2 = document.createElement("span");
        var span3 = document.createElement("span");
        $.each(data,function(key,val){
            if(key==1){
                span1.innerHTML = val;
                document.getElementById('Type1').append(span1);
            }
            else if(key==2){
                span2.innerHTML = val;
                document.getElementById('Type2').append(span2);
            }
            else if(key==3) {
                span3.innerHTML = val;
                document.getElementById('Type3').append(span3);
            }
        })
      });

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
});

var addMeal = function() {
    var title = $('#inputMeal').val();
    var des = $('#inputIngredients').val();
    var pic = $('#imageURL').val();
    var type1;
    var type2;
    var type3;
    var type;
    if(document.getElementById('inputType1').checked){
        type1 = $('#inputType1').val();
        console.log("pic: ",type1);
        type = $('#inputType1').next()[0].innerText;
        console.log(type);
    }
    if(document.getElementById('inputType2').checked){
        type2 = $('#inputType2').val();
        console.log("pic: ",type2);
        type = $('#inputType2').next()[0].innerText;
        console.log(type);
    }
    if(document.getElementById('inputType3').checked){
        type3 = $('#inputType3').val();
        console.log("pic: ",type3);
        type = $('#inputType3').next()[0].innerText;
        console.log(type);
    }

    console.log("title: ",title);
    console.log("des: ",des);
    console.log("pic: ",pic);
    console.log(type);
    var query = "INSERT INTO tbl_products_209(Title,pic,Description,Type) VALUES ('"+title+"', '"+pic+"', '"+des+"', '"+type+"');";
    console.log(query);
    $.post('query.php', { query: query }, function (res) {//switch to query.php

        if (res == "NULL"){
            console.log('error occured');
        }
        else {
            console.log(res);
            console.log("Product succesfuly inserted into the Data Base");
            window.location = "./myMenu.php";
        }
    });
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }


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
            obj = JSON.parse(res)[0];

            document.getElementById("personImage" + pl).className = "circle";
            $("#personImage" + pl).attr("width","25px");
            $("#personImage" + pl).attr("height","25px");
            $("#personImage" + pl).attr("src", obj.Image);
        }
    });
} 

// var x = document.getElementById('Type1');
// // x.getJSON();
// console.log(x);