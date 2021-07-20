<!DOCTYPE html>
<html lang="en">

	<!--begin::Head-->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>Dashboard | Skrillaz Logistics</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		@include('admin.partials.global.head')
	</head>

	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed page-loading">

		@include('admin.layout')

	    @include('admin.partials.extras.offcanvas.quick-user')

        @include('admin.partials.global.scripts')

	</body>

	<!--end::Body-->
</html>