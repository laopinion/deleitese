<!DOCTYPE html>
<html>
<head>
  <title>Deléitese</title>
</head>
<body>
  <section class="centerContent">
    <div class="detailContent">
      <div id="page">
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <div id="seccion">
        	<div class="contenido">
            <h2><?php print $title; ?></h2>
            <?php print render($page['content']); ?>
			    </div>
        </div>
      </div>
		</div>
      </div>    
    </div>
  </section>
</body>
</html>