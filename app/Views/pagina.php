<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>
    <?php print_r($marcas) ?>
  </h1>

  <br>

  <ul>
    <?php foreach ($marcas as $marca) : ?>
      <li><?= $marca ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>