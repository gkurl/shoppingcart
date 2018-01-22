<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
<a class="navbar-brand" href="products.php"> This is a webstore</a>
        </div>
        <div class="navbar-collapse collapse">
            <li class="nav navbar-nav">
                <!-- if $page_title has 'Products' word in it, highlight it. -->
                <li> <?php echo strpos($page_title,"Product")!==false ? "class='active'":""; ?></li>
                <a href="cart.php">
                    Cart <span class="badge" id="comparison-count"></span>
                </a>
            </li>
            </ul><!--/.nav collapse -->
        </div>
    </div>
</div>