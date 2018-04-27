{{ $usersSingle->name }}
<a href="{{ route('users.edit',$usersSingle->id) }}"><button>Edit</button></a>

<form action="{{ route('users.destroy', ['id' => $usersSingle->id])}}" method="post">
    @csrf
    <div class="form-group">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-secondary">Delete</button>
    </div>
</form>