<?php

$rows = $days =[]; //kodel yra sis uzrasas? ir ka jis reiskia? kokios jo funkcijos?
$keys ='';

foreach ($products as $value) 
{
	if (!isset($rows[$value['id']])) {
		$rows[$value['id']] = [];
		$rows[$value['id']]['name'] = '<td>' . $value['name'] . '</td>';
	}
}

foreach ($productsHistory as $value) 
{
	if (!isset ($days[$value['date']])) 
	{
		$days[$value['date']] = true;
		$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
		foreach ($rows as &$product) 
		{
			$product[$value['date']] = '<th></th><th></th><th></th><th></th><th></th>';
		}
			/*$rows[$value['product_id']] .= '<td>' . $value['inicial'] . '</td>'; 
			$rows[$value['product_id']] .= '<td>' . $value['produced'] . '</td>'; 
			$rows[$value['product_id']] .= '<td>' . $value['sold'] . '</td>'; 
			$rows[$value['product_id']] .= '<td>' . $value['damaged'] . '</td>'; 
			$rows[$value['product_id']] .= '<td>' . $value['closed'] . '</td>'; */
	}
}

?>
<table>
		<thead>
			<tr>
				<th rowspan="2">Pavadinimas</th>
				<?php
					foreach ($days as $key => $value) {
						echo '<th colspan="5">' . $key . '</th>';
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
					foreach ($rows as $data) 
					{
						echo '<tr>';
						foreach ($data as $key => $value) {
							echo $value;
						}
						echo '</tr>';
					}
				?>
			</tbody>
</table>

