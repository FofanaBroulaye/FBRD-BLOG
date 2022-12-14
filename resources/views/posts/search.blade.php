@extends('layouts.master')
@section('content')
    <div class="hero-wrap" style="background-image: url('../images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="">Home</a></span>
                            <span>Blog</span></p>
                        <h1 class="mb-4 bread">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @forelse($listPosts as $listPost)
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">

                            <img src="{{asset('/storage/' .$listPost->image)}}" width="200px" height="250px" alt="">

                            <div class="text mt-3 d-block">
                                <h3 class="heading mt-3"><a href="#">{{$listPost->content}}</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">{{$listPost->created_at->format('d M Y')}}</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    <div class="d-flex">
                                        <div class="bg-primary rounded-circle"><a href="{{route('post.edit',['post' => $listPost->id])}}" class="btn btn-link icon-edit"></a></div>
                                        <div class="bg-danger rounded-circle"><a href="{{route('post.delete',['post' => $listPost->id])}}" class="btn btn-link icon-trash"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>rien</p>
                @endforelse
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        {{$listPosts->links('pagination::bootstrap-5')}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
{{--@section('js')--}}
{{--<script>--}}
{{--    $('#myModal').on('show.bs.modal', function (event) {--}}
{{--    var button = $(event.relatedTarget);--}}
{{--    var id = button.data('id');--}}
{{--    var title = button.data('title');--}}
{{--    var content = button.data('content');--}}
{{--    var prix = button.data('prix');--}}
{{--    var category_id = button.data('category_id');--}}
{{--    var modal = $(this);--}}
{{--    modal.find('.modal-body #id').val(id);--}}
{{--    modal.find('.modal-body #title').val(title);--}}
{{--    modal.find('.modal-body #content').val(prix);--}}
{{--    modal.find('.modal-body #prix').val(content);--}}
{{--    modal.find('.modal-body #category_id').val(category_id);--}}
{{--    });--}}
{{--</script>--}}
{{--@endsection--}}




