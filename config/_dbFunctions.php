<?php
function bug($e)
{
	echo "<pre>";
	echo $e ;
	echo "</pre>";
}
// echo getField("sds", "pass", 1);

// Todo: Fix All dbFunctions *HIGH*

/**
 * Retrieves a field from the table for that particular userid
 *
 * @param  [string] $table  [The db table to fetch from]
 * @param  [string] $field  [Field to fetch]
 * @param  [int]    $userid [The user's id]
 * @return [string]         [Matched Field]
 */
function getField($table, $field, $userid)
{
  $result  = mysql_query("SELECT $field FROM $table WHERE userid = $userid");
  $row = mysql_fetch_row($result);
  return $row[0];
}

/**
 * Insert fields into a table. Quickly.
 *
 * @param [string] $table  [The Table]
 * @param [string] $fields [ONE Field]
 * @param [string] $values [ONE Value]
 */
function insertField($table, $field, $values)
{
  // $result =  mysql_query("INSERT INTO $table ($fields) VALUES($values)");
}

/**
 * Updates the given field with new value
 *
 * @param  [string] $table  []
 * @param  [string] $field  []
 * @param  [string] $value  []
 * @param  [int]    $userid []
 * @return [string]         []
 */
function updateField($table, $field, $value, $userid)
{
  $result = mysql_query("UPDATE $table SET $field = '$value' WHERE userid = $userid");
  if (!$result)
  {
    die("Shit Happened in Updating - " . mysql_error());
  }
}
?>
