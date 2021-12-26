<div class="columns">



    <!--Left--->
    <div class="column">

        <div class="Context_Text">

            <center>

                <h1>توضیح</h1>
                <br>
                <p>عروسکی که در پنج سالگی خراب شد و کلی غصه اش را خوردیم
                    در ده سالگی دیگر اصلا مهم نیست
                    نمره امتحانی که در دبیرستان کم شدیم و آنقدر به خاطرش اشک ریختیم و روزگارمان را تلخ کرد
                    در دوران دانشگاه هیچ اهمیتی ندارد و کلا فراموش شده است
                    آدمی که در اولین سال دانشگاه آنقدر به خاطرش غصه خوردیم و اشک ریختیم و بعد فهمیدیم ارزشش را نداشته و دنیای مان ویران شد
                    در سی سالگی تبدیل به غباری از یک خاطره دور دور دور شده که حتی ناراحت مان هم نمی کند
                    🔺 چکی که برای پاس کردنش در سی سالگی آنقدر استرس و بی خوابی کشیدیم
                    در چهل سالگی یک کاغذ پاره بی ارزش و فراموش شده است
                    ✅ پس یقین داشته باش که مشکل امروزت
                    اینقدرها هم که فکر میکنی بزرگ نیست
                    این یکی هم حل می شود. میگذرد و تمام می شود.</p>

            </center>

        </div>

    </div>
    <!--Left End--->







    <!--RIght--->
    <div class="column" style="overflow: scroll;border-left: solid 1px #f16d40;">

        <div class="colnum_image">

            <img id="Main_pic" class="img_pic" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg"/>

            <br>
            <img class="img_pic" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" onclick="show_Image(this)"/>

            <img class="img_pic" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" onclick="show_Image(this)"/>

            <img class="img_pic" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" onclick="show_Image(this)"/>

            <img class="img_pic" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" onclick="show_Image(this)"/>

            <img class="img_pic" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" onclick="show_Image(this)"/>

            <img class="img_pic" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" onclick="show_Image(this)"/>

            <img class="img_pic" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" onclick="show_Image(this)"/>

            <img class="img_pic" src="https://blog.mariusschulz.com/content/images/mac-osx-file-selection-dialog.png" onclick="show_Image(this)"/>

        </div>

    </div>
    <!--RIght End--->








</div>


<br>
<br>
<br>







<center>

    <a href="#">هدایت به صفحه اصلی فروشگاه</a>

    <br>

    <br>

    <a id="Commands_Link" onclick="onclick_show_commands(this)">مشاهده نظرات</a>

</center>












<div style="width: 100%;padding-top: 15px;margin-top: 10px;">

    <?
        include "Files/Components/Command.php";
    ?>

</div>







































<div id="myModal" class="modal">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>






<script>




    /*****Change Main Picture*****/
    function show_Image(element)
    {
        var Main_Image=document.getElementById("Main_pic");

        var Pic=document.getElementsByClassName("img_pic");

        Main_Image.src=element.src;
    }
    /*****Change Main Picture End*****/




        // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('Main_pic');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }


</script>



<style>

    #link_Maps_Context:hover
    {
        color: #f16d40;
    }



    #Main_pic
    {
        width: 70%;
        height: 42%
    }


    .img_pic
    {
        width: 150px;
        height: 100px
    }


    .img_pic:hover
    {
        opacity: 0.7;
        cursor: pointer;
    }


    #Main_pic {
        border-radius: 1px;
        cursor: pointer;
        transition: 0.3s;
        z-index: 9999;
    }

    #Main_pic:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        z-index: 9999;
    }

    /* Modal Content (Image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        z-index: 9999;
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
        z-index: 9999;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content, #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
        z-index: 9999;
    }

    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        z-index: 9999;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
        z-index: 9999;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
            z-index: 9999;
        }
    }


</style>