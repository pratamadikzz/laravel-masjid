<div class="min-h-screen bg-blue-100 shadow-sm p-8 pt-20 text-lg">
    <nav>
        <ul class="flex flex-col gap-6">
            <li>
                <a class="p-2 rounded-md text-blue-500 transition-all ease-in-out  {{ request()->is('dashboard') ? 'bg-red-200 text-white' : 'text-blue-500 hover:bg-gray-400 hover:text-white' }}" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li>
                <a class="p-2 rounded-md text-blue-500 transition-all ease-in-out  {{ request()->is('pemasukan') ? 'bg-red-200 text-white' : 'text-blue-500 hover:bg-gray-400 hover:text-white' }}" href="{{route('pemasukan.index')}}">Pemasukan</a>
            </li>
            <li>
                <a class="p-2 rounded-md text-blue-500 transition-all ease-in-out  {{ request()->is('pengeluaran') ? 'bg-red-200 text-white' : 'text-blue-500 hover:bg-gray-400 hover:text-white' }}" href="{{route('pengeluaran.index')}}">Pengeluaran</a>
            </li>
            <!-- <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="text-lg ml-2 text-blue-500 cursor-pointer" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </a>
                </form>
            </li> -->
        </ul>
    </nav>
</div>