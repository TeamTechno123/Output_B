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
            <h1>Market</h1>
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
                <h3 class="card-title">Add Market</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <label>Market  Name</label>
                    <input type="text" class="form-control form-control-sm" name="market_name" id="market_name" value="<?php if(isset($market_name)){ echo $market_name; } ?>" placeholder="Market Name" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Market Address</label>
                    <textarea class="form-control form-control-sm" rows="3" name="company_address" id="company_address" placeholder="Enter Market Address" required><?php if(isset($company_address)){ echo $company_address; } ?></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Market  License No.</label>
                    <input type="text" class="form-control form-control-sm" name="license_no" id="license_no" value="<?php if(isset($license_no)){ echo $license_no; } ?>" placeholder="Market License No." required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Market License Date</label>
                    <input type="text" class="form-control form-control-sm" name="license_date" id="license_date" value="<?php if(isset($license_date)){ echo $license_date; } ?>" placeholder="Market License Date" required>
                  </div>

                </div>
                <div class="card-footer row">

                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/market_list" class="btn btn-default ml-4">Cancel</a>
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
  var market_name1 = $('#market_name').val();
  $('#market_name').on('change',function(){
    var market_name = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"market_name",
             "column_val":market_name,
             "table_name":"market"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#market_name').val(market_name1);
          toastr.error(market_name+' Exist.');
        }
      }
    });
  });
</script>
</body>
</html>
