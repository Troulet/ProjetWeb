
function Logout()
{
    var xhr = new XMLHttpRequest();
	xhr.open("GET", "http://localhost/Public/Logout", true);
	xhr.send(null);
}

document.getElementById("deconnect_btn").onclick = function()
{
    Logout();
}

