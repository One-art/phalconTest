<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">INVO</a>
            {{ elements.getMenu() }}
        </div>
    </div>
</div>

<div class="container-fluid">
    {{ content() }}
    <hr>
    <footer>
        <p>&copy; Company 2012</p>
    </footer>
</div>