<ul class="nav navbar-nav" id="responsive-menu">
    <li class="{{ request()->is('/') ? 'active' : '' }}">
        <a href="/">Home </a>
    </li>

    <li class="{{ request()->is('aboutus') ? 'active' : '' }}">
        <a href="{{ route('aboutus') }}">
            About Us
        </a>
    </li>
    <li class="{{ request()->is('property-list') ? 'active' : '' }}">
        <a href="{{ route('property.list') }}">
            Properties
        </a>
    </li>

    <li class="{{ request()->is('plans') ? 'active' : '' }}">
        <a href="{{ route('plans') }}">Subscription Plans</a>
    </li>

    <li class="{{ request()->is('blog') ? 'active' : '' }}"><a href="{{ route('blog.index') }}">Blog</a></li>

    <li class="{{ request()->is('contactus') ? 'active' : '' }}"><a href="{{ route('contactus') }}">Contact Us</a>
    </li>
</ul>
