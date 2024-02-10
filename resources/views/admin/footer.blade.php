</main>
    <!-- ************************* 
        Main End here
    ****************************** -->

    <!-- chart script -->
    <script src={{url("admin/asset/script/chart.js")}}></script>
    <!-- user script -->
    <script src={{url('admin/asset/script/index.js')}}></script>
    <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/jwslnneqrxpa18lzjrrffgafpxv7uv7k5mejawji8xqcuf3v/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
<textarea>
  Welcome to TinyMCE!
</textarea><!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/jwslnneqrxpa18lzjrrffgafpxv7uv7k5mejawji8xqcuf3v/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea#paragraph',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>

<!--bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

{{-- toster js  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('success'))
    <script>
      toastr.options={
        'progressBar' : true,
        'closeButton' : true,
        "positionClass": "toast-top-right",
        "marginTop": "10rem",
      }
      toastr.success("{{Session::get('success')}}");
      var toastrContainer = document.querySelector('.toast-top-right');
        toastrContainer.style.marginTop = '4.5rem';
    </script>
@endif
{{-- delete massage  --}}
@if (Session::has('delete'))
    <script>
      toastr.options={
        'progressBar' : true,
        'closeButton' : true,
        "positionClass": "toast-top-right",
        "marginTop": "10rem",
      }
      toastr.warning("{{Session::get('delete')}}");
      var toastrContainer = document.querySelector('.toast-top-right');
        toastrContainer.style.marginTop = '4.5rem';
    </script>
@endif

{{-- error massage  --}}
@if (Session::has('error'))
    <script>
      toastr.options={
        'progressBar' : true,
        'closeButton' : true,
        "positionClass": "toast-top-right",
        "marginTop": "10rem",
      }
      toastr.dengar("{{Session::get('error')}}");
      var toastrContainer = document.querySelector('.toast-top-right');
        toastrContainer.style.marginTop = '4.5rem';
    </script>
@endif

 
<script>
  document.addEventListener('DOMContentLoaded', function() {
    
      setTimeout(function() {
       
          var notifications = document.querySelectorAll('.tox-notifications-container');

          notifications.forEach(function(notification) {
              notification.style.display = 'none';
          });
      }, 5000); // 50 seconds in milliseconds
  });
</script>
  </body>
</html>