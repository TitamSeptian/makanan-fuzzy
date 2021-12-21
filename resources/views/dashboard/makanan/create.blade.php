<form action="{{ route('food.store') }}" id="form-create" method="post">
    @csrf
    @method("POST")
    <div class="form-group">
        <label for="nama">Nama Makanan</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Ex. Sempol">
    </div>
    <div class="form-group">
        <label for="jenis" class="col-form-label">Jenis</label>
        <select id="jenis" name="jenis" class="form-control">
            <option disabled selected>Choose</option>
            <option value="kuah">Kuah</option>
            <option value="tidak">Tidak Kuah</option>
        </select>
    </div>
    <div class="form-group">
        <label for="harga">Harga(Rp)</label>
        <input type="number" min="0" class="form-control" name="harga" id="harga" placeholder="Ex. 2000">
    </div>
    <div class="form-group">
        <label for="mood">Nilai Mood(1-10)</label>
        <input type="number" min="0" max="10" class="form-control" name="mood" id="mood" placeholder="Ex. 2">
    </div>
    <div class="form-group">
        <label for="manis">Nilai Rasa Manis(1-10)</label>
        <input type="number" min="0" max="10" class="form-control" name="manis" id="manis" placeholder="Ex. 2">
    </div>
    <div class="form-group">
        <label for="pedas">Pedas(1-10)</label>
        <input type="number" min="0" max="10" class="form-control" name="pedas" id="pedas" placeholder="Ex. 2">
    </div>

    <button type="submit" class="btn btn-primary float-right">Simpan</button>

</form>
