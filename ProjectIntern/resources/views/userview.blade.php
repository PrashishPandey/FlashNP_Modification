@extends('forms.layout')

@section('header')
    <h1>Data Table Form:</h1>
	<hr>
@endsection


@section('content')
    <div>
        <h2>List Table</h2>
        <table>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>dis_name</th>
                <th>group</th>
                <th>mobile</th>
                <th>register date</th>
            <tr>
            @foreach($data as $i)
            <tr>
                <td>{{$i->user_id}}</td>
                <td>{{$i->user_name}}</td>
                <td>{{$i->user_email}}</td>
                <td>{{$i->user_pwd}}</td>
                <td>{{$i->user_display}}</td>
                <td>{{$i->user_group}}</td>
                <td>{{$i->user_contact}}</td>
                <td>{{$i->register_date}}</td>
            </tr>
            @endforeach   
        </table>
    </div>

@endsection

@section('footer')
   <hr>
	<p>From registration 2021 AD.</p> 
	<p>Developed by Hanki</p>
@endsection