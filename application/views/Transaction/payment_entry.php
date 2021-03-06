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
            <h1>Payment Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add New Payment Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post" autocomplete="off">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>Date.*</label>
                    <input type="text" class="form-control form-control-sm" name="stock_date" id="date1" data-target="#date1" data-toggle="datetimepicker" value="<?php if(isset($stock_date)){ echo $stock_date; } else{ echo date('d-m-Y'); } ?>" placeholder="" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>VCH No.</label>
                    <input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="<?php if(isset($stock_no)){ echo $stock_no; } ?>" placeholder="VCH No."  required>
                  </div>


                  <div class="form-group col-md-12 text-right">
                    <button type="button" id="add_row" class="btn btn-sm btn-primary">Add Row</button>
                  </div>
                  <div class="form-group col-md-12">
                    <table id="myTable" class="table table-bordered tbl_list">
                      <thead>
                      <tr>
                        <th>Dr./ Cr.</th>
                        <th class="wt_150">Select Account Name</th>
                        <th>Amount</th>
                        <th class="wt_100">Select Narration</th>
                        <th class="wt_50"></th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>
                            <select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Dr./ Cr.">
                              <option value="">Dr./ Cr.</option>
                              <option >1</option>
                              <option >2</option>
                              <option >3</option>
                            </select>
                          </td>

                          <td>
                            <select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Select Account Type">
                              <option value="">Select Account Type</option>
                              <option >1</option>
                              <option >2</option>
                              <option >3</option>
                            </select>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="Amount" required>
                          </td>
                          <td>
                            <select class="form-control form-control-sm" name="narration_id" id="narration_id" data-placeholder="Select Narration">
                              <option value="">Select Narration</option>
                              <option >1</option>
                              <option >2</option>
                              <option >3</option>
                            </select>
                          </td>
                          <td class="wt_50"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="form-group col-md-4 select_sm">
                    <label>Long Narration</label>
                    <textarea class="form-control form-control-sm" name="name" id="" rows="4"><?php if(isset($stock_no)){ echo $stock_no; } ?></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Debit Total</label>
                    <input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="<?php if(isset($stock_no)){ echo $stock_no; } ?>" placeholder="Debit Total"  required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Credit Total</label>
                    <input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="<?php if(isset($stock_no)){ echo $stock_no; } ?>" placeholder="Credit Total"  required>
                  </div>
                </div>
                <div class="card-footer row">

                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>Transaction/payment_entry_list" class="btn btn-default ml-4">Cancel</a>
                  </div>
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
  // Add Row...
  <?php if(isset($update)){ ?>
  var i = <?php echo $i-1; ?>
  <?php } else { ?>
  var i = 1;
  <?php } ?>

  $('#add_row').click(function(){
    i++;
    var row = ''+
    '<tr>'+
    '<td>'+
      '<select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Dr./ Cr.">'+
        '<option value="">Dr./ Cr.</option>'+
        '<option >1</option>'+
        '<option >2</option>'+
        '<option >3</option>'+
      '</select>'+
    '</td>'+

    '<td>'+
      '<select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Select Account Type">'+
        '<option value="">Select Account Type</option>'+
        '<option >1</option>'+
        '<option >2</option>'+
        '<option >3</option>'+
      '</select>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="Amount" required>'+
    '</td>'+
    '<td>'+
      '<select class="form-control form-control-sm" name="narration_id" id="narration_id" data-placeholder="Select Narration">'+
        '<option value="">Select Narration</option>'+
        '<option >1</option>'+
        '<option >2</option>'+
        '<option >3</option>'+
      '</select>'+
    '</td>'+
      '<td class="wt_50"><a class="rem_row"><i class="fa fa-trash text-danger"></i></a></td>'+
    '</tr>';
    $('#myTable').append(row);
  });

  $('#myTable').on('click', '.rem_row', function () {
    $(this).closest('tr').remove();
  });

</script>
</body>
</html>
