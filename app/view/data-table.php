<?php

$rows = $days =[]; //kodel yra sis uzrasas? ir ka jis reiskia? kokios jo funkcijos?
$keys ='';

foreach ($products as $value) 
{
	if (!isset($rows[$value['id']])) {
		$rows[$value['id']] = '<td>' . $value['name'] . '</td>';
	}
}
foreach ($productsHistory as $value) 
{
	if (!isset ($days[$value['date']])) 
	{
		$days[$value['date']] = $value['date'];
		$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
	}
	$rows[$value['product_id']] .= '<td>' . $value['inicial'] . '</td>'; 
	$rows[$value['product_id']] .= '<td>' . $value['produced'] . '</td>'; 
	$rows[$value['product_id']] .= '<td>' . $value['sold'] . '</td>'; 
	$rows[$value['product_id']] .= '<td>' . $value['damaged'] . '</td>'; 
	$rows[$value['product_id']] .= '<td>' . $value['closed'] . '</td>'; 
}

?>
<table>
		<thead>
			<tr>
				<th rowspan="2">Pavadinimas</th>
				<?php
					foreach ($days as $date) {
						echo '<th colspan="5">' . $date . '</th>';
					}
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
					foreach ($rows as $row) 
					{
						echo '<tr>' . $row . '</tr>';
					}
				?>
			</tbody>
</table>

