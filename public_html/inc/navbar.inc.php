<nav class="navbar navbar-default navbar-custom">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <img src="/slike/bojaclogo.png">
            </a>

        </div>
        <div class="navbar-header" style="position: bottom;">
            <button type="button" class="navbar-toggle navbar-toggle-custom collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <p class="navp">064/289-3004</p>
                <br/>
                <li class="<?= ($activePage == 'index') ? 'active':''; ?>">
                    <a href="index.php">Početna</a>
                </li>
                <li class="<?= ($activePage == 'usluge') ? 'active':''; ?> dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="usluge.php">Usluge
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/autoelektrika.php">Auto elektrika</a>
                        </li>
                        <li>
                            <a href="/autoklime.php">Auto klime</a>
                        </li>
                        <li>
                            <a href="/restruktuiranje.php">Reparacija anlasera i alternatora</a>
                        </li>
                    </ul>
                </li>
                <li class="<?= ($activePage == 'kontakt') ? 'active':''; ?>">
                    <a href="kontakt.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>