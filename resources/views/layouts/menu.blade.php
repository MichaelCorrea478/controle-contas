<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-tags"></i>
        <p>Categorias</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('transactions.index') }}"
       class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-money-bill-wave"></i>
        <p>Transações</p>
    </a>
</li>


