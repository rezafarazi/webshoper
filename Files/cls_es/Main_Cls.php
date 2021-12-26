<?php
/**
 * Created by PhpStorm.
 * User: rezafta
 * Date: 1/15/19
 * Time: 10:22 AM
 */




class Main_Cls
{






    /*************User**************/

    /*************User**************/












    /*************************PUBLIC Functions******************/

    //EnCRIP And Decrypt
    function encrypt_decrypt($action, $string)
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'This is my erza key';
        $secret_iv = 'This is my erza iv';
        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if ( $action == 'encrypt' ) {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if( $action == 'decrypt' ) {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
        return $output;
    }
    //EnCRIP And Decrypt



    /*************************PUBLIC Functions******************/



















    /*************************DataBase Functions**********************/




    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "tb_DB_M";







    ///////////START ALL INSERTS///////////////
    function INSERT_New_User($User_Name,$Email)
    {


        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $Insert=true;

        $sql = "SELECT * FROM Users_tbs;";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                if($User_Name.trim()===$row['User_name']||$Email.trim()===$row['Email'])
                {
                    $Insert=false;
                }
            }
        }



        if($Insert)
        {

            $sql = "INSERT INTO Users_tsb (User_name,Email,Enabled,Type_id) VALUES ('$User_Name','$Email',1,1);";

            if ($conn->query($sql) === TRUE)
            {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
            }
            else
            {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
            }
        }
        else
        {
//            echo "<Script> alert("ایمیل یا نام کاربری از قبل ثبت شده است."); </Script>";
        }

