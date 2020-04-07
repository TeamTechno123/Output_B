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
            <h1>Quick Bank Entry  Information</h1>
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
                <h3 class="card-title"> Quick Bank Entry  Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">

                    <div class="form-group col-md-4">
                      <label>Enter Date</label>
                      <input type="text" class="form-control form-control-sm" name="warehouse_name" id="warehouse_name" value="<?php if(isset($warehouse_name)){ echo $warehouse_name; } ?>" placeholder="Enter Date" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Enter VCH No.</label>
                      <input type="text" class="form-control form-control-sm" name="warehouse_name" id="warehouse_name" value="<?php if(isset($warehouse_name)){ echo $warehouse_name; } ?>" placeholder="Enter VCH No." required>
                    </div>
                    <div class="form-group col-md-4 select_sm">
                    <label>Select Payment Mode</label>
                    <select class="form-control select2" name="reg_type" id="reg_type" data-placeholder="Select Payment Mode" required>
                      <!-- <option value="">Select Payment Mode</option>
                      <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                  <label>Select Account Name</label>
                  <select class="form-control select2" name="entry_id" id="entry_id" data-placeholder="Select Account Name" required>
                    <!-- <option value="">Select Account Name</option>
                    <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                    <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                    <?php } } ?> -->
                  </select>
                </div>


                  <div class="form-group col-md-6">
                    <label>Enter Amount</label>
                    <input type="text" class="form-control form-control-sm" name="warehouse_name" id="warehouse_name" value="<?php if(isset($warehouse_name)){ echo $warehouse_name; } ?>" placeholder="Enter Amount" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Enter Discount Amount</label>
                    <input type="text" class="form-control form-control-sm" name="warehouse_name" id="warehouse_name" value="<?php if(isset($warehouse_name)){ echo $warehouse_name; } ?>" placeholder="Enter Discount Amount" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Enter Cash Amount</label>
                    <input type="text" class="form-control form-control-sm" name="warehouse_name" id="warehouse_name" value="<?php if(isset($warehouse_name)){ echo $warehouse_name; } ?>" placeholder="Enter Cash Amount" required>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                  <label>Select Narration</label>
                  <select class="form-control select2" name="narration_id" id="narration_id" data-placeholder="Select Narration" required>
                    <!-- <option value="">Select Narration</option>
                    <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                    <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                    <?php } } ?> -->
                  </select>
                </div>

                  <div class="form-group col-md-3">
                    <label>Cheque No.</label>
                    <input type="text" class="form-control form-control-sm" name="cheque_no" id="cheque_no" value="<?php if(isset($cheque_no)){ echo $cheque_no; } ?>" placeholder="Cheque No." required>
                  </div>
                  <div class="form-group col-md-3">
                    <label>Cheque Date</label>
                    <input type="text" class="form-control form-control-sm" name="cheque_date" id="cheque_date" value="<?php if(isset($cheque_date)){ echo $cheque_date; } ?>" placeholder="Cheque Date" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label>Bank Name</label>
                    <input type="text" class="form-control form-control-sm" name="bank_name" id="bank_name" value="<?php if(isset($bank_name)){ echo $bank_name; } ?>" placeholder="Bank Name" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label>Amount</label>
                    <input type="text" class="form-control form-control-sm" name="cheque_amount" id="cheque_amount" value="<?php if(isset($cheque_amount)){ echo $cheque_amount; } ?>" placeholder="Amount" required>
                  </div>
              </div>
                <div class="card-footer row">
                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>Transaction/quick_receipt_entry_list" class="btn btn-default ml-4">Cancel</a>
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
