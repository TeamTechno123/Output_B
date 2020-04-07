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
            <h1>Tax Slab Information</h1>
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
                <h3 class="card-title"> Tax Slab Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" salt="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>Enter Tax Slab Name</label>
                    <input type="text" class="form-control form-control-sm" name="tax_title" id="tax_title" value="<?php if(isset($tax_title)){ echo $tax_title; } ?>" placeholder="Enter Tax Slab Name" required>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select System</label>
                    <select class="form-control select2" name="state_id" id="state_id" data-placeholder="Select System" required>
                      <option value="">Select System</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-3 select_sm">
                    <label>Select Category</label>
                    <select class="form-control select2" name="state_id" id="state_id" data-placeholder="Select Category" required>
                      <option value="">Select Category</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-3">
                    <label>SGST</label>
                    <input type="text" class="form-control form-control-sm" name="service_name" id="service_name" value="<?php if(isset($service_name)){ echo $service_name; } ?>" placeholder="SGST" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label>CGST</label>
                    <input type="text" class="form-control form-control-sm" name="service_name" id="service_name" value="<?php if(isset($service_name)){ echo $service_name; } ?>" placeholder="CGST" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label>IGST</label>
                    <input type="text" class="form-control form-control-sm" name="service_name" id="service_name" value="<?php if(isset($service_name)){ echo $service_name; } ?>" placeholder="IGST" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label>CESS %</label>
                    <input type="text" class="form-control form-control-sm" name="service_name" id="service_name" value="<?php if(isset($service_name)){ echo $service_name; } ?>" placeholder="CESS %" required>
                  </div>

                  <div class="form-group col-md-3 select_sm">
                    <label>On</label>
                    <select class="form-control select2" name="state_id" id="state_id" data-placeholder="On" required>
                      <option value="">On</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-3">
                    <label>Special CESS </label>
                    <input type="text" class="form-control form-control-sm" name="service_name" id="service_name" value="<?php if(isset($service_name)){ echo $service_name; } ?>" placeholder="CESS %" required>
                  </div>

                  <div class="form-group col-md-3 select_sm">
                    <label>As Per</label>
                    <select class="form-control select2" name="state_id" id="state_id" data-placeholder="As Per" required>
                      <option value="">As Per</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                  <div class="form-group col-md-6">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                      <label for="composition_scheme" class="custom-control-label">Calculate Tax On MRP</label>
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                    <label for="composition_scheme" class="custom-control-label">Calculate Tax On Free Goods Also</label>
                  </div>
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
                    <a href="<?php echo base_url() ?>User/tax_slab_vat_list" class="btn btn-default ml-4">Cancel</a>
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
