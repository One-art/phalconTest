<!DOCTYPE html>
<html>
	<head>
        {{ get_title() }}
        <?php $this->assets->outputCss('header') ?>
        {{ stylesheet_link('css/main.css') }}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

		{{ content() }}

        <?php $this->assets->outputJs('footer') ?>
	</body>
</html>