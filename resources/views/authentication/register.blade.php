@extends('authentication.layout')

@section('content')
<div class="content-body m-0 p-0">

    <div class="login-register-wrap">
        <div class="row">

            <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                <div class="login-register-form-wrap">

                    <div class="content">
                        <h1>Sign up</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>

                    <div class="login-register-form">
                        <form action="#">
                            <div class="row">

                                <div class="col-12 mb-20"><input class="form-control" type="text" placeholder="User ID / Email"></div>
                                <div class="col-12 mb-20"><input class="form-control" type="password" placeholder="Password"></div>
                                <div class="col-12 mb-20"><input class="form-control" type="password" placeholder="Retype Password"></div>
                                <div class="col-12">
                                    <div class="row justify-content-between">
                                        <div class="col-auto mb-15">Already have account? <a href="/login">Login Now.</a></div>
                                    </div>
                                </div>
                                <div class="col-12 mt-10"><button class="button button-primary button-outline">sign up</button></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                <div class="content">
                    <h1>Sign up</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection