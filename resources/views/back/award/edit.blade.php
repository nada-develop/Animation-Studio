@extends('back.master')

@section('page-title')

@endsection


@section('page-content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Edit Award Info</h3>
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
                            <form action="/admin/award/{{ $award_item->id }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Image</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput2" name="img" >
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Title</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="title" value="{{ $award_item->title }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Description</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="desc" value="{{ $award_item->description }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Date</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="date" value="{{ $award_item->date }}">
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

