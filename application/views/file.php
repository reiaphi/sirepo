<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $file->name; ?></title>


</head>

<body>

  <embed type="application/pdf" src="<?= base_url("uploads/") . $file->name; ?>" style="height:100vh;" width="100%">

</body>

</html>