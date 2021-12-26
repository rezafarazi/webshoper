<link rel="stylesheet" href="Files/css/Style.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">








<i class="fa fa-bars" id="Menu_btn_Mobile" onclick="onclick_Menu_btn()"></i>
<i class="fa fa-close"></i>








<!--Main-->
<div class="all_User_Dush">






    <!--Main Center-->
    <center>
        <div class="User_Dush_Window">




























            <!--Main Window-->
            <div class="Main_Window">


                <div class="Card_Items_User_Store">

                    <div class="columns" style="display: flex!important;">

                        <a href="#" class="Card_Item"><div ></div></a>
                        <a href="#" class="Card_Item"><div ></div></a>


                    </div>
                    <div class="columns" style="display: flex!important;">

                        <a href="#" class="Card_Item"><div ></div></a>
                        <a href="#" class="Card_Item"><div ></div></a>


                    </div>
                    <div class="columns" style="display: flex!important;">

                        <a href="#" class="Card_Item"><div ></div></a>
                        <a href="#" class="Card_Item"><div ></div></a>


                    </div>

                </div>


            </div>
            <!--Main Window End-->














































            <!--Menu-->
            <div class="Menu_Main">


                <!--Top Icon-->
                <div class="Top_Menu_Icon">



                    <!--close Button In Mobile-->
                    <p id="close_buttton"><img src="Files/icon/close_icon.svg" width="20px" height="20px" onclick="onclick_close()"></p>
                    <!--close Button In Mobile-->


                </div>
                <!--Top Icon End-->

















                <!--Menu Items-->
                <div class="Manu_Items">

                    <ul>
                        <li><a href="#" onclick="onclick_Menu_Items(this)">خانه</a></li>
                        <li><a href="#" onclick="onclick_Menu_Items(this)">فروشگاه جدید</a></li>
                        <li><a href="#" onclick="onclick_Menu_Items(this)">خرید جدید</a></li>
                        <li><a href="#" onclick="onclick_Menu_Items(this)">ارسال نظر</a></li>
                        <li><a href="index.php">خروج</a></li>
                    </ul>

                </div>
                <!--Menu Items End-->














                <div class="Menu_Down">

                    <p><i style="color: #FFF!important;font-size: 10px!important;" class="fa fa-registered"></i>وب سایت گرومچی</p>




                </div>







            </div>
            <!--Menu End-->


































        </div>
    </center>
    <!--Main Center End-->








</div>
<!--Main End-->

























