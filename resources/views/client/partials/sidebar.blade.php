<div class="pan-lhs ad-menu-main">
    <div class="ad-menu">
        <ul>
            <li>
                <h4>Menu </h4>
            </li>
            <li class="ic-pri">
                <a href="{{ route('client.userlist') }}">User List</a>
            </li>
            <li>
                <h4>Sign out </h4>
            </li>
            <li class="ic-lgo">
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                    out</a>
                <form id="logout-form" action="{{ route('client.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
