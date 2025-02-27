@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Modal</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Basic Example Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Basic Example</h4>
                </div>
                <div class="box-body">
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Launch modal</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Woohoo, you're reading this text in a modal!</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="button button-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="button button-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Basic Example End-->

        <!--Scrolling Long Content Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Scrolling Long Content</h4>
                </div>
                <div class="box-body">
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Launch modal</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="button button-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="button button-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Scrolling Long Content End-->

        <!--Vertically Centered Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Vertically Centered</h4>
                </div>
                <div class="box-body">
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Launch modal</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="button button-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="button button-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Vertically Centered End-->

        <!--Tooltips and Popovers Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Tooltips and Popovers</h4>
                </div>
                <div class="box-body">
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">Launch modal</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal4">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Popover in a modal</h5>
                                    <p>This <a href="#" class="button button-secondary" data-bs-toggle="popover" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
                                    <hr>
                                    <h5>Tooltips in a modal</h5>
                                    <p><a href="#" class="text-primary" data-bs-toggle="tooltip" title="Tooltip">This link</a> and <a href="#" class="text-primary" data-bs-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="button button-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="button button-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Tooltips and Popovers End-->

        <!--Varying Modal Content Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Varying Modal Content</h4>
                </div>
                <div class="box-body">
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5" data-whatever="@mdo">Modal @mdo</button>
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5" data-whatever="@fat">Modal @fat</button>
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5" data-whatever="@getbootstrap">Modal @getbootstrap</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal5">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New message</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="button button-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="button button-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Varying Modal Content End-->

        <!--Modal Sizes Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Modal Sizes</h4>
                </div>
                <div class="box-body">
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">Extra Large</button>
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">Large</button>
                    <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal8">Small</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal6">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Extra Large Modal</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="button button-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="button button-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal7">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Large Modal</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="button button-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="button button-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal8">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Small Modal</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="button button-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="button button-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal Sizes End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1"&gt;Launch modal&lt;/button&gt;<br />&lt;!-- Modal --&gt;<br />&lt;div class="modal fade" id="exampleModal1"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;div class="modal-dialog"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;div class="modal-content"&gt;<br />&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;div class="modal-header"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;button class="close" data-bs-dismiss="modal"&gt;&lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;&lt;/button&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;div class="modal-body"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;p&gt;Woohoo, you're reading this text in a modal!&lt;/p&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;div class="modal-footer"&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;button class="button button-danger" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;button class="button button-primary"&gt;Save changes&lt;/button&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &lt;/div&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br />&lt;/div&gt;
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/5.2/components/modal/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection