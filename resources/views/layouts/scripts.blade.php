<!-- Core -->
<script src="{{asset('plugins/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Vendor JS -->
<script src="{{asset('plugins/onscreen/dist/on-screen.umd.min.js')}}"></script>

<!-- Smooth scroll -->
<script src="{{asset('plugins/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

<!-- Datepicker -->
<script src="{{asset('plugins/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Sweet Alerts 2 -->
<script src="{{asset('plugins/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="{{asset('plugins/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Notyf -->
<script src="{{asset('plugins/notyf/notyf.min.js')}}"></script>

<!-- Simplebar -->
<script src="{{asset('plugins/simplebar/dist/simplebar.min.js')}}"></script>

<!-- tooltip -->
<script src="{{asset('plugins/chartist/dist/chartist.min.js')}}"></script>

<script src="{{asset('plugins/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="{{asset('js/volt.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
	var ajax = {
		        'excelupload': '{{route("excel.upload")}}',
				'excelverify': '{{route("excel.verify")}}',
				'excelstore': '{{route("excel.store")}}'
			};
</script>
<script src="{{asset('js/excel.js')}}"></script>
