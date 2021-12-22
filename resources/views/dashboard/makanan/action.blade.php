<a href="{{ route('food.show', $data->id) }}" class="btn btn-sm btn-primary btn-show"
    data-title="{{ $data->nama }}">Detail</a>
<a href="{{ route('food.edit', $data->id) }}" class="btn btn-sm btn-warning btn-edit"
    data-title="{{ $data->nama }}">Edit</a>
<a href="{{ route('food.destroy', $data->id) }}" class="btn btn-sm btn-danger btn-delete">Hapus</a>
