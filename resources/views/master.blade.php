<!DOCTYPE html>
<html>
<head>
	<title>Blog Laravel</title>
</head>
<body>
 	<header>
 		<h1>Blog Laravel</h1>
 		<nav>
 			<a href="/blog">HOME</a>
 			<a href="/blog/tentang">TENTANG</a>
 			<a href="/blog/kontak">KONTAK</a>
 		</nav>
 	</header>
 	<hr>

 	<h3> @yield('judul_halaman') </h3>

 	@yield('konten')

 	<footer>
 		<p>&copy;<a href="http://www.gr-it.id">PT. Gria Inovasi Teknologi</a>. 2020</p>
 	</footer>
</body>
</html>