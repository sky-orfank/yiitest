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
</body>
</html>
<?php $this->endPage() ?>