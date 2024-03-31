<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href=<?php echo $headerHomePath ?>>
                <img class="logo" src=<?php echo $headerAssetsPath."Logo.png"?> title="Empower your strength and mind"
                    alt="Iron Anchor Athletics">
            </a>
            <h1 class="nav-title">Iron Anchor Athletics</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link navbar-brand" href="#clubs" title="Preview">Clubs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-brand" href="#" title="Coming soon">Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-brand" href="classes.html" title="Coming soon">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-brand" href="<?php echo $loggedInLink ?>" title="Coming soon"><?php echo $loggedIn ?></a>
                </li>
            </ul>
        </div>
    </nav>
</header>