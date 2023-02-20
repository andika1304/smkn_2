@extends('admin.layouts.view')

@section('title')
    REGISTER
@endsection

@section('content')
    @include('massage')
    <section class="w3l-login">
        <div class="overlay">
            <div class="wrapper">
                <div class="logo">
                    <a class="brand-logo">REGISTER</a>
                </div>
                <div class="form-section">
                    <h3>SILAHKAN DAFTAR</h3>
                    <form action="/aksi_register" method="post" class="signin-form">
                        @csrf
                        <div class="form-input">
                            <input type="text" name="name" placeholder="name" placeholder="name" required="" autofocus >
                        </div>
                        <div class="form-input">
                            <input type="text" name="email" placeholder="email" required="">
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
                        <button type="submit" class="btn btn-primary theme-button mt-4">Submit</button>
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
