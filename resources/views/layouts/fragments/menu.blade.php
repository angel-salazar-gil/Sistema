@php
    function isActive($url)
    {
        return request()->is($url) ? 'active submenu' : '';
    }
@endphp
<ul class="nav nav-primary">
    <li class="nav-section">
        <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">Menú</h4>
    </li>
    <li class="nav-item">
        <a href="#">
            <i class="fas fa-layer-group"></i>
            <p>Clientes</p>
            {{--<span class="caret"></span>--}}
        </a>
    </li>
    <li class="nav-item {{ isActive('*dependencias*') }}">
        <a href="{{ route('dependencias.index') }}">
            <i class="fas fa-layer-group"></i>
            <p>Dependencias</p>
            {{--<span class="caret"></span>--}}
        </a>
    </li>
    <li class="nav-item">
        <a href="#">
            <i class="fas fa-layer-group"></i>
            <p>Usuarios</p>
            {{--<span class="caret"></span>--}}
        </a>
    </li>
</ul>