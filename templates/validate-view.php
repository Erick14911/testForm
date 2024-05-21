<!--@author:Erick14911-->
<html lang="ES">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /> 
    <meta name="author" content="Erick De La Rosa" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-style-type" content="text/css" />  
    <link type="text/css" rel="stylesheet" href="../assets/static/css/style.css">
    <script type="text/javascript" src="../assets/static/js/scriptValidate.js" defer></script><!--async--> 
    <title>Validate</title>
  </head>
  <body>
    <main id="content">
      <header id="header">
        <hgroup id="hgroup">
          <h1 class="title">Validate</h1>
        </hgroup>
      </header>
      <article id="box-article">
        <ul id="box-data">
<?php
foreach($data_array as $key => $value){
    if($key!=="submit"){
        echo "<li>".$key.": ".$value."</li>";
    }
}
?>
        </ul>
      </article>
    </main>
  </body>
</html >
