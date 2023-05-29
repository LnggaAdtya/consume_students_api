<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consume Rest API || Trash</title>
</head>
<body>
@if (Session::get('success'))
        <div style="padding= 5px 10px; background: green; color:white; margin: 10px;">
            {{ Session::get('success') }}
        </div>
    @endif
    <a href="/">Kembali</a>
    @foreach ($studentsTrash as $student)
    <ol>
        <li>NIS : {{$student['nis']}}</li>
        <li>Nama : {{$student['nama']}}</li>
        <li>Rombel : {{$student['rombel']}}</li>
        <li>Rayon : {{$student['rayon']}}</li>
        <li>Dihapus Tanggal : {{\Carbon\Carbon::parse($student['deleted_at'])->format('j F, Y')}}</li>
        <li>
            <a href="{{route('restore', $student['id'])}}">Kembalikan Data</a>
            <a href="{{route('permanent', $student['id'])}}" style="background: orange; color: white;">Hapus Permanen data</a>
        </li>
    </ol>
    @endforeach
</body>
</html>
