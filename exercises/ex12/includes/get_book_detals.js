var bookName, bookPrice;
function getBookId(){
    var aKeyValue=window.location.search.substring(1).split('&'),
        bookId=aKeyValue[0].split("=")[1];
        return bookId;
}
$(document).ready(function(){
    $getJson
})