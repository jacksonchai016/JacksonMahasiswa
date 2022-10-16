@extends('layout.main')
@section('title', 'Data Mahasiswa')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Data Mahasiswa</h1>

                <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ( $mahasiswa as $mhs)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $mhs->nama_mahasiswa }} </td>
                            <td>{{ $mhs->nim }} </td>
                            <td>{{ $mhs->email_mahasiswa }} </td>
                            <td>{{ $mhs->jurusan }} </td>
                            
                        </tr>
                        @endforeach
                    </tbody>



                </table>




            </div>
        </div>
    </div>
@endsection

    
  