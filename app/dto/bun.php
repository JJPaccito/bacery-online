<?php
namespace app\dto;
class Bun
{
	public $name;
	public $id;
	public $salePrice;
	public $weight;
	public $ean;
	public function __construct()
	{
		echo "BUN created";
	}
};
