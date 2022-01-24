@extends("master")
@section("title","Login")
@section("css")
    label{
        color:white;
    }
    input.form-control{
        background-color:rgb(51, 51, 51);
        border:none;
        outline: none;
        color:white;
    }
    input.form-control:focus{
        outline:none;
        border:none;
        box-shadow: none;
        background-color:rgb(51, 51, 51);
        color:white;
    }
@endsection
@section("content")
    <div class="container container-content" id="container-content">
        <div class="box-content">
            <div class="row justify-content-center ">
                <div class="col-md-12 col-sm-12 col-xs-12 contact-section-first">
                    <h2 class="contact-title">
                        Login
                    </h2>
                    @if($errors->any())
                        <div class="alert alert-danger w-50">
                            @foreach($errors->all() as $error)
                                {{$error}}<br/>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{url("/login")}}" style="width: 50%" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label" >Email</label>
                            <input type="email" name="email" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required/>
                        </div>
                        <div class="mb-3 d-flex flex-column ">
                            <button class="btn btn-block btn-primary mb-2 d-flex align-items-center justify-content-center">
                                <div class="d-flex w-50 align-items-center justify-content-center">
                                    <div style="width:30%; text-align: right; margin-right: 10px">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div style="width:70%; text-align: left">
                                        Login With Email
                                    </div>
                                </div>

                            </button>
                            <button class="btn btn-block mb-2 d-flex align-items-center justify-content-center" style="background-color: white">
                                <div class="d-flex w-50 align-items-center justify-content-center">
                                    <div style="width:30%; text-align: right; margin-right: 10px">
                                        <img src="{{asset("/assets/img/google-icon.png")}}" width="20" height="20"/>
                                    </div>
                                    <div style="width:70%; text-align: left">
                                        Login With Google
                                    </div>
                                </div>
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
