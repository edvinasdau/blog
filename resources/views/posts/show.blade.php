<div class="row">
    <label>Title</label><br>
    {{ $postsSingle->title }}
</div>
<div class="row">
    <label>Text</label><br>
    {{ $postsSingle->text }}
</div>

<a href="{{ route('posts.edit',$postsSingle->id) }}"><button>Edit</button></a>

<form action="{{ route('posts.destroy', ['id' => $postsSingle->id])}}" method="post">
    @csrf
    <div class="form-group">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-secondary">Delete</button>
    </div>
</form>