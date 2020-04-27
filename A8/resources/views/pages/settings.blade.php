@extends('layouts.default')

@section('title')
<title>GROW - User Settings</title>
@endsection


@section('bodyTag')

<body class="container-fluid vh-100 m-0 p-0">
    @endsection

    @section('main')
    <main id="main" class="ml-lg-auto col-lg-10 align-right">
        <h1 class=" py-2 px-5 ml-3"> Settings</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-5 justify-content-center">
                    <form class="px-5">
                        <h5>Change password </h5>
                        <div class="form-group">
                            <label for="inputPassword">current password</label>
                            <input type="password" id="inputPassword" class="form-control" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <label class="float-left" for="inputPassword ">new password</label>
                            <input type="password" id="inputPassword" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="float-left" for="inputPassword ">confirm new password</label>
                            <input type="password" id="inputPassword" class="form-control" required="">
                        </div>
                        <button class="mb-4 btn btn-primary border-0 bg-mygreen float-right" type="submit">Confirm
                            Changes</button>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                <form method="POST" action="{{route('editUsername')}}"class="px-5">
                    {{ csrf_field() }}
                        <h5>Change username</h5>
                        <div class="form-group">
                            <label for="oldUsername">current username</label>
                        <input type="text" id="oldUsername" name="oldUsername" pattern="{{Auth::user()->name}}" title="Please match your old username" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label class="float-left" for="newUsername ">new username</label>
                            <input type="text" id="newUsername" name="newUsername" class="form-control" required>
                        </div>
                        <button class="mb-4 btn btn-primary border-0 bg-mygreen float-right" type="submit">Confirm
                            Changes</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <form class="px-5">
                        <h5>Change e-mail </h5>
                        <div class="form-group">
                            <label for="inputEmail">current e-mail</label>
                            <input type="email" id="inputEmail" class="form-control" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <label class="float-left" for="inputEmail ">new e-mail</label>
                            <input type="email" id="inputEmail" class="form-control" required="">
                        </div>
                        <button class="mb-4 btn btn-primary border-0 bg-mygreen float-right" type="submit">Confirm
                            Changes</button>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="row">
                        <form class="px-5 ">
                            <h5> Change picture </h5>
                            <div class="file-field ">
                                <div class="mb-4 d-md-flex">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                        class="rounded-circle z-depth-1-half avatar-pic " width=80px height="80px"
                                        alt="example placeholder avatar">
                                    <div class="mt-2 ml-2 d-md-flex flex-column">
                                        <span>Add photo</span>
                                        <input class="mb-5" type="file">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <div class="px-5 ">
                            <form method="POST" action="{{route('deleteAccount') }}"">
                                {{ csrf_field() }}
                                <button class="btn tag-orange text-white">Delete account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection