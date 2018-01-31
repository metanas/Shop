<?php

namespace DB;
final class Postgre
{
    private $link;

    public function __construct($hostname, $username, $password, $database, $port = '5432')
    {
        if (!$this->link = pg_connect('host=' . $hostname . ' port=' . $port . ' user=' . $username . ' password=' . $password . ' dbname=' . $database)) {
            throw new \Exception('Error: Could not make a database link using ' . $username . '@' . $hostname);
        }

//		if (!mysql_select_db($database, $this->link)) {
//			throw new \Exception('Error: Could not connect to database ' . $database);
//		}

        pg_query($this->link, "SET CLIENT_ENCODING TO 'UTF8'");
    }

    private function verifierPostgresSyntax($sql)
    {

        $sql = str_replace('`', '', $sql);
        $sql = str_replace('LCASE', 'LOWER', $sql);
        $sql = str_replace('0000-00-00', '0001-01-01', $sql);
        $sql = str_replace('DATE_SUB(NOW(), INTERVAL 1 HOUR)', "NOW() - '1 HOUR'::INTERVAL", $sql);

        return $sql;
    }
    public $resource;
    public function query($sql)
    {
        $sql = $this->verifierPostgresSyntax($sql);
        if(strpos($sql, "INSERT INTO")){
            $sql.= " RETURNING ID";
            $flage= false;
        }else{
            $flage = true;
        }
        $this->resource = pg_query($this->link, $sql);
        if ($this->resource && $flage) {
            if (is_resource($this->resource)) {
                $i = 0;

                $data = array();

                while ($result = pg_fetch_assoc($this->resource)) {
                    $data[$i] = $result;

                    $i++;
                }

                pg_free_result($this->resource);

                $query = new \stdClass();
                $query->row = isset($data[0]) ? $data[0] : array();
                $query->rows = $data;
                $query->num_rows = $i;

                unset($data);

                return $query;
            } else {
                return true;
            }
        } else {
            throw new \Exception('Error: ' . pg_result_error($this->link) . '<br />' . $sql);
        }

    }

    public function escape($value)
    {
        return pg_escape_string($this->link, $value);
    }

    public function countAffected()
    {
        return pg_affected_rows($this->link);
    }

    public function getLastId()
    {
        return $this->resource;
    }

    public function __destruct()
    {
        pg_close($this->link);
    }
}