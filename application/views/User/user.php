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
            <h1>User Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12 select_sm">
                    <label>Select Role Name</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Role Name" required>
                      <option value="">Select Role Name</option>
                      <!-- <?php if(isset($role_list)){ foreach ($role_list as $list) { ?>
                      <option value="<?php echo $list->role_id; ?>" <?php if(isset($role_id) && $role_id == $list->role_id){ echo 'selected'; } ?>><?php echo $list->role_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Enter Name of User</label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Name of User" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Enter Address</label>
                    <textarea class="form-control form-control-sm" rows="3" name="user_address" id="user_address" placeholder="Enter Address" required><?php if(isset($user_address)){ echo $user_address; } ?></textarea>
                  </div>
                  <div class="form-group col-md-6 select_sm">
                    <label>Select Country</label>
                    <select class="form-control select2" name="country_id" id="country_id" data-placeholder="Select Country" required>
                      <option value="">Select Country</option>
                      <!-- <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                      <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-6 select_sm">
                    <label>Select State</label>
                    <select class="form-control select2" name="state_id" id="state_id" data-placeholder="Select State" required>
                      <option value="">Select State</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-6 select_sm">
                    <label>Select city</label>
                    <select class="form-control select2" name="city_id" id="city_id" data-placeholder="Select city" required>
                      <option value="">Select city</option>
                      <!-- <?php if(isset($city_list)){ foreach ($city_list as $list) { ?>
                      <option value="<?php echo $list->city_id; ?>" <?php if(isset($city_id) && $city_id == $list->city_id){ echo 'selected'; } ?>><?php echo $list->city_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Enter Pincode</label>
                    <input type="text" class="form-control" name="pincode" id="pincode" value="<?php if(isset($pincode)){ echo $pincode; } ?>" placeholder="Enter Pincode" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Mobile No.</label>
                    <input type="number" class="form-control" name="user_mobile" id="user_mobile" value="<?php if(isset($user_mobile)){ echo $user_mobile; } ?>" placeholder="Enter Mobile No." required>
                  </div>
                  <div class="form-group col-md-6">
                  <label>Enter Email Id</label>
                    <input type="email" class="form-control" name="user_email" id="user_email" value="<?php if(isset($user_email)){ echo $user_email; } ?>" placeholder="Enter Email Id." required>
                  </div>
                  <div class="form-group col-md-6">
                  <label>Enter Password</label>
                    <input type="password" class="form-control " name="user_password" id="user_password" value="<?php if(isset($user_password)){ echo $user_password; } ?>" placeholder="Enter Password" required>
                  </div>
                  <div class="form-group col-md-6">
                  <label>Confirm Password</label>
                    <input type="password" class="form-control " name="c_password" id="c_password" value="<?php if(isset($c_password)){ echo $c_password; } ?>" placeholder="Confirm Password" required>
                  </div>
                  <div class="form-group col-md-6">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                        <label for="composition_scheme" class="custom-control-label">Disable This User</label>
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
