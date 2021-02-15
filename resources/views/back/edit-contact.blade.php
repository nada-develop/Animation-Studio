@extends('back.master')

@section('page-title')
    Edit Contact Info
@endsection

@section('page-styles')

@endsection


@section('page-content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Edit Contact Info</h3>
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
                            <form action="/admin/pages/contact" method="POST">
                                @method('PUT')
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="phone" value="{{ $contact_info->phone }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Mobile Number 1</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="mobile1" value="{{ $contact_info->mobile1 }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Mobile Number 2</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="mobile2" value="{{ $contact_info->mobile2 }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Contact Form Email</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="contact_email" value="{{ $contact_info->contact_email }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Facebook Page Link</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="facebook_link" value="{{ $contact_info->facebook_link }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Instagram Account Link</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="instagram_link" value="{{ $contact_info->instagram_link }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Latitude Value</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="google_lat" value="{{ $contact_info->google_lat }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Longtitude Value</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="google_long" value="{{ $contact_info->google_long }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Zoom Level</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name="google_zoom" value="{{ $contact_info->google_zoom }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{ $contact_info->address }}</textarea>
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
