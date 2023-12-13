

<footer class="container-fluid footer_section">
    <p>
      &copy; 2023 All Rights Reserved. Design by
      
      <?php


      wp_nav_menu(array(
    'theme_location' => 'footer-menu',
    'container_class' => 'footer-class',
));


?>
      
    </p>
  </footer>
  <!-- footer section -->

  
  <?php wp_footer(); ?> 
</body>

</html>