        $conn->close();


    }






    function INSERT_View_Page($User_ID,$PC_S_ID)
    {

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO ViewS_Page_s (User_id,PC_s_ID,Date) VALUES ($User_ID,$PC_S_ID,$dt);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();


    }





    function INSERT_Present($Page,$Url)
    {

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO Present_Page (Page,Page_Url,Date) VALUES ($Page,$Url,$dt);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();


    }







    function INSERT_New_Store($name,$region_id,$creator_id,$category_id,$flag,$Enabled)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $Insert=true;

        $sql = "SELECT * FROM Stores;";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                if($creator_id.trim()===$row['Creator_id']&&$name.trim()===$row['name']&&$region_id.trim()===$row['region_id'])
                {
                    $Insert=false;
                }
            }
        }



        if($Insert)
        {

            $dt=date("Y-m-d");

            $sql = "INSERT INTO Stores (name,region_id,Category_id,flag,Enabled,Date,Admin_Enabled,Creator_id) VALUES ('$name',$region_id,$category_id,$flag,$Enabled,$dt,0,$creator_id);";

            if ($conn->query($sql) === TRUE)
            {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
            }
            else
            {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
            }
        }
        else
        {
//            echo "<Script> alert("ایمیل یا نام کاربری از قبل ثبت شده است."); </Script>";
        }

        $conn->close();

    }








    function INSERT_New_Image_Store($Store_id,$Image_Path,$Date)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO Image_Store (Store_id,Image_Path,Date,Enabled) VALUES ($Store_id,'$Image_Path','$Date',1);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }







    function INSERT_New_Category($Type,$Title,$Image_path)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO Category(Type,Title,Image_path) VALUES ($Type,$Title,$Image_path);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }







    function INSERT_New_Catch_tbs($name,$Vlaue,$User_id)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO Catch_tbs(name,vlaue,user_id) VALUES ($name,$Vlaue,$User_id);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }







    function INSERT_New_Commands($User_ID,$PC_s_ID,$Date,$Enabled,$Description)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO Commands(User_ID,PC_s_ID,Date,Enabled,Description) VALUES ($User_ID,$PC_s_ID,$Date,$Enabled,$Description);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }







    function INSERT_New_PC_S_Price($PC_s_id,$Count)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO PC_Price_s(PC_s_id,Count) VALUES ($PC_s_id,$Count);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }







    function INSERT_New_Region($City_id,$Region,$REGION_ON_Maps)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO REGIONSS(City_id,Region,REGION_ON_Maps) VALUES ($City_id,$Region,$REGION_ON_Maps);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }








    function INSERT_New_City_tbs($City)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO City_tbs(City) VALUES ($City);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }








    function INSERT_New_User_Type($Type)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO User_type(Type) VALUES ($Type);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }







    function INSERT_New_PC_S($Store_id,$PC_title,$PC_Description,$PC_Price_Val,$Count,$Enabled,$Create_Date,$Cat_id)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $Insert=true;

        $sql = "SELECT * FROM PC_S;";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                if($Store_id.trim()===$row['Store_id']&&$PC_title.trim()===$row['PC_title']&&$row['Enabled']===1)
                {
                    $Insert=false;
                }
            }
        }



        if($Insert)
        {

            $sql = "INSERT INTO PC_S(Store_id,PC_title,PC_Description,PC_Price_Val,Count,Enabled,Create_Date,Cat_id) VALUES ($Store_id,$PC_title,$PC_Description,$PC_Price_Val,$Count,$Enabled,$Create_Date,$Cat_id);";

            if ($conn->query($sql) === TRUE)
            {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
            }
            else
            {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
            }
        }
        else
        {
//            echo "<Script> alert("ایمیل یا نام کاربری از قبل ثبت شده است."); </Script>";
        }

        $conn->close();

    }







    function INSERT_New_User_To_Store($User_id,$Store_id)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $Insert=true;

        $sql = "SELECT * FROM Store_user;";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                if($Store_id.trim()===$row['Store_id']&&$User_id.trim()===$row['User_id'])
                {
                    $Insert=false;
                }
            }
        }



        if($Insert)
        {

            $sql = "INSERT INTO Store_user(User_id,Store_id) VALUES ($User_id,$Store_id);";

            if ($conn->query($sql) === TRUE)
            {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
            }
            else
            {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
            }
        }
        else
        {
//            echo "<Script> alert("ایمیل یا نام کاربری از قبل ثبت شده است."); </Script>";
        }

        $conn->close();

    }











    function INSERT_New_User_Image($User_id,$Image_Path)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO User_Images_Image(User_id,Image_Path) VALUES ($User_id,$Image_Path);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();
    }







    function INSERT_New_Pc_S_Image($PC_s_id,$Image_Path)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "INSERT INTO PC_S_Image(PC_s_id,Image_Path) VALUES ($PC_s_id,$Image_Path);";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();
    }
    /////////////END ALL INSERTS///////////////










    /////////////START ALL REMOVE_Flag///////////////

    function SET_FLAG_STORES($Stores_id,$FLAG)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "UPDATE Stores SET Enabled=$FLAG WHERE id=$Stores_id;";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }






    function SET_FLAG_IMAGE_Store($Image_id,$FLAG)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "UPDATE Image_Stores SET Enabled=$FLAG WHERE id=$Image_id;";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }






    function SET_FLAG_Command($Command_id,$FLAG)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "UPDATE Commands SET Enabled=$FLAG WHERE id=$Command_id;";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }







    function SET_FLAG_User($User_id,$FLAG)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "UPDATE Users_tsb SET Enabled=$FLAG WHERE id=$User_id;";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }







    function SET_FLAG_PC_S($PC_S_id,$FLAG)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "UPDATE PC_S SET Enabled=$FLAG WHERE id=$PC_S_id;";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }







    function DELETE_User_FROM_Strom($id)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "DELETE FROM Store_user WHERE id=$id;";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }




    function DELETE_User_Image($id)
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);


        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $dt=date("Y-m-d");

        $sql = "DELETE FROM User_Images WHERE id=$id;";

        if ($conn->query($sql) === TRUE)
        {
//                echo "<Script> alert("با موفقیت ثبت شد."); </Script>";
        }
        else
        {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//                echo "<Script> alert("دوباره تلاش کنید...."); </Script>";
        }

        $conn->close();

    }



    /////////////END ALL REMOVE_Flag///////////////









    ////////////////SELECT AND RETURN A ARRAY//////////////

    function SELECT($QUARY)
    {

        $Valueeee="";

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $Insert=true;

        $sql = $QUARY;

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {

                foreach ($row as $values)
                $Valueeee.=$values."~";

            }
        }


        $conn->close();

        return $Valueeee.split("~");

    }

    ////////////////SELECT AND RETURN A ARRAY//////////////




}?>
