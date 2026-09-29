<h1>{{ $title }}</h1>

@auth
    <p>Selamat datang kembali, {{ auth()->user()->name }}!</p>
@endauth

@if($users->isEmpty())
    <p>Belum ada data pengguna.</p>
@else
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} - Role: {{ $user->role }}</li>
        @endforeach
    </ul>
@endif

<x-alert>

<!-- Mengirim string statis -->
<x-alert type="warning" message="Perhatian! Sistem sedang diatur." />

<!-- Mengirim variabel PHP dinamis (misal dari controller/looping) -->
<x-alert :type="$alertType" :message="$statusMessage" />













