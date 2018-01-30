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

    public function query($sql)
    {
        $sql = $this->verifierPostgresSyntax($sql);

        $resource = pg_query($this->link, $sql);
        if ($resource) {
            if (is_resource($resource)) {
                $i = 0;

                $data = array();

                while ($result = pg_fetch_assoc($resource)) {
                    $data[$i] = $result;

                    $i++;
                }

                pg_free_result($resource);

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
        $query = $this->query("SELECT LASTVAL() AS id");

        return $query->row['id'];
    }

    public function __destruct()
    {
        pg_close($this->link);
    }
}