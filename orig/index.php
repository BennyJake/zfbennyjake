<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ben
 * Date: 4/26/13
 * Time: 12:07 AM
 * To change this template use File | Settings | File Templates.
 */

//require "inc/google-api-connect.php";
require("inc/settings.php");
require("contactscript.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body id="home">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
<!--<div id="home"></div>-->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!--<a class="btn btn-warning" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>-->
            <a class="brand" href="#">BennyJake Web & Design</a>
            <div class="nav-collapse collapse">
                <div class="btn-group">
                    <a href="#home" class="btn btn-warning"><i class="icon-home icon-white"></i>&nbsp;Home</a>
                    <a href="#aboutme" class="btn btn-warning"><i class="icon-user icon-white"></i>&nbsp;About Me</a>
                    <a href="#skillsets" class="btn btn-warning"><i class="icon-tasks icon-white"></i>&nbsp;Skill Sets</a>
                    <a href="#contactme" class="btn btn-warning"><i class="icon-envelope icon-white"></i>&nbsp;Contact Me</a>
                </div>
            
                    <a href="#" class="btn btn-warning disabled"><i class="icon-pencil icon-white"></i>&nbsp;My Blog</a>
            
                <div class="btn-group pull-right">
                    <a href="pdf/resume.pdf" target="_blank" class="btn btn-warning "><i class="icon-file icon-white"></i>&nbsp;Resum&eacute;  PDF (size 371 KB)</a>
                    <a href="#modalSignOn" role="button" class="btn btn-warning" data-toggle="modal"><i class="icon-file icon-white"></i>&nbsp;Client Log In</a>
                </div>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div id="modalSignOn" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>-->
    <div class="modal-body">
        <div class="span3">
            <h2>Client Log In</h2>
            <form action="" method="POST">
                <label>Your Name</label>
                <input type="text" name="firstname" class="span3">
                <label>Email Address</label>
                <input type="email" name="email" class="span3">
                <label>Password</label>
                <input type="password" name="password" class="span3">
                <input type="submit" value="Log In" class="btn btn-warning pull-right">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    <!--<div class="modal-footer">

        <button class="btn btn-primary">Save changes</button>
    </div>-->
</div>

<div class="container">


    <!-- Main hero unit for a primary marketing message or call to action
    <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
    </div>-->

    <div class="row-fluid">
        <div class="span12">
            <img src="img/siteIntro.png" alt="Benny Jake Intro" title="Benny Jake Intro">
        </div>
    </div>

    <div id="aboutme"></div>
    <hr class="clear-section"/>


    <div class="page-header">
        <h1>About Me <small>A Little Bit About Myself</small></h1>
    </div>
    <div class="row-fluid">
        <div class="span8">
            <p>My name is Benjamin J. Chrisman, and I develop and design websites.  It's a career and a hobby.  I specialize in PHP, HTML, CSS, and Javascript/JQuery.  I also love biking, beer-tasting, frolf, video games, and making stuffs for the World Wide Web.
            I also have a blog with topics covering web development, interesting news tidbits, and blurbs on my other interests.  Hit up my blog to read up on my rants, or to just keep in touch &mdash; always happy to meet new people.</p>
            <p><a href="#" class="btn btn-warning disabled"><i class="icon-home icon-white"></i>&nbsp;My Blog &raquo;</a></p>
            <p>If you are looking for a professional web developer, you can easily download a PDF version of my resum&eacute; for your convenience.</p>
               <p><a href="pdf/resume.pdf" target="_blank" class="btn btn-warning"><i class="icon-home icon-white"></i>&nbsp;Resum&eacute;  PDF (size 371 KB)</a></p>
               <p>Also, take advantage of the contact form at the bottom of the site to send me a text - the garunteed quickiest way to contact me.  I'd love to chat about about any web-related projects.</p>
               <p><a href="#contactme" class="btn btn-warning"><i class="icon-home icon-white"></i>&nbsp;My Contact Info &raquo;</a></p>
        </div>
        <div class="span4">
            <div class="thumbnail">
                <img src="<?php echo $gravatar->buildGravatarURL(EMAIL); ?>">
                <div class="caption">

                    <a href="http://www.linkedin.com/profile/view?id=82810264" target="_new" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;margin:0px 5px 5px 0px;">
                        <img src="img/linkedinLogo.png" alt="Linkedin Logo" style="border:0;width:64px;height:64px;margin-bottom:7px;"/><br />
                        <span style="font-weight:bold;">Ben Chrisman</span><br /><span>on Linkedin</span></a>   
                    <a href="//plus.google.com/106016686175595991791?prsrc=3" target="_new" rel="publisher" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;margin:0px 5px 5px 0px;">
                        <img src="//ssl.gstatic.com/images/icons/gplus-64.png" alt="Google Plus Logo" style="border:0;width:64px;height:64px;margin-bottom:7px;"/><br />
                        <span style="font-weight:bold;">Benny Jake</span><br /><span>on Google+</span></a>
                    <a href="https://github.com/BennyJake" target="_new" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;margin:0px 5px 5px 0px;">
                        <img src="img/githubLogo.png" alt="GitHub Logo" style="border:0;width:64px;height:64px;margin-bottom:7px;"/><br />
                        <span style="font-weight:bold;">Benny Jake</span><br /><span>on GitHub</span></a>
                    <a href="https://www.facebook.com/benjamin.chrisman.5" target="_new" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;margin:0px 5px 5px 0px;">
                        <img src="img/facebookLogo.png" alt="GitHub Logo" style="border:0;width:64px;height:64px;margin-bottom:7px;"/><br />
                        <span style="font-weight:bold;">Ben Chrisman</span><br /><span>on Facebook</span></a>  
                     
                </div>
            </div>
        </div>
    </div>

    <div id="skillsets"></div>
    <hr class="clear-section"/>



    <div class="page-header">
        <h1>My Skill Sets <small>General and Technical Skills</small></h1>
    </div>
    <div class="row">

        <div class="span12">
            <h2>Technical Skill Experience <small>(in years)</small></h2>

            <div class="row">
                <div class="span2"></div>
                <div class="span2" style="text-align: right;color: #999999;">1&nbsp;&#124;</div>
                <div class="span2" style="text-align: right;color: #999999;">2&nbsp;&#124;</div>
                <div class="span2" style="text-align: right;color: #999999;">3&nbsp;&#124;</div>
                <div class="span2" style="text-align: right;color: #999999;">4&nbsp;&#124;</div>
                <div class="span2" style="text-align: right;color: #999999;">5&nbsp;&#124;</div>
            </div>
            <div class="row">
                <div class="span2 exp-parent"><p class="lead statusbar-title">HTML</p></div>
                <div class="span10">
                    <div class="progress progress-warning progress-striped">
                        <div class="bar" style="width: 100%"></div>
                    </div></div>
            </div>

            <div class="row">
                <div class="span2 exp-parent"><p class="lead statusbar-title">CSS</p></div>
                <div class="span10">
                    <div class="progress progress-warning progress-striped">
                        <div class="bar" style="width: 90%"></div>
                    </div></div>
            </div>

            <div class="row">
                <div class="span2 exp-parent"><p class="lead statusbar-title">Javascript</p></div>
                <div class="span10">
                    <div class="progress progress-parent progress-warning progress-striped">
                        <div class="bar" style="width: 60%"></div>
                    </div></div>
            </div>

            <div class="row">
                <div class="span2 exp-child">JQuery</div>
                <div class="span10">
                    <div class="progress progress-child-last progress-warning progress-striped">
                        <div class="bar" style="width: 60%"></div>
                    </div></div>
            </div>

            <div class="row">
                <div class="span2 exp-parent"><p class="lead statusbar-title">PHP</p></div>
                <div class="span10">
                    <div class="progress progress-warning progress-striped">
                        <div class="bar" style="width: 70%"></div>
                    </div></div>
            </div>

            <div class="row">
                <div class="span2 exp-parent"><p class="lead statusbar-title">SQL</p></div>
                <div class="span10">
                    <div class="progress progress-parent progress-warning progress-striped">
                        <div class="bar" style="width: 70%"></div>
                    </div></div>
            </div>

            <div class="row">
                <div class="span2 exp-child">MySQL</div>
                <div class="span10">
                    <div class="progress progress-child progress-warning progress-striped">
                        <div class="bar" style="width: 70%"></div>
                    </div></div>
            </div>

            <div class="row">
                <div class="span2 exp-child">SQL Server</div>
                <div class="span10">
                    <div class="progress progress-child-last progress-warning progress-striped">
                        <div class="bar" style="width: 70%"></div>
                    </div></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span12">
            <!-- start slipsum code -->

            <h2>Work Experience</h2>
            <div class="row">
            <div class="span4">
            <p class="lead">
            Other Technical Skills:</p>
            <ul>
                <li>Very practiced in using <a id="constantcontact" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://www.constantcontact.com' target='_blank'>Constant Contact</a> is a online 
                Software-as-a-Service used to send emails to current and potential customers">Constant Contact</a> and best mass-emailing practices</li>
                <li>Practiced in 
                <a id="zendframework" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://framework.zend.com/about/' target='_blank'>Zend Framework</a> is one of the most popular for modern, high-performing PHP applications">Zend Framework 1.*</a>, 
                <a id="yiiframework" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://www.yiiframework.com/about/' target='_blank'>Yii Framework</a> is a high-performace PHP framework best for developing Web 2.0 applications">Yii Framework</a>, 
                <a id="twitterbootstrap" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://getbootstrap.com/' target='_blank'>Twitter Bootstrap</a> is a sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development (using Javascript/JQuery, HTML, and CSS)">Twitter Bootstrap</a></li>
                <li>Use <a id="composer" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://getcomposer.org/doc/00-intro.md' target='_blank'>Composer</a> is a tool for dependency management in PHP">Composer</a> for maintaining project libraries</li>
                <li>Familiar with several IDE's, including <a id="phpstorm" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://www.jetbrains.com/phpstorm/index.html' target='_blank'>PhpStorm</a> is a web development IDE with a PHP focus, developed by JetBRAINS">PHPStorm</a>, 
                <a id="dreamweaver" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://www.adobe.com/devnet/dreamweaver.html' target='_blank'>Adobe Dreamweaver</a> s the all-in-one visual development tool for creating, publishing, and managing websites and mobile content">Dreamweaver</a>, and 
                <a id="zendstudio" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://www.zend.com/products/studio/' target='_blank'>Zend Studio</a>  is the leading IDE for professional developers to create business critical PHP applications">Zen Studio</a>.</li>
            </ul>
            </div>
            <div class="span4">
            <p class="lead">
            Other Non-Technical Skills:</p>
            <ul>
                <li>Familiar with <a id="seobestpractices" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://en.wikipedia.org/wiki/Search_engine_optimization' target='_blank'>SEO</a>, or Search Engine Optimization, is the process of affecting the visibility of a website or a web page in a search engine's &quot;natural&quot; results">SEO best-practices</a>, frequently use 
                <a id="googledev" data-trigger="click" data-placement="top" data-html=true data-content="<a href='http://www.google.com/analytics/' target='_blank'>Google Analytics</a> is a web analtyics software used to measure web traffic, <a href='http://www.google.com/adwords/' target='_blank'>Google Adwords</a> controls Google sponsored ad space for garnering more web traffic">Google Analtyics and Adwords</a> for strategic marketing</li>
                <li>I've dealt with customers and clients directly, managed my own dealines and milestones, and provided guidance on online business strategy</li>
            </ul>
            </div>
            <div class="span4">
            <p class="lead">
            Business Atmosphere Familiarity:</p>
            <ul>
                <li>Lawfirm</li>
                <li>Marketing Firm</li>
                <li>General Web Development (with clients)</li>
                <li>Banking/Financial Industry</li>
                <li>e-Commerce/Online Retail</li>
            </ul>
            </div>
            
            </div>
        </div>
            
    </div>
        

    <div id="contactme"></div>
    <hr class="clear-section"/>


    <div class="page-header">
        <h1>Contact Me <small>Shoot me a Text</small></h1>
    </div>
    <div class="row">
        <div class="span6">
            I'm based in <a href="https://maps.google.com/maps?oe=utf-8&client=firefox-a&q=washington+il&ie=UTF-8&hq=&hnear=0x880a5487efa4df1f:0x4639f677626e25fb,Washington,+IL&gl=us&ei=JE0IUqDkN4nCywGMkICoAQ&ved=0CKoBELYD" target="_blank">Washington, Illinois
        </a>, a small city in the heart of Central Illinois.  I can be reached by <a href="emailto:me@bennyjake.com">email</a>, or by text message by filling out the brief form to the right.  Get ahold of me if you'd like to chat, talk about a possible project, or 
        whatever you'd like.
        </div>
        <div class="span6">
            <form method="post" action="?message=true#contactme" name="contact_form" id="contact_form">
                <div class="controls controls-row">
                    <input id="name" name="name" type="text" class="span3" placeholder="Name" data-required="true">
                    <input id="email" name="email" type="email" class="span3" placeholder="Email address" data-required="true">
                    <input id="yummy" name="itshunney" type="text">
                </div>
                <div class="controls controls-row">
                    <input id="subject" name="subject" type="text" class="span6" placeholder="Your Message Subject">
                </div>
                <div class="controls">
                    <textarea id="message" name="message" class="span6" placeholder="Your Message" rows="5" data-required="true"></textarea>
                </div>

                <div class="controls">
                    <button id="contact-submit" type="submit" class="btn btn-warning input-medium pull-right" <?php echo $disabled ? 'disabled' : ''; ?> ><?php echo $message; ?></button>
                </div>
            </form>
        </div>
    </div>





    <footer>
        <div id="footer">&copy; BennyJake 2013</div>
    </footer>
</div> <!-- /container -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/jquery-validate.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script>
$('#constantcontact').popover();
$('#zendframework').popover();
$('#twitterbootstrap').popover();
$('#yiiframework').popover();
$('#composer').popover();
$('#phpstorm').popover();
$('#dreamweaver').popover();
$('#zendstudio').popover();
$('#seobestpractices').popover();
$('#googledev').popover();

            $('#contact_form').validate({
                onKeyup : true,
                eachValidField : function() {

                    $(this).removeClass('error').addClass('success');
                },
                eachInvalidField : function() {

                    $(this).removeClass('success').addClass('error');
                }
            });
</script>

<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
