<div class="form-group mt-3 ml-5 w-25 h-25 float-right">
    <form action="{{route('post.search')}}" class="d-flex" method="get">
        <input type="text" name="q" value="{{request()->q ?? ''}}" class="form-control h-25">
        <button class="btn btn-info ml-1" type="submit"><i class="icon-search2"></i></button>
    </form>
</div>
