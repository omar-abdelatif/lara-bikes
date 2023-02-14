@extends('frontend.dashboard.layouts.master')

@section('content')
    <div class="members-info">
        <div class="members-title">
            <p>معلومات الأعضاء</p>
        </div>
        <div class="members-data">
            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">الإسم</th>
                        <th scope="col">الهاتف</th>
                        <th scope="col">العنوان</th>
                        <th scope="col">الماركة</th>
                        <th scope="col">النوع</th>
                        <th scope="col">الموديل</th>
                        <th scope="col">رقم الكادر</th>
                        <th scope="col">الحالة</th>
                        <th scope="col">تاريخ الإنضمام</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection
