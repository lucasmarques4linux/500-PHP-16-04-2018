<?php 

require_once 'connection-funcs.php';

function insert(string $table, array $data)
{
	foreach ($data as $key => $value) {
		$keys[]  = $key;
		$values[] = "'{$value}'";
	}
	$keys = implode(',', $keys);
	$values = implode(',', $values);
	$query = "INSERT INTO {$table} ({$keys}) VALUES ({$values})";
	$con = conect();
	mysqli_query($con,$query);
	desconect($con);
}

function update(string $table, array $data, string $where)
{
	foreach ($data as $key => $value) {
		$sets[] = "{$key}='{$value}'"; 
	}
	$sets = implode(',', $sets);
	$query = "UPDATE {$table} SET {$sets} WHERE {$where}";
	$con = conect();
	mysqli_query($con,$query);
	desconect($con);
}

function delete(string $table, string $where)
{
	$query = "DELETE FROM {$table} WHERE {$where}";
	$con = conect();
	mysqli_query($con,$query);
	desconect($con);
}

function find(string $table, string $keys = '*', string $where)
{
	$query = "SELECT {$keys} FROM {$table} WHERE {$where}";
	$con = conect();
	$result = mysqli_query($con,$query);
	desconect($con);
	return mysqli_fetch_assoc($result);
}

function findAll(
	string $table, 
	string $keys = '*', 
	string $where = null, 
	string $filter = null, 
	string $order = null,
	int $limit = null)
{
	$query = "SELECT {$keys} FROM {$table}";
	if ($where) {
		$query .= " WHERE {$where}";
	}
	if ($filter && $where) {
		$query .= " AND {$filter}";
	}
	if ($order) {
		$query .= " ORDER BY {$order}";
	}
	if ($limit) {
		$query .= " LIMIT {$limit}";
	}
	$con = conect();
	$result = mysqli_query($con,$query);
	desconect($con);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}