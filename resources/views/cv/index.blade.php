@extends('layouts.master')
@section('content')
<div class="contrainer">
    <div class="row">
        <div class="col-md-12"></div>

        <h1> la liste des CVS</h1>
        <table class="table">
            <head>  <tr>
                <th>titre</th>
                <th>presentation</th>
                <th>action</th>
            </tr>
           </head>

            <body>    @if (session()->has('success'))
                <div class="alert alert-success">
{{session()->get('success')}}
                </div>
                @endif
                <a href="{{('CV/'.'create')}}" class="btn btn-primary">nouveau cv</a>
                @foreach ($cvs as $item)
                <tr>
                    <td>{{$item->titre}} <br> {{$item->user->name}}<br> {{$item->user->email}}</td>

                    <td>{{$item->presentation}}</td>
                    <form action="{{url('cvs/'.$item->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <td> <a href="" class="btn btn-primary">detials</a>
                    <a href="{{('cvs/'.$item->id.'/edit')}}" class="btn btn-default">edit</a>
                    <button type="submit" class="btn btn-danger">supprime</button>
                    </td>
                </tr>
                @endforeach
            </form>
            </body>

        </table>
    </div>
</div>
@endsection
