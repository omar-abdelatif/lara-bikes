@extends('frontend.dashboard.layouts.master')

@section('content')
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="members-info">
                <div class="members-title">
                    <p>معلومات الأعضاء</p>
                </div>
                <div class="members-data">
                    <table class=" table">
                        <thead>
                            <tr>
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
                            @foreach ($view as $user)
                                <tr class="text-center">
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->type }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->Serial_number }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="editprofile w-50 mx-auto bg-secondary p-3 rounded mt-5">
                            <h2 class="text-white text-center">Edit Your Data</h2>
                            <form action="{{ 'editprofile' }}" method="post" class="form-group">
                                <input type="text" class="form-control mb-3 mt-3" name="name" placeholder="User Name" value="" style="border:none">
                                <input type="email" class="form-control mb-3 mt-3" name="email" placeholder="Email" value="" style="border:none">
                                <input type="password" class="form-control mb-3 mt-3" name="password" placeholder="Password" value="" style="border:none">
                                <input type="phone" class="form-control mb-3 mt-3" name="number" placeholder="Phone" value="" style="border:none">
                                <input type="file" class="form-control mb-3 mt-3 p-0" name="user_img" value="" style="height: 2rem; border:none">
                                <input type="address" class="form-control mb-3 mt-3" name="address" placeholder="Address" value="" style="border:none">
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            3</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            4</div>
    </div>
@endsection
