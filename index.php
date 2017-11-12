<!DOCTYPE html>
<html>
<head>
	<title>Bacery-online</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<h1>Bacery-Online</h1>
<body>
<table id="Informacija">
		<thead>
			<tr>
				<th rowspan="2">Pavadinimas</th>
				<th colspan="5">2017-11-09</th>
				<th colspan="5">2017-11-09</th>
			</tr>	
			<tr>
				<th>VL</th> <!-- Vakarikštis likutis-->
				<th>PG</th> <!-- Pagaminta-->
				<th>PR</th> <!-- Parduota -->
				<th>SG</th> <!-- Sugadinta-->
				<th>GL</th> <!-- Galutinis likutis-->
				<th>VL</th> <!-- Vakarikštis likutis-->
				<th>PG</th> <!-- Pagaminta-->
				<th>PR</th> <!-- Parduota -->
				<th>SG</th> <!-- Sugadinta-->
				<th>GL</th> <!-- Galutinis likutis-->
			</tr>
		</thead>
			<tbody>
				<tr>
					<td>Agouninė</td>
					<td>5</td>
					<td>20</td>
					<td>19</td>
					<td>4</td>
					<td>2</td>
					<td>5</td>
					<td>20</td>
					<td>19</td>
					<td>4</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Varškės</td>
					<td>3</td>
					<td>28</td>
					<td>25</td>
					<td>2</td>
					<td>4</td>
					<td>3</td>
					<td>28</td>
					<td>25</td>
					<td>2</td>
					<td>4</td>
				</tr>
				<tr>
					<td>Duona balta</td>
					<td>5</td>
					<td>20</td>
					<td>19</td>
					<td>4</td>
					<td>2</td>
					<td>5</td>
					<td>20</td>
					<td>19</td>
					<td>4</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Duona juoda</td>
					<td>50</td>
					<td>10</td>
					<td>59</td>
					<td>1</td>
					<td>0</td>
					<td>50</td>
					<td>10</td>
					<td>59</td>
					<td>1</td>
					<td>0</td>
				</tr>
				<tr>
					<td>Duona ruginė</td>
					<td>50</td>
					<td>0</td>
					<td>50</td>
					<td>0</td>
					<td>0</td>
					<td>50</td>
					<td>0</td>
					<td>50</td>
					<td>0</td>
					<td>0</td>
				</tr>
			</tbody>
	</table>
<script type="text/javascript">

	//Oprion ONE;

	var _arrayOfObjects = [
		{
			"date":"2017-11-09",
			"product":"Agouninė",
			"data": [5, 20, 19, 4, 2]
		},
		{
			"date":"2017-11-10",
			"product":"Varškės",
			"data": [3, 28, 28, 2, 4]
		},
	];

	// Option TWO sort by date

	var _objectByDate = {
		"2017-11-09" :
		[
			{
				"product":"Agouninė",
				"data": [5, 20, 19, 4, 2]
			},
			{
				"product":"Varškės",
				"data": [3, 28, 28, 2, 4]
			},
		],
		"2017-11-10" :
		[
			{
				"product":"Agouninė",
				"data": [5, 20, 19, 4, 2]
			},
			{
				"product":"Varškės",
				"data": [3, 28, 28, 2, 4]
			},
		],
	};

	// Option THREE sort by product

	var _objectByProduct = {
		"Agouninė" :
		[
			{
				"date":"2017-11-09",
				"data": [5, 20, 19, 4, 2]
			},
		],
		"Varškės" :
		[
			{
				"date":"2017-11-09",
				"data": [5, 20, 19, 4, 2]
			},
		],
	};


	console.log(_arrayOfObjects);
	console.log(_objectByDate);
	console.log(_objectByProduct);

	//Option Four 

	var _optimisedByDate = {
		"2017-11-09" :
		{
			"Varškės": [5, 20, 19, 4, 2],
			"Agouninė":[5, 20, 19, 4, 2],
		},
	};

	//Option Five

	var _optimisedByProduct = {
		"Agouninė" :
		{
			"2017-11-09": [5, 20, 19, 4, 2],
			"2017-11-10": [5, 20, 19, 4, 2],
		},
	};

	console.log(_optimisedByDate);
	console.log(_optimisedByProduct);

	//Option SIX//

	var _products = {
		"p-1":"Agouninė",
		"p-2":"Varškės",
	};

	var _ByProduct = {
		"p-1" :
		{
			"2017-11-09": [5, 20, 19, 4, 2],
			"2017-11-10": [5, 20, 19, 4, 2],
		},
		"p-2" :
		{
			"2017-11-09": [5, 20, 19, 4, 2],
			"2017-11-10": [5, 20, 19, 4, 2],
		},
	};
	var _ByDate = {
		"2017-11-09" :
		{
			"p-1": [5, 20, 19, 4, 2],
			"p-2": [5, 20, 19, 4, 2],
		},
		"2017-11-10" :
		{
			"p-1": [5, 20, 19, 4, 2],
			"p-2": [5, 20, 19, 4, 2],
		},
	};

	console.log(_products);
	console.log(_ByProduct);
</script>
</body>
</html>