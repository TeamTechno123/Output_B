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
            <h1>Other Charges Head Information</h1>
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
                <h3 class="card-title">Add Other Charges Head</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>Enter Charges Heading</label>
                    <input type="text" class="form-control form-control-sm" name="ocharges_heading" id="ocharges_heading" value="<?php if(isset($ocharges_heading)){ echo $ocharges_heading; } ?>" placeholder="Enter Charges Heading" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Print As</label>
                    <input type="text" class="form-control form-control-sm" name="print_as" id="print_as" value="<?php if(isset($print_as)){ echo $print_as; } ?>" placeholder="Print As" required>
                  </div>



                  <div class="form-group col-md-12 select_sm">
                    <label>Select Account Heading Post</label>
                    <select class="form-control select2" name="group_id" id="group_id" data-placeholder="Select Account Heading Post" required>
                      <option value="">Select Account Heading Post</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->group_id; ?>" <?php if(isset($group_id) && $group_id == $list->group_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Type Of Charges</label>
                    <select class="form-control select2" name="group_id" id="group_id" data-placeholder="Type Of Charges" required>
                      <option value="">Type Of Charges</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->group_id; ?>" <?php if(isset($group_id) && $group_id == $list->group_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Amount Of Charges To Be Fed As</label>
                    <select class="form-control select2" name="group_id" id="group_id" data-placeholder="Amount Of Charges To Be Fed As" required>
                      <option value="">Amount Of Charges To Be Fed As</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->group_id; ?>" <?php if(isset($group_id) && $group_id == $list->group_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Apply On</label>
                    <input type="text" class="form-control form-control-sm" name="apply_on" id="apply_on" value="<?php if(isset($apply_on)){ echo $apply_on; } ?>" placeholder="Apply On" required>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>% Of Net Amount</label>
                    <select class="form-control select2" name="group_id" id="group_id" data-placeholder="% Of Net Amount" required>
                      <option value="">% Of Net Amount</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->group_id; ?>" <?php if(isset($group_id) && $group_id == $list->group_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Calculate @</label>
                    <input type="text" class="form-control form-control-sm" name="apply_on" id="apply_on" value="<?php if(isset($apply_on)){ echo $apply_on; } ?>" placeholder="Calculate @" required>
                  </div>

                  <div class="form-group col-md-6 mt-4">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                        <label for="composition_scheme" class="custom-control-label">Round Off Value Charges</label>
                      </div>
                    </div>

                  <div class="form-group col-md-6">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                        <label for="composition_scheme" class="custom-control-label">Is GST Applicable</label>
                      </div>
                    </div>
                    <div class="col-md-6">

                    </div>

                    <div class="form-group col-md-6 select_sm">
                      <label>Select Tax Slab</label>
                      <select class="form-control select2" name="group_id" id="group_id" data-placeholder="Select Tax Slab" required>
                        <option value="">Select Tax Slab</option>
                        <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                        <option value="<?php echo $list->group_id; ?>" <?php if(isset($group_id) && $group_id == $list->group_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                        <?php } } ?> -->
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label>HSN Code</label>
                      <input type="text" class="form-control form-control-sm" name="apply_on" id="apply_on" value="<?php if(isset($apply_on)){ echo $apply_on; } ?>" placeholder="HSN Code" required>
                    </div>

                </div>
                <div class="card-footer row">

                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/other_charges_list" class="btn btn-default ml-4">Cancel</a>
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
  var account_group_name1 = $('#account_group_name').val();
  $('#account_group_name').on('change',function(){
    var account_group_name = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"account_group_name",
             "column_val":account_group_name,
             "table_name":"account_group"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#account_group_name').val(account_group_name1);
          toastr.error(account_group_name+' Exist.');
        }
      }
    });
  });
</script>
</body>
</html>
