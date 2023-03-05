<?php
// https://otus.ru/nest/post/707/ чекал от сюда
/** Стандартная библиотека PHP (SPL) — это набор интерфейсов и классов, предназначенных для
 решения стандартных задач. Не требуется никаких внешних библиотек для
 сборки этого расширения, и оно доступно по умолчанию в PHP 5.0.0 и выше. **/

// DLL
// связный список — это базовая динамическая структура данных, состоящая из узлов, каждый из которых содержит как данные, так и ссылки на следующий и/или предыдущий узел списка.
// Все операции итератора, удаления, добавления и т. п. имеют алгоритмическую сложность O(1),

class SPL{

    public function DLL(){
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
        echo "\r\n";

        $queue = new SplQueue();

        $queue->setIteratorMode(SplQueue::IT_MODE_DELETE);

        $queue->enqueue('one');
        $queue->enqueue('two');
        $queue->enqueue('qwerty');

        $queue->dequeue();
        $queue->dequeue();

        echo $queue->top(); // qwerty
        echo "\r\n";

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
        echo "\r\n";

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

    }

}

$test = new SPL();
$test->DLL();


