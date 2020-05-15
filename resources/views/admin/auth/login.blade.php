<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/app.css') }}" >
        <title>Đăng nhập</title>
    </head>
    <body>
        <div id="admin-login-page">
            <div class="admin-login-container">
                <form class="admin-form" id="admin-form-login" method="post" action="{{ url('admin/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="email" class="form-control"
                            name="email" id="email"
                            placeholder="Nhập email"
                        />
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input
                            type="password" class="form-control"
                            name="password" id="password"
                            placeholder="Nhập mật khẩu"
                        />
                    </div>

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <button class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>
        </div>
    </body>
</html>
