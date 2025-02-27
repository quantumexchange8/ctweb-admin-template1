@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Author Profile</h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-50">

        <!--Author Top Start-->
        <div class="col-12 mb-50">
            <div class="author-top">
                <div class="inner">
                    <div class="author-profile">
                        <div class="image">
                            <img src="assets/images/avatar/profile.jpg" class="d-none" alt="">
                            <h2>MH</h2>
                            <button class="edit"><i class="zmdi zmdi-cloud-upload"></i>Change Image</button>
                        </div>
                        <div class="info">
                            <h5>Madison Howard</h5>
                            <span>UI UX Designer</span>
                            <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Author Top End-->

        <!--Timeline / Activities Start-->
        <div class="col-xlg-8 col-12 mb-50">
            <div class="box">

                <div class="box-head">
                    <h3 class="title">Timeline / Activities</h3>
                </div>

                <div class="box-body">

                    <div class="timeline-wrap row mbn-50">

                        <div class="col-12 mb-50"><span class="timeline-date">13 february 2018</span></div>

                        <div class="col-12 mb-50">
                            <ul class="timeline-list">

                                <li>
                                    <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                    <div class="details">
                                        <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id dolores, assumenda quaerat inventore atque dolore sapiente doloribus iusto quisquam ullam autem labore, laborum beatae repudiandae! Recusandae ullam cumque, non temporibus?</p>
                                        </div>
                                        <span class="time">5 min ago</span>
                                    </div>
                                </li>

                                <li>
                                    <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                    <div class="details">
                                        <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                        <div class="gallery">
                                            <div class="row mbn-30">

                                                <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-1.jpg" alt=""></a></div>
                                                <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-2.jpg" alt=""></a></div>
                                                <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-3.jpg" alt=""></a></div>

                                            </div>
                                        </div>
                                        <span class="time">65 min ago</span>
                                    </div>
                                </li>

                                <li>
                                    <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                    <div class="details">
                                        <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                        <div class="video">
                                            <a href="#"><i class="zmdi zmdi-play"></i></a>
                                        </div>
                                        <span class="time">3 hour ago</span>
                                    </div>
                                </li>

                                <li>
                                    <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                    <div class="details">
                                        <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id dolores, assumenda quaerat inventore atque dolore sapiente doloribus iusto quisquam ullam autem labore, laborum beatae repudiandae! Recusandae ullam cumque, non temporibus?</p>
                                        </div>
                                        <span class="time">17 hour ago</span>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="col-12 mb-50"><span class="timeline-date">12 february 2018</span></div>

                        <div class="col-12 mb-50">
                            <ul class="timeline-list">

                                <li>
                                    <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                    <div class="details">
                                        <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id dolores, assumenda quaerat inventore atque dolore sapiente doloribus iusto quisquam ullam autem labore, laborum beatae repudiandae! Recusandae ullam cumque, non temporibus?</p>
                                        </div>
                                        <span class="time">at 7pm</span>
                                    </div>
                                </li>

                                <li>
                                    <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                    <div class="details">
                                        <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                        <div class="gallery">
                                            <div class="row mbn-30">

                                                <div class="col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-4.jpg" alt=""></a></div>

                                            </div>
                                        </div>
                                        <span class="time">at 12:30pm</span>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!--Timeline / Activities End-->

        <!--Right Sidebar Start-->
        <div class="col-xlg-4 col-12 mb-50">
            <div class="row mbn-30">

                <!--Author Information Start-->
                <div class="col-xlg-12 col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Author Information</h3>
                        </div>
                        <div class="box-body">
                            <div class="form">
                                <form action="#">
                                    <div class="row row-10 mbn-20">
                                        <div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control" value="Madison"></div>
                                        <div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control" value="Howard"></div>
                                        <div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control input-date-single" value="02/13/2018"></div>
                                        <div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control" value="(012) 345-6789" data-mask="(999) 999-9999"></div>
                                        <div class="col-12 mb-20"><input type="email" class="form-control" value="domain@mail.com"></div>
                                        <div class="col-12 mb-20"><input type="text" class="form-control" value="https//: www.domain.com"></div>
                                        <div class="col-sm-6 col-12 mb-20"><input type="password" class="form-control" value="password"></div>
                                        <div class="col-sm-6 col-12 mb-20"><input type="password" class="form-control" value="password"></div>
                                        <div class="col-12 mt-10 mb-20">
                                            <input type="submit" class="button button-primary button-outline" value="Save Changes">
                                            <input type="submit" class="button button-danger button-outline" value="Delete Changes">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!--Author Information End-->

                <!-- To Do List Start -->
                <div class="col-xlg-12 col-lg-6 col-12 mb-30">
                    <div class="box">

                        <div class="box-head">
                            <h3 class="title">To-do List</h3>
                        </div>

                        <div class="box-body p-0">

                            <!--Todo List Start-->
                            <ul class="todo-list">

                                <!--Todo Item Start-->
                                <li class="done">
                                    <div class="list-action">
                                        <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                        <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                    <div class="list-content">
                                        <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                    </div>
                                    <div class="list-action right">
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                </li>
                                <!--Todo Item End-->

                                <!--Todo Item Start-->
                                <li>
                                    <div class="list-action">
                                        <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                        <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                    <div class="list-content">
                                        <p>Mistaken idea of denouncing pleasure.</p>
                                    </div>
                                    <div class="list-action right">
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                </li>
                                <!--Todo Item End-->

                                <!--Todo Item Start-->
                                <li>
                                    <div class="list-action">
                                        <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                        <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                    <div class="list-content">
                                        <p>Encounter consequences that are.</p>
                                    </div>
                                    <div class="list-action right">
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                </li>
                                <!--Todo Item End-->

                                <!--Todo Item Start-->
                                <li>
                                    <div class="list-action">
                                        <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                        <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                    <div class="list-content">
                                        <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                    </div>
                                    <div class="list-action right">
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                </li>
                                <!--Todo Item End-->

                                <!--Todo Item Start-->
                                <li class="done">
                                    <div class="list-action">
                                        <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                        <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                    <div class="list-content">
                                        <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                    </div>
                                    <div class="list-action right">
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                </li>
                                <!--Todo Item End-->

                                <!--Todo Item Start-->
                                <li>
                                    <div class="list-action">
                                        <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                        <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                    <div class="list-content">
                                        <p>Nor again is there anyone who loves.</p>
                                    </div>
                                    <div class="list-action right">
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                </li>
                                <!--Todo Item End-->

                                <!--Todo Item Start-->
                                <li>
                                    <div class="list-action">
                                        <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                        <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                    <div class="list-content">
                                        <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                    </div>
                                    <div class="list-action right">
                                        <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                    </div>
                                </li>
                                <!--Todo Item End-->

                            </ul>
                            <!--Todo List End-->

                            <!--Add Todo List Start-->
                            <form action="#" class="todo-list-add-new" data-date="false">
                                <label class="status"><input type="checkbox"><i class="icon zmdi zmdi-star-outline"></i></label>
                                <input class="content" type="text" placeholder="Type new Task">
                                <button class="submit"><i class="zmdi zmdi-plus-circle-o"></i></button>
                            </form>
                            <!--Add Todo List End-->

                        </div>
                    </div>
                </div><!-- To Do List End -->

                <!-- Daily Sale Report Start -->
                <div class="col-xlg-12 col-lg-6 col-12 mb-30">

                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Daily Sale Report</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table">

                                    <!-- Table Head Start -->
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Detail</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody>
                                        <tr>
                                            <td class="fw-600">Alexander</td>
                                            <td>
                                                <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                            </td>
                                            <td><span class="text-success d-flex justify-content-between fw-600">$500.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600">Linda</td>
                                            <td>
                                                <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                            </td>
                                            <td><span class="text-success d-flex justify-content-between fw-600">$20.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600">Patrick</td>
                                            <td>
                                                <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                            </td>
                                            <td><span class="text-danger d-flex justify-content-between fw-600">$120.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600">Jose</td>
                                            <td>
                                                <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                            </td>
                                            <td><span class="text-success d-flex justify-content-between fw-600">$1750.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600">Amber</td>
                                            <td>
                                                <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                            </td>
                                            <td><span class="text-warning d-flex justify-content-between fw-600">$165.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                        </tr>
                                    </tbody><!-- Table Body End -->

                                </table>
                            </div>
                        </div>
                    </div>

                </div><!-- Daily Sale Report End -->

            </div>
        </div>
        <!--Right Sidebar End-->

    </div>

</div>
@endsection