<meta name="theme-color" content="#FFF">
<meta name="msapplication-navbutton-color" content="#FFF">
<meta name="apple-mobile-web-app-status-bar-style" content="#FFF">


<link rel="stylesheet" href="../Files/css/Style.css" type="text/css">
<link rel="stylesheet" href="../Files/css/Bulma/bulma.css" type="text/css">
<link rel="stylesheet" href="../Files/css/Bulma/Menu_Style.css" type="text/css">


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
















<br>
<div class="New_Store" id="ns">


    <center>


        <form action="#" method="post">


            <!----Text Name Start-->
            <div class="name_store_bar">
                <input type="text" class="ripple_text_box2 Text_Box_Stan" placeholder="نام فروشگاه"/>
            </div>
            <!----Text Name End-->






            <br>






            <!--Combo Categoty Start--->
            <div class="name_store_bar">
                <select class="ripple_text_box2 combo">

                    <option value="1">کالای خانگی</option>
                    <option value="2">کالاهای مصرفی</option>
                    <option value="3">کالای صنعتی</option>
                    <option value="4">کالای دیجیتال</option>

                </select>
            </div>
            <!--Combo Categoty End--->







            <br>






            <!--Location Box Start-->
            <div class="name_store_bar">

                <select class="ripple_text_box2 combo">

                    <option value="0">آذربایجان</option>
                    <option value="0">خراسان</option>
                    <option value="0">فارس</option>

                </select>

            </div>
            <!--Location Box End-->





            <br>
            <br>






            <!--Maps Box Start-->
            <div class="maps_store_bar" style="border: none;">


                <div class="Location_icon material-icons">location_on</div>


                <div id="map"></div>
                <script>
                    var map;
                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: -34.397, lng: 150.644},
                            zoom: 8
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhunZbhKhd_Nwp6OcelAUFOqIlxpL-KGY&callback=initMap"
                        async defer></script>


                <input type="text" hidden/>




                <style>

                #map,#map>iframe
                {
                    width: 100%;
                    height: 100%;

                }

                #map>iframe
                {
                    margin-top: -25px;
                }

                .i4ewOd-pzNkMb-haAclf
                {
                    display: none !important;
                }

            </style>


            <!--Maps Box End-->








            <br>
            <br>







            <!--Submit Button Start-->
            <div class="submit_btn">


                <input type="submit" class="ripple" value="انجام شد"/>


            </div>
            <!--Submit Button End-->













        </form>


    </center>


</div>



<br>
<br>
<br>
<br>

<br>
<br>