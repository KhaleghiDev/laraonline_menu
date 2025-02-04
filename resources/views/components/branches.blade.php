<div>
    <ul class="menu">
        <li class="menu-item"><a href="{{ route('branchesOutput',app()->getLocale()) }}">
                <span class="link-icon">
                    <i class="fa-solid fa-map-location"></i>
                </span>
                <span class="link-text">
                    {{__('messages.branches_Inside')}}
                </span>
            </a>
        </li>
        <li class="menu-item"><a href="{{ route('branchesInput',app()->getLocale()) }}">
                <span class="link-icon">
                    <i class="fa-solid fa-map-location"></i>
                </span>
                <span class="link-text">
                    {{__('messages.branches_Outside')}}
                </span>
            </a>
        </li>
</div>