<link href="{{asset('jquery/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="{{asset('jquery/bootstrap.min.js')}}"></script>
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title></title>
        <!-- <link href='http://fonts.googleapis.com/css?family=Questrial|Droid+Sans|Alice' rel='stylesheet' type='text/css'> -->
		<link rel="stylesheet" href="{{asset('form.css')}}">
    
    <body>
    @include('sweetalert::alert')
        <div class="container">
            <div class="row">
                <div>
                    
                </div>
                <img id="postcard" src="{{asset('/storage/'.$post->image)}}" alt="postcard" class="img-responsive move">
                <div id="content" >
                
				<a class="close" href="{{url('/')}}">&times;</a>
                
                    <h1> Créer un post </h1>
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
					
                    <form role="form" action="{{route('post.update', ['post'=>$post->id])}}" method="POST" enctype='multipart/form-data'>
						@csrf
						@method('PUT')
                        <div class="form-group">
                            <label for="username" class="iconic user" > Nom <span class="required">*</span></label>
                            <input type="text" class="form-control" value="{{$post->title}}" name="nom" id="username"  required="required" placeholder="">
                        </div>
						<div class="form-group">
						<label for="username" class="iconic category" > Categorie <span class="required">*</span></label>
						<select name="category_id" value="{{$post->category_id}}" class="form-control">
                            <option value=""  class="option"></option>
                                                                
								<option selected value="{{$post->id}}" class="">{{@$post->categories->name}}</option>
								
							</select>
						</div>
						
                        <div class="form-group">
                            <label for="usermail" class="iconic mail-alt"> Images <span class="required">*</span></label> 
                            <input type="file" class="form-control" name="photo" id="usermail" required="required">
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="iconic comment"> Commentaire </label>
                            <textarea name="comment" id="message" value="{{$post->comment}}" class="form-control" rows="3" placeholder="Inserez un commentaire sur votre image"  required="required"></textarea>
                        </div>
                        <center>
							<input type="submit" value=" ★  Valider !" />  
						</center>
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>    
