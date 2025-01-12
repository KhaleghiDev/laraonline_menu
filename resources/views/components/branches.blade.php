<div>
    <ul class="menu">
        <li class="menu-item"><a href="{{ route('branchesOutput',app()->getLocale()) }}">
                <span class="link-icon" >
                    <i class="fa-solid fa-map-location"></i>
                </span>
                <span class="link-text">
                    شعبه های ما در خارج کشور
                </span>
            </a>
        </li>
        <li class="menu-item"><a href="{{ route('branchesInput',app()->getLocale()) }}">
                <span class="link-icon">
                    <i class="fa-solid fa-map-location"></i>
                </span>
                <span class="link-text">
                    شعبه های ما در داخل کشور
                </span>
            </a>
        </li>
</div>
