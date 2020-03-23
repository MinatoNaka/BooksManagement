<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <img src="/img/logo.png" class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <img src="/img/logo.png" class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <i class="fas fa-home c-sidebar-nav-icon"></i>Home
            </a>
        </li>
        <li class="c-sidebar-nav-title">Menu</li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="far fa-user c-sidebar-nav-icon"></i>User
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('users.index') }}">List</a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('users.create') }}">Create</a>
                </li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fas fa-tag c-sidebar-nav-icon"></i>Category
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('categories.index') }}">List</a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('categories.create') }}">Create</a>
                </li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fas fa-book-open c-sidebar-nav-icon"></i>Book
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('books.index') }}">List</a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('books.create') }}">Create</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
