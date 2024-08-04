<!DOCTYPE html>
<html>
<head>
    <title>Create Kendaraan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Create New Kendaraan</h2>

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

                <form action="{{ route('kendaraan.store') }}" method="POST" id="createForm">
                    @csrf

                    <div class="form-group">
                        <label for="no_polisi">No Polisi:</label>
                        <input type="text" id="no_polisi" name="no_polisi" class="form-control" placeholder="No Polisi">
                    </div>

                    <div class="form-group">
                        <label for="no_mesin">No Mesin:</label>
                        <input type="text" id="no_mesin" name="no_mesin" class="form-control" placeholder="No Mesin">
                    </div>

                    <div class="form-group">
                        <label for="merek">Merek:</label>
                        <select id="merek" name="merek" class="form-control">
                            <option value="Honda">Honda</option>
                            <option value="Yamaha">Yamaha</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Kawasaki">Kawasaki</option>
                            <option value="Lain">Lain</option>
                        </select>
                    </div>

                    <div class="form-group" id="lainMerek" style="display: none;">
                        <label for="lain_merek">Masukkan Merek Lain:</label>
                        <input type="text" id="lain_merek" name="lain_merek" class="form-control" placeholder="Masukkan Merek Lain">
                    </div>

                    <div class="form-group">
                        <label for="warna">Warna:</label>
                        <select id="warna" name="warna" class="form-control">
                            <option value="Putih">Putih</option>
                            <option value="Hitam">Hitam</option>
                            <option value="Hijau">Hijau</option>
                            <option value="Biru">Biru</option>
                            <option value="Merah">Merah</option>
                            <option value="Lain">Lain</option>
                        </select>
                    </div>

                    <div class="form-group" id="lainWarna" style="display: none;">
                        <label for="lain_warna">Masukkan Warna Lain:</label>
                        <input type="text" id="lain_warna" name="lain_warna" class="form-control" placeholder="Masukkan Warna Lain">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
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
