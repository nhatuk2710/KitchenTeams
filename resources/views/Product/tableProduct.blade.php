@extends('layout')
@section('all')
    <div class="right_col" role="main">
        <div class="">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="#">Settings 1</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" method="post" action="{{url("product")}}" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên Hàng <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" name="product_name" placeholder="Nhập loại hàng vào đây" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Miêu tả <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="product_desc" placeholder="Nhập miêu tả vào đây" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Số khối</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="middle-name" class="form-control" placeholder="Nhập số khối vào đây"  type="text" name="qty">
                            </div>
                        </div>
{{--                        <div class="item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>--}}
{{--                            </label>--}}
{{--                            <div class="col-md-6 col-sm-6 ">--}}
{{--                                <select id="birthdays" class="date-picker form-control" name="ship_id"  required="required" type="text">--}}
{{--                                    @foreach($ship as $s)--}}
{{--                                    <option value="{{$s->id}}">--}}
{{--                                        {{$s->ship_name}}--}}
{{--                                    </option>--}}
{{--                                        @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-success">Thêm</button>
                                <button class="btn btn-primary" type="button">Hủy</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    @endsection
