<script src="{{asset('assets/user/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/user/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<script src="{{asset('assets/user/js/datepicker.js')}}"></script>
<script src="{{asset('assets/user/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/user/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<script src="{{asset('assets/user/js/select-2.js')}}"></script>
<script src="{{asset('assets/user/js/nicEdit.js')}}"></script>
<script src="{{asset('assets/user/js/ruang-admin.min.js')}}"></script>
<script src="{{asset('assets/user/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{asset('assets/user/js/notify.js')}}"></script>
<script src="{{asset('assets/user/js/tagify.min.js')}}"></script>
<script src="{{asset('assets/user/js/tagify.js')}}"></script>
<script src="{{asset('assets/user/js/load.js')}}"></script>
<script src="{{asset('assets/user/js/custom.js')}}"></script>
<script src="{{asset('assets/user/js/myscript.js')}}"></script>
<script src="{{asset('assets/user/js/jquery-form.js')}}"></script>


<!-- AJAX Js-->
<script type="text/javascript">
	'use strict';	
    var mainurl = "{{url('/')}}";
     var website_loader = {{ $gs->is_website_loader }};
     var lang  = {
          'new': '{{ __('ADD NEW') }}',
          'edit': '{{ __('EDIT') }}',
          'details': '{{ __('DETAILS') }}',
          'update': '{{ __('Status Updated Successfully.') }}',
          'sss': '{{ __('Success !') }}',
          'active': '{{ __('Activated') }}',
          'deactive': '{{ __('Deactivated') }}',
      };
      
</script>

