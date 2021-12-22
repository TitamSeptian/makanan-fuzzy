<form action="{{ route('food.update', $data->id) }}" id="form-update" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="nama">Nama Makanan</label>
        <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" id="nama"
            placeholder="Ex. Sempol">
    </div>
    <div class="form-group">
        <label for="jenis" class="col-form-label">Jenis</label>
        <select id="jenis" name="jenis" class="form-control">
            <option disabled selected>Choose</option>
            <option value="kuah" {{ $data->jenis == 'kuah' ? 'selected' : '' }}>Kuah</option>
            <option value="tidak" {{ $data->jenis == 'tidak' ? 'selected' : '' }}>Tidak Kuah</option>
        </select>
    </div>
    <div class="form-group">
        <label for="harga">Harga(Rp)</label>
        <input type="number" min="0" class="form-control" value="{{ $data->harga }}" name="harga" id="harga"
            placeholder="Ex. 2000">
    </div>
    <div class="form-group">
        <label for="mood">Nilai Mood(1-10)</label>
        <input type="number" min="0" max="10" class="form-control" value="{{ $data->mood }}" name="mood" id="mood"
            placeholder="Ex. 2">
    </div>
    <div class="form-group">
        <label for="manis">Nilai Rasa Manis(1-10)</label>
        <input type="number" min="0" max="10" class="form-control" value="{{ $data->rasa_manis }}" name="manis"
            id="manis" placeholder="Ex. 2">
    </div>
    <div class="form-group">
        <label for="pedas">Pedas(1-10)</label>
        <input type="number" min="0" max="10" class="form-control" name="pedas" value="{{ $data->rasa_pedas }}"
            id="pedas" placeholder="Ex. 2">
    </div>

    <button type="submit" class="btn btn-primary float-right">Edit</button>

</form>
