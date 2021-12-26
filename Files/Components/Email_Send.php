<?

$User_Name=$_REQUEST['User_Name'];
$E_Mail=$_REQUEST['E_Mail'];




if($User_Name=="" || $E_Mail=="")
{
    header("location:sign_log.php");
}

if(check_at($E_Mail)==false)
{
    header("location:sign_log.php");
}





function check_at($email)
{
    $a=0;



    for($loop=0;$loop<strlen($email);$loop++)
    {
        if($email[$loop]=='@')
        {
            $a++;
        }
    }


    if($a==0)
    {
        return false;
    }
    else
    {
        return true;
    }


}



?>


<br>
<br>
<br>
<br>


<center>



    <div class="columns">




        <div class="column">


            <div class="material-icons done">email</div>
            <br>
            <br>
            <h1>اطلاعات به ایمیل شما ارسال شد</h1>


        </div>




    </div>



</center>










<style>


    .done
    {
        font-size: 200px !important;
        background: #689f38;
        padding: 25px;color: #FFFF;
        border-radius: 50%;
    }


</style>


<script>


    //function sleep(milliseconds)
    //{
    //    var start = new Date().getTime();
    //    for (var i = 0; i < 1e7; i++)
    //    {
    //        if ((new Date().getTime() - start) > milliseconds)
    //        {
    //            break;
    //        }
    //    }
    //}
    //
    //sleep(100000);
    //
    //document.write("<?// header("location:sign_log.php"); ?>//");

</script>




