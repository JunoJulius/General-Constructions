@extends('layouts.app')


@section('content')
  @include('inc.navbar')

<div class="jumbotron">
<h1> Contact Us </h1>





                        {!! Form::open(['route' => 'contact.store']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Your Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Your Name']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('company', 'Company Name') !!}
                            {!! Form::text('company', null, ['class' => 'form-control', 'placeholder'=>'Company', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'E-mail Address') !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'E-mail', 'required']) !!}
                        </div>

          <div class="form-group">
                            {!! Form::label('type', 'Type of Service Request') !!} <br/>
             {!! Form::select('type',
              array( 'public' => 'service#1', 'residential' => 'service#2',
               'hospitality' => 'service#3', 'retail' => 'service#4',
                'other' => 'Other Services'), null, ['class' => 'form-control', 'placeholder'=>'Select a Service', 'required']); !!}

                        </div>

<div class="form-group">
    {!! Form::label('msg', 'Specify Request')!!}
    {!! Form::textarea('msg', null, ['class' => 'form-control', 'placeholder'=>'Specify Your Request Here..']) !!}
</div>


                        {!! Form::submit('Send', ['class' => 'btn btn-info']) !!}

                        {!! Form::close() !!}
                        <br />
                    </div>

        </div>



@endsection
