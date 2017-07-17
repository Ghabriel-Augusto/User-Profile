<?php
 require 'db.php';

    if (isset($_POST['username'])) 
    {
        $username = mysql_real_escape_string($_POST['username']);

        if (!empty($username)) 
    {
            $username_query = mysql_query("SELECT *
                                           FROM users
                                           WHERE username = '$username'");
             $count=mysql_num_rows( $username_query);
             if($count==0)
             {
               echo "Username doesn't exist";
               exit;
             }
            else
            {
              echo "Username already exists";
              exit;
            }
    }
}

?>
