
        <div class="panel panel-default sidebar-menu">

            <div class="panel-heading">
                <h3 class="panel-title">Customer Menu</h3>
            </div>

            <div class="panel-body">

                <ul class="nav nav-pills nav-stacked">
                    <li class="{{ activeRoute('customer_dashboard') }}">
                        <a href="{{ action('CustomerController@dashboard')}}"><i class="fa fa-list"></i> Dashboard</a>
                    </li>

                    <li class="{{ activeRoute('customer_orders') }}">
                        <a href="{{ action('CustomerController@myOrders', Auth::id()) }}"><i class="fa fa-shopping-cart"></i>My Orders</a>
                    </li>
                    
                    <li>
                        
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
            </div>
        </div>