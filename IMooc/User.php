<?php
/**
 * author: wang yang
 * Date: 2019/8/14
 * Time: 10:05
 */

namespace IMooc;


class User
{
    public $id;
    public $sex;
    public $name;
    public $mobile;

    protected $db;

    public function __construct($id)
    {
        $this->db = new \IMooc\Database\MySQLi();
        $this->db->connect('127.0.0.1', 'root', 'root', 'caiji');
        $res = $this->db->query('select * from user limit 1');

        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->sex = $data['sex'];
        $this->mobile = $data['mobile'];

    }

    public function __destruct()
    {
        $res = $this->db->query("update  user set name='{$this->name}',mobile='{$this->mobile}',sex='{$this->sex}'  where id='{$this->id}' limit 1");
        // TODO: Implement __destruct() method.
    }
}