
function Logout()
{
    var xhr = new XMLHttpRequest();
	xhr.open("GET", "https://localhost/Public/Logout", true);
	xhr.send();
}

document.getElementById("deconnect_btn").onclick = function()
{
    Logout();
}

