<!DOCTYPE html>
<html>

<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Data Karyawan</h4>
        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th style="background-color:#fae1c5">No</th>
                <th style="background-color:#fae1c5">Nama</th>
                <th style="background-color:#fae1c5">Email</th>
                <th style="background-color:#fae1c5">Role</th>
                <th style="background-color:#fae1c5">Jabatan</th>
                <th style="background-color:#fae1c5">No Hp</th>
                <th style="background-color:#fae1c5">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $user)
            <tr>
                <td>{{ ++$no}}.</td>
                <td>{{ucfirst($user->email)}}</td>
                <td>{{ucfirst($user->name)}}</td>
                <td>{{ucfirst($user->role)}}</td>
                @if(isset($user->karyawan))
                <td>{{ucfirst($user->karyawan->jabatan)}}</td>
                <td>{{ucfirst($user->karyawan->no_hp)}}</td>
                <td>{{ucfirst($user->karyawan->jk)}}</td>
                @else
                <td></td>
                <td></td>
                <td></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>