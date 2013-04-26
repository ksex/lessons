<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get Schooled</title>
    
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="libs/css/slideshow.css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + 'Open+Sans:regular,semibold,italic,italicsemibold|Droid+Sans+Mono" />
    <script src="libs/js/slides.js"></script>
    
    <!-- references to custom stuff goes here. -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />


    <!-- syntax highlighting -->
    <script src="libs/js/prism.js"></script>
    <link rel="stylesheet" type="text/css" href="libs/css/prism.css" />
    
</head>

<body class="hidden">
    <div class="menu-container"><ul class="menu no-bullet"></ul></div>
    
    <div class="slides layout-regular template-huge">
        
        <div class="slide">
            <h1 class="thin-pink-bottom-border">
            Huge School
            </h1>
            <p class="smaller">Web Dev for Software Devs.</p>
        </div>
                
        <div class="slide magenta invert white-border">
            <h1 class="v-center bigger white">Get started.</h1>
        </div>
        
        <div class="slide">
            <h4>What we will cover in this course</h4>
            <ul class="build">
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
            </ul>
        </div>
        
        

<?php 
/* HTML
----------------------------------------------------------------------------------------------- */
?>

        <div class="slide magenta invert white-border">
            <h1 class="v-center bigger white">HTML.</h1>
        </div>
    
        
        <?php include('slides_html/whatishtml.php') ?>
        
        <?php include('slides_html/structure.php') ?>
        
        <?php include('slides_html/semantics.php') ?>
        
        <?php include('slides_html/semantics_why.php') ?>
        
        <?php include('slides_html/forms.php') ?>
        
        <?php include('slides_html/forms_types.php') ?>
        
        

        
        
<?php 
/* CSS
----------------------------------------------------------------------------------------------- */
?>

        <div class="slide magenta invert white-border">
            <h1 class="v-center bigger white">CSS.</h1>
        </div>

        <?php include('slides_css/what_is_css.php') ?>

        <?php include('slides_css/selectors_and_properties.php') ?>
        
        <?php include('slides_css/selectors.php') ?>

        <?php include('slides_css/specificity.php') ?>

        <?php include('slides_css/properties.php') ?>
        
        <?php include('slides_css/floats.php') ?>
        
        <?php include('slides_css/fonts.php') ?>

        <?php include('slides_css/inheritance.php') ?>

        <?php include('slides_css/cascading.php') ?>

        <?php include('slides_css/box_model.php') ?>

        <?php include('slides_css/media_queries.php') ?>    
        



<?php 
/* Javascript
----------------------------------------------------------------------------------------------- */
?>
        <?php include('slides_js/intro.php') ?>

        <?php include('slides_js/types.php') ?>

        <?php include('slides_js/operators.php') ?>

        <?php include('slides_js/statements.php') ?>

        <?php include('slides_js/literal_syntax.php') ?>

        <?php include('slides_js/events.php') ?>
        
        <?php include('slides_js/events_common.php') ?>


        
        <div class="slide black invert white-border">
        <h1 class="v-center bigger white">Questions?</h1>
        </div>
        
        <div class="slide">
        <h1 class="v-center bigger magenta">Done.</h1>
        </div>
        
    </div> <!-- /slides -->
</body>
</html>