<!DOCTYPE html>
<html>
<?php
  $page = "company_information";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Company Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Company Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <?php if(isset($update)){ ?>
                <form action="<?php echo base_url(); ?>User/update_company" method="post" enctype="multipart/form-data" role="form">
                  <input type="hidden" name="company_id" value="<?php echo $company_id; ?>">
              <?php }else{ ?>
                <form action="<?php echo base_url(); ?>User/save_company" method="post" enctype="multipart/form-data" role="form">
              <?php } ?> -->
              <form class="input_form" action="" method="post" enctype="multipart/form-data">

                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <label>Company Name</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Enter Company Name" required>
                  </div>



                      <div class="col-md-6">
                        <div class="row">
                        <div class="form-group col-md-6 select_sm">
                          <label>Select Trade</label>
                          <select class="form-control select2" name="state_id" id="state_id" data-placeholder="Select Trade" required>
                            <option value="">Select Trade</option>
                            <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                            <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                            <?php } } ?> -->
                          </select>
                        </div>

                        <div class="form-group col-md-6">
                          <label>Other</label>
                          <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Other" required>
                        </div>
                        <div class="form-group col-md-12">
                          <label>Address</label>
                          <textarea class="form-control form-control-sm" rows="3" name="company_address" id="company_address" placeholder="Enter Company Address" required><?php if(isset($company_address)){ echo $company_address; } ?></textarea>
                        </div>

                        <div class="form-group col-md-6 select_sm">
                    <label>Select Country</label>
                    <select class="form-control select2" name="country_id" id="country_id" data-placeholder="Select Country" required>
                      <option value="">Select Country</option>
                      <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                      <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                      <?php } } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6 select_sm">
                    <label>Select State</label>
                    <select class="form-control select2" name="state_id" id="state_id" data-placeholder="Select State" required>
                      <option value="">Select State</option>
                      <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6 select_sm">
                    <label>Select City</label>
                    <select class="form-control select2" name="city_id" id="city_id" data-placeholder="Select City" required>
                      <option value="">Select City</option>
                      <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->city_id; ?>" <?php if(isset($city_id) && $city_id == $list->city_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Pincode</label>
                    <input type="number" class="form-control form-control-sm" name="company_pincode" id="company_pincode" value="<?php if(isset($company_pincode)){ echo $company_pincode; } ?>" placeholder="Pincode">
                  </div>

                  <div class="form-group col-md-6">
                    <label>Mobile No. 1</label>
                    <input type="number" class="form-control form-control-sm" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="Mobile No. 1" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Mobile No. 2 / Landline No.</label>
                    <input type="number" class="form-control form-control-sm" name="company_mob2" id="company_mob2" value="<?php if(isset($company_mob2)){ echo $company_mob2; } ?>" placeholder="Mobile No. 2">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email Id</label>
                    <input type="email" class="form-control form-control-sm" name="company_email" id="company_email" value="<?php if(isset($company_email)){ echo $company_email; } ?>" placeholder="Email" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Website</label>
                    <input type="text" class="form-control form-control-sm" name="company_website" id="company_website" value="<?php if(isset($company_website)){ echo $company_website; } ?>" placeholder="Website">
                  </div>
                  <div class="form-group col-md-6">
                    <label>PAN No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_pan_no" id="company_pan_no" value="<?php if(isset($company_pan_no)){ echo $company_pan_no; } ?>" placeholder="Pan No.">
                  </div>
                  <div class="form-group col-md-6">
                    <label>GST No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_gst_no" id="company_gst_no" value="<?php if(isset($company_gst_no)){ echo $company_gst_no; } ?>" placeholder="GST No.">
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter IEC Code No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_iec_no" id="company_iec_no" value="<?php if(isset($company_iec_no)){ echo $company_iec_no; } ?>" placeholder="Enter IEC Code No.">
                  </div>

                  <div class="form-group col-md-6">
                    <label>VAT No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_gst_no" id="company_gst_no" value="<?php if(isset($company_gst_no)){ echo $company_gst_no; } ?>" placeholder="VAT No.">
                  </div>

                  <div class="form-group col-md-6">
                    <label>DL No. 1</label>
                    <input type="number" class="form-control form-control-sm" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="DL No. 1" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>DL No. 2 </label>
                    <input type="number" class="form-control form-control-sm" name="company_mob2" id="company_mob2" value="<?php if(isset($company_mob2)){ echo $company_mob2; } ?>" placeholder="DL No. 2">
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Date Format</label>
                    <select class="form-control select2" name="Date_id" id="Date_id" data-placeholder="Select Date Format" required>
                      <option value="">Select Date Format</option>
                      <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                      <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                      <?php } } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select primary Current</label>
                    <select class="form-control select2" name="country_id" id="country_id" data-placeholder="Select primary Current" required>
                      <option value="">Select primary Current</option>
                      <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                      <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                      <?php } } ?>
                    </select>
                  </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="row">

                  <div class="form-group col-md-12">
                    <label>Financial Year Start Date</label>
                    <input type="text" class="form-control form-control-sm" name="company_pan_no" id="company_pan_no" value="<?php if(isset($company_pan_no)){ echo $company_pan_no; } ?>" placeholder="Financial Year Start Date">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Financial Year End Date</label>
                    <input type="text" class="form-control form-control-sm" name="company_pan_no" id="company_pan_no" value="<?php if(isset($company_pan_no)){ echo $company_pan_no; } ?>" placeholder="Financial Year End Date">
                  </div>

                  <div class="form-group col-md-12">
                    <label>Email Id</label>
                    <input type="email" class="form-control form-control-sm" name="admin_email" id="admin_email" placeholder="Admin Email" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Password</label>
                    <input type="password" class="form-control form-control-sm" name="admin_password" id="admin_password" placeholder="Admin Password" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Company Logo</label>
                    <input type="file" name="company_logo" value="">
                    </div>

                    <div class="form-group col-md-12">
                      <label>Email Configuration Setting</label>
                    </div>

                    <div class="form-group col-md-6">
                      <label>Enter Host</label>
                      <input type="text" class="form-control form-control-sm" name="company_pan_no" id="company_pan_no" value="<?php if(isset($company_pan_no)){ echo $company_pan_no; } ?>" placeholder="Enter Host">
                    </div>

                    <div class="form-group col-md-4 select_sm">
                    <label>Connection</label>
                    <select class="form-control select2" name="state_id" id="state_id" data-placeholder="Connection" required>
                      <option value="">Connection</option>
                      <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?>
                    </select>
                  </div>

                    <div class="form-group col-md-2">
                      <label>Port</label>
                      <input type="text" class="form-control form-control-sm" name="company_pan_no" id="company_pan_no" value="<?php if(isset($company_pan_no)){ echo $company_pan_no; } ?>" placeholder="Port">
                    </div>


                  <div class="form-group col-md-6">
                    <label>Email Id</label>
                    <input type="email" class="form-control form-control-sm" name="admin_email" id="admin_email" placeholder="Admin Email" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control form-control-sm" name="admin_password" id="admin_password" placeholder="Admin Password" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>From Name</label>
                    <input type="text" class="form-control form-control-sm" name="company_pan_no" id="company_pan_no" value="<?php if(isset($company_pan_no)){ echo $company_pan_no; } ?>" placeholder="From Name">
                  </div>


                <div class="form-group col-md-6">
                  <label>From Email</label>
                  <input type="email" class="form-control form-control-sm" name="admin_email" id="admin_email" placeholder="From Email" required>
                </div>

                <div class="form-group col-md-12">
                  <label>SMS Configuration Setting</label>
                </div>

                <div class="form-group col-md-12">
                    <label>Enter API</label>
                    <textarea class="form-control form-control-sm" rows="4" name="company_address" id="company_address" placeholder="Enter API" required><?php if(isset($company_address)){ echo $company_address; } ?></textarea>
                  </div>
                </div>
              </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary">Update Company</button>
                  <?php }else{ ?>
                    <button type="submit" class="btn btn-success">Create Company</button>
                  <?php } ?>
                  <a href="<?php echo base_url(); ?>/User/company_information_list" class="btn btn-default ml-4">Cancel</a>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

</body>
</html>
