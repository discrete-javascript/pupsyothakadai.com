<?php include('includes/header.php'); ?>
<?php include("../db/dbconnection.php")?>
<style>
form label {
  display: inline-block;
  width: 100px;
}

form div {
  margin-bottom: 10px;
}

.error {
  color: red;
  margin-left: 5px;
}

label.error {
  display: inline;
}
</style>

<script>
$(document).ready(function() {
    

$('#organization_register_frm').submit(function(e) {
    var pk_SchoolId_f =0;
    var SchoolName_f =0;
    var SchoolAddress_f =0;
    var City_f = 0;
    var State_f =0;
    var Country_f =0;
    var Pincode_f = 0;

    var ContactNo_f =0;
    var email_f = 0;
    e.preventDefault();
    
    var pk_SchoolId = $('#pk_SchoolId').val();
    var SchoolName = $('#SchoolName').val();
    var PrincipalName = $('#PrincipalName').val();
    var SchoolAddress = $('#SchoolAddress').val();
    var City = $('#City').val();
    var State = $('#State').val();
    var Country = $('#Country').val();
    var Pincode = $('#Pincode').val();
    var Website = $('#Website').val();
    var ContactNo = $('#ContactNo').val();
    var email = $('#Email').val();
    var createdby = $('#createdby').val();
    var lastupdatedby = $('#lastupdatedby').val();
    var lastupdateed = $('#lastupdateed').val();
    var status = $('#status').val()
    
    $(".error").remove();
    if (pk_SchoolId.length < 1) {
        $('#pk_SchoolId').after('<span class="error">School ID is required</span>');
    }
    if (pk_SchoolId.length >1) {
        pk_SchoolId_f=1;
    }
    if (SchoolName.length < 1) {
        $('#SchoolName').after('<span class="error">School Name is required</span>');
    }
    if (SchoolName.length > 1) {
        SchoolName_f=1;
    }
    if (SchoolAddress.length < 1) {
        $('#SchoolAddress').after('<span class="error">School Address is required</span>');
    }
    if (SchoolAddress.length > 1) {
        SchoolAddress_f=1;
    }
    if (City.length < 1) {
        $('#City').after('<span class="error">City is required</span>');
    }
    if (City.length > 1) {
        City_f=1;
    }
    if (State.length < 1) {
        $('#State').after('<span class="error">State is required</span>');
    }
    if (State.length > 1) {
        State_f=1;
    }
    if (Country.length < 1) {
        $('#Country').after('<span class="error">Country is required</span>');
    }
    if (Country.length > 1) {
        Country_f=1;
    }
    if (Pincode.length < 1) {
        $('#Pincode').after('<span class="error">Pincode is required</span>');
    }
    if (Pincode.length > 1) {
        Pincode_f=1;
    }
    if (ContactNo.length < 1) {
        $('#ContactNo').after('<span class="error">Contact Number is required</span>');
    }
    if (ContactNo.length > 1) {
        ContactNo_f=1;
    }
  if (email.length < 1) {
    $('#Email').after('<span class="error">Email is required</span>');
  } else {
    var regEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var validEmail = regEx.test(email);
    if (!validEmail) {
      $('#Email').after('<span class="error">Enter a valid email</span>');
    }
    else
    email_f=1;
  }
//   if (password.length < 8) {
//     $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
//   }
if(pk_SchoolId_f==1 && SchoolName_f==1 && SchoolAddress_f==1 && City_f==1 && State_f==1 && Country_f==1 &&
Pincode_f==1 && ContactNo_f==1 && email_f==1)
window.location.href = 'http://localhost/efreelearn/admin/registerOrganisationProcess.php?pk_SchoolId='+pk_SchoolId+'&SchoolName='+SchoolName+'&PrincipalName='+PrincipalName+'&SchoolAddress='+SchoolAddress+'&City='+City+'&State='+State+'&Country='+Country+'&Pincode='+Pincode+'&ContactNo='+ContactNo+'&Email='+email+'&Website='+Website+'&createdby='+createdby+'&lastupdatedby='+lastupdatedby+'&lastupdateed='+lastupdateed+'&status='+status+'';
 });


});
</script>
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Enter Organisation Details</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Enter Organisation Details</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">                            
                            <h3 class="title">Enter Organisation Details</h3>
                           
                            <form id="organization_register_frm"  method="POST">
							                                <div class="form-group name">
                                    <label for="name">pk_SchoolId </label>
                                    <input name="pk_SchoolId" type="text" id="pk_SchoolId" class="form-control" placeholder="Enter pk_SchoolId">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">SchoolName </label>
                                    <input name="SchoolName" type="text" id="SchoolName" class="form-control" placeholder="Enter SchoolName">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">PrincipalName </label>
                                    <input name="PrincipalName" id="PrincipalName" type="text" class="form-control" placeholder="PrincipalName">
                                </div>
				<div class="form-group name">
                                    <label for="name">SchoolAddress </label>
                                    <input name="SchoolAddress"  id="SchoolAddress"  type="text" class="form-control" placeholder="Enter SchoolAddress">
                                </div>
				<div class="form-group name">
                                    <label for="name">City </label>
                                    <input name="City" id="City" type="text" class="form-control" placeholder="Enter City">
                                </div>
				<div class="form-group name">
                                    <label for="name">State</label>
                                    <input name="State" id="State" type="text" class="form-control" placeholder="Enter State">
                                </div>
				<div class="form-group name">
                                    <label for="name">Country </label>
                                    <input name="Country"  id="Country"  type="text" class="form-control" placeholder="Enter Country">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">Pincode </label>
                                    <input name="Pincode"  id="Pincode" type="text" class="form-control" placeholder="Pincode">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">Email </label>
                                    <input name="Email"  id="Email" type="text" class="form-control" placeholder="Email">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">Website</label>
                                    <input name="Website"  id="Website"type="text" class="form-control" placeholder="Website">
                                </div>

                                <div class="form-group name">
                                    <label for="name">ContactNo </label>
                                    <input name="ContactNo"  id="ContactNo" type="text" class="form-control" placeholder="ContactNo">
                                </div>
								
								<div class="form-group name">
                                    <label for="name">createdby </label>
                                    <input name="createdby" id="createdby"  type="text" class="form-control" placeholder="createdby">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">lastupdatedby </label>
                                    <input name="lastupdatedby"  id="lastupdatedby"  type="text" class="form-control" placeholder="lastupdatedby">
                                </div>

                                <div class="form-group name">
                                    <label for="name">lastupdateed</label>
                                    <input name="lastupdateed"  id="lastupdateed" type="text" class="form-control" placeholder="lastupdateed">
                                </div>
								
								                                <div class="form-group name">
                                    <label for="name">status</label>
                                    <input name="status"  id="status"  type="text" class="form-control" placeholder="status">
                                </div>
								
								
                                <button type="submit" class="btn btn-theme" >Register User</button>
                            </form>                  
                        </article><!--//contact-form-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <!--<section class="widget has-divider">
                                <h3 class="title">Download Prospectus</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <a class="btn btn-theme" href="#"><i class="fa fa-download"></i>Download now</a>
                            </section>--><!--//widget-->   
                            
                            <section class="widget has-divider">
                                <h3 class="title">Postal Address</h3>
                                <p class="adr">
                                    <span class="adr-group">       
                                        <span class="street-address">College Green</span><br>
                                        <span class="region">56 College Green Road</span><br>
                                        <span class="postal-code">BS16 AP18</span><br>
                                        <span class="country-name">UK</span>
                                    </span>
                                </p>
                            </section><!--//widget-->     
                            
                            <section class="widget">
                                <h3 class="title">All Enquiries</h3>
                                <p class="tel"><i class="fa fa-phone"></i>Tel: 0800 123 4567</p>
                                <p class="email"><i class="fa fa-envelope"></i>Email: <a href="#">enquires@website.com</a></p>
                            </section>   
                        </aside><!--//page-sidebar-->
                    </div><!--//page-row-->
                    <div class="page-row">
  <h2>Organization List</h2>
            
  <table class="table">
    <thead>
      <tr>
        <th>School Name</th>
        <th>School Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
        <tbody>
                    <?php 
                    $school_info_qry="select * from school_info";
                    $val=$mysqli->query($school_info_qry);			
                    while($r=mysqli_fetch_array($val))
                    {
                      
                        $pk_SchoolId= $r['pk_SchoolId'];
                    ?>
                        <tr>
                        <td><?php echo $r['SchoolName']?></td>
                        <td><?php echo $r['SchoolAddress'].','.$r['City'].','.$r['State'].','.$r['Country'].','.$r['Pincode'];?></td>
                        <td><?php echo $r['Email']?></td>
                        <td><?php echo $r['ContactNo']?></td>
                        <td><form method="post" action="org_edit.php?pk_SchoolId=<?php echo $pk_SchoolId; ?>"><button type="submit" class="btn btn-theme" >Edit</button></form>&nbsp;&nbsp;<form  method="post" action="org_delete.php?pk_SchoolId=<?php echo $pk_SchoolId; ?>"><button type="submit" class="btn btn-theme" >Delete</button></form></td>
                         </tr>
                <?php       
                    }		
                ?>
        </tbody>
  </table>
</div>
                    <div class="page-row">
                        <article class="map-section">
                            <h3 class="title">How to find us</h3>
                            <div id="map"></div><!--//map-->
                        </article><!--//map-->
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-wrapper--> 
        </div><!--//content-->
    </div><!--//wrapper-->
       <div id="insertSuccess"></div>
      
    <!-- ******FOOTER****** --> 
<?php include('includes/footer.php'); ?>