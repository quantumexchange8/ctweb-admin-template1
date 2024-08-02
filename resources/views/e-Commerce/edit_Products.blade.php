@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>eCommerce <span>/ Edit Product</span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="buttons-group">
                <button class="button button-outline button-primary">Save & Publish</button>
                <button class="button button-outline button-info">Save to Draft</button>
                <button class="button button-outline button-danger">Delete Product</button>
            </div>
        </div><!-- Page Button Group End -->

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <div class="add-edit-product-wrap col-12">

        <div class="add-edit-product-form">
            <form action="#">

                <h4 class="title">About Product</h4>

                <div class="row">
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Name / Title*"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Sub-title"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Price*"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Discount"></div>
                    <div class="col-12 mb-30"><textarea class="form-control">Product Description</textarea></div>
                    <div class="col-lg-6 col-12 mb-30">
                        <select class="form-control nice-select">
                            <option value="status">Status</option>
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Meta Title"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Meta Keyword"></div>
                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Aditional Description Image Link"></div>
                </div>

                <h4 class="title">Product Gallery</h4>

                <div class="product-upload-gallery row flex-wrap">
                    <div class="col-12 mb-30">
                        <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                        <input class="file-pond" type="file" multiple>
                    </div>
                </div>

                <h4 class="title">Additional Information</h4>

                <div class="row">
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 1"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 2"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 3"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 4"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 5"></div>
                    <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 6"></div>
                </div>

                <!-- Button Group Start -->
                <div class="row">
                    <div class="d-flex flex-wrap justify-content-end col mbn-10">
                        <button class="button button-outline button-primary mb-10 ml-10 mr-0">Save & Publish</button>
                        <button class="button button-outline button-info mb-10 ml-10 mr-0">Save to Draft</button>
                        <button class="button button-outline button-danger mb-10 ml-10 mr-0">Delete Product</button>
                    </div>
                </div><!-- Button Group End -->

            </form>
        </div>

    </div><!-- Add or Edit Product End -->

</div>
@endsection