<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/vfavicon.ico') }}">
    <title>노스텍 로컬서버_MES</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap/" />
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/node_modules/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/node_modules/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet') }}" type="text/css" />
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{ asset('assets/node_modules/c3-master/c3.min.css') }}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('css/pages/dashboard1.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/colors/default.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<link href="{{ asset('css/tableHeader.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet">

	
	<!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/node_modules/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('assets/node_modules/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/node_modules/ps/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>  
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript  -->
    <script src="{{ asset('assets/node_modules/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/morrisjs/morris.min.js') }}"></script>
	
    <!--c3 JavaScript  -->
    <script src="{{ asset('assets/node_modules/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/c3-master/c3.min.js') }}"></script>
    <!-- Popup message jquery -->
    <script src="{{ asset('assets/node_modules/toast-master/js/jquery.toast.js') }}"></script> 
    <!-- Chart JS -->
    <script src="{{ asset('js/dashboard1.js') }}"></script> 
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
	<!-- Style switcher -->
	<!-- ============================================================== -->
	<script src="{{ asset('assets/node_modules/styleswitcher/jQuery.style.switcher.js') }}"></script>
        <!-- ============================================================== -->

    <!--[if lt IE 9] 
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    -->

    <!-- calendar -->
	<script src="{{ asset('js/datepicker.min.js') }}"></script>
	<script src="{{ asset('js/datepicker.ko-KR.js') }}"></script>
	<!-- Chart JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>





	<script src="{{ asset('js/dashboard1.js') }}"></script>	
	<script src="{{ asset('js/jquery-barcode.js') }}"></script>
	
		
	<!--  Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--  Font Awesome -->
		
	<script>					
		//입력시 숫자만입력하게하기
		$(document).on("keyup", ".onlyNumber", function() {
			$(this).val( $(this).val().replace(/[^0-9]/g, "")); 
		});
		
		//사업자등록번호 입력시 자동필터링+형식변환
		$(document).on("keyup", ".companyNumber", function() {
			$(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^[0-9]{3})([0-9]+)?([0-9]{5})$/,"$1-$2-$3").replace("--", "-") ); 
		});

		//전화번호형식 입력시 자동필터링+형식변환
		$(document).on("keyup", ".phoneNumber", function() { 
			$(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-") ); 
		});
    </script>
    @yield('script')
</head>