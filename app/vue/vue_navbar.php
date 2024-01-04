<!-- Menu connecter -->

<?php 
    if(isset($_SESSION["connected"])):?>





<nav>
    <ul>
        <li><a href="/devcyber2/">Home</a></li>
        <li><a href="/devcyber2/roles/all">Afficher roles</a></li>
        <li><a href="/devcyber2/roles/add">Ajouter roles</a></li>
        <li><a href="/devcyber2/utilisateurs/deconnexion">Deconnection</a></li>
    </ul>
</nav>

<!-- Menu visiteur -->

<?php else:?>


<nav>
    <ul>
        <li><a href="/devcyber2/">Home</a></li>
        <li><a href="/devcyber2/roles/all">Afficher roles</a></li>
        <li><a href="/devcyber2/roles/add">Ajouter roles</a></li>
        <li><a href="/devcyber2/utilisateurs/add">S'inscire</a></li>
        <li><a href="/devcyber2/utilisateurs/connexion">Connection</a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
    </ul>
</nav>

<?php endif ?>