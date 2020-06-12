<?php include('includes/header.php'); ?>
<?php include("db/dbconnection.php")?>	
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Online Test</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Select a Subject</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <div class="events-wrapper col-md-12 column">                         

<?php
$result = $mysqli->query("SELECT si.SubjectName,si.description,si.pk_SubjectId,si.fk_SchoolId,sc.SchoolName FROM subject_info si,school_info sc  where si.fk_SchoolId=sc.pk_SchoolId and si.status='1' and sc.status='1'order by sc.SchoolName , si.SubjectName");
$i=1;
while($row = $result->fetch_assoc())
{
$SubjectName=$row["SubjectName"];
$description=$row["description"];
$pk_SubjectId=$row["pk_SubjectId"];
$fk_SchoolId=$row["fk_SchoolId"];
$SchoolName=$row["SchoolName"];


?>
                            <article class="events-item page-row has-divider clearfix">
                                <div class="date-label-wrapper col-md-1 col-sm-2">
                                     <p class="date-label">
                                        <span class="month">ID</span>
                                        <span class="date-number"><?php echo $i++; ?> </span>
                                    </p>
                                </div><!--//date-label-wrapper-->
                                <div class="details col-md-11 col-sm-10">
                                   <h3 class="title"><a href="test-detail.php?fk_SchoolId=<?php echo $fk_SchoolId; ?>&SchoolName=<?php echo $SchoolName; ?>&SubjectName=<?php echo $SubjectName; ?>&pk_SubjectId=<?php echo $pk_SubjectId; ?>">
<strong> <?php echo $SchoolName." - ".$SubjectName; ?><BR>(Take Exam) </strong></a>
</h3>
                                    <p class="desc"> <?php echo $description; ?> </p>   
                                    
                                </div><!--//details-->
                            </article><!--//events-item-->
<?php
}
?>
                            
                        </div><!--//events-wrapper-->

                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
<?php include('includes/footer.php'); ?>