<header id="header" class="header-style01">
    @php
    $id = $post->ID ?? false;
    $slug = $post->ID ?? false;
    @endphp
    <div class="container">
        <div class="main-nav">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default nav-left" role="navigation">

                        <div class="navbar-header">
                            <div class="logo">
                                {{ the_custom_logo() }}
                            </div>
                        </div>

                        @if(getMenu('menu-1'))
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">

                                @foreach(getMenu('menu-1') as $menu)
                                @if(isset($menu['child']))
                                <li class="dropdown {{ in_array($id, $menu['check']) ? 'current-menu-item' : '' }}">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">{{ $menu['title'] ?? '' }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($menu['child'] as $child)
                                        <li>
                                            <a class="{{ $id == $child['object_id'] ? 'active' : '' }}" href="{{ $child['url'] ?? '' }}">{{ $child['title'] ?? '' }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                <li class="{{ $slug == $menu['title'] ? 'current-menu-item' : '' }}">
                                    <a href="{{ $menu['url'] ?? '' }}">{{ $menu['title'] ?? '' }}</a>
                                </li>
                                @endif
                                @endforeach

                            </ul>

                            <div id="dl-menu" class="dl-menuwrapper">
                                <button class="dl-trigger"></button>

                                <ul class="dl-menu">

                                    @foreach(getMenu('menu-1') as $menu)
                                    @if(isset($menu['child']))
                                    <li>
                                        <a href="#">{{ $menu['title'] ?? '' }}</a>
                                        <ul class="dl-submenu">
                                            @foreach($menu['child'] as $child)
                                            <li><a href="{{ $child['url'] ?? '' }}">{{ $child['title'] ?? '' }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @else
                                    <li class="">
                                        <a href="{{ $menu['url'] ?? '' }}">{{ $menu['title'] ?? '' }}</a>
                                    </li>
                                    @endif
                                    @endforeach

                                </ul>

                            </div>

                        </div>
                        @endif

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>