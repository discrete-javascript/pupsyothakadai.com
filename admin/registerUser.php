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
    

$('#user_register_frm').submit(function(e) {
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
                    <h1 class="heading-title pull-left">Contact</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Contact</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">                            
                            <h3 class="title">Enter Question</h3>
                           
                            <form  id="user_register_frm"  action="RegisterUserProcess.php"  method="POST">
							                                <div class="form-group name">
                                    <label for="name">pk_user_id </label>
                                    <input name="pk_user_id"  id="pk_user_id" type="text" class="form-control" placeholder="Enter Question">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">user_name </label>
                                    <input name="user_name" id="user_name" type="text" class="form-control" placeholder="Enter User Name">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">password </label>
                                    <input name="password"  id="password" type="text" class="form-control" placeholder="Enter password">
                                </div>
				<div class="form-group name">
                                    <label for="name">email_id </label>
                                    <input name="email_id"  id="email_id" type="text" class="form-control" placeholder="Enter email_id">
                                </div>
				<div class="form-group name">
                                    <label for="name">mobile_no </label>
                                    <input name="mobile_no"  id="mobile_no" type="text" class="form-control" placeholder="Enter mobile_no">
                                </div>
				<div class="form-group name">
                                    <label for="name">current_designation </label>
                                    <input name="current_designation"  id="current_designation" type="text" class="form-control" placeholder="Enter current_designation">
                                </div>
				<div class="form-group name">
                                    <label for="name">current_role </label>
                                    <input name="current_role"  id="current_role" type="text" class="form-control" placeholder="Enter Current Role">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">created_by </label>
                                    <input name="created_by"  id="created_by" type="text" class="form-control" placeholder="created_by">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">created_datettime </label>
                                    <input name="created_datettime"  id="created_datettime" type="text" class="form-control" placeholder="created_datettime">
                                </div>
								                                <div class="form-group name">
                                    <label for="name">modified_by </label>
                                    <input name="modified_by"  id="modified_by" type="text" class="form-control" placeholder="Modified By">
                                </div>

                                <div class="form-group name">
                                    <label for="name">modified_datetime </label>
                                    <input name="modified_datetime"  id="modified_datetime" type="text" class="form-control" placeholder="Modified Date Time">
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