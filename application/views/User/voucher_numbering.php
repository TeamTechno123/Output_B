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
            <h1>Voucher Numbering</h1>
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
                <h3 class="card-title"> Voucher Numbering</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12 select_sm">
                    <label>Select Voucher Type</label>
                    <select class="form-control select2" name="voucher_type" id="voucher_type" data-placeholder="Select Voucher Type" required>
                      <!-- <option value="">Select Voucher Type</option>
                      <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-12 select_sm">
                    <label>Select Sequence Order</label>
                    <select class="form-control select2" name="sequence order" id="sequence order" data-placeholder="Select Sequence Order" required>
                      <!-- <option value="">Select Sequence Order</option>
                      <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Prefix</label>
                    <input type="text" class="form-control form-control-sm" name="prefix" id="prefix" value="<?php if(isset($prefix)){ echo $prefix; } ?>" placeholder="Prefix" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Next Number </label>
                    <input type="text" class="form-control form-control-sm" name="next_number" id="next_number" value="<?php if(isset($next_number)){ echo $next_number; } ?>" placeholder="Next Number " required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Suffix</label>
                    <input type="text" class="form-control form-control-sm" name="suffix" id="suffix" value="<?php if(isset($suffix)){ echo $suffix; } ?>" placeholder="Suffix" required>
                  </div>

                </div>
                <div class="card-footer row">
                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/voucher_numbering_list" class="btn btn-default ml-4">Cancel</a>
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
