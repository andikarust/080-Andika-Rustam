<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Akun Organisasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="{{ asset('assets/css/register.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Edit Akun Organisasi</span></div>
            <form action="{{ route('auth.editorganisasi', $user->id)}}" method="POST">
                @csrf
                <div class="row">Nama Organisasi
                    <input type="text" id="nama" name="nama" value="{{ old('nama',$user->nama) }}">
                    @if ($errors->has('nama'))
                        <div class="text-danger">
                            {{$errors->first('nama')}}
                        </div>
                    @endif
                </div>
                <div class="row">Email
                    <input type="text" id="email" name="email" value="{{ old('email',$user->email)}}">
                    @if ($errors->has('email'))
                        <div class="text-danger">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>
                <div class="row">Deskripsi Organisasi
                    <textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="3">{{ old('deskripsi',$user->organization->deskripsi_organisasi)}}</textarea>
                    @if ($errors->has('deskripsi'))
                        <div class="text-danger">
                            {{$errors->first('deskripsi')}}
                        </div>
                    @endif
                </div><br>
                <div class="row">Nomor Telepon
                    <input type="text" id="no_telepon" name="no_telepon" value="{{ old('no_telepon',$user->no_telepon)}}">
                    @if ($errors->has('no_telepon'))
                        <div class="text-danger">
                            {{$errors->first('no_telepon')}}
                        </div>
                    @endif
                </div>
                <div class="row">Tahun Berdiri
                    <input type="text" id="tahun_berdiri" name="tahun_berdiri" value="{{ old('tahun_berdiri',$user->organization->tahun_berdiri)}}">
                    @if ($errors->has('tahun_berdiri'))
                        <div class="text-danger">
                            {{$errors->first('tahun_berdiri')}}
                        </div>
                    @endif
                </div>
                <div class="row">Domisili
                    <input type="text" id="domisili" name="domisili" value="{{ old('domisili',$user->organization->domisili)}}">
                    @if ($errors->has('domisili'))
                        <div class="text-danger">
                            {{$errors->first('domisili')}}
                        </div>
                    @endif
                </div>
                <div class="row button">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
