<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <?php
        include 'db/dbsetup.php'; //contains DB connection string and global variables
        include 'core/functions.php'; //contains functions used on every template
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $setupDescription;?>">
    <meta name="keywords" content="<?php echo $setupKeywords;?>">
    <meta name="author" content="<?php echo $setupAuthor;?>">

    <title><?php echo $theTitle;?></title>

    <!-- jQuery CDN -->
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" language="javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="css/modern-business.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
	<style>
	
		#custom-search-input{
		padding: 3px;
		border: solid 1px #E4E4E4;
		border-radius: 6px;
		background-color: #fff;
		}

		#custom-search-input input{
		border: 0;
		box-shadow: none;
		}

		#custom-search-input button{
		margin: 2px 0 0 0;
		background: none;
		box-shadow: none;
		border: 0;
		color: #666666;
		padding: 0 8px 0 10px;
		border-left: solid 1px #ccc;
		}

		#custom-search-input button:hover{
		border: 0;
		box-shadow: none;
		border-left: solid 1px #ccc;
		}

		#custom-search-input .glyphicon-search{
		font-size: 23px;
		}
	
	
	
	</style>
    <?php
        echo $customCss;
    ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php
    echo $setupHeadercode;

    if (!empty($setupGoogleanalytics)) {
    ?>
        <script type="text/javascript">
            
            var _gaq = _gaq || [];
            //_gaq.push(['_setAccount', '<?php echo $setupGoogleanalytics;?>']);
            _gaq.push(['_trackPageview']);
            
            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
            
        </script>
    <?php 
    }
    ?>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" id='top' role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><?php echo $setupTitle;?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php 
                getNav('Top','true','right');
            ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<?php 
//include 'slider_inc.php'; 
?>