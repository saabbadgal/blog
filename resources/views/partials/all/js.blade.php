

<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/js/menu-setting.min.js') }}"></script> 
<script src="{{ asset('assets/js/pages/dashboard-analytics.js') }}"></script>  
<script src="{{ asset('assets/js/pages/form-advance-custom.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script> 
<script src="{{ asset('assets/plugins/multi-select/js/jquery.quicksearch.js') }}"></script>
<script src="{{ asset('assets/plugins/multi-select/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-select-custom.js') }}"></script> 
<script src="{{ asset('assets/js/pages/form-validation.js') }}"></script> 
<script src="{{ asset('assets/js/ck.js') }}"></script>
<script src="{{ asset('assets/js/fileinput.min.js') }}"></script>
<script src="{{ asset('assets/plugins/ckeditor/js/ckeditor.js') }}"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        // classic editor
        ClassicEditor.create(document.querySelector('#classic-editor'))
            .catch(error => {
                console.error(error);
            });
    });
</script>
<script type="text/javascript">
	$(window).on('load', function() {
		// Inline editor
		InlineEditor.create(document.querySelector('#inline-editor'))
			.catch(error => {
				console.error(error);
			});
	});
</script>      
<script>
       
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                delay: 100,
                time: 1200
                });
            });
 </script>