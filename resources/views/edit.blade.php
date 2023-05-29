<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consume Student Api || Edit</title>
</head>

<body>
    <h2>Edit Data </h2>
    @if (Session::get('errors'))
        <div style="width=100%; background: red; padding: 10px;">
            {{ Session::get('errors') }}
        </div>
    @endif
    <form action="{{ route('update', $student['id'])}}" method="POST">
        @csrf
        @method('PATCH')
        <div style="display: flex; margin-bottom: 15px">
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="{{$student['nama']}}" id="nama" placeholder="Nama anda..."></input>
        </div>

        <div style="display: flex; margin-bottom: 15px">
            <label for="nis">NIS</label>
            <input type="number" name="nis"  value="{{$student['nis']}}" id="nis" placeholder="NIS anda..."></input>
        </div>

        <div style="display:flex; margin-bottom:15px">
            <label for="rombel">Rombel</label>
            <select name="rombel" id="rombel">
                <option value="PPLG X" {{$student['rombel'] == 'PPLG X' ? 'selected' : ''}} >PPLG X</option>
                <option value="PPLG XI"  {{$student['rombel'] == 'PPLG XI' ? 'selected' : ''}}>PPLG XI</option>
                <option value="PPLG XII"  {{$student['rombel'] == 'PPLG XII' ? 'selected' : ''}}>PPLG XII</option>
            </select>
        </div>

        <div style="display: flex; margin-bottom: 15px">
            <label for="rayon">Rayon</label>
            <input type="text" name="rayon"  value="{{$student['rayon']}}" id="rayon" placeholder="Contoh: cic 3">
        </div>
        <button type="submit">Kirim</button>
    </form>

</body>

</html>
