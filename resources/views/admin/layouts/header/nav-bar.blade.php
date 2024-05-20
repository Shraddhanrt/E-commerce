<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('admin.dashboard.index') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i>Dashboard</a>
                </li>
                <li class="sidebar-item @if (request()->is('admin/currencies*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="dollar-sign" class="feather-icon"></i>
                        Currencies
                    </a>
                </li>
                <li class="sidebar-item @if (request()->is('admin/users*') && request()->user_type == 'staff') selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>Staffs
                    </a>
                </li>

                <li class="sidebar-item @if (request()->is('admin/customers*') && request()->user_type == 'user') selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>Users
                    </a>
                </li>

                <li class="sidebar-item @if (request()->is('admin/customers*') && request()->user_type == 'customer') selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>Customers
                    </a>
                </li>

                <li class="sidebar-item @if (request()->is('admin/users*') && request()->user_type == 'member') selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>Members
                    </a>
                </li>

                <li class="sidebar-item @if (request()->is('admin/products*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="shopping-cart" class="feather-icon"></i> Products
                    </a>
                </li>

                <li class="sidebar-item @if (request()->is('admin/orders*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="shopping-bag" class="feather-icon"></i>Orders
                    </a>
                </li>
                <li class="sidebar-item @if (request()->is('admin/subscriptions*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="shopping-bag" class="feather-icon"></i>Subscription Plans
                    </a>
                </li>
                <li class="sidebar-item @if (request()->is('admin/user-subscriptions*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="shopping-bag" class="feather-icon"></i>User Subscriptions
                    </a>
                </li>
                <li class="sidebar-item @if (request()->is('admin/sales*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="shopping-bag" class="feather-icon"></i>Track Product Sales
                    </a>
                </li>
                <li class="sidebar-item @if (request()->is('admin/banners*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="grid" class="feather-icon"></i>Banners
                    </a>
                </li>

                <!-- <li class="sidebar-item @if (request()->is('admin/pages*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="book" class="feather-icon "></i>Pages
                    </a>
                </li> -->

                <li class="sidebar-item @if (request()->is('admin/testimonials*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="message-square" class="feather-icon"></i>Testimonials
                    </a>
                </li>

                <li class="sidebar-item @if (request()->is('admin/send-email*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="mail" class="feather-icon"></i>Send Email
                    </a>
                </li>

                <li class="sidebar-item @if (request()->is('admin/siteconfig*')) selected @endif">
                    <a class="sidebar-link sidebar-link" href="#" aria-expanded="false">
                        <i data-feather="settings" class="feather-icon"></i>Site Config
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>