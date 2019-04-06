<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Selamat Datang di Portal Masjid Pangeran Mangkubumi, {{$user['name']}}</h2>
	<br/>
	Email yang anda gunakan adalah {{$user['email']}} , Silakan klik link di bawah ini untuk verifikasi akun anda!
	<br/>
	<a href="{{url('user/verify', $user->verification_token)}}">Verifikasi Email</a>
</body>
</html>