<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
             <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('dashboard1/newdokumen') ?>"><i class="fa ion-edit"></i>New Dokumen</a></li>
                    <li><a href="#"><i class="fa fa-edit"></i>Edit Dokumen</a></li>
                    <li><a href="<?php echo site_url('dashboard1/listdokumen') ?>"><i class="fa ion-clipboard"></i>List Dokumen</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="label label-primary pull-right">4</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>          
            <li>
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="label pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="label pull-right bg-yellow">1</small>
                </a>
            </li>
           
            <li><a href="#"><i class="fa fa-book"></i> Documentation</a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">