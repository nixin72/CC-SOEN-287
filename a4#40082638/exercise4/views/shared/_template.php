<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--
            SCRIPTS
        -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" 
			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" 
			crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" 
			integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" 
			crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
		<script src="/scripts/template.js" ></script>
        
        <!--
            STYLES
        -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
			rel="stylesheet" 
			type="text/css" />
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link type="text/css" rel="stylesheet" href="<?php echo "/styles/template.css" ?>" />

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>

        <title>Assignment 04 - Question 4</title>
    </head>
    <body>
        <?php 
            $path = "./views/shared";
            require "$path/_header.php";
        ?>

        <section class="content">
            <?php 
                require "$path/_tooltip.php";
                insertToTemplate($context); 
            ?>
        </section>

        <?php
            require "$path/_footer.php";
        ?>
    </body>
</html>