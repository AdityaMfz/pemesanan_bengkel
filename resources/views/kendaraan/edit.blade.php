<!DOCTYPE html>
<html>
<head>
    <title>Edit Kendaraan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Edit Kendaraan</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('kendaraan.update', $kendaraan->no_polisi) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="no_polisi">No Polisi:</label>
                        <input type="text" id="no_polisi" name="no_polisi" class="form-control" value="{{ $kendaraan->no_polisi }}" placeholder="No Polisi">
                    </div>

                    <div class="form-group">
                        <label for="no_mesin">No Mesin:</label>
                        <input type="text" id="no_mesin" name="no_mesin" class="form-control" value="{{ $kendaraan->no_mesin }}" placeholder="No Mesin">
                    </div>

                    <div class="form-group">
                        <label for="merek">Merek:</label>
                        <select id="merek" name="merek" class="form-control">
                            <option value="Honda" {{ $kendaraan->merek == 'Honda' ? 'selected' : '' }}>Honda</option>
                            <option value="Yamaha" {{ $kendaraan->merek == 'Yamaha' ? 'selected' : '' }}>Yamaha</option>
                            <option value="Suzuki" {{ $kendaraan->merek == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                            <option value="Kawasaki" {{ $kendaraan->merek == 'Kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                            <option value="Lain" {{ $kendaraan->merek == 'Lain' ? 'selected' : '' }}>Lain</option>
                        </select>
                    </div>

                    <div class="form-group" id="lainMerek" style="display: {{ $kendaraan->merek == 'Lain' ? 'block' : 'none' }};">
                        <label for="lain_merek">Masukkan Merek Lain:</label>
                        <input type="text" id="lain_merek" name="lain_merek" class="form-control" value="{{ $kendaraan->lain_merek }}" placeholder="Masukkan Merek Lain">
                    </div>

                    <div class="form-group">
                        <label for="warna">Warna:</label>
                        <select id="warna" name="warna" class="form-control">
                            <option value="Putih" {{ $kendaraan->warna == 'Putih' ? 'selected' : '' }}>Putih</option>
                            <option value="Hitam" {{ $kendaraan->warna == 'Hitam' ? 'selected' : '' }}>Hitam</option>
                            <option value="Hijau" {{ $kendaraan->warna == 'Hijau' ? 'selected' : '' }}>Hijau</option>
                            <option value="Biru" {{ $kendaraan->warna == 'Biru' ? 'selected' : '' }}>Biru</option>
                            <option value="Merah" {{ $kendaraan->warna == 'Merah' ? 'selected' : '' }}>Merah</option>
                            <option value="Lain" {{ $kendaraan->warna == 'Lain' ? 'selected' : '' }}>Lain</option>
                        </select>
                    </div>

                    <div class="form-group" id="lainWarna" style="display: {{ $kendaraan->warna == 'Lain' ? 'block' : 'none' }};">
                        <label for="lain_warna">Masukkan Warna Lain:</label>
                        <input type="text" id="lain_warna" name="lain_warna" class="form-control" value="{{ $kendaraan->lain_warna }}" placeholder="Masukkan Warna Lain">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#merek').change(function() {
                if ($(this).val() === 'Lain') {
                    $('#lainMerek').show();
                } else {
                    $('#lainMerek').hide();
                }
            });

            $('#warna').change(function() {
                if ($(this).val() === 'Lain') {
                    $('#lainWarna').show();
                } else {
                    $('#lainWarna').hide();
                }
            });
        });
    </script>
</body>
</html>
