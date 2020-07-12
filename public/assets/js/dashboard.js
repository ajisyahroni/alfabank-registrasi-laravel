(function () {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}())


function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

function openNav() {
    var sideWidth = document.getElementById("mySidenav").style.width
    var main = document.getElementById("main").style.marginLeft

    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";

    if (sideWidth == "250px" && main == "250px") {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }



}

