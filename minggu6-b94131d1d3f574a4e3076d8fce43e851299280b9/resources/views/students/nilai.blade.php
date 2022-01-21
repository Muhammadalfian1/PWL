@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>KARTU HASIL STUDI (KHS)</h2></div>

                <div class="card-body">
                    <b>Name</b>     : {{ $student->name }} <br>
                    <b>NIM</b>      : {{ $student->nim }} <br>
                    <b>Class</b>    : {{ $student->kelas->class_name }} <br><br>
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Nilai</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($student->courses as $cs)
                            <tr>
                                <td>{{ $cs->course_name }}</td>
                                <td>{{ $cs->sks }}</td>
                                <td>{{ $cs->semester }}</td>
                                <td>{{ $cs->pivot->nilai }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/students/{{$student->id}}/report" class="btn btn-primary" target="_blank">Cetak</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection