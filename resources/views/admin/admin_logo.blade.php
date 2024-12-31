@extends('admin.adminLayout.app')
@section('title', 'Home Page')
@section('content')
    <div class="pan-rhs">
        <div class="row main-head">
            <div class="col-md-4">
                <div class="tit">
                    <h1>Logo and Favicon</h1>
                </div>
            </div>
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Appriance</li>
                        <li class="breadcrumb-item active" aria-current="page">Logo</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box-com box-qui box-lig box-form">
                    <div class="form-inp">
                        <form>
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>Branding logo</h4>
                                    <h1>Website Logo</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Logo:</label>
                                        <div class="fil-img-uplo">
                                            <span class="dumfil">Upload image</span>
                                            <input type="file" name="gallery_image[]" accept="image/*,.jpg,.jpeg,.png"
                                                id="fileInput">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Fav icon:</label>
                                        <div class="fil-img-uplo">
                                            <span class="dumfil">Upload image</span>
                                            <input type="file" name="gallery_image[]" accept="image/*,.jpg,.jpeg,.png"
                                                id="fileInput">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->

                            <button type="submit" class="cta-full cta-colr">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
