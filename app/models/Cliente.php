<?php
class Cliente extends Eloquent {

	protected $table = 'clientes';
	public $timestamps = false;
	//Forzar el cambio de la clave primaria, sirve para forzar a cambiar el id (por defecto) por otro campo
	protected $primaryKey = 'codcliente';

	public static $rules = array(
		'cif' => 'required|alpha|min:2|unique:clientes',
		'razonsocial' => 'required|unique:clientes',
		'direccion1' => 'required',
		'direccion2' => '',
		'localidad' => '',
		'provincia' => '',
		'pais' => '',
		'cod_postal' => '',
		'telefono1' => 'required|numeric',
		'telefono2' => 'numeric',
		'email' => 'required|email|unique:clientes',
		'p_web' => '',
		'logo' => 'mimes:png,jpeg',
		'estado_cliente' => 'in:1,2',
	);

	public static $rules_modificacion = array(
		'cif' => 'required|min:2|unique:clientes',
		'razonsocial' => 'required|unique:clientes',
		'direccion1' => 'required',
		'direccion2' => '',
		'localidad' => '',
		'provincia' => '',
		'pais' => '',
		'cod_postal' => '',
		'telefono1' => 'required|numeric',
		'telefono2' => 'numeric',
		'email' => 'required|email|unique:clientes',
		'p_web' => '',
		'logo' => 'mimes:png,jpeg',
	);
//regex:[A-Za-z0-9-.]|
}