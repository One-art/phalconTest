<!DOCTYPE html>
<html>
	<head>
        <?php echo Phalcon\Tag::getTitle(); ?>
        <?php $this->assets->outputCss('header') ?>
        <?php echo Phalcon\Tag::stylesheetLink('css/main.css'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

		<?php echo $this->getContent(); ?>

        <?php $this->assets->outputJs('footer') ?>
	</body>
</html>