
document.getElementById("serach_Text_Box").value="";

function onclick_a()
{
    var s=document.getElementById("serach_Text_Box").value;

    if(s.trim().toUpperCase()=="START"||s.trim()=="شروع")
    {
        window.location.href = "sign_log.php";
    }



}