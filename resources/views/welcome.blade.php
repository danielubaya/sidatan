@extends('layouts.login_layout')

@section('content')

<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-xxl-3 col-lg-4 col-md-5">
            <div class="auth-full-page-content d-flex p-sm-5 p-4">
                <div class="w-100">
                    <div class="d-flex flex-column h-100">
                        <div class="mb-4 mb-md-5 text-center">
                            <a href="index.html" class="d-block auth-logo">
                                <img src="{{asset('assets/images/sidatan-logo-1.png')}}" alt="" height="100">
                            </a>
                        </div>
                        <div class="auth-content my-auto">
                            <div class="text-center">
                                <h5 class="mb-0">SELAMAT DATANG DI SIDATAN</h5>
                                <p class="text-muted mt-2">Silahkan Login Terlebih Dahulu</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan username" required>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <label class="form-label">Password</label>
                                        </div>
                                    </div>

                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                                        <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mb-3">
                                    <div class="">
                                        <a href="auth-recoverpw.html" class="text-muted">Lupa password?</a>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Login</button>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                        <i class="mdi mdi-alert-outline label-icon"></i><strong> {{ __('Error!') }}</strong>
                                            @foreach ($errors->all() as $error)
                                                <p>{{ $error }}</p>
                                            @endforeach
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                            </form>

                        </div>
                        <div class="mt-4 mt-md-5 text-center">
                            <p class="mb-0">Copyright <script>
                                    document.write(new Date().getFullYear())
                                </script> <a href="#">DPRKPP Kota Surabaya.</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end auth full page content -->
        </div>
        <!-- end col -->
        <div class="col-xxl-9 col-lg-8 col-md-7 position-relative">
            <div class="auth-bg pt-md-5 p-4 d-flex">

                <!-- end bubble effect -->
                <div>

                    <div class="position-absolute bottom-0 end-0 bg-white rounded-3">
                        <img style="height: 110px;" src="https://dprkpp.surabaya.go.id/img/logo%20DPRKPP-02.png" alt="">
                    </div>

                </div>

            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>

@endsection