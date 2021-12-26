


function onclick_User_panel_User_items(element)
{
    var val = element.text.trim();


    switch (val) {

        case "خانه":
            hide_all();
            document.getElementById("hc").style.display = 'block';
            break;

        case "فروشگاه جدید":
            hide_all();
            document.getElementById("ns").style.display = 'block';
            break;

        case "خرید کالای جدید":
            hide_all();
            document.getElementById("prc").style.display = 'block';
            break;

        case "دادن نظر":
            hide_all();
            document.getElementById("ncs").style.display = 'block';
            break;

        case "خارج شدن":
            window.location.href = "index.php";
            break;

    }


}




function hide_all()
{
    document.getElementById("hc").style.display='none';
    document.getElementById("ns").style.display='none';
    document.getElementById("ncs").style.display='none';
    document.getElementById("prc").style.display='none';
}