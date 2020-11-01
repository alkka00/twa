<?php
    $title = 'Výchozí stránka s úkolem';
    require_once 'inc/head.php';
?>
<h1>Doplňte formulář</h1>

    <form action="" method="POST">
        <P>Email <input type="email" name="email" value=""</P>
        <P>Heslo <input type="password" name="heslo" value=""</P>
        <p>Uložit údaje <input type="checkbox" name="checkbox" value="">  </p>
        <p><input type="submit" name="submit" value="Odeslat"> </p>
    </form>


<?php
// Instrukce k úkolu
// Formulář vytvoříte klasicky z HTML
// Jeho odeslání metodou POST zachytíte jako údaje v objektu REQUEST
// Data získaná z tohoto objektu zatím stačí pouze zalogovat pomoví Debbugeru
