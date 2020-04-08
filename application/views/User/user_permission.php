<!DOCTYPE html>
<html>
<!-- <style>
  td{ padding:7px 10px !important; }
</style> -->
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 mt-1">
            <h4>User Permission Information</h4>
          </div>
          <!-- <div class="col-sm-6 mt-1 text-right">
              <a href="<?php echo base_url(); ?>User/account_group" class="btn btn-sm btn-primary">Add Account Group </a>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <!-- /.card-header -->
            <div class="card-body">

              <div class="form-group  col-md-6 offset-md-3 select_sm">
                  <label>Select Role Name</label>
                  <select class="form-control select2" name="dr" id="dr" data-placeholder="Select Role Name" required>
                    <option value="">Select Role Name</option>
                    <!-- <?php if(isset($country_list)){ foreach ($country_list as $list) { ?>
                    <option value="<?php echo $list->country_id; ?>" <?php if(isset($country_id) && $country_id == $list->country_id){ echo 'selected'; } ?>><?php echo $list->country_name; ?></option>
                    <?php } } ?> -->
                  </select>
                </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">Module Name</th>
                  <th>Form  Name</th>
                  <th class="wt_100">Add</th>
                  <th class="wt_100">Modify</th>
                  <th class="wt_100">Delete</th>
                  <th class="wt_100">View</th>
                  <th class="wt_100">Print</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Master</td>
                    <td>Company Information</td>
                    <td>
                        <input type="checkbox" class="form-check-input ml-4" id="exampleCheck1">
                    </td>
                    <td>
                        <input type="checkbox" class="form-check-input ml-4" id="exampleCheck1">
                    </td>
                    <td>
                        <input type="checkbox" class="form-check-input ml-4" id="exampleCheck1">
                    </td>
                    <td>
                        <input type="checkbox" class="form-check-input ml-4" id="exampleCheck1">
                    </td>
                    <td>
                        <input type="checkbox" class="form-check-input ml-4" id="exampleCheck1">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
    <?php if($this->session->flashdata('save_success')){ ?>
      $(document).ready(function(){
        toastr.success('Saved successfully');
      });
    <?php } ?>
    <?php if($this->session->flashdata('update_success')){ ?>
      $(document).ready(function(){
        toastr.info('Updated successfully');
      });
    <?php } ?>
    <?php if($this->session->flashdata('delete_success')){ ?>
      $(document).ready(function(){
        toastr.error('Deleted successfully');
      });
    <?php } ?>
  </script>
</body>
</html>
