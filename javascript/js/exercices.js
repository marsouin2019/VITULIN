//comment faire pour mettre le texte en couleur (pas blanc)

//jquery est une librairie qui contient un ensemble de fonctions javascript

//en javascript

/*let listitems = document.querySelectorAll("li");
for (let i=0; i < listitems.length,i++ ;)
{
    listItem[i].classname = 'active';
    
    
}
*/

//en jquery
//$("li").addClass("active");

$("body").css("background-color", "blue");
$("body").css("color","yellow");
$("ul li").css("color","#fff");
$("a").css("color","red");
$(".nav-item").css("background-color", "gray");
$("li.list-group-item").css("background-color", "red");

// height()
//document.getElementById("info").innerHTML = $(window).height();

//innerHeight()
document.getElementById("info").innerHTML = $(".nav").innerHeight();

//width()
document.getElementById("info").innerHTML = $(".nav").width();

//innerWidth()
document.getElementById("info").innerHTML = $(".nav").innerWidth();

//addClass()
$("p").addClass(".dweb");
