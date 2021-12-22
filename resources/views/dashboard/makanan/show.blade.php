<div class="table-responsive">
    <table class="table table-compact">
        <tr>
            <td>Nama</td>
            <td>{{ $data->nama }}</td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>{{ $data->jenis }}</td>
        </tr>
        <tr>
            <td>Mood</td>
            <td>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <td>Sedih</td>
                            <td>{{ $data->fmood->sedih }}</td>
                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td>{{ $data->fmood->normal }}</td>
                        </tr>
                        <tr>
                            <td>Senang</td>
                            <td>{{ $data->fmood->senang }}</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <td>Murah</td>
                            <td>{{ $data->fharga->murah }}</td>
                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td>{{ $data->fharga->normal }}</td>
                        </tr>
                        <tr>
                            <td>Mahal</td>
                            <td>{{ $data->fharga->mahal }}</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>Manis</td>
            <td>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <td>Tidak</td>
                            <td>{{ $data->fmanis->tidak }}</td>
                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td>{{ $data->fmanis->normal }}</td>
                        </tr>
                        <tr>
                            <td>Manis</td>
                            <td>{{ $data->fmanis->manis }}</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>Pedas</td>
            <td>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <td>Tidak</td>
                            <td>{{ $data->fpedas->tidak }}</td>
                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td>{{ $data->fpedas->normal }}</td>
                        </tr>
                        <tr>
                            <td>Pedas</td>
                            <td>{{ $data->fpedas->pedas }}</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>{{ $data->harga }}</td>
        </tr>
    </table>
</div>
