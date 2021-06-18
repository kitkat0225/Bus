<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            @if (Auth::user()->permission == 2)
                @php
                    $menus = $super_menus;
                    $menu_title = "Super Administrator";
                @endphp
            @else
                @php
                    $menus = $company_menus;
                    $menu_title = "Company Administrator";
                @endphp
            @endif
            <li class="heading">
                <h3 class="uppercase">{{ $menu_title }}</h3>
            </li>
            @php
                $current_route = Route::current();
            @endphp
            
            @foreach ($menus as $menu)
                @php
                    $urls = explode('/', $current_route->uri);
                @endphp
                @if ($urls[0] == $menu['url'])
                <li class="start active open">
                    @php
                        $opened = "open";
                    @endphp
                @else
                <li>
                    @php
                        $opened = '';
                    @endphp
                @endif
                @if (count($menu['children']) > 0)
                    @php
                        $arrow = "arrow";
                        $url = 'javascript:;';
                    @endphp
                @else
                    @php
                        $arrow = "";
                        $url = $menu['url'];
                    @endphp
                @endif
                    <a href="/{{ $url }}">
                        <i class="{{ $menu['icon'] }}"></i>
                        <strong>{{ $menu['name'] }}</strong>
                        <span class="selected"></span>
                        <span class="{{ $arrow .' '. $opened }}"></span>
                    </a>
                    @if(count($menu['children']) > 0)
                        <ul class="sub-menu">
                            @foreach($menu['children'] as $ch_menu)
                            @if ($current_route == $menu['url'].'/'.$ch_menu->url)
                            <li class="active">
                            @else
                            <li>
                            @endif
                                <a href="{{ '/'.$menu['url'].'/'.$ch_menu->url }}">
                                    <i class="{{ $ch_menu->icon }}"></i> {{ $ch_menu->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>