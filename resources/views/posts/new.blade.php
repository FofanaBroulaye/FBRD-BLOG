<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v5 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('image/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('image/css/style.css')}}">
	</head>

	<body>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
		<div class="wrapper">
            
			<div class="inner">
           
				<form action="{{route('post.store')}}" method="POST" enctype='multipart/form-data'>
                @csrf
					<h3>Set The Event</h3>
					<div class="form-wrapper form-price">
						<label for="">Price</label>
						<span>$270</span>
					</div>
					
					<div class="form-wrapper">
						<label for="" class="label-input">Nom</label>
						<input type="text" name="nom" class="form-control">
					</div>
                    <div class="form-wrapper form-select">
						<label for="cat">Categorie</label>
						<div class="form-holder">
							<select name="category_id" id="cat" class="form-control">
                            <option value="" selected class="option"></option>
                                @foreach($categories as $categorie)                                
								<option value="{{$categorie->id}}" class="">{{$categorie->name}}</option>
								@endforeach
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					 <div class="form-wrapper">
						<label for="" class="label-input">Image</label>
						<input type="file" name="photo" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="" class="label-comment">Commentaire</label>
						<textarea name="comment" id="" class="form-control" style="height: 69px"></textarea>
					</div>
                   
					<button type="submit">Enregistrer</button>
				</form>
				<div class="image-holder">
					<img src="{{asset('image/images/registration-form-5.jpg')}}" alt="">
				</div>
                <div class="float-right">
                    <a href="{{route('home')}}"><i class="fa fa-close " style="font-size:40px;color:red"></i></a>
                </div>
            </div>
		</div>
  
		<script src="{{asset('image/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('image/js/main.js')}}"></script>
        <script src="sweetalert2.all.min.js"></script>
        <script>
                 Swal.fire({
                    title: 'Error!',
                    text: 'Do you want to continue',
                    icon: 'error',
                    confirmButtonText: 'Cool'
                    })
        </script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
