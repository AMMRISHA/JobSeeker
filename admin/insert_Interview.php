<?php

    include ('../connection/db.php');
    
echo $email = $_GET['email'];
    $candidate= "SELECT `id`, `first_name`, `last_name`, `dob`, `file`, `id_job`, `job_seeker`, `mobileno` FROM `job_apply` WHERE job_seeker='$email'";

    $select_can=mysqli_query($conn ,$candidate) or die("No such data");

    if(mysqli_num_rows($select_can)>0)
    {
        echo "Exists";
        while($row =mysqli_fetch_assoc($select_can))
                                        {
                                            echo $name=$row['first_name']." ".$row['last_name'];
                                            echo $email=$row['job_seeker'];
                                            echo $p_number = $row['mobileno'];
                                            
                                            $interview_schedule = "INSERT INTO `interview_schedule`(`interview_id`, `Name`, `email`, `phone`) VALUES ('$name','$email','$p_number')";

                                            $result =mysqli_query($conn , $interview_schedule);
                                            if($result)
                                            {
                                                echo "Successful";
                                            }
                                            else{
                                                echo "Unsuccessful";
                                            }
                                            
                                        }
        
    

    }
    else
    {
        echo "Not exists";
    }
?>