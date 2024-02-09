@include('partials.sidebars.icon')
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">BurgerKang</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="/" class="nav-link {{($title === 'Dashboard')? 'link-light active bg-dark' : 'link-dark'}}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="/orders" class="nav-link {{($title === 'Orders')? 'link-light active bg-dark' : 'link-dark'}}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                Orders
            </a>
        </li>
        <li>
            <a href="/products" class="nav-link {{($title === 'Products')? 'link-light active bg-dark' : 'link-dark'}}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                Products
            </a>
        </li>
        <li>
            <a href="/categories" class="nav-link {{($title === 'Categories')? 'link-light active bg-dark' : 'link-dark'}}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                Categories
            </a>
        </li>
        <li>
            <a href="/reports" class="nav-link {{($title === 'Reports')? 'link-light active bg-dark' : 'link-dark'}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="bi me-2" width="16" height="16"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
                Reports
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
            <strong>Admin-Name</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>
    </div>
</div>


