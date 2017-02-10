<?php
/**
 * main.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-agency-theme
 * @license MIT
 */

/* @var $this \yii\web\View */
/* @var $content string */

p2made\theme\Agency\assets\AgencyAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body id="page-top" class="index">
<?php $this->beginBody() ?>

<?= $this->render('_navigation.php') ?>

<?= $content ?>

<?= $this->render('_footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>