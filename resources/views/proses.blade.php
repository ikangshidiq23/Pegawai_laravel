<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rajin Ngoding form VALIDASI</title>

    <!-- boostrap -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div clas="card-body">
                    <h3>Rajin Ngoding, Form Validasi</h3>
                    <h3 class="my-4"> Data Yang di Input: </h3>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <td style="width:150px">Nama</td>
                            <td>{{ $data->nama }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{ $data->pekerjaan }}</td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td>{{ $data->usia }}</td>
                        </tr>
                    </table>

                    <a href="/input" class="btn btn-primary">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>