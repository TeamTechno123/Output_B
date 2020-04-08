<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Item Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10 offset-md-1">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Item</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-6 select_sm">
                    <label>Select Type</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Type" required>
                      <option value="">Select Type</option>
                      <!-- <?php if(isset($role_list)){ foreach ($role_list as $list) { ?>
                      <option value="<?php echo $list->role_id; ?>" <?php if(isset($role_id) && $role_id == $list->role_id){ echo 'selected'; } ?>><?php echo $list->role_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-6 select_sm">
                    <label>Select Company Name</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Company Name" required>
                      <option value="">Select Company Name</option>
                      <!-- <?php if(isset($role_list)){ foreach ($role_list as $list) { ?>
                      <option value="<?php echo $list->role_id; ?>" <?php if(isset($role_id) && $role_id == $list->role_id){ echo 'selected'; } ?>><?php echo $list->role_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Group Name</label>
                    <select class="form-control select2" name="group_id" id="group_id" data-placeholder="Select Group Name" required>
                      <option value="">Select Group Name</option>
                      <!-- <?php if(isset($role_list)){ foreach ($role_list as $list) { ?>
                      <option value="<?php echo $list->role_id; ?>" <?php if(isset($role_id) && $role_id == $list->role_id){ echo 'selected'; } ?>><?php echo $list->role_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-6 select_sm">
                    <label>Select GST %</label>
                    <select class="form-control select2" name="gst_id" id="gst_id" data-placeholder="Select GST %" required>
                      <option value="">Select GST %</option>
                      <!-- <?php if(isset($role_list)){ foreach ($role_list as $list) { ?>
                      <option value="<?php echo $list->role_id; ?>" <?php if(isset($role_id) && $role_id == $list->role_id){ echo 'selected'; } ?>><?php echo $list->role_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Enter Item Name </label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Item Name " required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Short Name </label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Short Name " required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter HSN / SAC Code </label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter HSN / SAC Code " required>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Primary Unit Name</label>
                    <select class="form-control select2" name="unit_id" id="unit_id" data-placeholder="Select Primary Unit Name" required>
                      <option value="">Select Primary Unit Name</option>
                      <!-- <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                      <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Alternate Unit Name</label>
                    <select class="form-control select2" name="unit_id" id="unit_id" data-placeholder="Select Alternate Unit Name" required>
                      <option value="">Select Primary Unit Name</option>
                      <!-- <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                      <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Conversion Factor</label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Conversion Factor" required>
                  </div>

                  <div class="form-group col-md-2 select_sm">
                    <label>Price Per</label>
                    <select class="form-control select2" name="country_id" id="country_id" data-placeholder="Price Per" required>
                      <option value="">Price Per</option>
                      <!-- <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                      <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Sale Price</label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Sale Price" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>MRP</label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="MRP" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Basic Price</label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Basic Price" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Purchase Price</label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Purchase Price" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>self Val. Price</label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="self Val. Price" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Min Sale Price</label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Min Sale Price" required>
                  </div>


                  <div class="form-group col-md-4">
                    <label>Min Lavel </label>
                    <input type="text" class="form-control" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Min Lavel " required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Max Level</label>
                    <input type="text" class="form-control" name="user_mobile" id="user_mobile" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" placeholder=" Max Level" required>
                  </div>
                  <div class="form-group col-md-4">
                  <label>Reorder Level</label>
                    <input type="text" class="form-control" name="user_email" id="user_email" value="<?php if(isset($user_email)){ echo $user_email; } ?>" placeholder="Reorder Level" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Barcode</label>
                    <input type="text" class="form-control" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Barcode" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Op Stock</label>
                    <input type="text" class="form-control" name="user_mobile" id="user_mobile" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" placeholder=" Op Stock" required>
                  </div>
                  <div class="form-group col-md-4">
                  <label>Op Val</label>
                    <input type="text" class="form-control" name="user_email" id="user_email" value="<?php if(isset($user_email)){ echo $user_email; } ?>" placeholder="Op Val" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Image Upload</label>
                    <input type="file" name="company_logo" value="">
                    </div>
                  <div class="form-group col-md-6">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                        <label for="composition_scheme" class="custom-control-label">This Item Require Serial No. Tracking</label>
                      </div>
                    </div>

                    <div class="form-group col-md-4">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                          <label for="composition_scheme" class="custom-control-label">Track Stock Needed</label>
                        </div>
                      </div>

                      <div class="form-group col-md-2">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                            <label for="composition_scheme" class="custom-control-label">Active</label>
                          </div>
                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/dashboard" class="btn btn-default ml-4">Cancel</a>
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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
// Check Mobile Duplication..
  var user_mobile1 = $('#user_mobile').val();
  $('#user_mobile').on('change',function(){
    var user_mobile = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"user_mobile",
             "column_val":user_mobile,
             "table_name":"user"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#user_mobile').val(user_mobile1);
          toastr.error(user_mobile+' Mobile No Exist.');
        }
      }
    });
  });

// Check Email Duplication..
  var user_email1 = $('#mobile').val();
  $('#user_email').on('change',function(){
    var user_email = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"user_email",
             "column_val":user_email,
             "table_name":"user"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#user_email').val(user_email1);
          toastr.error(user_email+' Email Id Exist.');
        }
      }
    });
  });
</script>



</body>
</html>
