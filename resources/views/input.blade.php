<DOCTYPE! html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" cintent="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" cintent="ie=edge">
    <title>Rajin NGoding Form validation</title>

    <!-- BOOStrap -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body>
    
    <div class="cintainer">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Form Validation</h3>
                        <br/>

                        <!-- menampilkan error validation -->
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif

                        <br>
                        <!-- form validasi -->
                        <form action="/proses" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan: </label>
                                <input id="pekerjaan" class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia: </label>
                                <input id="usia" class="form-control" type="text" name="usia" value="{{ old('usia') }}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="prosses">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>