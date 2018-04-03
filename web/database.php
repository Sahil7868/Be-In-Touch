<?php


class database
{
	public function getdata($query)
	{
		$con=mysql_connect('localhost','root','');
		mysql_select_db('bapa',$con);
		$res=mysql_query($query,$con);
		return $res;
		
	}
}

 ?>