<link href="/styles/home.css" type="text/css" rel="stylesheet" />
<h1>Welcome to Cottage Finder!</h1>
<div>
    <h3>
        The best online resource for finding cottages in Quebec that are perfect for you! 
    </h3>
    <div>
        <?php 
            if (!isset($_SESSION["user"])) {
                ?>
                    <div class='row'>
                        <div class='col-md-4 landing'>
                            <hr/>
                            <h2>Getting started</h2>
                            <p>
                                If you don't have an account with us, you can sign up for one here - it's free! You can 
                                still search our cottages if you don't have an account, but when you're signed in you 
                                can favourite searches and contact cottage owners!
                            </p>
                            <div class='btn-container'>
                                <a class='btn btn-default' href='/profile/signup'>Register &raquo;</a>
                            </div>
                        </div>
                        <div class='col-md-4 landing'>
                            <hr/>
                            <h2>Returning User</h2>
                            <p>If you've already signed up for Cottage Finder, log in quickly from here!</p>
                            <div class='btn-container'>
                                <a class='btn btn-default' href='/profile/login'>Log In &raquo;</a>
                            </div>
                        </div>
                        <div class='col-md-4 landing'>
                            <hr/>
                            <h2>Search Now</h2>
                            <p>Whether or not you have an account, you can search here!</p>
                            <div class='btn-container'>
                                <a class='btn btn-default' href='/home/search'>Search &raquo;</a>
            
                            </div>
                        </div>
                    </div>
                <?php
            }
            else {
                
            }
        ?>
    </div>
</div>