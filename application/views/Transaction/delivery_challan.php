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
            <h1>Delivery Challan Information</h1>
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
                <h3 class="card-title">Add Delivery Challan </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post" autocomplete="off">
                <div class="card-body row">
                  <div class="form-group col-md-2">
                    <label>Date.*</label>
                    <input type="text" class="form-control form-control-sm" name="stock_date" id="date1" data-target="#date1" data-toggle="datetimepicker" value="<?php if(isset($stock_date)){ echo $stock_date; } else{ echo date('d-m-Y'); } ?>" placeholder="" required>
                  </div>
                  <div class="form-group col-md-3 select_sm">
                  <label>Select Terms</label>
                  <select class="form-control select2" name="terms_id" id="terms_id" data-placeholder="Select Terms" required>
                    <!-- <option value="">Select Terms</option>
                    <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                    <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                    <?php } } ?> -->
                  </select>
                </div>
                <div class="form-group col-md-5 select_sm">
                <label>Select Party Name</label>
                <select class="form-control select2" name="party_id" id="party_id" data-placeholder="Select Party Name" required>
                  <!-- <option value="">Select Party Name</option>
                  <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                  <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                  <?php } } ?> -->
                </select>
              </div>

              <div class="col-md-2">

              </div>

              <div class="form-group col-md-2 select_sm">
              <label>Select Sale Type</label>
              <select class="form-control select2" name="sale_type" id="sale_type" data-placeholder="Select Sale Type" required>
                <!-- <option value="">Select Sale Type</option>
                <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
                <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
                <?php } } ?> -->
              </select>
            </div>

            <div class="form-group col-md-2">
              <label>DC No.</label>
              <input type="text" class="form-control form-control-sm" name="stock_date"  value="<?php if(isset($stock_date)){ echo $stock_date; } else{ echo date('d-m-Y'); } ?>" placeholder="DC No." required>
            </div>

            <div class="form-group col-md-2">
              <label>DC Date.</label>
              <input type="text" class="form-control form-control-sm" name="stock_date" id="date1" data-target="#date1" data-toggle="datetimepicker" value="<?php if(isset($stock_date)){ echo $stock_date; } else{ echo date('d-m-Y'); } ?>" placeholder="DC Date." required>
            </div>

            <div class="form-group col-md-2 select_sm">
            <label>Select Tranport</label>
            <select class="form-control select2" name="transport_id" id="transport_id" data-placeholder="Select Tranport" required>
              <!-- <option value="">Select Tranport</option>
              <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
              <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
              <?php } } ?> -->
            </select>
          </div>

            <div class="form-group col-md-2">
              <label>Deliver At</label>
              <input type="text" class="form-control form-control-sm" name="stock_date"  value="<?php if(isset($stock_date)){ echo $stock_date; } else{ echo date('d-m-Y'); } ?>" placeholder="Deliver At" required>
            </div>

            <div class="col-md-2">

            </div>



          <div class="form-group col-md-2">
            <label>GR / PR No.</label>
            <input type="text" class="form-control form-control-sm" name="stock_date"  value="<?php if(isset($stock_date)){ echo $stock_date; } else{ echo date('d-m-Y'); } ?>" placeholder="GR / PR No." required>
          </div>
          <div class="form-group col-md-2">
            <label>Frieght</label>
            <input type="text" class="form-control form-control-sm" name="stock_date"  value="<?php if(isset($stock_date)){ echo $stock_date; } else{ echo date('d-m-Y'); } ?>" placeholder="Frieght" required>
          </div>

          <div class="form-group col-md-2">
            <label>Vehicle No.</label>
            <input type="text" class="form-control form-control-sm" name="stock_date"  value="<?php if(isset($stock_date)){ echo $stock_date; } else{ echo date('d-m-Y'); } ?>" placeholder="Vehicle No." required>
          </div>

          <div class="form-group col-md-2 select_sm">
          <label>Select Narration</label>
          <select class="form-control select2" name="narration_id" id="narration_id" data-placeholder="Select Narration" required>
            <!-- <option value="">Select Narration</option>
            <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
            <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
            <?php } } ?> -->
          </select>
        </div>

        <div class="form-group col-md-2 select_sm">
        <label>Select Agent</label>
        <select class="form-control select2" name="agent_id" id="agent_id" data-placeholder="Select Agent" required>
          <!-- <option value="">Select Agent</option>
          <?php if(isset($state_list)){ foreach ($state_list as $list) { ?>
          <option value="<?php echo $list->state_id; ?>" <?php if(isset($state_id) && $state_id == $list->state_id){ echo 'selected'; } ?>><?php echo $list->state_name; ?></option>
          <?php } } ?> -->
        </select>
      </div>

                  <div class="form-group col-md-12 text-right">
                    <button type="button" id="add_row" class="btn btn-sm btn-primary">Add Row</button>
                  </div>
                  <div class="form-group col-md-12">
                    <table id="myTable" class="table table-bordered tbl_list">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th class="wt_150">Select Item Name</th>
                        <th>Qty</th>
                        <th>Alt Qty</th>
                        <th>Free</th>
                        <th>Price</th>
                        <th>Per</th>
                        <th>Basic Amt</th>
                        <th>Disc %</th>
                        <th>Disc Amt</th>
                        <th>Tax Amt</th>
                        <th>Net Amt</th>
                        <th class="wt_50"></th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td >
                            1
                            </td>
                          <td>
                            <select class="form-control form-control-sm" name="item_id" id="item_id" data-placeholder="Select Item Name">
                              <option value="">Select Item Name</option>
                              <option >1</option>
                              <option >2</option>
                              <option >3</option>
                            </select>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="quantity" id="quantity" value="" placeholder="Qty" required>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="alt_quantity" id="alt_quantity" value="" placeholder="Alt Qty" required>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="free" id="free" value="" placeholder="Free" required>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="price" id="price" value="" placeholder="price" required>
                          </td>
                          <td>
                            <select class="form-control form-control-sm" name="narration_id" id="narration_id" data-placeholder="Per">
                              <option value="">Per</option>
                              <option >1</option>
                              <option >2</option>
                              <option >3</option>
                            </select>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="basic_amt" id="basic_amt" value="" placeholder="Basic Amt" required>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="disc_per" id="disc_per" value="" placeholder="Disc %" required>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="disc_amt" id="disc_amt" value="" placeholder="Disc Amt " required>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="tax_amt" id="tax_amt" value="" placeholder="Tax Amt" required>
                          </td>
                          <td class="wt_100">
                            <input type="text" class="form-control form-control-sm" name="net_amt" id="net_amt" value="" placeholder="Net Amt" required>
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
                    <a href="<?php echo base_url() ?>Transaction/contra_entry_list" class="btn btn-default ml-4">Cancel</a>
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
    '<td >'+
      '</td>'+
    '<td>'+
      '<select class="form-control form-control-sm" name="item_id" id="item_id" data-placeholder="Select Item Name">'+
        '<option value="">Select Item Name</option>'+
        '<option >1</option>'+
        '<option >2</option>'+
        '<option >3</option>'+
      '</select>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="quantity" id="quantity" value="" placeholder="Qty" required>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="alt_quantity" id="alt_quantity" value="" placeholder="Alt Qty" required>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="free" id="free" value="" placeholder="Free" required>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="price" id="price" value="" placeholder="price" required>'+
    '</td>'+
    '<td>'+
      '<select class="form-control form-control-sm" name="narration_id" id="narration_id" data-placeholder="Per">'+
        '<option value="">Per</option>'+
        '<option >1</option>'+
        '<option >2</option>'+
        '<option >3</option>'+
      '</select>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="basic_amt" id="basic_amt" value="" placeholder="Basic Amt" required>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="disc_per" id="disc_per" value="" placeholder="Disc %" required>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="disc_amt" id="disc_amt" value="" placeholder="Disc Amt " required>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="tax_amt" id="tax_amt" value="" placeholder="Tax Amt" required>'+
    '</td>'+
    '<td class="wt_100">'+
      '<input type="text" class="form-control form-control-sm" name="net_amt" id="net_amt" value="" placeholder="Net Amt" required>'+
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
