@extends('layouts.default')

@section('title')
<title>GROW Adminstration - Category Management</title>
@endsection

@section('bodyTag')

<body class="container-fluid vh-100 m-0 p-0 ">
    @endsection

    @section('main')
    @include('partials.navBarTop')
    <main id="main" class="ml-lg-auto col-lg-10 align-right ">
        <h1 class=" py-2 px-4"> Administration</h1>
        <div class="container px-4">

            @include('partials.admin.adminHead')

            <div>
                <form action="{{ route('addCat') }}" method="POST">
                    @csrf
                    <h5>Create New Category</h5>
                    <div class="row">
                        <div class="form-group w-25 col-md-5">
                            <label for="inputUsername">Category Name</label>
                            <input type="text" name="inputCat" id="inputCat" class="form-control" required autofocus>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputColor">Category Color</label>
                            <label class="pl-5" id="color-picker-wrapper" for="color-picker">
                                <input type="color" value="#5962AE" name="color-picker" id="color-picker">
                            </label>
                        </div>
                        <div class="form-group  col-md-5">
                            <label for="inputColor">Preview</label><br>
                            <label id="newCatPreview" class="tag my-1">&nbsp;</label>
                        </div>
                        <button type="submit" class="btn bg-mydarkgreen text-white mx-3 mb-4">Submit</button>
                    </div>
                </form>
            </div>
            <div>
                <form method="POST">
                    <h5>Edit Category</h5>
                    <div class="form-group w-25">
                        <input class="form-control" id="categoryEdit" list="tags" placeholder="Type Category Name">
                        <datalist id="tags">

                        </datalist>
                    </div>
                    <div class="row">

                        <div class="form-group w-25 col-md-5">
                            <label for="inputUsername">New Category Name</label>
                            <input type="text" id="inputCatEdit" class="form-control" required autofocus>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputColor">Category Color</label>
                            <label class="pl-5" id="color-picker-wrapperEdit" for="color-pickerEdit">
                                <input type="color" value="#000000" id="color-pickerEdit">
                            </label>
                        </div>
                        <div class="form-group  col-md-5">
                            <label for="inputColor">Preview</label><br>
                            <label id="newCatPreviewEdit" class="tag mx-md-2 my-1 bg-myred">&nbsp;</label>
                        </div>
                        <button type="submit" class="btn bg-mydarkgreen text-white mx-3 mb-4">Edit</button>
                        <button type="submit" class="btn tag-orange text-white mx-3 mb-4">Remove</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    @endsection