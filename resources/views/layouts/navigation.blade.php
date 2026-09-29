<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex space-x-6">
                {{-- Dashboard --}}
                @if (Route::has('dashboard'))
                    <a href="{{ route('dashboard') }}"
                        class="font-semibold {{ request()->routeIs('dashboard') ? 'text-indigo-600' : 'text-gray-700' }}">
                        Dashboard
                    </a>
                @endif
 
                {{-- Menu Khusus Admin --}}
                @if (auth()->check() && auth()->user()->role === 'admin')
                    @if (Route::has('categories.index'))
                        <a href="{{ route('categories.index') }}"
                            class="{{ request()->routeIs('categories.*') ? 'text-indigo-600' : 'text-gray-500' }}">
                            Kategori
                        </a>
                    @endif

                    @if (Route::has('products.index'))
                        <a href="{{ route('products.index') }}"
                            class="{{ request()->routeIs('products.*') ? 'text-indigo-600' : 'text-gray-500' }}">
                            Produk
                        </a>
                    @endif

                    @if (Route::has('report.sales'))
                        <a href="{{ route('report.sales') }}"
                            class="{{ request()->routeIs('report.sales') ? 'text-indigo-600' : 'text-gray-500' }}">
                            Laporan
                        </a>
                    @endif
                @endif
 
                {{-- Transaksi --}}
                @if (Route::has('pos.index'))
                    <a href="{{ route('pos.index') }}"
                        class="{{ request()->routeIs('pos.index') ? 'text-indigo-600' : 'text-gray-500' }}">
                        Transaksi
                    </a>
                @endif

                {{-- Riwayat Transaksi --}}
                @if(auth()->check() && auth()->user()->role === 'kasir')
                    <a href="{{ route('pos.history') }}" class="{{ request()->routeIs('pos.history') ? 'active' : '' }}">
                        <i class="fas fa-history"></i>
                        <span>Riwayat Transaksi</span>
                    </a>
                @endif
            </div>

 
            {{-- User Info & Logout --}}
            <div class="flex items-center space-x-4 text-sm">
                @auth
                    <span class="text-gray-600">{{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-gray-500 hover:text-red-600">Keluar</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>