<style>


    *::-webkit-scrollbar
    {
        display: none;
    }


    *::selection
    {
        background: #f16d40;
        color: #FFF;
    }






    body
    {
        width: 100%;
        height: 100%;
        background: url("https://www.hdwallpaperslife.com/wp-content/uploads/2017/10/mountain_peaks_4k-2560x1440.jpg");
        background-position: center;
        background-size: cover;
        background-attachment: fixed;

    }




    .User_Dush_Window
    {
        width: 60%;
        height: 70%;
        margin-top: 5%;
        display: inline-flex;
    }




    .Menu_Main
    {
        width: 25%;
        height: 100%;
        background: #d84315;
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;

    }



    .Main_Window
    {
        width: 80%;
        height: 100%;
        background: #FFF;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
        overflow: scroll;
    }



    .Top_Menu_Icon
    {
        width: 100%;
        height: 50px;
        background: url("Files/icon/iconWhite.png");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        margin-top: 10px;
    }



    .Manu_Items
    {
        width: 100%;
        /*padding-top: 20px;*/
        /*padding-bottom: 20px;*/
        margin-top: 50px;
    }








    .Manu_Items ul li
    {
        direction: ltr;
        text-align: center;
        text-align-last: center;
        padding-right: 45px;
        padding-bottom: 5px;
        padding-top: 5px;
        list-style: none;
    }





    .Manu_Items>ul>li>a
    {
        text-align: center;
        text-decoration: none;
        color: #FFF;
        font-family: 'vz';
        font-size: 16px;
    }



    .Manu_items>ul>li>a:hover
    {
        text-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }










    .Menu_Down
    {
        width: 100%;
        margin-top: 40px;
        background:#d84315;
        position: sticky;
        top: 100%;
        padding-top: 10px;
        padding-bottom: 10px;
        border-bottom-right-radius: 10px;

    }





    #Menu_btn_Mobile
    {
        float: right;
        margin: 20px;
        position: absolute;
        position: static;
        direction: rtl;
        cursor: pointer;
        display: none;
    }






    .Menu_Down>p
    {
        color: #FFF;
        font-family: 'vz';
        font-size: 12px;
    }



    .Card_Items_User_Store
    {
        width: 90%;
        margin: 0 auto;
        margin-top: 20px;
        margin-bottom: 35px;
        overflow: scroll;
    }





    .Card_Item
    {
        width: 50%;
        height: 150px;
        border: 1px solid #CCC;
        border-radius: 3px;
        margin: 10px;
    }




    .Card_Item:hover
    {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        transition: all 0.5s ease-in-out;

    }





    #close_buttton
    {
        display: none;
    }













    @media screen and (max-width: 760px)
    {

        #Menu_btn_Mobile
        {
            display: block;
        }


        .Menu_Main
        {
            left: 110%;
            top: 0;
            position: absolute;
            z-index: 9999999;
            border-radius: 0px;
            width: 250px;
        }



        .Main_Window
        {
            width: 100%;
            border-radius: 10px;
            height: 700px;
            margin-bottom: 50px;
        }


        .Card_Items_User_Store
        {
            display: inline;
        }


        .User_Dush_Window
        {
            width: 80%;
        }


        #close_buttton
        {
            
            display: block;
            position: sticky;
            float: left;
            margin: 15px;
            margin-left: 25px;
            color: #FFF;
            cursor: pointer;


        }


    }










</style>




<script src="Files/js/jquery-1.11.1.min.js"></script>
<script>




    var open_Manu_Mobile=false;



    function onclick_Menu_btn(e)
    {


        var wid=$(window).width();;

        $(".Menu_Main").css({width: (wid)});


        $("#close_buttton").css({transform: "rotate(360deg)"});
        $("#close_buttton").css({transition: "all 0.7s ease-in-out"});
        $("#close_buttton").css({transform: "rotate(0deg)"});
        $("#close_buttton").css({transition: "all 0.7s ease-in-out"});



        // $(".Menu_Main").animate({left: (wid-250) }, 300);
        $(".Menu_Main").animate({left: 0 }, 300);
        open_Manu_Mobile=true;



    }






    function onclick_close(e)
    {
        $("#close_buttton").css({transform: "rotate(360deg)"});
        $("#close_buttton").css({transition: "all 1s ease-in-out"});
        $(".Menu_Main").animate({left: "110%" }, 300);
        open_Manu_Mobile=false;
    }





    $(window).resize(function ()
    {

        var wid = $(window).width();

        if(wid>=760)
        {
            $(".Menu_Main").css({width: "25%"});
        }
        else {


            $(".Menu_Main").css({width: (wid)});


            if (open_Manu_Mobile) {

                $(".Menu_Main").css({left: (0)});
            }

        }


    });











    function onclick_Menu_Items(e)
    {
        var val=e.text.trim();


        switch (val)
        {
            case "خانه":

            break;
            case "فروشگاه جدید":
                window.open ("User_Panle/New_Store.php", "mywindow","status=1,toolbar=1");
            break;
            case "خرید جدید":
                window.open ("User_Panle/price.php", "mywindow","status=1,toolbar=1");
            break;
            case "ارسال نظر":
                window.open ("User_Panle/New_User_Command.php", "mywindow","status=1,toolbar=1");
            break;

        }


    }











</script>





















