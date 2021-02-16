@extends('back.master')

@section('page-title')
    Edit Portfolio
@endsection

@section('page-styles')

@endsection


@section('page-content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Edit Portfolio</h3>
                </div>
            </div>

            <div class="row" id="cancel-row">

                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Post Details</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="/admin/portfolio/{{ $portfolio_item->id }}" method="POST">
                                @method('PUT')
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Nmae</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="name" value="{{ $portfolio_item->name }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $portfolio_item->description }}</textarea>
                                </div>
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
