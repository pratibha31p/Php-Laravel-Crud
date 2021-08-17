            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Dashboard </a>
                  
                    <li><a><i class="fa fa-home"></i>Manage Product<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('admin.product.list') }}">Product List</a></li>
                        <li><a href="{{ route('admin.product.create') }}">Add Product</a></li>
                       
                      </ul>
                    </li>
                
                      
                    </li>
                 
                  </ul>
                </div>
               
  
              </div>
             
            </div>
          </div>