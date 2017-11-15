<?php
$days = $keys =''; //kodel yra sis uzrasas? ir ka jis reiskia? kokios jo funkcijos?
$rows = [];  
	foreach ($data as $key => $value) {
		$days .= "<th colspan=\"5\">$key</th>";
		$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
		foreach ($value as $name => $data) {
			If (!isset($rows[$name]))		//tikrina ar toks kintamasis [$name] egzistuoja
			{
				$rows[$name] = "<td>$name</td>";
			}
			foreach ($data as $amount) {

				$rows[$name] .= ("<td>$amount</td>");
			}
		}
	}

?>
<table>
		<thead>
			<tr>
				<th rowspan="2">Pavadinimas</th>
				<?php
					echo $days;
				?>
			</tr>
			<tr>
				<?php
					echo $keys;
				?>
			</tr>
		</thead>
			<tbody>
				<?php
					foreach ($rows as $row) {
						echo '<tr>' . $row . '</tr>';
					}
				?>
			</tbody>
</table>

