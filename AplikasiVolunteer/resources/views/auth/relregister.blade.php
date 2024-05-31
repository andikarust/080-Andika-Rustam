<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Akun Relawan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="{{ asset('assets/css/register.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Daftar Akun Relawan</span></div>
            <form action="{{ route("auth.relregister")}}" method="POST">
                @csrf
                <div class="row">Nama
                    <input type="text" id="nama" name="nama" placeholder="" >
                </div>
                <div class="row">Email
                    <input type="text" id="email" name="email" >
                </div>
                <div class="row">Password
                    <input type="password" id="password" name="password" >
                </div>
                <div class="row">Alamat
                    <textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3"></textarea>
                </div><br>
                <div class="row">Nomor Telepon
                    <input type="text" id="no_telepon" name="no_telepon" >
                </div>
                <div class="row">Tanggal Lahir
                    <input type="date" id="tgl_lahir" name="tgl_lahir" >
                </div>
                <div class="row">Jenis Kelamin
                    <div class="radio-group">
                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki">
                        <label for="laki">Laki-Laki</label>

                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="row button">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
