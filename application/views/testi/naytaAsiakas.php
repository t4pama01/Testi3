<h1>Asiakastiedot</h1>
<TABLE BORDER=1>
<TR><TH>Etunimi</TH><TH>Sähköposti</TH></TR>
<?php
foreach ($testi as $rivi) {
	echo '<tr>';
	echo '<td>'.$rivi['etunimi'].'</td>';
	echo '<td>'.$rivi['email'].'</td>';
	echo '</tr>';
}
?>
</TABLE>