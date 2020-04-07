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
            <h1>Warehouse  Information</h1>
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
                <h3 class="card-title"> Warehouse  Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12 select_sm">
                    <label>Select Branch</label>
                    <select class="form-control select2" name="reg_type" id="reg_type" data-placeholder="Select Branch" required>
                      <!-- <option value="">Select Branch</option>
                      <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Enter Warehouse Name</label>
                    <input type="text" class="form-control form-control-sm" name="warehouse_name" id="warehouse_name" value="<?php if(isset($warehouse_name)){ echo $warehouse_name; } ?>" placeholder="Enter Warehouse Name" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Display Name</label>
                    <input type="text" class="form-control form-control-sm" name="warehouse_name" id="warehouse_name" value="<?php if(isset($warehouse_name)){ echo $warehouse_name; } ?>" placeholder="Display Name" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Address</label>
                    <textarea class="form-control form-control-sm" rows="3" name="warehouse_address" id="warehouse_address" placeholder="Enter Company Address" required><?php if(isset($warehouse_address)){ echo $warehouse_address; } ?></textarea>
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
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Pincode</label>
                    <input type="text" class="form-control form-control-sm" name="warehouse_pincode" id="warehouse_pincode" value="<?php if(isset($warehouse_pincode)){ echo $warehouse_pincode; } ?>" placeholder="Enter Pincode" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Contact Person Name</label>
                    <input type="text" class="form-control form-control-sm" name="contact_person" id="contact_person" value="<?php if(isset($contact_person)){ echo $contact_person; } ?>" placeholder="Contact Person Name" required>
                  </div>

                  <div class="form-group col-md-4">
                  <label>Phone No.</label>
                  <input type="number" class="form-control form-control-sm" name="phone_no" id="phone_no" value="<?php if(isset($phone_no)){ echo $phone_no; } ?>" placeholder="Phone No." required>
                </div>

                <div class="form-group col-md-4">
                  <label>Mobile No.</label>
                  <input type="number" class="form-control form-control-sm" name="mobile_no" id="mobile_no" value="<?php if(isset($mobile_no)){ echo $mobile_no; } ?>" placeholder="Mobile No." required>
                </div>

                <div class="form-group col-md-4">
                  <label>Email Id</label>
                  <input type="email" class="form-control form-control-sm" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="Email Id" required>
                </div>

                <div class="form-group col-md-6">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                    <label for="composition_scheme" class="custom-control-label">Active</label>
                  </div>
                </div>
              </div>
                <div class="card-footer row">
                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/warehouse_information_list" class="btn btn-default ml-4">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
// Check Mobile Duplication..
  var role_name1 = $('#role_name').val();
  $('#role_name').on('change',function(){
    var role_name = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"role_name",
             "column_val":role_name,
             "table_name":"item_group"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#role_name').val(role_name1);
          toastr.error(role_name+' Exist.');
        }
      }
    });
  });
</script>
</body>
</html>
