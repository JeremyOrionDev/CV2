<?php function headerDisplay(){ ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="stylesheet.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script language="JavaScript">
      var txt="*** Jérémy ORION développeur C#.NET HTML PHP SQL Android ";
      var espera=100;
      var refresco=null;
      function rotulo_title() {
              document.title=txt;
              txt=txt.substring(1,txt.length)+txt.charAt(0);
              refresco=setTimeout("rotulo_title()",espera);}
      rotulo_title();

</script>
  <?php } ?>
