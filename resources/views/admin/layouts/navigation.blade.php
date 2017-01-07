
    <ul id="dropdown1" class="dropdown-content teal darken-2">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper teal darken-2">
            <a href="#" class="brand-logo right">Logo</a>
            <ul class="left hide-on-med-and-down">
                <li><a href={{ route('admin.allPages') }}>Pages</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown</a></li>
            </ul>
        </div>
    </nav>