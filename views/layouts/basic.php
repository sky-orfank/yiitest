<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="UTF-8">
	<title><?= $this->title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <?= Html::csrfMetaTags() ?>
	<?php $this->head() ?>
</head>
<body class="container">
<?php $this->beginBody() ?>
	<?= $content ?>
<?php $this->endBody() ?>



<script type="text/javascript">
  
  function getURLParameter(name) {
	return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
  }

  $(document).ready(function() {
  	sort = getURLParameter('order-by-id');
  	if(sort=='asc') {
  		$("#sort_by_id").attr('href','/?r=order&order-by-id=desc');
  	}
  	if(sort=='desc') {
  		$("#sort_by_id").attr('href', '/?r=order&order-by-id=asc');
  	}
  });

</script>	





</body>
</html>
<?php $this->endPage() ?>