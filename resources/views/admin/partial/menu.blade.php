<!-- Nav bar Menu -->

<div class="col-lg-3">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100" style="min-height:700px;">
        <a href="{{route('admin.dashboard')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Menu Admin</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item my-1">
                <a href="{{route('admin.dashboard')}}" class="btn btn-outline-primary {{ Request::is('admin/dashboard') ? 'active' : ''}}" style="width:100%;text-align:left">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#php "></use></svg>
                    Dashboard
                </a>
            </li>
            <li class="nav-item my-1">
                <a href="{{route('admin.product.index')}}" class="btn btn-outline-primary {{ Request::is('admin/product') || Request::is('admin/product/*') ? 'active' : ''}}" style="width:100%;text-align:left" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Master Product
                </a>
            </li>
            <li class="nav-item my-1">
            <a href="{{route('admin.transaction')}}" class="btn btn-outline-primary {{ Request::is('admin/transaction') || Request::is('admin/transaction/*') ? 'active' : ''}}" style="width:100%;text-align:left" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Transaction
                </a>
            </li>
        </ul>
    </div>
</div>