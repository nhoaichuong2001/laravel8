 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
 <aside class="app-sidebar">
     <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="">
         <div>
             <p class="app-sidebar__user-name">John Doe</p>
             <p class="app-sidebar__user-designation">Frontend Developer</p>
         </div>
     </div>
     <ul class="app-menu">
         <li><a class="app-menu__item active" href="index-2.html">
           <i class="app-menu__icon fa fa-home"></i>
           <span class="app-menu__label">Dashboard</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                     class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Quản lí nhân sự</span><i
                     class="treeview-indicator fa fa-angle-right"></i></a>
             <ul class="treeview-menu">
                 <li><a class="treeview-item" href="{{ route('admin.account') }}"><i
                             class="icon fa fa-circle-o"></i>Tài khoản nhân viên</a></li>
             </ul>
         </li>
         <li><a class="app-menu__item" href="{{ route('admin.product') }}"><i
                     class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Sản phẩm</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                     class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Quản lí hóa đơn</span><i
                     class="treeview-indicator fa fa-angle-right"></i></a>
             <ul class="treeview-menu">
             <li><a class="treeview-item" href="{{ route('admin.invoice') }}"><i class="icon fa fa-circle-o"></i>Hóa đơn bán hàng</a></li>
                 <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i>Hóa đơn nhập hàng</a></li>

             </ul>
         </li>

         <li class="treeview">
           <a class="app-menu__item" href="#" data-toggle="treeview">
             <i class="app-menu__icon fa fa-laptop"></i>
             <span class="app-menu__label">Quản lí nhà cung cấp</span><i class="treeview-indicator fa fa-angle-right"></i></a>
             <ul class="treeview-menu">
                 <li><a class="treeview-item" href="{{ route('admin.provider.index') }}"><i
                             class="icon fa fa-circle-o"></i>Nhà cung cấp</a></li>

             </ul>
         </li>
     </ul>

 </aside>
