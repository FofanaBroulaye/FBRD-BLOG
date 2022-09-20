@extends('layouts.master')
@section('content')
    <section class="ftco-section contact-section bg-dark">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h3">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p ><img src="../../images/statut8.jpg" width="200px" height="140px"></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p ><img src="../../images/statut1.jpg" width="200px" height="140px"></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p ><img src="../../images/statut2.jpg" width="200px" height="140px"></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p ><img src="../../images/statut6.jpg" width="200px" height="140px"></p>
                    </div>
                </div>
            </div>
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
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="{{route('post.update', ['post'=>$post->id])}}" method="POST" enctype='multipart/form-data' class="bg-white p-5 contact-form">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <input type="text" value="{{$post->title}}" name="nom" class="form-control" placeholder="Nom de l'Article">
                        </div>
                        <div class="form-group">
                            <select name="category_id" id="" class="form-control">

                                <option value="">Selectionnez la categorie</option>
                                @foreach($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="prix" value="{{$post->prix}}" class="form-control" placeholder="Le prix de l'Article">
                        </div>
                        <div class="form-group">
                            <textarea name="comment" id="" value="{{$post->content}}" cols="30" rows="7" class="form-control" placeholder="Faites un commentaire de l'Article"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sauvegarder" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex ftco-animate h-25">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image:url('{{asset('/storage/'.$post->image)}}'); width: 500px">
                        </a>
                        <div class="text mt-3 d-block">
                            <h3 class="heading mt-3"><a href="#">L'artisanat mon repère</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">{{date('d M Y')}}</a></div>
                                <div><a href="#">{{auth()->user()->name}}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
