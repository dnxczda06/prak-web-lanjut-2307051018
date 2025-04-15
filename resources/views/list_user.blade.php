@extends('layouts.app')

@section('content')

<!-- Girly Styled Table Section -->
<section class="d-flex justify-content-center align-items-center vh-100 bg-light" style="background: #ffe6f0;">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card shadow-lg border-0 rounded-4" style="background: #fff0f5;">
                <div class="card-header text-center" style="background: #ffb6c1; border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
                    <h4 class="card-title text-white fw-bold">🌸 Daftar Pengguna 🌸</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-text text-center text-muted">Berikut adalah daftar pengguna yang sudah terdaftar di sistem 💖</p>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered text-center align-middle" style="background: #fffafa;">
                                <thead style="background-color: #ff69b4; color: white;">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>NPM</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="fw-semibold text-pink">{{ $user->id }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->npm }}</td>
                                        <td>{{ $user->nama_kelas }}</td>
                                    </tr>
                                    @endforeach
                                    @if ($users->isEmpty())
                                    <tr>
                                        <td colspan="4" class="text-muted">Belum ada pengguna 😢</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
