<script type="text/javascript">
  $(document).ready(function(){
  // EXAMPLE ANIMATE ALERTS
    $('.exampleA').click(function(){
      $('.alert').find('.modalmsg').text('Nutriologo actualizado con éxito').end().toggleClass('open');
    });
    $('.alert').click(function(){
      $(this).removeClass('open');
    });
  });
</script>

<!-- EXAMPLE ALERT -->
<div class="alert">
<span class="icon close"></span>
  <div class="modalmsg" >Texto de alerta</div>
</div>
