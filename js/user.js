var ca = decodeURIComponent(document.cookie).split(';');
for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
        c = c.substring(1);
    }
    if (c.indexOf("Username") == 0) {
        var l = document.createElement("li");
        l.innerHTML = "<a href=\"/login\">" + c.substring("Username=".length, c.length) + "</a>";
        document.getElementsByClassName("dropdown-menu drp-mnu")[0].insertAdjacentElement("afterbegin", l);
        l = document.getElementsByClassName("dropdown-menu drp-mnu")[0];
        l.childNodes[2].innerHTML = "<a href=\"\">Logout</a>";
        l.childNodes[2].childNodes[0].addEventListener("click", function() {
            document.cookie = "Username=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
            location.reload();
        });
        break;
    }
}