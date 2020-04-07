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
            <h1>Account Group Information</h1>
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
                <h3 class="card-title">Add Account Group</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-12">
                    <label>Account Group Name</label>
                    <input type="text" class="form-control form-control-sm" name="account_group_name" id="account_group_name" value="<?php if(isset($account_group_name)){ echo $account_group_name; } ?>" placeholder="Item Company" required>
                  </div>

                  <div class="form-group col-md-6">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                        <label for="composition_scheme" class="custom-control-label">This is Primary Group</label>
                      </div>
                    </div>
                    <div class="col-md-6">

                    </div>

                  <div class="form-group col-md-12 select_sm">
                    <label>Under Group</label>
                    <select class="form-control select2" name="group_id" id="group_id" data-placeholder="Under Group" required>
                      <option value="">Under Group</option>
                      <!-- <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                      <option value="<?php echo $list->group_id; ?>" <?php if(isset($group_id) && $group_id == $list->group_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                </div>
                <div class="card-footer row">

                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/account_group_list" class="btn btn-default ml-4">Cancel</a>
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
