{{--Begin SideBar --}}

<li>
    <a href="side-menu-light-file-manager.html" class="side-menu">
        <div class="{{ $type }}menu__icon"> <i data-lucide="home"></i> </div>
        <div class="{{ $type }}menu__title"> Dashboard </div>
        @php
            dd({{ $type }});
        @endphp
    </a>
</li>
<li>
    <a href="javascript:;" class="side-menu">
        <div class="{{ $type }}menu__icon"> <i data-lucide="box"></i> </div>
        <div class="{{ $type }}menu__title">
            Menu Layout
            <div class="{{ $type }}menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
        </div>
    </a>
</li>

<li class="{{ $type }}nav__devider my-6"></li>


{{-- End SideBar
<ul class="scrollable__content py-2">
    <li>
        <a href="javascript:;.html" class="menu menu--active">
            <div class="menu__icon"> <i data-lucide="home"></i> </div>
            <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
        </a>
        <ul class="menu__sub-open">
            <li>
                <a href="side-menu-light-dashboard-overview-1.html" class="menu">
                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                    <div class="menu__title"> Overview 1 </div>
                </a>
            </li>
            <li>
                <a href="index.html" class="menu menu--active">
                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                    <div class="menu__title"> Overview 2 </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                    <div class="menu__title"> Overview 3 </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-dashboard-overview-4.html" class="menu">
                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                    <div class="menu__title"> Overview 4 </div>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-lucide="box"></i> </div>
            <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="side-menu-light-dashboard-overview-1.html" class="menu">
                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                    <div class="menu__title"> Side Menu </div>
                </a>
            </li>
            <li>
                <a href="simple-menu-light-dashboard-overview-1.html" class="menu">
                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                    <div class="menu__title"> Simple Menu </div>
                </a>
            </li>
            <li>
                <a href="top-menu-light-dashboard-overview-1.html" class="menu">
                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                    <div class="menu__title"> Top Menu </div>
                </a>
            </li>
        </ul>
    </li>

</ul> --}}
