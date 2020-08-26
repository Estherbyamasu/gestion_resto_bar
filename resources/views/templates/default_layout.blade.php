<!DOCTYPE html>
<html>
<!-- head -->
 @include('inc.head')

<body>
	<!-- nav -->
	@include('inc.nav')

	<!-- sidebar -->
	@include('inc.sidebar')

	<!--content -->
	@yield('content')
	<!-- end content -->

	<!-- scripts -->
	@include('inc.scripts')

</body>
</html>