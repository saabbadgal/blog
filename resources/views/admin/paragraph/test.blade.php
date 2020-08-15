 
 
<textarea name="editor1"></textarea>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>   
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{ route('para.upload', ['_token' => csrf_token(),'enctype' => 'multipart' ] )}}",
        filebrowserUploadMethod: 'form'
    });
</script>
   
 