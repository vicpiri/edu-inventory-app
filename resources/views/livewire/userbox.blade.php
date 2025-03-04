<div id="userbox" class="userbox">
    <a href="#" data-bs-toggle="dropdown">
        <figure class="profile-picture">
            <img src="{{ $user && $user->profile_picture ? asset('img/' . $user->profile_picture) : asset('img/!logged-user.jpg') }}"
                 alt="{{ $user ? $user->name : 'Guest' }}"
                 class="rounded-circle"
                 data-lock-picture="{{ $user && $user->profile_picture ? asset('img/' . $user->profile_picture) : asset('img/!logged-user.jpg') }}" />
        </figure>
        <div class="profile-info" data-lock-name="{{ $user ? $user->name : 'Guest' }}" data-lock-email="{{ $user ? $user->email : '' }}">
            <span class="name">{{ $user ? $user->name : 'Guest' }}</span>
            <span class="role">{{ $user && $user->role ? $user->role : 'Visitor' }}</span>
        </div>
        <i class="fa custom-caret"></i>
    </a>
    <div class="dropdown-menu">
        <ul class="list-unstyled mb-2">
            <li class="divider"></li>
            <li>
                <a role="menuitem" tabindex="-1" href="#">
                    <i class="bx bx-user-circle"></i> {{__('app.my_profile')}}
                </a>
            </li>
            <li>
                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true">
                    <i class="bx bx-lock"></i> {{__('app.lock_screen')}}
                </a>
            </li>
            <li>
                <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bx bx-power-off"></i> {{__('app.logout')}}
                </a>
            </li>
        </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
