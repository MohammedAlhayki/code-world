<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home page is here</h1>
    <h5>Name <?php echo $data['name']?></h5>
    <?php foreach($data['crs'] as $crs) : ?>
    <p> <?php echo $crs->name?> </p>
    <p> <?php echo $crs->email?> </p>
    <?php endforeach; ?>
</body>
</html>