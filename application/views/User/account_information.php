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
            <h1>Account Information</h1>
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
                <h3 class="card-title">Account Information</h3>
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
                    <label>Account Name</label>
                    <input type="text" class="form-control form-control-sm" name="account_name" id="account_name" value="<?php if(isset($account_name)){ echo $account_name; } ?>" placeholder="Enter Account Name" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Print Name As</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Print Name As" required>
                  </div>

                      <div class="col-md-6">
                        <div class="row">
                        <div class="form-group col-md-12 select_sm">
                          <label>Select Group Name</label>
                          <select class="form-control select2" name="state_id" id="state_id" data-placeholder="Select Group Name" required>
                            <option value="">Select Group Name</option>
                            <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                            <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                            <?php } } ?> -->
                          </select>
                        </div>

                        <div class="form-group col-md-6">
                          <label>Op. Bal.</label>
                          <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Op. Bal." required>
                        </div>

                        <div class="form-group col-md-6 select_sm">
                            <label>Dr.</label>
                            <select class="form-control select2" name="dr" id="dr" data-placeholder="Dr." required>
                              <option value="">Dr.</option>
                              <!-- <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                              <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                              <?php } } ?> -->
                            </select>
                          </div>
                        <div class="form-group col-md-12">
                          <label>Address</label>
                          <textarea class="form-control form-control-sm" rows="3" name="company_address" id="company_address" placeholder="Enter Address" required><?php if(isset($company_address)){ echo $company_address; } ?></textarea>
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
                    <label>Contact Person Name</label>
                    <input type="text" class="form-control form-control-sm" name="company_website" id="company_website" value="<?php if(isset($company_website)){ echo $company_website; } ?>" placeholder="Contact Person Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Birthday On</label>
                    <input type="text" class="form-control form-control-sm" name="company_pan_no" id="company_pan_no" value="<?php if(isset($company_pan_no)){ echo $company_pan_no; } ?>" placeholder="Birthday On">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Anniversary On</label>
                    <input type="text" class="form-control form-control-sm" name="company_gst_no" id="company_gst_no" value="<?php if(isset($company_gst_no)){ echo $company_gst_no; } ?>" placeholder="Anniversary On">
                  </div>



                  <div class="form-group col-md-6">
                    <label>Bank Name</label>
                    <input type="text" class="form-control form-control-sm" name="company_gst_no" id="company_gst_no" value="<?php if(isset($company_gst_no)){ echo $company_gst_no; } ?>" placeholder="Bank Name">
                  </div>

                  <div class="form-group col-md-6">
                    <label>Bank Account No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_iec_no" id="company_iec_no" value="<?php if(isset($company_iec_no)){ echo $company_iec_no; } ?>" placeholder="Bank Account No.">
                  </div>

                  <div class="form-group col-md-6">
                    <label>IFSC Code</label>
                    <input type="number" class="form-control form-control-sm" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="IFSC Code" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Cheque Printing Name </label>
                    <input type="number" class="form-control form-control-sm" name="company_mob2" id="company_mob2" value="<?php if(isset($company_mob2)){ echo $company_mob2; } ?>" placeholder="Cheque Printing Name">
                  </div>

                  <div class="form-group col-md-12">
                    <label>Image Upload</label>
                    <input type="file" name="company_logo" value="">
                    </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="row">

                      <div class="form-group col-md-12">
                        <label>GST No.</label>
                        <input type="text" class="form-control form-control-sm" name="company_gst_no" id="company_gst_no" value="<?php if(isset($company_gst_no)){ echo $company_gst_no; } ?>" placeholder="GST No.">
                      </div>

                      <div class="form-group col-md-12">
                        <label>Adhar Card No.</label>
                        <input type="text" class="form-control form-control-sm" name="company_gst_no" id="company_gst_no" value="<?php if(isset($company_gst_no)){ echo $company_gst_no; } ?>" placeholder="Adhar Card No.">
                      </div>

                      <div class="form-group col-md-12">
                        <label>PAN No.</label>
                        <input type="text" class="form-control form-control-sm" name="company_pan_no" id="company_pan_no" value="<?php if(isset($company_pan_no)){ echo $company_pan_no; } ?>" placeholder="Pan No.">
                      </div>

                      <div class="form-group col-md-6">
                        <label>VAT No.</label>
                        <input type="text" class="form-control form-control-sm" name="company_gst_no" id="company_gst_no" value="<?php if(isset($company_gst_no)){ echo $company_gst_no; } ?>" placeholder="VAT No.">
                      </div>

                      <div class="form-group col-md-6">
                        <label>U. Card No.</label>
                        <input type="text" class="form-control form-control-sm" name="company_gst_no" id="company_gst_no" value="<?php if(isset($company_gst_no)){ echo $company_gst_no; } ?>" placeholder="U. Card No.">
                      </div>

                      <div class="form-group col-md-6">
                        <label>DL No. 1</label>
                        <input type="number" class="form-control form-control-sm" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="DL No. 1" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>DL No. 2 </label>
                        <input type="number" class="form-control form-control-sm" name="company_mob2" id="company_mob2" value="<?php if(isset($company_mob2)){ echo $company_mob2; } ?>" placeholder="DL No. 2">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Credit Limit</label>
                        <input type="number" class="form-control form-control-sm" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="Credit Limit" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Bill Limit </label>
                        <input type="number" class="form-control form-control-sm" name="company_mob2" id="company_mob2" value="<?php if(isset($company_mob2)){ echo $company_mob2; } ?>" placeholder="Bill Limit">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Payment Transfer For Sale</label>
                        <input type="number" class="form-control form-control-sm" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="Payment Transfer For Sale" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Payment Transfer For Purchase </label>
                        <input type="number" class="form-control form-control-sm" name="company_mob2" id="company_mob2" value="<?php if(isset($company_mob2)){ echo $company_mob2; } ?>" placeholder="Payment Transfer For Purchase">
                      </div>

                  <div class="form-group col-md-12">
                    <label>Audit Upto</label>
                    <input type="text" class="form-control form-control-sm" name="admin_email" id="admin_email" placeholder="Audit Upto" required>
                  </div>

                  <div class="form-group col-md-6 mt-4">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                        <label for="composition_scheme" class="custom-control-label">TDS Applicable</label>
                      </div>
                    </div>

                    <div class="form-group col-md-6 select_sm">
                      <label>Type Of Firm</label>
                      <select class="form-control select2" name="Date_id" id="Date_id" data-placeholder="Type Of Firm" required>
                        <option value="">Type Of Firm</option>
                        <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                        <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                        <?php } } ?>
                      </select>
                    </div>

                    <div class="form-group col-md-6 mt-4">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                          <label for="composition_scheme" class="custom-control-label">Maintain Bill By Bill Balance</label>
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                          <button type="button" class="btn btn-primary">Add Bill</button>
                      </div>

                </div>
              </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary">Update Account</button>
                  <?php }else{ ?>
                    <button type="submit" class="btn btn-success">Save Account</button>
                  <?php } ?>
                  <a href="<?php echo base_url(); ?>/User/branch_information_list" class="btn btn-default ml-4">Cancel</a>
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
