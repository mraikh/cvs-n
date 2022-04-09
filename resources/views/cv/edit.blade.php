@extends('layouts.master')
@section('content')
<div class="Contrainer">
    <div class="row">
        <div class="Col-md-12">
            <form action="{{url('cvs/'.$cv->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">titer</label>
                    <input type="text" name='titre' class="from-control" value="{{$cv->titre}}"></div>



                <div class="form-group">
                    <label for="">presentation</label>
                    <textarea type="text" name='presentation'class="from-control" >{{$cv->presentation}} </textarea></div>

<div class="form-group">

                    <input type="submit"  class="from-control btn btn-danger" value="modifier"></div>

                </form>       </div>
    </div>
</div>
@endsection

