<?php

#connetion
$connection = new PDO("mysql:host=localhost;dbname=mysite;charset=utf8", "root","");

# запись к бд
$query = "INSERT test ( name) VALUE ( 'reer')";
$connection->exec($query);

# c бд
$queryShow = "SELECT * FROM test";

$statement = $connection->query($queryShow);

// get all publishers
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($publishers) {
    // show the publishers
    foreach ($publishers as $publisher) {
        echo $publisher['id']. " - ";
        echo $publisher['name'] . '<br>';
    }
}


$stack = new SplStack();

// добавляем элемент в стек
$stack->push('1');
$stack->push('2');
$stack->push('3');

echo $stack->count(); // 3
echo $stack->top(); // 3
echo $stack->bottom(); // 1
echo $stack->serialize(); // i:6;:s:1:"1";:s:1:"2";:s:1:"3";

// извлекаем элементы из стека
echo $stack->pop(); // 3
echo $stack->pop(); // 2
echo $stack->pop(); // 1

# SplQueue

$queue = new SplQueue();

$queue->setIteratorMode(SplQueue::IT_MODE_DELETE);
echo "\n";
$queue->enqueue('one');
$queue->enqueue('two');
$queue->enqueue('qwerty');

$queue->dequeue();
$queue->dequeue();

echo $queue->top(); // qwerty

$heap = new SplMaxHeap();
$heap->insert('111');
$heap->insert('666');
$heap->insert('777');

echo $heap->extract(); // 777
echo $heap->extract(); // 666
echo $heap->extract(); // 111

$heap = new SplMinHeap();
$heap->insert('111');
$heap->insert('666');
$heap->insert('777');

echo $heap->extract(); // 111
echo $heap->extract(); // 666
echo $heap->extract(); // 777

$queue = new SplPriorityQueue();
$queue->setExtractFlags(SplPriorityQueue::EXTR_DATA); // получаем только значения элементов

$queue->insert('Q', 1);
$queue->insert('W', 2);
$queue->insert('E', 3);
$queue->insert('R', 4);
$queue->insert('T', 5);
$queue->insert('Y', 6);

$queue->top();

while($queue->valid())
{
    echo $queue->current();
    $queue->next();
}
//YTREWQ

$a = new SplFixedArray(10000);
$count = 100000;

for($i =0; $i<$count; $i++)
{
    $a[$i] = $i;

    if ($i==9999) $a->setSize(100000);
}

$s = new SplObjectStorage();

$o1 = (object)array('a'=>1);
$o2 = (object)array('b'=>2);
$o3 = (object)array('c'=>3);

$s[$o1] = "data for object 1";
$s[$o2] = array(1,2,3);

foreach($s as $i => $key)
{
    echo "Entry $i:\n"; // You get a numeric index
    var_dump($key, $s[$key]);
    echo "\n";
}