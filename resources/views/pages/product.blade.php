@extends('layouts.app')
@section('contain')

<table border="2">
    <th>ID</th>
    <th>Name</th>
    <th>DOB</th>

    @foreach ($services as $item) 
            
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
            </tr>

        @endforeach
</table>

        
    
@endsection