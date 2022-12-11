<table>
    <thead>
        <tr>
            <td colspan="7" align="center">Data Karyawan</td>
        </tr>
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