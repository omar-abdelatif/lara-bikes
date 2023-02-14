<div class="col-lg-2">
    <div class="admin-data">
        <div class="admin-header">
            <a href="{{'profile'}}" class="view-site">العودة للبروفايل</a>
        </div>
        <div class="d-flex justify-content-center">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link admindashboard text-white bold active" id="v-pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true">
                    <i class="fad fa-user-crown"></i>
                    لوحة التحكم
                </button>
                <button class="nav-link members text-white bold" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false">
                    <i class="fad fa-users"></i>
                    تعديل البيانات
                </button>
                <button class="nav-link setting text-white bold" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">
                    <i class="fad fa-cogs"></i>
                    الدراجات
                </button>
                <div class="logout text-white bold pr-2">
                    <i class="fad fa-sign-out"></i>
                    <a class="text-white" href="{{ 'logout' }}">تسجيل خروج</a>
                </div>
            </div>
        </div>
    </div>
</div>
