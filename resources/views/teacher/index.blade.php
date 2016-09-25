@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection

@section('content')
	<div class="row">
        @foreach($teachers as $item)
        <div class="col-lg-3 col-md-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <!-- <i class="glyphicon glyphicon-user fa-3x"></i> -->
                            <img src="{{ asset('images/1.jpg') }}" style="width: 160px;">
                        </div>
                        <div class="col-xs-9 text-right" style="color:black;">
                            <div class="huge">
                            <h3>{{$item->name}}</h3>
                            </div>
                            <div>{{$item->desc}}</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('admin/user')}}">
                    <div class="panel-footer">
                        <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    {!! $teachers->render() !!}
@endsection
