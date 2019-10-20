<form id="login-form" class="form" action="/auth/login" method="post">

    @csrf

    <h3 class="text-center text-info">Login</h3>

    @include('pages/page-admin/page-admin-login/components/admin-form-username')
    @include('pages/page-admin/page-admin-login/components/admin-form-password')
    @include('pages/page-admin/page-admin-login/components/admin-form-remember-me')
    @include('pages/page-admin/page-admin-login/components/admin-form-submit')

</form>
