<!doctype html>
<html lang="fr">
  <head>
  	<title>Table 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('users/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section ">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Listes de utilisateurs</h2>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12">
					<div class="table-wrap shadow-lg p-3 mb-5 bg-light ">
						<table class="table table-responsive-xl">
						  <thead>
							<a href="" class="btn btn-link float-right text-danger" ><i class="fa fa-close"></i></a>
						    <tr>
						    	
						    <th class="text-center">Email</th>
						      <th class="">Nom Complet</th>
						      <th class="">Actions</th>
						      
						    </tr>
						  </thead>
						  <tbody>
							@forelse ($users as $user)
							<tr class="alert" role="alert">
						      <td class="text-center">
						      	
						      		<span class="text-center">{{$user->email}}</span><br>
						      		<span class="text-primary">Ajouté le : {{$user->created_at->format('d/m/Y')}}</span>
						      	
						      </td>
						      <td class="align-items-center">{{$user->name}}</td>
						      <td class="status">
								<a class="btn btn-link" href=""><i class="fa fa-edit"></i></a>
								<a class="btn btn-link" href=""><i class="fa fa-trash"></i></a>
							</td>
						    
							@empty
							<td>
								<h3>Pas d'utilisateurs</h3>
							</td>	
							@endforelse
							</tr>
						  </tbody>
						</table>
						<div style="float: right;">
						{{ $users->links('pagination::bootstrap-4') }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('users/js/jquery.min.js')}}"></script>
  <script src="{{asset('users/js/popper.js')}}"></script>
  <script src="{{asset('users/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('users/js/main.js')}}"></script>

	</body>
</html>

