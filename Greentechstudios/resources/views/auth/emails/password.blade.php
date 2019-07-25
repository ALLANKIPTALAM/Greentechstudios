<b>Hello {{ $user->name}} </b><br>
You are receiving this email because we received a password reset request for your account.<br><br>
 
<a class="btn btn-info" href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}" role="button">Reset Password</a>
<br><br>

If you did not request a password reset, no further action is required.<br><br>
Regards,<br>
Greentech Studios.