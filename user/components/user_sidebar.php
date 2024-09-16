<?php
// กำหนด URL ปัจจุบัน
$current_page = basename($_SERVER['PHP_SELF']);

// สร้าง array เพื่อจัดเก็บชื่อเพจ
$pages = [
    'user_borrow' => './user_aborrow.php',
    'user_return' => './user_return.php',
    'user_report' => './user_report.php',
    'user_edit' => './user_edit.php'
 
];

// ฟังก์ชันตรวจสอบ active
function isActive($page) {
    global $current_page;
    return $current_page == $page ? 'active' : '';
}

// ฟังก์ชันตรวจสอบเปิดเมนูย่อย
function isMenuOpen($parent_pages) {
    global $current_page;
    return in_array($current_page, $parent_pages) ? 'menu-is-opening menu-open' : '';
}
?>

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Preta | EBS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User : คุณดิว</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                แดชบอร์ด
              </p>
            </a>
          
          </li> -->
          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
          <li class="nav-item">
          <a href="<?php echo $pages['user_borrow']; ?>" class="nav-link <?php echo isActive('user_aborrow.php'); ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                ขอยืมอุปกรณ์
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?php echo $pages['user_return']; ?>" class="nav-link <?php echo isActive('user_return.php'); ?>">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                แจ้งคืนอุปกรณ์
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?php echo $pages['user_report']; ?>" class="nav-link <?php echo isActive('user_report.php'); ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                รายงานการยืม - คืน
                
              </p>
            </a>
          </li>

         
        
          <li class="nav-header">ส่วนของการจัดการ</li>
          <li class="nav-item">
          <a href="<?php echo $pages['user_edit']; ?>" class="nav-link <?php echo isActive('user_edit.php'); ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                แก้ไขข้อมูลผู้ใช้
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="./site.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                จัดการ site ก่อสร้าง
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./etype.php" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                จัดการประเภทอุปกรณ์
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./equipment.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                จัดการอุปกรณ์ให้ยืม
                
              </p>
            </a>
            
          </li> -->
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 