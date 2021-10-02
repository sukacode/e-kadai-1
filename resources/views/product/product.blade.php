@extends('layout.nav')

@section('title', 'Admin - Table')
@section('content')
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Manage <small>Product</small></h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Items">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row" style="display: block;">

                        <div class="clearfix"></div>

                        <div class="col-md-12 col-sm-6 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <button class="btn btn-success">Tambah</button>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Product</th>
                                                <th>Harga Product</th>
                                                <th>Satuan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Otto</td>
                                                <td>
                                                    <a href="#" class="badge badge-warning">Edit</a>
                                                    <a href="#" class="badge badge-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>
                                                    <a href="#" class="badge badge-warning">Edit</a>
                                                    <a href="#" class="badge badge-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>
                                                    <a href="#" class="badge badge-warning">Edit</a>
                                                    <a href="#" class="badge badge-danger">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>


                    </div>
                </div>
            </div>
            <!-- /page content -->
            @endsection
