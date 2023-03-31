var page = 1;
$(function(){
    getProducts();

});

$("#show").click(function(){
    page++;
    getProducts(page);
});

function getProducts(page  = 1){
    $("#show").text("Loading...");
    $.ajax({
        type: "GET",
        url: ""
    });
}