<meta name="theme-color" content="#FFF">
<meta name="msapplication-navbutton-color" content="#FFF">
<meta name="apple-mobile-web-app-status-bar-style" content="#FFF">




<html>
<head>

    <title>به وب سایت گرومچی خوش آمدید</title>
    <link rel="stylesheet" href="Files/css/Style.css" type="text/css">
    <link rel="stylesheet" href="Files/css/Bulma/bulma.css" type="text/css">
    <link rel="stylesheet" href="Files/css/Bulma/Menu_Style.css" type="text/css">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">










</head>
<body>


<!----------_Menu-------------->
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">

        <div class="navbar-item" style="width: 50px;"></div>

        <a class="navbar-item" href="#">
            <img src="Files/icon/icon.png" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">


        <div class="navbar-end">


            <div class="navbar-item has-dropdown is-hoverable">


                <a class="navbar-link">
                    کسب و کار
                </a>

                <div class="navbar-dropdown">

                    <?php

                    $array=array('لوازم خوانگی','پوشاک','لوازم دیجیتال','موبایل','کامپیوتر','برنامه نویسی');

                    for($i=0;$i<6;$i++)
                    {
                        echo "<a href='#' class='navbar-item nv_itm'>$array[$i]</a>";
                    }

                    ?>


                </div>

            </div>



            <a class="navbar-item">
                خانه
            </a>

            <div class="navbar-item" style="width: 50px;"></div>




        </div>


    </div>
</nav>
<!----------_Menu-------------->
