<?php
/**
 * navigation-top.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<?= Html::a('P<sup>2</sup>SB Admin v2.0', Yii::$app->homeUrl, ['class' => 'navbar-brand']) ?>
	<!-- <?= Html::a(Yii::$app->name, Yii::$app->homeUrl, ['class' => 'navbar-brand']) ?> -->
</div>

<ul class="nav navbar-top-links navbar-right">
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-messages">
			<li>
				<a href="#">
					<div>
						<strong>John Smith</strong>
						<span class="pull-right text-muted">
							<em>Yesterday</em>
						</span>
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<strong>John Smith</strong>
						<span class="pull-right text-muted">
							<em>Yesterday</em>
						</span>
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<strong>John Smith</strong>
						<span class="pull-right text-muted">
							<em>Yesterday</em>
						</span>
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a class="text-center" href="#">
					<strong>Read All Messages</strong>
					<i class="fa fa-angle-right"></i>
				</a>
			</li>
		</ul>
		<!-- /.dropdown-messages -->
	</li>
	<!-- /.dropdown -->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-tasks">
			<li>
				<a href="#">
					<div>
						<p>
							<strong>Task 1</strong>
							<span class="pull-right text-muted">40% Complete</span>
						</p>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								<span class="sr-only">40% Complete (success)</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<p>
							<strong>Task 2</strong>
							<span class="pull-right text-muted">20% Complete</span>
						</p>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<span class="sr-only">20% Complete</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<p>
							<strong>Task 3</strong>
							<span class="pull-right text-muted">60% Complete</span>
						</p>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60% Complete (warning)</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<p>
							<strong>Task 4</strong>
							<span class="pull-right text-muted">80% Complete</span>
						</p>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80% Complete (danger)</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a class="text-center" href="#">
					<strong>See All Tasks</strong>
					<i class="fa fa-angle-right"></i>
				</a>
			</li>
		</ul>
		<!-- /.dropdown-tasks -->
	</li>
	<!-- /.dropdown -->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-alerts">
			<li>
				<a href="#">
					<div>
						<i class="fa fa-comment fa-fw"></i> New Comment
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-twitter fa-fw"></i> 3 New Followers
						<span class="pull-right text-muted small">12 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-envelope fa-fw"></i> Message Sent
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-tasks fa-fw"></i> New Task
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-upload fa-fw"></i> Server Rebooted
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a class="text-center" href="#">
					<strong>See All Alerts</strong>
					<i class="fa fa-angle-right"></i>
				</a>
			</li>
		</ul>
		<!-- /.dropdown-alerts -->
	</li>
	<!-- /.dropdown -->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-user">
			<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
			</li>
			<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
			</li>
			<li class="divider"></li>
			<li><i class="fa fa-sign-out fa-fw"></i> Logout
			</li>
		</ul><!-- /.dropdown-user -->
		<!-- /.dropdown-user -->
	</li>
	<!-- /.dropdown -->
</ul>



<?php
/**
 * _navigation.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;
use p2m\helpers\FA;

$menuItems = [
	['label' => 'Home', 'url' => ['/site/index']],
	['label' => 'Profile', 'url' =>['/site/page', 'view' => 'profile']],
	['label' => 'Application', 'url' =>['/site/page', 'view' => 'application']],
	['label' => 'Models', 'items' => [
		['label' => 'Application', 'url' =>['/application/index']],
		['label' => 'Application Job', 'url' =>['/application-job/index']],
		['label' => 'Commitment', 'url' =>['/commitment/index']],
		['label' => 'Department', 'url' =>['/department/index']],
		['label' => 'History', 'url' =>['/history/index']],
		['label' => 'Job', 'url' =>['/job/index']],
		['label' => 'Profile', 'url' =>['/profile/index']],
		['label' => 'Role', 'url' =>['/role/index']],
		['label' => 'User', 'url' =>['/user/index']],
	]],
	['label' => 'Dev', 'items' => [
		['label' => 'Gii', 'url' => ['/gii']],
		['label' => 'Debug', 'url' => ['/debug']],
	]],
];
if (Yii::$app->user->isGuest) {
	//$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	//$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
} else {
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/site/logout'],
		'linkOptions' => ['data-method' => 'post']
	];
}

NavBar::begin([
	'brandLabel' => 'P2 Business Casual',
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar navbar-default',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'nav navbar-nav'],
	'items' => $menuItems,
]);
NavBar::end();

/*
	['label' => 'Dev', 'items' => [
		['label' => 'Info', 'url' =>['/site/page', 'view' => 'volunteer-info']],
		['label' => 'Gii', 'url' => ['/gii']],
		['label' => 'Debug', 'url' => ['/debug']],
	]],
*/
