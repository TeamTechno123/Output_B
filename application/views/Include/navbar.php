<?php
  $out_user_id = $this->session->userdata('out_user_id');
  $out_company_id = $this->session->userdata('out_company_id');
  $out_roll_id = $this->session->userdata('out_roll_id');
  $company_info = $this->User_Model->get_info_arr_fields('company_name','company_id', $out_company_id, 'company');
  $user_info = $this->User_Model->get_info_arr_fields('user_name','user_id', $out_user_id, 'user');
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>User/logout">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo $company_info[0]['company_name']; ?></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $user_info[0]['user_name']; ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>User/dashboard" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/company_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Company Information
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/branch_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Branch Information
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/activation_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Activation</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/item_company_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item Company</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/item_group_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item Group</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/salt_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Salt Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/unit_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Unit</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/market_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Market</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/account_group_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Account Group</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/std_narr_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Standard Narration</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/service_head_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Service Head Information</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/tax_slab_gst_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tax Slab  Information GST </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/tax_slab_vat_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tax Slab  Information Vat </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/other_charges_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Other Charges</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/stform_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>S T Form Information</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/item_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Item Information
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/account_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Account Information
                </p>
              </a>
            </li>



            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/additional_field_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Additional Filed Information
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/voucher_numbering_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voucher Numbering</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/warehouse_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Warehouse Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/item_account_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item Account</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/item_category_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/reset_fin_year_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reset Financial Year</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/role_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Role Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/user_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/service_head_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Service Head Information</p>
              </a>
            </li> -->

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/tags_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tags</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/user_permission" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  User Permission Information
                </p>
              </a>
            </li>

          </ul>
        </li>

        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Manage
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/customer_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Customers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/supplier_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Suppliers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/item_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Items</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/stock_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Stock</p>
              </a>
            </li>
          </ul>
        </li> -->

        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Sales
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/quote_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Quote</p>
              </a>
            </li>
          </ul>
        </li> -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Transaction
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/sale_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sale Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/delivery_challan_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Delivery Challan Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/sale_order_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sale Order Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/sale_return_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sale Return Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/sale_return_challan_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sale Return Challan </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/purchase_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Purchase Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/purchase_order_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Purchase Order Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/purchase_return_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Purchase Return Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/purchase_return_challan_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Purchase Return Challan </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/purchase_challan_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Purchase Challan Information</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/journal_entry_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Journal Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/quick_receipt_entry_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Quick Receipt Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/contra_entry_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contra Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/bank_entry_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Bank Entry Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/payment_entry_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Payment Information</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Report
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Demo Link</p>
              </a>
            </li>
          </ul>
        </li>
      </nav>
    <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
  </aside>
