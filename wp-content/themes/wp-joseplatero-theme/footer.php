<footer>
<div class="grid_12 omega clearfix">
  <div class="grid_4 footer-left">

 
    <?php if ( dynamic_sidebar( 'footer_left' ) ): ?>

      <?php else: ?>
      
        <h5>Twitter</h5>
        <p>Install Twiget Plugin and place widget here</p>
 
    <?php endif; ?>
  </div>
  <div class="grid_4 footer-middle">
    <?php if (dynamic_sidebar( 'footer_middle' )): ?>
    
      <?php else: ?>
      
        <h5>Dribble</h5>
        <p>Install Twiget Plugin and place widget here</p>
    
    <?php endif; ?>
  </div>
  <div class="grid_4 omega footer-right">
    <?php if (dynamic_sidebar( 'footer_right' )): ?>
    
      <?php else: ?>
      
        <h5>Treehouse</h5>
        <p>Install Twiget Plugin and place widget here</p>
    
    <?php endif; ?>
  </div>
</div>
      <div id="copyright">
    <p>&copy; Copyright <?php echo date('Y'); ?><a href="#"> Treehouse</a>. All Rights Reserved.</p>
  <div class="grid_12 ss-icon omega">
      <a href="#">&#xF610;</a>
      <a href="#">&#xF611;</a>
      <a href="#">&#xF612;</a>
      <a href="#">&#xF613;</a>
      <a href="#">&#xF660;</a>
      <a href="#">&#x2709;</a>
  </div>
  </div>
	<?php wp_footer(); ?>
</footer>	
	</body>
</html>
