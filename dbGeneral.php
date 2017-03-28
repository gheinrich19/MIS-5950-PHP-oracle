<?php
// File dbGeneral.php 
class dbGeneral {
  private $_schema;
  private $_password; 
  private $_host;
  private $_query; 
  private $_conn; 
  public $result;

    function __construct($sql) 
    { 
    	$this->_query  = $sql;
    	$this->setParms();
    	$this->connDB(); }

function setParms()
	{
	 $this->_schema = 'a01263913'; $this->_password = 'heinrich'; 
	 $this->_host = '//dbase.brigham.usu.edu:1521/orcl/doracle'; 
	 return $this->_host;

	 } 


function connDB() 
{

  if(!$this->_conn = oci_connect($this->_schema,$this->_password,$this->_host))
  { return 'error connecting'; } 
  
  else { return 'connected'; } } 

function parse() {

	 if(!$parse = oci_parse($this->_conn,$this->_query))
	   { 
	     echo 'error parsing';
	   } 
	else { $this->result = $parse; } 
}
function bind($bind,$choice,$length)
{ 
	oci_bind_by_name($this->result, $bind, $choice,$length); }

 function exe() 
{ 
  oci_execute($this->result); 
  return $this->result; 
} 
function bind_refcursor()
 {
   $curs = oci_new_cursor($this->_conn);
   $this->parse();
   oci_bind_by_name($this->result,':data',$curs,-1,OCI_B_CURSOR);
   $this->exe();
   oci_execute($curs);
   return $this->result = $curs;
    }
  }

  ?>
