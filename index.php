<?php

//weixin.lipinai.com/rango
/**
 * author: wang yang
 * Date: 2019/8/12
 * Time: 9:41
 */
define('BASEDIR', __DIR__);
//var_dump(BASEDIR);die;
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\Loader::autoloader');
/*$stack = new SplStack();
$stack->push("data\n");
$stack->push("data1\n");

echo $stack->pop();
echo $stack->pop();*/
/*$queue = new SplQueue();
$queue->enqueue("data\n");
$queue->enqueue("data1\n");
echo $queue->dequeue();
echo $queue->dequeue();*/
/*$heap = new SplMinHeap();
$heap->insert("data\n");
$heap->insert("data1\n");
echo $heap->extract();
echo $heap->extract();*/
/*$minArray = new SplFixedArray(10);
$minArray['0'] =123;
$minArray['5'] =345;
print_r($minArray);*/
/*$db = new IMooc\Database();
$db->where("id=1")->order('id desc ')->limit(6);*/
/*$db->where("id=1");
$db->where("name=2");
$db->order("id desc ");
$db->limit(10);*/
//$obj = IMooc\Factory::createDataBase();
/*$obj->title = '标题';
echo $obj->title;*/
//echo $obj->slip('hello','123');
/*$db = IMooc\Database::getInstance();
$db = IMooc\Database::getInstance();
$db = IMooc\Database::getInstance();
$db = IMooc\Database::getInstance();
$db = IMooc\Database::getInstance();
$db = IMooc\Database::getInstance();*/
//echo IMooc\Objects::drop('hello','123');
//$db = \IMooc\Register::get('db1');
/*$db = new IMooc\Database\PDO();
$db->connect('127.0.0.1', 'root', 'root', 'caiji');
$db->query('show databases');
$db->close();*/

class Page
{
    protected $strategy;

    function index()
    {

        echo "AD:";
        $this->strategy->showAd();
        echo "<br/>";
        echo "category:";
        $this->strategy->showCategory();
        echo "<br/>";
        /*if (isset($_GET['female'])) {
        } else {
        }*/
    }

    function setStrategy(\IMooc\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page;
if (isset($_GET['female'])) {
    $strategy = new \IMooc\FemaleUser();
} else {
    $strategy = new \IMooc\MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index();