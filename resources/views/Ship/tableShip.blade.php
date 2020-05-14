@extends('layout')
@section('all')
    <div class="right_col" role="main">
        <div class="">
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
                    <form method="post" action="{{url("ship")}}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Tên tàu <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" required="required" name="ship_name" class="form-control @if($errors->has("ship_name"))is-invalid @endif " placeholder="Nhập tên tàu hàng vào đây!">
                            </div>
                        </div>
                        @if($errors->has("ship_name"))
                            <p style="color:red">{{$errors->first("ship_name")}}</p>
                        @endif
{{--                        <div class="item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>--}}
{{--                            <div class="col-md-6 col-sm-6 ">--}}
{{--                                <div id="gender" class="btn-group" data-toggle="buttons">--}}
{{--                                    <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">--}}
{{--                                        <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;--}}
{{--                                    </label>--}}
{{--                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">--}}
{{--                                        <input type="radio" name="gender" value="female" class="join-btn"> Female--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="ln_solid"></div>
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
    @endsection
