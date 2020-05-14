@extends('layout')
@section('all')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Trường Thành PNJ Group !</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="display: inline-block;">
            <div class="top_tiles">
                <div class="animated flipInY col-lg-6 col-md-3 col-sm-12 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                        <div class="count">179</div>
                        <a href="{{url("ship")}}"><h3>Thêm Tàu</h3></a>
                        <p><a href="#">Xem chi tiết</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-6 col-md-3 col-sm-12 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-comments-o"></i></div>
                        <div class="count">179</div>
                        <a href="{{url("product")}}"><h3>Thêm hàng</h3></a>
                        <p><a href="#">Xem chi tiết</a></p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-6 col-md-3 col-sm-12 ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-comments-o"></i></div>
                        <div class="count">179</div>
                        <a href="{{url("product")}}"><h3>Thêm Hóa đơn</h3></a>
                        <p><a href="#">Xem chi tiết</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Các mặt hàng đang lưu thông</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên hàng</th>
                            <th>Số Khối</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($product as $p)
                        <tr>
                            <th scope="row">{{$p->id}}</th>
                            <td>{{$p->product_name}}</td>
                            <td>{{$p->qty}}</td>
                            <td>
                                <a  href="{{url("product/{$p->id}")}}" class="btn btn-primary">Add</a>
                            </td>
                        </tr>
                            @empty
                        <p>Không có loại hàng nào</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

                <div class="clearfix"></div>

                <div class="row" style="display: block;">

                    <div class="clearfix"></div>

                    <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Table design <small>Custom design</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings 1</a>
                                            <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">

                                <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <thead>
                                        <tr class="headings">
                                            <th>
                                                <input type="checkbox" id="check-all" class="flat">
                                            </th>
                                            <th class="column-title">Invoice </th>
                                            <th class="column-title">Invoice Date </th>
                                            <th class="column-title">Order </th>
                                            <th class="column-title">Bill to Name </th>
                                            <th class="column-title">Status </th>
                                            <th class="column-title">Amount </th>
                                            <th class="column-title no-link last"><span class="nobr">Action</span>
                                            </th>
                                            <th class="bulk-actions" colspan="7">
                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @forelse($ship as $s)
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td class=" ">121000040</td>
                                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                                            <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                            <td class=" ">{{$s->ship_name}}</td>
                                            <td class=" ">Paid</td>
                                            <td class="a-right a-right ">$7.45</td>
                                            <td class=" last"><a href="#">View</a>
                                            </td>
                                        </tr>
                                            @empty
                                        <p>Không có tàu hàng nào</p>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
    @endsection
