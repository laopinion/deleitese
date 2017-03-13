<!DOCTYPE html>
<html>
<head>
  <title>Deléitese</title>
  <?php include("js/pautas_notas.js"); ?>
</head>
<body>
  <section class="detailContent">
      <div id="page">
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['content']); ?>
      </div>    
  </section>
</body>
</html>