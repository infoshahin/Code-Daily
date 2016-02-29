 <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="{{URL::to('/admin')}}" class="navbar-brand"><b>Cart</b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
               <li><a href="{{URL::to('admin/index')}}">Dashboard</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sales <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{URL::to('orders')}}">Orders</a></li>
                    <li><a href="{{URL::to('customers')}}">Customers</a></li>
                    <li><a href="#">Report</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catalog <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{URL::to('category')}}">Categories</a></li>
                    <li><a href="{{URL::to('tag')}}">Tag</a></li>
                    <li><a href="{{URL::to('product')}}">Products</a></li>
                    <li><a href="{{URL::to('productpicture')}}">Manage Products Images</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Content <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{URL::to('slider')}}">Slider</a></li>
                    </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Notifications Menu -->
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                       {!! HTML::image('admin_backend/dist/img/user2-160x160.jpg/', 'User Profile', array('class'=>'user-image')) !!}
                      <!-- <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs">{{Auth::user()->username}}</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header">
                     {!! HTML::image('admin_backend/dist/img/user2-160x160.jpg/', 'User Profile', array('class'=>'img-circle')) !!}
                        <p>
                          {{Auth::user()->username}}
                          <small>
                          <?php
                              $date = Auth::user()->created_at;
                              $showData = date("M. Y", strtotime($date));
                          ?>
                         Member since {{ $showData }}</small>
                        </p>
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                        </div>
                        <div class="pull-right">
                          <a href="{{URL::to('auth/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
          </ul>
        </div><!-- /.navbar-custom-menu -->
      </div><!-- /.container-fluid -->
    </nav>
</header>
