@extends('back.master')

@section('page-title')
    Edit About Page
@endsection

@section('page-styles')

@endsection


@section('page-content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Edit About Page</h3>
                </div>
            </div>

            <div class="row" id="cancel-row">

                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Contact Info</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="/admin/pages/about" method="POST">
                                @method('PUT')
                            @foreach ($about_info as $item)
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">{{ $item->title }}</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="{{ str_replace(" ", "", strtolower($item->title)) }}">{{ $item->description }}</textarea>
                                </div>
                            @endforeach
                                <input type="submit" value="Save" name="time" class="mt-4 mb-4 btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection


@section('page-scripts')

@endsection
