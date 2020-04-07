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
            <h1>Service Head Information</h1>
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
                <h3 class="card-title"> Service Head Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" salt="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>Service Code</label>
                    <input type="text" class="form-control form-control-sm" name="service_code" id="service_code" value="<?php if(isset($service_code)){ echo $service_code; } ?>" placeholder="Service Code" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Service Name</label>
                    <input type="text" class="form-control form-control-sm" name="service_name" id="service_name" value="<?php if(isset($service_name)){ echo $service_name; } ?>" placeholder="Service Name" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Description</label>
                    <textarea class="form-control form-control-sm" rows="3" name="service_description" id="service_description" placeholder="Enter Description" required><?php if(isset($service_description)){ echo $service_description; } ?></textarea>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Service Charges</label>
                    <input type="text" class="form-control form-control-sm" name="service_charges" id="service_charges" value="<?php if(isset($service_charges)){ echo $service_charges; } ?>" placeholder="Service Charges" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Service Remark</label>
                    <input type="text" class="form-control form-control-sm" name="service_remark" id="service_remark" value="<?php if(isset($service_remark)){ echo $service_remark; } ?>" placeholder="Service Remark" required>
                  </div>

                </div>
                <div class="card-footer row">
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-6 text-right">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/service_head_information_list" class="btn btn-default ml-4">Cancel</a>
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
  var salt_name1 = $('#salt_name').val();
  $('#salt_name').on('change',function(){
    var salt_name = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"salt_name",
             "column_val":salt_name,
             "table_name":"item_group"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#salt_name').val(salt_name1);
          toastr.error(salt_name+' Exist.');
        }
      }
    });
  });
</script>
</body>
</html>
