@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="container">           
            {!! Form::open(['method' => 'POST', 'class' => 'form-inline']) !!}
                <div class="form-group @if($errors->first('subscribe')) has-error @endif">
                    {!! Form::label('subscribe', 'Subscribe here', ['class' =>'col-md-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::email('subscribe', 'johndoe@mail.com', ['class' => 'form-control col-md-3', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
                        <small class="text-danger">{{ $errors->first('subscribe') }}</small>
                        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
                    </div>

                </div>            
                    
            {!! Form::close() !!}                      
       
    </div>
    <div class="row">
        <div class="col-md-12">           
            @yield('main', 'Default information here')              
        </div>
    </div>
</div>
@endsection
