<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Akun Relawan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="{{ asset('assets/css/register.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Edit Akun Relawan</span></div>
            <form action="{{ route('auth.editrelawan', $user->id)}}" method="POST">
                @csrf
                <div class="row">Nama Relawan
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
                <div class="row">Alamat
                    <textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3">{{ old('alamat',$user->alamat)}}</textarea>
                    @if ($errors->has('alamat'))
                        <div class="text-danger">
                            {{$errors->first('alamat')}}
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
                <div class="row">Tanggal Lahir
                    <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir',$user->tgl_lahir)}}">
                    @if ($errors->has('tgl_lahir'))
                        <div class="text-danger">
                            {{$errors->first('tgl_lahir')}}
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
