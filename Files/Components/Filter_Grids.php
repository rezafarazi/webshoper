<br>
<div id="filter_border" class="columns">





        <div class="column">

            <center>
            <!-- Rounded switch -->
            <div class="cl1">
                <label>عکس دار</label>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <!-- Rounded switch End -->
            </center>
        </div>





    <div class="column">

        <center>


            <!----Text Name Start-->
            <div class="name_store_bar">
                <input type="text" class="ripple_text_box2 Text_Box_Stan" placeholder="نام کالای مورد نظر"/>
            </div>
            <!----Text Name End-->


        </center>

    </div>





    <div class="column">

        <center>

            <div class="name_store_bar">

                <select class="ripple_text_box2 combo">

                    <option value="0">آذربایجان</option>
                    <option value="0">خراسان</option>
                    <option value="0">فارس</option>

                </select>

            </div>

        </center>

    </div>



</div>











<style>


    .cl1
    {
        width: 100%;
        /*background: #102030;*/
    }

    .cl1>label
    {
        color: #666666;
        margin: 15px;
        padding-top: 18px;
    }

    #filter_border
    {
        border-radius: 2px;
        padding-top: 10px;
        padding-bottom: 10px;
        border: solid 1px #CCC;
        margin: 25px;
    }


</style>


















<!--style Toggle Switch-->
<style>

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        margin: 20px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #f16d40;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #f16d40;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

</style>