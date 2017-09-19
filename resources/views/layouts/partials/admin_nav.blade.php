
        <div class="panel panel-default sidebar-menu">

            <div class="panel-heading">
                <h3 class="panel-title">Admin Menu</h3>
            </div>

            <div class="panel-body">

                <ul class="nav nav-pills nav-stacked">
                    <li class="{{ activeRoute('admin_dashboard') }}">
                        <a href="{{ linkToRoute('admin_dashboard') }}"><i class="fa fa-list"></i> Dashboard</a>
                    </li>
                    <li class="{{ activeRoute('admin_distributors') }}">
                        <a href="{{ linkToRoute('admin_distributors') }}"><i class="fa fa-users"></i> Distributors</a>
                    </li>
                    <li class="{{ activeRoute('admin_products') }}">
                        <a href="{{ linkToRoute('admin_products') }}"><i class="fa fa-users"></i> Products</a>
                    </li>
                    <li class="{{ activeRoute('admin_transactions') }}">
                        <a href="{{ linkToRoute('admin_transactions') }}"><i class="fa fa-users"></i> Transactions</a>
                    </li>
                    <li class="{{ activeRoute('admin_orders') }}">
                        <a href="{{ linkToRoute('admin_orders') }}"><i class="fa fa-shopping-cart"></i> Orders</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>