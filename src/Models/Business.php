<?php namespace LasseRafn\CvrApi\Models;

use LasseRafn\CvrApi\Utils\Model;

class Business extends Model
{
	public $vat;
	public $name;
	public $address;
	public $zipcode;
	public $city;
	public $cityname;
	public $protected;
	public $phone;
	public $email;
	public $fax;
	public $startdate;
	public $enddate;
	public $employees;
	public $addressco;
	public $industrycode;
	public $industrydesc;
	public $companycode;
	public $companydesc;
	public $creditstartdate;
	public $creditbankrupt;
	public $creditstatus;
	public $owners;
	public $productionunits;
}