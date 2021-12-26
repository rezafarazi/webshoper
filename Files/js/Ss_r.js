

function onclick_User_panel_Store_items(element)
{


    var val=element.text.trim();

    switch (val)
    {

        case "کالای جدید":
            hide_all();
            document.getElementById("hc").style.display='block';
            break;

        case "تغییر اطلاعات کالا":
            hide_all();
            document.getElementById("ns").style.display='block';
            break;

        case "مشاهده نظرات":
            window.open ("http://localhost:63342/Reza_Web_Prj_StartUp/Commands_For.php", "mywindow","status=1,toolbar=1");
            break;

        case "خارج شدن":
            window.location.href="index.php";
            break;

    }

}







function hide_all()
{
    document.getElementById("hc").style.display='none';
    document.getElementById("ns").style.display='none';
    document.getElementById("ncs").style.display='none';
}