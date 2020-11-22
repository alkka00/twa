<h1><?=$title?></h1>

<p>Statický Obsah šablony</p>

<p>Zde dynamicky vypište data z tabulky role</p>


<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>ROLE</th>
        <th>NÁZEV ROLE</th>
    </tr>
    </thead>

    <tbody>
    <!--Zde provedete dynamický výpis dat z proměnné
    Použijte cyklus FOREACH - jako např. při výpisu menu v souboru head.php-->
    <?php foreach ($roles as $row):?>
    <tr>
        <th><?=$row['id']?></th>
        <th><?=$row['role']?></th>
        <th><?=$row['role_name']?></th>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>

