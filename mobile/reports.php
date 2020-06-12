<?php include('includes/header.php'); ?>   




 <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Reports</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Reports</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 



<h5>
<?php
$conn=new mysqli('remotemysql.com','zoGJXPbqT5','1QNCsdVSph','zoGJXPbqT5');
if($conn->connect_errno)
{
echo $conn->connect_error;
die();
}
else
{
echo ".";
echo '<br>';
}

$sql="SELECT name,message FROM efree_contact";
if($result=$conn->query($sql))
{

if($result->num_rows)
{
while($row=$result->fetch_object())
{
echo $row->name;
echo '--->';
echo $row->message;
echo '<br>';
}
}
}
?>
</h5>




<?php include('includes/footer.php'); ?>