<?php 
	
	//define("BASE_URL", "http://localhost/tienda_virtual/");
	const BASE_URL = "http://localhost/tienda_virtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "us-cluster-east-01.k8s.cleardb.net";
	const DB_NAME = "heroku_594b6dbd90ca8f2";
	const DB_USER = "be4cee8f1fcf13";
	const DB_PASSWORD = "1cdf4e3f";
	const DB_CHARSET = "utf8";
	
	// const DB_HOST = "localhost";
	// const DB_NAME = "db_tiendavirtual";
	// const DB_USER = "root";
	// const DB_PASSWORD = "";
	// const DB_CHARSET = "utf8";


	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "Q";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.abelosh.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	



	


 ?>