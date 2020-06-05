 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('uploaded/default-avatar.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>



    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel pb-3 d-flex justify-content-between">


        <div class="info row">
            <form action="{{route('logout')}}" method="post">
              @csrf
              <button type="submit" class="bg-inherit btn justify-content-center my-0">
                  <img src="{{asset('uploaded/default-avatar.png')}}" title="exit" alt="logout icon" class="brand-image m-auto img-circle elevation-2"
                      style="opacity: .8" >
                      <a href="" title="profile" class="ml-0 pl-1 col-7">prifile</a>
              </button>
            </form>
          </div>

        <div class="info row">
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="bg-inherit btn justify-content-center my-0">
                <img src="{{asset('application_images/exit.png')}}" title="exit" alt="logout icon" class="brand-image m-auto img-circle elevation-3"
                    style="opacity: .8" >
            </button>
            </form>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route('register')}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route('users.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Users</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    cateogry
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("cateogry.new")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("cateogry.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Books</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    tag
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("tag.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("tag.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Books</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    tor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("tor.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("tor.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Books</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    tortype
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("tortype.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("tortype.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Books</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    foodprice
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("foodprice.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("foodprice.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Books</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    attraction
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("attraction.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("attraction.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Books</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    city
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("city.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("city.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Books</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                role
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route('role.create')}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route('role.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Roles</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    post
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("post.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("post.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Posts</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    post
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("post.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("post.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All Posts</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>



          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    state
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("state.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("state.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All state</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    guid
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("guid.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("guid.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All guids</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>




          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    comment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("comment.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("comment.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All comments</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    link
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("link.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("link.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All links</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>

<li class="nav-item has-treeview bg-cornflowerblue">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>              <p>
                    sublink
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview bg-navy">
              <li class="nav-item bg-cyan">
                <a href="{{route("sublink.create")}}" class="nav-link">
                    <i class="nav-icon fa fa-plus" aria-hidden="true"></i>
                    <p>New</p>
                </a>
              </li>
              <li class="nav-item bg-blue">
                <a href="{{route("sublink.index")}}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>All sublinks</p>
                </a>
              </li>
              <li class="nav-item bg-trashed">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt"></i>
                    <p>Trshed</p>
                </a>
              </li>

            </ul>
          </li>










          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                state
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route("state.create")}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
