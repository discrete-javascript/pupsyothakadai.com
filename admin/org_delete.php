<?php include("../db/dbconnection.php")?>

                            <?php if(isset($_GET['pk_SchoolId']) && $_GET['pk_SchoolId']!='')
                    {
                    $delete_school_info_qry="delete from school_info where pk_SchoolId=".$_GET['pk_SchoolId'];
                    $val=$mysqli->query($delete_school_info_qry);
                    header("location:registerOrganisation.php");		
                   }
                    ?>
                            