@extends('layouts.master')
@section('content')


<div class="Contrainer">
    <div class="row">
        <div class="Col-md-12">
            <form action="{{url('cvs')}}" method="POST">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="">titer</label>
                    <input type="text" name='titre' class="from-control" value="{{old('titre')}}"></div>
                    @if ($errors->get('titre'))
                    @foreach ($errors->get('titre') as $message)<li>{{$message}}</li>

@endforeach

                    @endif
 <div class="form-group  has-error ">
                    <label for="">presentation</label>
                    <textarea type="text" name='presentation'class="from-control" > {{old('presentation')}}</textarea></div>
                    @if ($errors->get('presentation'))
                    @foreach ($errors->get('presentation') as $message)<li>{{$message}}</li>

@endforeach

                    @endif</div>
                    <div class="from-group"><label for="" > image</label>
                        <input  class="form-control" type="file" name="photo"></div>

<div class="form-group">

                    <input type="submit"  class="from-control bnt bnt-primary" value="save"></div>

                </form>       </div>
    </div>

@endsection
