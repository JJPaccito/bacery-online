<?php

$days = $keys =''; //kodel yra sis uzrasas? ir ka jis reiskia? kokios jo funkcijos?
$rows = []; 

ksort($DATA);

$product_name = json_decode(file_get_contents('data/product_name.json'), true );

	foreach ($data as $key => $value) {

		$days .= "<th colspan=\"5\">$key</th>";
		$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";

		foreach ($product_name as $key => $name) {

			if (!isset($rows[$key]))		//tikrina ar toks kintamasis [$name] egzistuoja
			{
				$rows[$key] = "<td>$name</td>";
			}

			if (isset($value[$key])) 
			{
				foreach ($value[$key] as $amount) {

					$rows[$key] .= "<td>$amount</td>";
				}
			}
			else
			{
				$rows[$key] .= "<td></td><td></td><td></td><td></td><td></td>";
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

