@extends('admin.master')
@section('title','About us')
@section('content')
        <!-- HEADER MOBILE-->
        @include('admin.mobile_header')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('admin.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('admin.header')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit</strong> About Page
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('edit_about')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @include('flash-message')
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="hidden" name="id" value="{{$data->id}}">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Page title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="page_title" name="page_title" placeholder="Page title" class="form-control" value="{{$data->page_title}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Overview section heading</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="overview_heading" name="overview_heading" placeholder="Overview section heading" class="form-control" value="{{$data->overview_heading}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Overview section content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="overview_content" id="overview_content" rows="9" placeholder="Overview section content..." class="form-control">{{$data->overview_content}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Overview section image</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                <img src="{{URL::asset('public/site_assets/images/'.$data->overview_image)}}" class="img-fluid">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="file" id="overview_image" name="overview_image" class="form-control-file">
                                                    <span style="color:red;">{{$errors->first('overview_image')}}</span>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Detail section heading</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="detail_heading" name="detail_heading" placeholder="Detail section heading" class="form-control" value="{{$data->detail_heading}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Detail section content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="detail_content" id="detail_content" rows="9" placeholder="Detail section content..." class="form-control">{{$data->detail_content}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Detail section subheading 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="detail_subheading_1" name="detail_subheading_1" placeholder="Detail section subheading 1" class="form-control" value="{{$data->detail_subheading_1}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Detail section subcontent 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="detail_subcontent_1" id="detail_subcontent_1" rows="9" placeholder="Detail section subcontent 1..." class="form-control">{{$data->detail_subcontent_1}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Detail section subheading 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="detail_subheading_2" name="detail_subheading_2" placeholder="Detail section subheading 2" class="form-control" value="{{$data->detail_subheading_2}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Detail section subcontent 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="detail_subcontent_2" id="detail_subcontent_2" rows="9" placeholder="Detail section subcontent 2..." class="form-control">{{$data->detail_subcontent_2}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Detail section subheading 3</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="detail_subheading_3" name="detail_subheading_3" placeholder="Detail section subheading 3" class="form-control" value="{{$data->detail_subheading_3}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Detail section subcontent 3</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="detail_subcontent_3" id="detail_subcontent_3" rows="9" placeholder="Detail section subcontent 3..." class="form-control">{{$data->detail_subcontent_3}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Detail section subheading 4</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="detail_subheading_4" name="detail_subheading_4" placeholder="Detail section subheading 4" class="form-control" value="{{$data->detail_subheading_4}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Detail section subcontent 4</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="detail_subcontent_4" id="detail_subcontent_4" rows="9" placeholder="Detail section subcontent 4..." class="form-control">{{$data->detail_subcontent_4}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Capitalization section heading</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="capitalization_heading" name="capitalization_heading" placeholder="Capitalization section heading" class="form-control" value="{{$data->capitalization_heading}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Capitalization section content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="capitalization_content" id="capitalization_content" rows="9" placeholder="Capitalization section content..." class="form-control">{{$data->capitalization_content}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Features section heading</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="features_heading" name="features_heading" placeholder="Features section heading" class="form-control" value="{{$data->features_heading}}">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Features section subheading 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="features_subheading_1" name="features_subheading_1" placeholder="Features section subheading 1" class="form-control" value="{{$data->features_subheading_1}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Features section subcontent 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="features_subcontent_1" id="features_subcontent_1" rows="9" placeholder="Features section subcontent 1..." class="form-control">{{$data->features_subcontent_1}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Features section subheading 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="features_subheading_2" name="features_subheading_2" placeholder="Features section subheading 2" class="form-control" value="{{$data->features_subheading_2}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Features section subcontent 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="features_subcontent_2" id="features_subcontent_2" rows="9" placeholder="Features section subcontent 2..." class="form-control">{{$data->features_subcontent_2}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Features section subheading 3</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="features_subheading_3" name="features_subheading_3" placeholder="Features section subheading 3" class="form-control" value="{{$data->features_subheading_3}}">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Features section subcontent 3</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="features_subcontent_3" id="features_subcontent_3" rows="9" placeholder="Features section subcontent 3..." class="form-control">{{$data->features_subcontent_3}}</textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
@endsection