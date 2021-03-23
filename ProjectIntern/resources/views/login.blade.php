@extends('forms.layout')

@section('header')
    <h1> User login Page </h1>
	<hr>
@endsection
@section('content')
 <h2>Login form:</h2>
 	<form method="POST" action="checklogin">
 		@csrf
 		<div>
 			<label>User Name:</label>
 			<input type="text" name="name">
 		</div>
 		<div>
    		<label for="gp">Group Name:</label>
    			<select name="gp" id="gp">
    				<option value="None">None</option>
    				<option value="admin">Admin</option>
    				<option value="buyer">Buyer</option>
    				<option value="seller">Seller</option>
    			</select>
    		</div>
 		<div>
 			<label>Password:</label>
 			<input type="Password" name="pwd">
 		</div>
 		<button type="submit">Sign in</button>
 	</form>
@endsection
@section('footer')
   <hr>
	<p>From registration 2021 AD.</p> 
	<p>Developed by Hanki</p>
@endsection