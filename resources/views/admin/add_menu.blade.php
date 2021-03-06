@extends('admin.layout')

@section('content')

<form action="/menus" method="post" enctype="multipart/form-data" onSubmit ="">

{{ csrf_field() }}

	<div class="col-md-8">

		<div class="form-group">
			<label for="menu-name">Menu Name </label>
			<input type="text" name="name" class="form-control">

		</div>


		<div class="form-group">
			<label for="menu-description">Description</label>
			<textarea name="description" class="form-control"></textarea>
		</div>



		<div class="form-group">
			<label for="price">Product Price</label>
			<input type="number" name="price" class="form-control">
		</div>

	</div>





	<aside id="admin_sidebar" class="col-md-4">


		<div class="form-group">
			<input type="submit" class="btn btn-primary btn-lg" value="Add Menu">
		</div>


		<!-- Product Categories-->

		<div class="form-group">
			<label for="category">Category</label>

			<select name="category" class="form-control">
				<option value="">Select Category</option>

				@foreach($categories as $category)
				<option value="{{ $category->name }}">{{ $category->name }}</option>
				@endforeach

			</select>


		</div>




	<!-- Product Image -->

	<div class="form-group">
		<label>Product Image</label>
		<input type="file" name="image">

	</div>
</form>



</aside><!--SIDEBAR-->



</form>

@endsection