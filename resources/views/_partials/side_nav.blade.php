<div class="custom-scrollbar">
    <nav id="sidenav" class="sidenav-collapse collapse">
        <ul class="sidenav">
            @if(Auth::guard('web')->check())

            <li class="sidenav-heading">User Navigation</li>
            <li class="sidenav-item">
                <a href="{{ route('contract.create') }}">
                    <span class="sidenav-icon icon icon-caret-square-o-right"></span>
                    <span class="sidenav-label">New Contract</span>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('contract.index') }}">
                    <span class="sidenav-icon icon icon-exclamation"></span>
                    <span class="sidenav-label">Pending Contract</span>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('clientApprovedContract') }}">
                    <span class="sidenav-icon icon icon-adn"></span>
                    <span class="sidenav-label">Approved Contract</span>
                </a>
            </li>
             <li class="sidenav-item">
                <a href="{{ route('clientCancelledContract') }}">
                    <span class="sidenav-icon icon icon-adn"></span>
                    <span class="sidenav-label">Cancelled Contract</span>
                </a>
            </li>
            @elseif(Auth::guard('supervisor')->check())

            <li class="sidenav-heading">Supervisor Navigation</li>
            <li class="sidenav-item {{ Request::path() == '/' ? 'active' : '' }}" title="Dashboard">
                <a href="/">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">Dashboard</span>
                </a>
            </li>
            <li class="sidenav-item has-subnav {{ (Request::path() == 'Add_New_Client' || Request::path() == 'All_Client') ? 'active' : '' }}" title="Clients">
                <a href="javascript:;" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-users"></span>
                    <span class="sidenav-label">Clients</span>
                </a>
                <ul class="sidenav-subnav collapse">
                    <li class="{{ Request::path() == 'Add_New_Client' ? 'active' : '' }}">
                        <a href="{{ route('create_client') }}">Add Client</a>
                    </li>
                    <li class="{{ Request::path() == 'All_Client' ? 'active' : '' }}">
                        <a href="{{ route('all_client') }}">All Client</a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item has-subnav {{ ( Request::path() == 'Approved_Contract' || Request::path() == 'Add_New_Contract' || Request::path() == 'Contract') ? 'active' : '' }}" title="Contracts">
                <a href="javascript:;" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-wpforms"></span>
                    <span class="sidenav-label">Contracts</span>
                </a>
                <ul class="sidenav-subnav collapse">
                    <li class="{{ Request::path() == 'Add_New_Contract' ? 'active' : '' }}">
                        <a href="{{route('contract.create')}}">Add Contract</a>
                    </li>
                    <li class="{{ Request::path() == 'Contract' ? 'active' : '' }}">
                        <a href="{{ route('contract.index') }}">New Contract</a>
                    </li>
                    <li class="{{ Request::path() == 'Approved_Contract' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.approved_contract') }}">Assign Stock</a>
                    </li>
                    <li class="{{ Request::path() == 'Assign_Contract' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.assigned_contract') }}">Assigned Contract</a>
                    </li>
                    
                    <li class="{{ Request::path() == 'Assembled_Contract' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.assembled_contract') }}">Assembled Contract</a>
                    </li>
                     <li class="{{ Request::path() == 'Tested_Contract' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.tested_contract') }}">Tested Contract</a>
                    </li>
                     <li class="{{ Request::path() == 'Completed_Contract' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.completed_contract') }}">Completed Contract</a>
                    </li>
                    <li class="{{ Request::path() == 'all_contracts' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.all_contract') }}">All Contract</a>
                    </li>
                
                </ul>
            </li>
            <li class="sidenav-item has-subnav {{ (Request::path() == 'supervisor/create_user/technician' || Request::path() == 'supervisor/create_user/tester' || Request::path() == 'stock') ? 'active' : '' }}" title="Master">
                <a href="javascript:;" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-male"></span>
                    <span class="sidenav-label">Master</span>
                </a>
                <ul class="sidenav-subnav collapse">
                    <li class="{{ Request::path() == 'supervisor/create_user/technician' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.create_user','technician') }}">Add Technician</a>
                    </li>
                    <li class="{{ Request::path() == 'supervisor/Technicians' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.all_technician') }}">All Technician</a>
                    </li>
                    {{-- <li class="{{ Request::path() == 'supervisor/create_user/tester' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.create_user','tester') }}">Add Tester</a>
                    </li>
                    <li class="{{ Request::path() == 'supervisor/Tester' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.all_tester') }}">All Tester</a>
                    </li> --}}
                     <li class="{{ Request::path() == 'supervisor/readyMadeProductList' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.ready_made_product.index') }}">ReadyMade Products</a>
                    </li>
                   {{--  <li class="{{ Request::path() == 'supervisor/create_user/stock' ? 'active' : '' }}">
                        <a href="{{ route('supervisor.create_user','stock') }}">Add Stock</a>
                    </li> --}}
                </ul>
            </li>

            @elseif(Auth::guard('technician')->check())

            <li class="sidenav-heading">Technician</li>
            <li class="sidenav-item">
                <a href="{{ route('technician.new_task') }}">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">New </span>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('technician.assembled_technician') }}">
                    <span class="sidenav-icon icon icon-check"></span>
                    <span class="sidenav-label">Assembled Contract </span>
                </a>
            </li>
            <li class="sidenav-heading">Tester</li>
            <li class="sidenav-item">
                <a href="{{ route('technician.new.test.product') }}">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">New </span>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('technician.product.tested') }}">
                    <span class="sidenav-icon icon icon-check"></span>
                    <span class="sidenav-label">Tested </span>
                </a>
            </li>

            @elseif(Auth::guard('stock')->check())
            <li class="sidenav-heading">Stock Management</li>
            <li class="sidenav-item">
                <a href="{{ route('stock.new_assignment') }}">
                    <span class="sidenav-icon icon icon-inbox"></span>
                    <span class="sidenav-label">New Assignment </span>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('stock.direct_buyers') }}">
                    <span class="sidenav-icon icon icon-caret-square-o-right"></span>
                    <span class="sidenav-label">Direct Buyers</span>
                </a>
            </li>
           {{-- <li class="sidenav-item">
                <a href="{{ route('stock.direct_deduct_report') }}">
                    <span class="sidenav-icon icon icon-caret-square-o-right"></span>
                    <span class="sidenav-label">Direct Deduct Report</span>
                </a>
            </li>--}}
             <li class="sidenav-item">
                <a href="{{ route('stock.return_replace_index') }}">
                    <span class="sidenav-icon icon icon-caret-square-o-right"></span>
                    <span class="sidenav-label">Replace / Return</span>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('stock.drafted_stock') }}">
                    <span class="sidenav-icon icon icon-envelope"></span>
                    <span class="sidenav-label">Incomplete Assignment </span>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('stock.completed_assignment') }}">
                    <span class="sidenav-icon icon icon-check-square-o"></span>
                    <span class="sidenav-label">Completed Assignment </span>
                </a>
            </li>
            

            <li class="sidenav-item has-subnav">
                <a href="javascript:;" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-bar-chart"></span>
                    <span class="sidenav-label">Stock Management</span>
                </a>
                <ul class="sidenav-subnav collapse">
                    <li class="">
                        <a href="{{ route('stock.ProductStock.index') }}">All Stock</a>
                    </li>
                    <li class="">
                        <a href="{{ route('stock.stockPurchaseHistory') }}">Stock Report</a>
                    </li>
                    <li class="">
                        <a href="{{route('deductstock')}}">Deduct Stock</a>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item has-subnav">
                <a href="javascript:;" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-maxcdn"></span>
                    <span class="sidenav-label">Master</span>
                </a>
                <ul class="sidenav-subnav collapse">
                    <li class="">
                        <a href="{{ route('stock.category.index') }}">Category</a>
                    </li>
                    <li class="">
                        <a href="{{ route('stock.brand.index') }}">Brand</a>
                    </li>
                </ul>
            </li>
            @elseif(Auth::guard('ic')->check())
            <li class="sidenav-heading">Stock Management</li>
            <li class="sidenav-item">
                <a href="{{ route('stock.new_assignment') }}">
                    <span class="sidenav-icon icon icon-inbox"></span>
                    <span class="sidenav-label">New Assignment </span>
                </a>
            </li>
            {{-- <li class="sidenav-item">
                <a href="{{ route('stock.direct_buyers') }}">
                    <span class="sidenav-icon icon icon-caret-square-o-right"></span>
                    <span class="sidenav-label">Direct Buyers</span>
                </a>
            </li> --}}
           {{-- <li class="sidenav-item">
                <a href="{{ route('stock.direct_deduct_report') }}">
                    <span class="sidenav-icon icon icon-caret-square-o-right"></span>
                    <span class="sidenav-label">Direct Deduct Report</span>
                </a>
            </li>--}}
             <li class="sidenav-item">
                <a href="{{ route('stock.return_replace_index') }}">
                    <span class="sidenav-icon icon icon-caret-square-o-right"></span>
                    <span class="sidenav-label">Replace / Return</span>
                </a>
            </li>
            {{-- <li class="sidenav-item">
                <a href="{{ route('stock.drafted_stock') }}">
                    <span class="sidenav-icon icon icon-envelope"></span>
                    <span class="sidenav-label">Incomplete Assignment </span>
                </a>
            </li> --}}
            {{-- <li class="sidenav-item">
                <a href="{{ route('stock.completed_assignment') }}">
                    <span class="sidenav-icon icon icon-check-square-o"></span>
                    <span class="sidenav-label">Completed Assignment </span>
                </a>
            </li> --}}
            

            <li class="sidenav-item has-subnav">
                <a href="javascript:;" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-bar-chart"></span>
                    <span class="sidenav-label">Stock Management</span>
                </a>
                <ul class="sidenav-subnav collapse">
                    <li class="">
                        <a href="{{ route('ic.getICStock') }}">All Stock</a>
                    </li>
                    {{-- <li class="">
                        <a href="{{ route('stock.stockPurchaseHistory') }}">Stock Report</a>
                    </li> --}}
                    {{-- <li class="">
                        <a href="{{route('deductstock')}}">Deduct Stock</a>
                    </li> --}}
                </ul>
            </li>
            {{-- <li class="sidenav-item has-subnav">
                <a href="javascript:;" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-maxcdn"></span>
                    <span class="sidenav-label">Master</span>
                </a>
                <ul class="sidenav-subnav collapse">
                    <li class="">
                        <a href="{{ route('stock.category.index') }}">Category</a>
                    </li>
                    <li class="">
                        <a href="{{ route('stock.brand.index') }}">Brand</a>
                    </li>
                </ul>
            </li> --}}
            @endif
        </ul>
    </nav>
</div>
