@extends('auth.main.default')
@section('content')



	    <div class="row" style="margin-top:10px">
		<section class="col-sm-3">
		    <h2>SignIn</h2>
		</section>
		
		<section class="col-sm-9">
		    <form action="">
			
			<div class="form-group">
			    <label>Email:</label>
			    <input class="form-control" name="email" type="email" value=""/>
			</div>

			<div class="form-group">
 			    <label>Password:</label>
			    <input class="form-control" name="password" type="password" value=""/>
			</div>
			
			<br/>
			<input name="" type="submit" value="Register" class="btn btn-primary pull-left" />
		    </form>
		</section>
		
	    </div>

	

@stop