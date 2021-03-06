<?php
/*
@version   v5.20.7  20-Sep-2016
@copyright (c) 2000-2013 John Lim (jlim#natsoft.com). All rights reserved.
@copyright (c) 2014      Damien Regad, Mark Newnham and the ADOdb community
  Released under both BSD license and Lesser GPL library license.
  Whenever there is any discrepancy between the two licenses,
  the BSD license will take precedence.
  Set tabs to 4 for best viewing.

  Latest version is available at http://adodb.sourceforge.net
*/


// Select an empty record from the database

include('../../Libraries/phpGrid_Lite/server/adodb5/adodb.inc.php');
include('../../Libraries/phpGrid_Lite/server/adodb5/tohtml.inc.php');

include('../../Libraries/phpGrid_Lite/server/adodb5/adodb-errorpear.inc.php');

if (0) {
	$conn = ADONewConnection('mysql');
	$conn->debug=1;
	$conn->PConnect("localhost","root","","xphplens");
	print $conn->databaseType.':'.$conn->GenID().'<br>';
}

if (0) {
	$conn = ADONewConnection("oci8");  // create a connection
	$conn->debug=1;
	$conn->PConnect("falcon", "scott", "tiger", "juris8.ecosystem.natsoft.com.my"); // connect to MySQL, testdb
	print $conn->databaseType.':'.$conn->GenID();
}

if (0) {
	$conn = ADONewConnection("ibase");  // create a connection
	$conn->debug=1;
	$conn->Connect("localhost:c:\\Interbase\\Examples\\Database\\employee.gdb", "sysdba", "masterkey", ""); // connect to MySQL, testdb
	print $conn->databaseType.':'.$conn->GenID().'<br>';
}

if (0) {
	$conn = ADONewConnection('postgres');
	$conn->debug=1;
	@$conn->PConnect("susetikus","tester","test","test");
	print $conn->databaseType.':'.$conn->GenID().'<br>';
}
