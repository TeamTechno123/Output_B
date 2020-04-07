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
            <h1>Activation</h1>
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
                <h3 class="card-title">Add Activation Key</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <label>Enter License Key</label>
                    <textarea class="form-control form-control-sm" rows="3" name="activatation_key" id="activatation_key" placeholder="Enter License Key" required><?php if(isset($activatation_key)){ echo $activatation_key; } ?></textarea>
                  </div>
                </div>
                <div class="card-footer row">

                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Activate</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/activation_list" class="btn btn-default ml-4">Cancel</a>
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
  var item_company_name1 = $('#item_company_name').val();
  $('#item_company_name').on('change',function(){
    var item_company_name = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"item_company_name",
             "column_val":item_company_name,
             "table_name":"item_company"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#item_company_name').val(item_company_name1);
          toastr.error(item_company_name+' Exist.');
        }
      }
    });
  });
</script>
</body>
</html>
