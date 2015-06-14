
@if( $app->environment('local') )
   <!-- jQuery 2.1.4 -->
   <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
   <!-- Bootstrap 3.3.2 JS -->
   <script src="/js/bootstrap.min.js" type="text/javascript"></script>
@else
   <!-- jQuery 2.1.4 -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <!-- Bootstrap 3.3.2 JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
@endif

<!--
Optionally, we can add Slimscroll and FastClick plugins.
Slimscroll is required when using the fixed layout.
-->
