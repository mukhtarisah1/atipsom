<nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-active">
                  <a href="{{route('home')}}" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span class="menu-text">Service Desk</span> </a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{ route('incidents.index') }}" class="menu-link">Incidents</a>
                    </li>
                    
                    
                    
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Incidents</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{ route('incidents.create')}}" class="menu-link">Create New</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{ route('incidents.assigned') }}" class="menu-link">Assigned to me</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{ route('incidents.open') }}" class="menu-link">Open</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{ route('incidents.unassigned') }}" class="menu-link">Unassigned </a>
                    </li>
                    <li class="menu-item">
                      <a href="{{ route('incidents.resolved') }}" class="menu-link">Resolved</a>
                    </li>
                   
                    
                  </ul><!-- /child menu -->
                </li>
                @if(auth()->user()->role == 1)
                  <li class="menu-item has-child">
                    <a href="#" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">User Management</span></a> <!-- child menu -->
                    <ul class="menu">
                      <li class="menu-item">
                        <a href="{{ route('register')}}" class="menu-link">Create New User</a>
                        <a href="/users" class="menu-link">View Users</a>
                      </li>
                      
                      
                      
                    </ul><!-- /child menu -->
                  </li>
                @endif
</nav>
