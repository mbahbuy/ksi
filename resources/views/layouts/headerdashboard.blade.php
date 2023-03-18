<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-start">
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    @auth    
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" data-bs-toggle="dropdown" style="cursor: pointer">
              <i class="bi bi-tools m-2"></i> 
              <span> Account Settings</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

              <li>
                <a class="dropdown-item d-flex align-items-center" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#password-change">
                  <i class="bi bi-gear"></i>
                  <span>Password</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <form action="{{ route('logout') }}" method="POST" style="cursor: pointer">
                  @csrf
                  <a class="dropdown-item d-flex align-items-center" onclick="$(this).closest('form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                  </a>
                </form>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
        </ul>
      </nav><!-- End Icons Navigation -->
    @endauth

</header><!-- End Header -->
@auth
<!-- Modal Dialog Scrollable -->
<div class="modal fade" id="password-change">
  @php
    $oldpass_class_profile = ($errors->profile_password->has('old_password')) ? 'is-invalid' : '' ;
    $oldpass_value_profile = ($errors->profile_password->any()) ? old('old_password') : '';
    $newpass_class_profile = ($errors->profile_password->has('new_password')) ? 'is-invalid' : '';
    $newpass_value_profile = ($errors->profile_password->any()) ? old('new_password') : '';
    $passconf_class_profile = ($errors->profile_password->has('password_confirmation')) ? 'is-invalid' : '';
    $passconf_value_profile = ($errors->profile_password->any()) ? old('password_confirmation') : '';
  @endphp
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('password.change') }}" method="post">
        @csrf
        <div class="form-group mb-3">
          <label class="form-label" for="pass_old">Old Password</label>
          <div class="input-group flex-nowrap">
              <input class="form-control {{ $oldpass_class_profile }}" name="old_password" id="pass_old" type="password" value="{{ $oldpass_value_profile }}">
              <button type="button" onclick="showPassword(this)" class="input-group-text"><i class="bi bi-eye-slash"></i></button>
          </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="pass">New Password</label>
            <div class="input-group flex-nowrap">
                <input class="form-control {{ $newpass_class_profile }}" name="new_password" id="pass" type="password" value="{{ $newpass_value_profile }}">
                <button type="button" onclick="showPassword(this)" class="input-group-text"><i class="bi bi-eye-slash"></i></button>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="pass_conf">Confirm Password</label>
            <div class="input-group flex-nowrap">
                <input type="password" class="form-control {{ $passconf_class_profile }}" id="pass_conf" name="password_confirmation" value="{{ $passconf_value_profile }}">
                <button type="button" onclick="showPassword(this)" class="input-group-text"><i class="bi bi-eye-slash"></i></button>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button></form>
      </div>
    </div>
  </div>
</div><!-- End Modal Dialog Scrollable-->

<script>
  function showPassword(pass) {
    const target = $(pass).closest('.input-group').children('.form-control');
    const target_icon = $(pass).children('.bi');
    if (target_icon.hasClass('bi-eye-slash')) {
      target.attr('type', 'text');
      target_icon.attr('class', 'bi bi-eye');
    } else {
      target.attr('type', 'password');
      target_icon.attr('class', 'bi bi-eye-slash');
    }
  }
  @if ($errors->profile_password->any())
    var myModal = new bootstrap.Modal(document.getElementById("password-change"), {});
    document.onreadystatechange = function () {
        myModal.show();
    };
  @endif
</script>

@endauth