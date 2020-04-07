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
            <h1>Standard Narration Information</h1>
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
                <h3 class="card-title"> Standard Narration Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12 select_sm">
                    <label>Select Entry Form</label>
                    <select class="form-control select2" name="reg_type" id="reg_type" data-placeholder="Select Entry Form" required>
                      <!-- <option value="">Select Entry Form</option>
                      <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Enter Std Narration Name</label>
                    <input type="text" class="form-control form-control-sm" name="std_narr_name" id="std_narr_name" value="<?php if(isset($std_narr_name)){ echo $std_narr_name; } ?>" placeholder="Enter Std Narration Name" required>
                  </div>

                </div>
                <div class="card-footer row">
                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/std_narr_information_list" class="btn btn-default ml-4">Cancel</a>
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
