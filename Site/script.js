function tooglePopupOn(clicked_id){
    document.getElementById("popup-1").classList.toggle("active");
    var content = linkJSON[clicked_id];
    document.getElementById("popup-title").innerHTML="Source link:";
    document.getElementById("popup-link-p").innerHTML=content[0];
    document.getElementById("popup-link").setAttribute('href', content[0]);
    document.getElementById("popup-content").innerHTML=content[1];
}
function tooglePopupOff(){
    document.getElementById("popup-1").classList.toggle("active");
}
var linkJSON =[];
$.getJSON("links.json", function(json) {
    for(i in json)
    {
        linkJSON[i] = json[i];
    }
});

function toggleMenu(){
    console.log("menu");
    document.getElementById("nav_containter").classList.toggle("active");
}