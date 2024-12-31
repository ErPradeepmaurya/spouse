<div class="pan-lhs ad-menu-main">
    <div class="ad-menu">
        <ul>
            <li class="ic-pay">
                <a href="{{ route('admin.clientlist') }}">Client List</a>
            </li>
            <li class="ic-pri">
                <a href="{{ route('admin.userlist') }}">User List</a>
            </li>
            <li class="ic-pay">
                <a href="admin-payment-credentials.html">Payment gateway</a>
            </li>
            <li>
                <h4>Sign out </h4>
            </li>
            <li class="ic-lgo">
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                    out</a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
