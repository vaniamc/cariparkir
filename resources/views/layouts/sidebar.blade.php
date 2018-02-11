 <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar ">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview active">
                <ul class="treeview-menu">
                    @if($page_title === "Semua User")
                        <li class="active"><a href="{{Route('dashboard')}}"><i class="fa fa-users"></i> Semua User</a></li>
                    @else
                        <li><a href="{{Route('dashboard')}}"><i class="fa fa-users"></i> Semua User</a></li>
                    @endif
                    
                    @if($page_title === "Semua Tempat Parkir")
                        <li class="active"><a href="{{Route('tempat-parkir')}}"><i class="fa fa-location-arrow"></i> Semua Tempat Parkir</a></li>
                    @else
                        <li><a href="{{Route('tempat-parkir')}}"><i class="fa fa-location-arrow"></i> Semua Tempat Parkir</a></li>
                    @endif

                    @if($page_title === "Ban User")
                        <li class="active"><a href="{{Route('ban-user')}}"><i class="fa fa-user-times"></i> Ban User</a></li>
                    @else
                        <li><a href="{{Route('ban-user')}}"><i class="fa fa-user-times"></i> Ban User</a></li>
                    @endif

                    
                    @if($page_title === "History Transaksi")
                        <li class="active"><a href="{{Route('history')}}"><i class="fa fa-history"></i>History Transaksi</a></li>
                    @else
                        <li><a href="{{Route('history')}}"><i class="fa fa-history"></i>History Transaksi</a></li>
                    @endif
                    
                    
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>