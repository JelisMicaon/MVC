<!DOCTYPE html>
<html>
<head>
  <title><?php echo TITLE_WEB; ?></title>
</head>
<body>
  <?php
    // Verifica se foi indicado alguma pasta no $viewFile, se foi, usa o loadView
    // Caso não foi indicado uma pasta usa o loadViewInTemplate
    if ($viewFile) {
      $this->loadView($viewName, $viewData, $viewFile);
    } else {
      $this->loadViewInTemplate($viewName, $viewData);
    }
  ?>
</body>
</html>