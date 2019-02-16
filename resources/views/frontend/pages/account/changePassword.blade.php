@extends('frontend.frontend_master')
@section('contents')
    <div class="content-area">
        <section class="page-section">
            <div class="wrap container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8">
                        <div class="information-title">Your Password</div>
                        <div class="details-wrap">
                            <div class="block-title alt"> <i class="fa fa-angle-down"></i> Change your password </div>
                            <div class="details-box">
                                <form class="form-delivery" action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group"><input required type="password" placeholder="Password" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group"><input required type="password" placeholder="Password Confirm" class="form-control"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <button class="btn btn-theme btn-theme-dark" type="submit"> Update </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @include('frontend.blocks.box.sidebar_right_acount')
                </div>

            </div>
        </section>
    </div>
@stop