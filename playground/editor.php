<html>
  <head>
    <title>Code Editor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/theme/monokai.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
    <link rel="stylesheet" href="./code.css" />
  </head>

  <body>
    <div class="nav">
       <a class="fas fa-home" href="../index.php" class="logo"></a>
        <span class="fas fa-save"></span>
        <button id="submit">Run  ≫</button>
    </div>
  <div class="wrap">
      <div class="container html"> 
        <h2>HTML</h2>
        <div id="html"></div>
      </div>

      <div class="container css"> 
        <h2>CSS</h2>
        <div id="css"></div>
      </div>

      <div class="container js"> 
        <h2>JS</h2>
        <div id="javascript"></div>
      </div>
    </div>
      <iframe id="code" resizable></iframe>
     

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.js"></script>
    <script 
  src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/mode/javascript/javascript.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/mode/xml/xml.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/mode/css/css.min.js"></script>

   
    <script type="text/javascript" src="./editor.js"></script>
  </body>
</html>