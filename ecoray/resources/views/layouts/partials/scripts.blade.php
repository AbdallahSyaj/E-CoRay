 <script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')  }}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')  }}"></script>
  <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')  }}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js')  }}"></script>
  <script src="{{asset('js/mail-script.js')  }}"></script>
  <script src="{{asset('js/main.js')  }}"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


  <!--SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($errors->any())
<script>
    Swal.fire({
        icon: 'error',
        title: 'Please fix the errors',
        html: `{!! implode('<br>', $errors->all()) !!}`,
    });
</script>
@endif
  <!--SweetAlert -->