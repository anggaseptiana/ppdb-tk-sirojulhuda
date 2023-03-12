@extends('layouts.main-dashboard')

@section('content')

    <h1 class="fs-2">{{ $title }}</h1>
    <p>Manajemen Calon Peserta Didik</p>
    <hr class="my-4">
    @if (session('message'))
        {!! session('message') !!}
    @endif


    @if( count($recruitments) > 0 )
    <form action="/admin/index" method="get">
        <label>Temukan Calon Peserta Didik</label>
        <div class="mb-3 row">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari nama atau informasi lain yang terkait" value="{{ request('search') }}">
                    <select class="form-select" name="tahun_ajaran" style="max-width: 150px;">
                        @foreach ($recruitments as $recruitment)
                        <option value="{{ $recruitment->tahun_ajaran }}" {{ request('tahun_ajaran') == $recruitment->tahun_ajaran ? 'selected' : '' }}>{{ $recruitment->tahun_ajaran }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-info text-white">Cek</button>
                </div>
            </div>
        </div>
    </form>
    @endif
    @if ( count($students) > 0 )
        <a href="" class="btn btn-success mb-3">Eksport Excel</a>
    @endif
    @if( count($students) > 0 )
    <div class="table-responsive">
    <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Nama Panggilan</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Daftar</th>
            <th scope="col">Status Penerimaan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($students as $student)
          <tr valign="middle">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $student->nama_lengkap }}</td>
            <td>{{ $student->nama_panggilan }}</td>
            <td>{{ $student->jk }}</td>
            <td>{{ $student->created_at }}</td>
            <td>
                @if ( $student->diterima == 'lolos' )
                <p class="text-success my-auto">Lolos</p>
                @endif
                @if ( $student->diterima == 'tidak lolos' )
                <p class="text-danger my-auto">Tidak Lolos</p>
                @endif
                @if ( $student->diterima == 'proses seleksi' )
                <p class="text-primary my-auto">Proses Seleksi</p>
                @endif
            </td>
            <td>
                @if ($student->diterima == 'proses seleksi')
                <a href="/ppdb/student/{{ $student->id }}" class="btn btn-sm btn-info text-white w-100 mb-2">detail</a>
                <div class="d-flex justify-content-between">
                <form action="/admin/student/{{ $student->id }}" method="post" class="d-inline" style="width: 47%;">
                    @csrf
                    @method('put')
                    <input type="hidden" name="diterima" value="lolos">
                    <button href="submit" class="btn btn-sm btn-success w-100">terima</button>
                </form>
                <form action="/admin/student/{{ $student->id }}" method="post" class="d-inline" style="width: 47%;">
                    @csrf
                    @method('put')
                    <input type="hidden" name="diterima" value="tidak lolos">
                    <button href="submit" class="btn btn-sm btn-danger w-100">tolak</button>
                </form>

                @else
                <a href="/ppdb/student/{{ $student->id }}" class="btn btn-sm btn-info text-white w-100 mb-2">detail</a>
                    
                @endif
                
                </div>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
    @else
    <p>Belum ada calon peserta didik</p>
    @endif


@endsection
