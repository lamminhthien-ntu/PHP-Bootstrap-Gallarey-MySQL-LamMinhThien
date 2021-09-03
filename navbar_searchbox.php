<nav class="navbar text-white sticky-top bg-dark justify-content-between">
    <a class="navbar-brand">Lâm Minh Thiện Demo MySQL và PHP 7</a>
    <form class="form-inline" method="get" action="search.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <button class="btn btn-outline-success my-2 my-sm-0">
            <?php echo '<a style="color: #fff; text-decoration: none;" href="login.php">SIGN IN</a>';   ?>
        </button>
    </form>

</nav>