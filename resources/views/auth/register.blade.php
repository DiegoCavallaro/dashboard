<!DOCTYPE html>
  <html lang="es">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <head>
      <title>FSC | Registro</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="vendor/bootstrap/css/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="vendor/adminlte/dist/css/adminlte.min.css">
    </head>

  <body class="hold-transition register-page">
      <div class="register-box" align="center">
        <div class="register-logo">
          <a href="/"><b>FSC </b>App</a>
        </div>

        <div class="card">
          <div class="card-body register-card-body">
            <img src="images/fsc.png" />
            <p class="login-box-msg"></p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

        		<div class="input-group mb-3">
        			<input type="text" class="form-control" name="nickName" placeholder="{{ __('nickName') }}" minlength="5" required autofocus autocomplete="nickName">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
        			<input type="text" class="form-control" name="name" placeholder="{{ __('Name and Surname') }}" minlength="5" required autofocus autocomplete="name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

        		<div class="input-group mb-3">
        			<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="{{ __('Corporate email') }}" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
        		</div>

        		<div class="input-group mb-3">
        			<input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" minlength="8" value="" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
        			</div>
                </div>

                <div class="input-group mb-3">
        			<input type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

        		<button type="submit" class="btn btn-primary btn-block">Solicitar cuenta</button>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms"/>

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                    </x-jet-label>
                </div>
                @endif

        	</form>

            <div class="social-auth-links text-center">
              <p>
              <a href="{{ route('login') }}" class="btn btn-outline-success btn-block">Ya tengo cuenta</a>
            </div>

          </div>
        </div>
      </div>

  </body>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/adminlte/dist/js/adminlte.min.js"></script>
</html>