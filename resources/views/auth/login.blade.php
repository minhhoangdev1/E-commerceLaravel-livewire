<x-base-layout>
	<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">Trang chủ</a></li>
            <li class="item-link"><span>Đăng nhập</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
            <div class=" main-content-area">
                <div class="wrap-login-item ">						
                    <div class="login-form form-item form-stl">
                    <x-jet-validation-errors class="mb-4" />
                        <form name="frm-login" method="POST" action="{{route('login')}}">
                            @csrf
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Đăng nhập với tài khoản của bạn</h3>										
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-uname">Email:</label>
                                <input type="email" id="frm-login-uname" name="email" placeholder="Email của bạn":value ="old('email')" required autofocus>
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-pass">Mật khẩu:</label>
                                <input type="password" id="frm-login-pass" name="password" placeholder="Nhập mật khẩu của bạn" required autocomplete="current-password">
                            </fieldset>
                            
                            <fieldset class="wrap-input">
                                <label class="remember-field">
                                    <input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>Lưu thông tin</span>
                                </label>
                                <a class="link-function left-position" href="{{route('password.request')}}" title="Forgotten password?">Quên mật khẩu?</a>
                            </fieldset>
                            <input type="submit" class="btn btn-submit" value="Đăng nhập" name="submit">
                        </form>
                    </div>												
                </div>
            </div><!--end main products area-->		
        </div>
    </div><!--end row-->

</div><!--end container-->

</main>
</x-base-layout>