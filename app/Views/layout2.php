<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->renderSection('customtitle')?></title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"
>
<?=$this->renderSection('customcss')?>
</head>
<body>
<?=$this->renderSection('custombody')?>
<?=$this->renderSection('customjs')?>  
</body>
</html>