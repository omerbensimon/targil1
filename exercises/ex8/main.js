(function(){
    document.getElementById("google_search").onclick=showResult;
    function showResult(){
        console.log("showResult");

        const searchTerm = document.getElementById("form-search").value;
        const buttonsDiv=document.getElementById("buttonsDiv");
        const searchResultDiv=document.createElement("div");
        searchResultDiv.id="resultDiv";

        searchResultDiv.innerHTML="your search term is: " + searchTerm;
        buttonsDiv.appendChild(searchResultDiv);
    }
    document.getElementById("im_feeling_lucky").onclick=showDate;
    function showDate(){
        console.log("showDate");

        const logoDiv = document.getElementById("google_logo");
        const dateDiv = document.createElement("div");
        dateDiv.id="dateDiv";
        logoDiv.appendChild(dateDiv);
        document.getElementById("dateDiv").innerHTML=new Date().toISOString();

    }
})();
