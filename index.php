<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Transform</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Modal -->
        <div class="modal fade" id="TrialModal" tabindex="-1" role="dialog" aria-labelledby="TrialModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="./img/close.png" alt=""/></button>
                                        <h4 class="modal-title" id="TrialModalLabel">Start Your Free Trial Today</h4>
                                        <p>Are you ready to increase your sales during the holiday season?</p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2 col-md-12">

                                                <?php
                                                if (isset($_POST['firstname']) ||
                                                        isset($_POST['lastname']) ||
                                                        isset($_POST['email']) ||
                                                        isset($_POST['subject']) ||
                                                        isset($_POST['msg'])) {

                                                    $admin_email = "marketing@transformsolution.com";
                                                    $subject = 'Mail from site contact form';
                                                    $name = stripslashes($_POST['name']);
                                                    $company = stripslashes($_POST['company']);
                                                    $phone = stripslashes($_POST['phone']);
                                                    $email = stripslashes($_POST['email']);
                                                    $select = stripslashes($_POST['select']);

                                                    mail($admin_email, "$subject", "Name: " . $name . "\n" . "Company Name: " . $company . "\n" . "Phone Number: " . $phone . "\n" . "Email: " . $email . "\n" . "Selected in dropdown: " . $select);

                                                    //Email response
                                                    echo '<script type="text/javascript">window.onload = function(){ $("#TrialModal").modal("show"); }</script>';
                                                    echo "<div class='response'><h2>Thank you for contacting us!</h3></div>";
                                                } else {
                                                    ?>
                                                    <form name="mailForm" method="post" onsubmit="return validateForm()">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="input-holder">
                                                                    <input type="text" class="input-1" name="name" value="" id="formname" placeholder="Enter your name*"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="input-holder">
                                                                    <input type="text" class="input-2" name="company" value="" id="formcompany" placeholder="Enter your company name*"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="input-holder">
                                                                    <input type="text" class="input-3" name="phone" value="" id="formphone" placeholder="Enter your phone number*"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="input-holder">
                                                                    <input type="email" class="input-4" name="email" value="" id="formemail" placeholder="Enter your email address*"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="input-holder">
                                                                    <div class="selection">
                                                                        <select name="select" value="" id="formselect">
                                                                            <option value="">What is you biggest holiday season challenge?*</option>
                                                                            <option value="Increased website traffic">Increased website traffic</option>
                                                                            <option value="Smart Customer Support">Smart Customer Support</option>
                                                                            <option value="Maintaining Customer Service Levels">Maintaining Customer Service Levels</option>
                                                                            <option value="Inventory Management Challenges">Inventory Management Challenges</option>
                                                                            <option value="Bad User Experience">Bad User Experience</option>
                                                                            <option value="Returns Handling">Returns Handling</option>
                                                                            <option value="Managing Staff">Managing Staff</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="input-holder submit">
                                                                    <input type="submit" value="Start Your Free Trial Now"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="border">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="modal-foot-list">
                                        <ul>
                                            <li>
                                                <img src="./img/e-modal-icon-1.png" alt=""/>
                                                <p>Scalable,<br> stress-free 24/7 support</p>
                                            </li>
                                            <li>
                                                <img src="./img/e-modal-icon-2.png" alt=""/>
                                                <p>Custom solutions and high quality results</p>
                                            </li>
                                            <li>
                                                <img src="./img/e-modal-icon-3.png" alt=""/>
                                                <p>Experience with online retailers for over 14 years</p>
                                            </li>
                                            <li>
                                                <img src="./img/e-modal-icon-4.png" alt=""/>
                                                <p>Experienced, dedicatedd and passionate staff</p>
                                            </li>
                                            <li>
                                                <img src="./img/e-modal-icon-5.png" alt=""/>
                                                <p>Seriously Affordable Pricing starting at $699</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <section class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nav-line">
                            <div class="logo">
                                <a href="index.php"><img src="./img/logo.png" alt="Transform"/></a>
                            </div>
                            <div class="phone-menu">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                            <div class="menu">
                                <ul>
                                    <li><a href="#" class="menu-btn2">Contact Us</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#TrialModal" class="menu-btn">Free Trial</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="section-overlay2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-box">
                            <h1>E-commerce sales for the 2017 holiday season could reach $114 billion</h1>
                            <span>– Deloitte 2017 Holiday Sales Outlook.</span>
                            <h1>Gear up for the holiday season!</h1>
                            <a href="#" data-toggle="modal" data-target="#TrialModal" class="hero-btn">Start Your Free Trial Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logos-holder">
                            <h3>We’ve helped these companies and many others grow their holiday season sales</h3>
                            <ul>
                                <li><img src="./img/logo-1.png" alt=""/></li>
                                <li><img src="./img/logo-2.png" alt=""/></li>
                                <li><img src="./img/logo-3.png" alt=""/></li>
                                <li><img src="./img/logo-4.png" alt=""/></li>
                                <li><img src="./img/logo-5.png" alt=""/></li>
                                <li><img src="./img/logo-6.png" alt=""/></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="info-title-box">
                            <h2>The holiday season is coming up<br>Don’t miss on the increased sales opportunity</h2>
                            <p>Having us as your ecommerce partner will help you</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="opportunity-holder">
                            <ul>
                                <li>
                                    <img src="./img/icon-1.png" alt=""/>
                                    <p>Handle the increased volume of sales and orders</p>
                                </li>
                                <li>
                                    <img src="./img/icon-2.png" alt=""/>
                                    <p>Manage the faster pace of inventory management</p>
                                </li>
                                <li>
                                    <img src="./img/icon-3.png" alt=""/>
                                    <p>Updating your online products faster and more efficiently</p>
                                </li>
                                <li>
                                    <img src="./img/icon-4.png" alt=""/>
                                    <p>Keep up with the higher demand for customer support</p>
                                </li>
                                <li>
                                    <img src="./img/icon-5.png" alt=""/>
                                    <p>Expand customer marketing efforts</p>
                                </li>
                                <li>
                                    <img src="./img/icon-6.png" alt=""/>
                                    <p>Find seasonal<br>support</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="e-services-title">
                            <h2>Our comprehensive e-commerce support services include</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="e-services-box">
                            <img src="./img/e-icon-1.png" alt=""/>
                            <h4>Product Information<br>Management</h4>
                            <p>Delight customers with rich product information that helps them find your best products.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="e-services-box">
                            <img src="./img/e-icon-2.png" alt=""/>
                            <h4>Pricing<br>Management</h4>
                            <p>Increase and sustain profitability by building capabilities for superior pricing and margin management</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="e-services-box">
                            <img src="./img/e-icon-3.png" alt=""/>
                            <h4>Inventory<br>Management</h4>
                            <p>Never lose another Dollar due to inventory issues</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="e-services-box">
                            <img src="./img/e-icon-4.png" alt=""/>
                            <h4>Image<br>Services</h4>
                            <p>The better your images, the bigger your sales. Succeed Online with Beautiful Product Images.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="e-services-box">
                            <img src="./img/e-icon-5.png" alt=""/>
                            <h4>Order<br>Processing</h4>
                            <p>Order processing is an integral part of the sales process and it is important that it is done right.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="e-services-box">
                            <img src="./img/e-icon-6.png" alt=""/>
                            <h4>Marketing &<br>CRM Support</h4>
                            <p>Turn your website visitors into sales and gain actionable insight.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="e-services-box">
                            <img src="./img/e-icon-7.png" alt=""/>
                            <h4>Customer<br>Support</h4>
                            <p>Your customer support department is well-organized and ready to help customers, but why not make it even more efficient?</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="e-services-box">
                            <img src="./img/e-icon-8.png" alt=""/>
                            <h4>Back Office &<br>Business Support</h4>
                            <p>Access the team and tools you need to run your operations efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="button-box">
                            <a href="#" data-toggle="modal" data-target="#TrialModal" class="hero-btn">Start Your Free Trial Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-1">
            <div class="section-overlay2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="info-box">
                            <h1>Scale up your business today</h1>
                            <h2>Time speeds up this time of year, so take steps now to ensure you’re ready to capitalize on the holiday rush.</h2>
                            <p>At TransForm, we have worked with online businesses for over 14 years helping them grow faster, smarter and better.</p>
                            <a href="#" data-toggle="modal" data-target="#TrialModal" class="hero-btn white-btn">Start Your Free Trial Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 col-lg-offset-1 col-md-12">
                        <div class="foot-box">
                            <div class="logo">
                                <a href="index.php"><img src="./img/logo.png" alt="Transform"/></a>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#TrialModal" class="foot-btn">Free Trial</a>
                            <a href="#" class="foot-btn2">Contact Us</a>
                            <p>© TransForm Solution, Inc. <?php echo date("Y"); ?>.</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
