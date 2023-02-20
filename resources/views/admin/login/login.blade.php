@extends('admin.layouts.view')
@section('title')
    FORM LOGIN ADMIN
@endsection
@section('content')
    @include('massage')
    <section class="w3l-login">
        <div class="overlay">
            <div class="wrapper">
                <div class="logo">
                    <a class="brand-logo">PLEASE LOGIN</a>
                </div>
                <div class="form-section">
                    <h3>ADMIN LOGIN</h3>
                    <form action="/aksi_login" method="post" class="signin-form">
                        @csrf
                        <div class="form-input">
                            <input type="text" name="email" placeholder="Username" required="" autofocus>
                            {{-- untuk menampilkan error --}}
                            @error('email')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Password" required="">
                            {{-- untuk menampilka error --}}
                            @error('password')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        </label>
                        <button type="submit" class="btn btn-primary theme-button mt-4">Log in</button>
                </div>
                </form>
            </div>
        </div>
        </div>
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>

        <div class="copy-right">
            <p>&copy;<a href="https://www.instagram.com/dikxly_">WEB DESIGN BY ANDIKA WISTARA</a></p>
        </div>
    </section>
@endsection
