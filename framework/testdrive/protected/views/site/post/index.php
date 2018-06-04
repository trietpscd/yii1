<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Post';
$this->breadcrumbs=array(
	'Post','List'
);
?>
<table class="table table-hover">
	<thead>
		<tr>
			<th>S_No:</th>
			<th>Titile</th>
			<th>Content</th>
		</tr>
	</thead>
	<tbody>
			<?php foreach ($l_Post as $key => $post): ?>
				<tr>
					<td><?php echo $key+1 ?></td>
					<td><?php echo $post['title'] ?></td>
					<td><?php echo $post['content'] ?></td>
				</tr>
			<?php endforeach ?>
	</tbody>
</table>
<div class="btn-group">
	<?php echo Html::a('Create', array('site/save', 'id'=>$post->id)); ?>
</div>
