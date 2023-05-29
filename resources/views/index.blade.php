<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
   initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <tittle>Consume Rest API Students </tittle>
</head>

<body>
    @if (Session::get('success'))
        <div style="padding= 5px 10px; background: green; color:white; margin: 10px;">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="" method="get">
        @csrf
        <input type="text" name="search" placeholder="Cari nama...">
        <button type="submit">Cari</button>
    </form>
    <br>
    <a href="{{ route('add') }}">Tambah Data</a>
    <a href="{{route('trash')}}" style="background: orange; color: white;">Lihat Sampah</a>
    @foreach ($students as $student)
        <ol>
            <li>NIS : {{ $student['nis'] }}</li>
            <li>NAMA : {{ $student['nama'] }}</li>
            <li>Rombel : {{ $student['rombel'] }}</li>
            <li>Rayon : {{ $student['rayon'] }}</li>
            <li>Aksi : <a href="{{route('edit', $student ['id'])}}">Edit</a> ||
            <form action="{{ route('delete', $student['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
            </li>
        </ol>
    @endforeach
</body>

</html>


