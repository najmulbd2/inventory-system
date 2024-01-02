@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <i class='bx bx-loader bx-spin bx-md text-info fw-bold'></i>
              </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Inv. System</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
        </a>
    </div>


    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ ($route == 'dashboard')? 'active':'' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboard">Dashboard</div>
                @if ($route == 'dashboard')<i class='bx bx-loader bx-spin text-white fw-bold'></i>@endif
            </a>
        </li>
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Apps &amp; Pages</span></li>
        <li class="menu-item {{ ($route == 'app.calendar')? 'active':'' }}">
            <a href="{{ route('app.calendar') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Calendar">Calendar</div>
                @if ($route == 'app.calendar')<i class='bx bx-loader bx-spin text-success fw-bold'></i>@endif
            </a>
        </li>

        <li class="menu-item {{ ($prefix == '/user')? 'open':'' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div data-i18n="User">User</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('view.user') }}" class="menu-link {{ ($route == 'view.user')? 'text-primary fw-bold':'' }}">
                        <div data-i18n="List User">List User</div>
                        @if ($route == 'view.user')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@endif
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('add.user') }}" class="menu-link {{ ($route == 'add.user')? 'text-primary fw-bold':'' }}">
                        <div data-i18n="Add User">Add User</div>
                        @if ($route == 'add.user')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@endif
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ ($prefix == '/products')? 'open':'' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-brands fa-product-hunt"></i>
                <div data-i18n="Product">Product</div>
            </a>
            <ul class="menu-sub">
                <!--START PRODUCT MENU-->
                <li class="menu-item">
                    <a href="{{ route('view.product') }}" class="menu-link {{ ($route == 'view.product')? 'text-primary fw-bold' : (($route == 'edit.product')? 'text-primary fw-bold' : (($route == 'add.product')? 'text-primary fw-bold' :'' ) )}}">
                        <div data-i18n="Product List">Product List</div>
                        @if ($route == 'view.product')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@elseif($route == 'add.product')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@elseif($route == 'edit.product')<i class='bx bx-loader bx-spin text-primary fw-bold'></i> @endif
                    </a>
                </li>
                <!--END PRODUCT MENU-->
            </ul>
        </li>

        <li class="menu-item {{ ($prefix == '/suppliers')? 'open':'' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-regular fa-user"></i>
                <div data-i18n="Supplier">Supplier</div>
            </a>
            <ul class="menu-sub">
                <!--START PRODUCT MENU-->
                <li class="menu-item">
                    <a href="{{ route('view.supplier') }}" class="menu-link {{ ($route == 'view.supplier')? 'text-primary fw-bold' : (($route == 'edit.supplier')? 'text-primary fw-bold' : (($route == 'add.supplier')? 'text-primary fw-bold' :'' ) )}}">
                        <div data-i18n="Supplier List">Supplier List</div>
                        @if ($route == 'view.supplier')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@elseif($route == 'add.supplier')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@elseif($route == 'edit.supplier')<i class='bx bx-loader bx-spin text-primary fw-bold'></i> @endif
                    </a>
                </li>
                <!--END PRODUCT MENU-->
            </ul>
        </li>
        <li class="menu-item {{ ($prefix == '/orders')? 'open':'' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-calendar-check"></i>
                <div data-i18n="Order">Order</div>
            </a>
            <ul class="menu-sub">
                <!--START PRODUCT MENU-->
                <li class="menu-item">
                    <a href="{{ route('view.order') }}" class="menu-link {{ ($route == 'view.order')? 'text-primary fw-bold' : (($route == 'edit.order')? 'text-primary fw-bold' : (($route == 'add.order')? 'text-primary fw-bold' :'' ) )}}">
                        <div data-i18n="Order List">Order List</div>
                        @if ($route == 'view.order')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@elseif($route == 'add.order')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@elseif($route == 'edit.order')<i class='bx bx-loader bx-spin text-primary fw-bold'></i> @endif
                    </a>
                </li>
                <!--END PRODUCT MENU-->
            </ul>
        </li>

        <li class="menu-item {{ ($prefix == '/reports')? 'open':'' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon bx bxs-report"></i>
                <div data-i18n="Report">Report</div>
            </a>
            <ul class="menu-sub">
                <!--START PRODUCT MENU-->
                <li class="menu-item">
                    <a href="{{ route('view.stock.report') }}" class="menu-link {{ ($route == 'view.stock.report')? 'text-primary fw-bold' : (($route == 'edit.stock.report')? 'text-primary fw-bold' : (($route == 'add.stock.report')? 'text-primary fw-bold' :'' ) )}}">
                        <div data-i18n="Stock Report">Stock Report</div>
                        @if ($route == 'view.stock.report')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@elseif($route == 'add.stock.report')<i class='bx bx-loader bx-spin text-primary fw-bold'></i>@elseif($route == 'edit.stock.report')<i class='bx bx-loader bx-spin text-primary fw-bold'></i> @endif
                    </a>
                </li>
                <!--END PRODUCT MENU-->
            </ul>
        </li>


        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
            <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a
                href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation-bs5/"
                target="_blank"
                class="menu-link"
            >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li>
    </ul>
</aside>
