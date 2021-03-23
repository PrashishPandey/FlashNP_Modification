@extends('forms.layout')

@section('header')
    <h1>Registration Form:</h1>
	<hr>
@endsection


@section('content')
    <div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
        @endif
    	<form method="POST" action="/userinsert">
            @csrf
    		<div>
    			<label>Name:</label>
    			<input type="text" name="name" placeholder="Full Name">
    		</div>
    		<div>
    			<label>Email:</label>
    			<input type="text" name="Email" placeholder="Email">
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
    			<input type="password" name="password" placeholder="Password">
    		</div>
    		<div>
    			<label>Display Name:</label>
    			<input type="text" name="dis_name" placeholder="Name for display">
    		</div>
    		<div>
    			<label>Mobile:</label>
    			<input type="text" name="mobile" placeholder="Contact No">
    		</div>
    		<div>
    			<button type="submit">Submit Data</button>
    		</div>
    	</form>
    </div>

@endsection

@section('footer')
   <hr>
	<p>From registration 2021 AD.</p> 
	<p>Developed by Hanki</p>
@endsection
