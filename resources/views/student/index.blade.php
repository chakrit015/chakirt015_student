@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md col-md-offset-2">
            <div class="card">

                <div class="card header h3">

                    แสดงข้อมูลนักศึกษา [ ทั้งหมด{{$count}} รายการ]

                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>คำนำหน้า</th>
                            <th> ชื่อ</th>
                            <th>นามสกุล </th>
                            <th>เลขประจำตัว</th>
                            <th>เลขประจำกลุ่ม</th>
                            <th>ชื่อสาขา</th>
                            <th>เลขสาขา</th>
                        </tr>
                        @foreach ($student as $student)
                        <tr>
                            <td>{{$student->stu_pre}}</td>
                            <td>{{$student->stu_fname}}</td>
                            <td>{{$student->stu_lname}}</td>
                            <td>{{$student->stu_code}}</td>
                            <td>{{$student->stu_group_id}}</td>
                            <td>{{$student->major_id}}</td>
                            <td>{{$student->fac_id}}</td>
                        <td> <a href="{{url('/$student/destroy/'.$student->id)}}">ลบ</a></td>
                        </tr>


                        @endforeach
                    </table>
            {!! $student->render !!}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
