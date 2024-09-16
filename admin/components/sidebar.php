<?php
// กำหนด URL ปัจจุบัน
$current_page = basename($_SERVER['PHP_SELF']);

// สร้าง array เพื่อจัดเก็บชื่อเพจ
$pages = [
    'borrow' => './aborrow.php',
    'return' => './areturn.php',
    'b_report' => './b_report.php',
    'r_report' => './r_report.php',
    'n_report' => './n_report.php',
    'user' => './user.php',
    'site' => './site.php',
    'etype' => './etype.php',
    'equipment' => './equipment.php'
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
          <a href="#" class="d-block">Admin : คุณดาว</a>
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
            <li class="nav-item">
                <a href="<?php echo $pages['borrow']; ?>" class="nav-link <?php echo isActive('aborrow.php'); ?>">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>ระบบอนุมัติการยืม</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $pages['return']; ?>" class="nav-link <?php echo isActive('areturn.php'); ?>">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>ระบบอนุมัติการคืน</p>
                </a>
            </li>

            <li class="nav-item <?php echo isMenuOpen(['b_report.php', 'r_report.php', 'n_report.php']); ?>">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>รายงานการยืม - คืน<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo $pages['b_report']; ?>" class="nav-link <?php echo isActive('b_report.php'); ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>การยืม</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $pages['r_report']; ?>" class="nav-link <?php echo isActive('r_report.php'); ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>การคืน</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $pages['n_report']; ?>" class="nav-link <?php echo isActive('n_report.php'); ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>ของที่ยังไม่ได้ส่งคืน</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-header">ส่วนของการจัดการ</li>
            <li class="nav-item">
                <a href="<?php echo $pages['user']; ?>" class="nav-link <?php echo isActive('user.php'); ?>">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>จัดการผู้ใช้งาน</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $pages['site']; ?>" class="nav-link <?php echo isActive('site.php'); ?>">
                    <i class="nav-icon far fa-image"></i>
                    <p>จัดการ site ก่อสร้าง</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $pages['etype']; ?>" class="nav-link <?php echo isActive('etype.php'); ?>">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>จัดการประเภทอุปกรณ์</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $pages['equipment']; ?>" class="nav-link <?php echo isActive('equipment.php'); ?>">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>จัดการอุปกรณ์ให้ยืม</p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>