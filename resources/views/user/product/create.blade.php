@extends('layouts.app')

@section('content')
    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12 col-md-8 col-sm-offset-2">
            <div class="panel b-primary bt-md">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <h5 class="mb-lg">To enjoy more, sing in!</h5>
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Product Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password2" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection

