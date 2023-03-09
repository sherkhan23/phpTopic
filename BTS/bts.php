<?php

class Node {
    public $value;
    public $leftChild;
    public $rightChild;

    public function __construct($value) {
        $this->value = $value;
        $this->leftChild = null;
        $this->rightChild = null;
    }
}

class BinarySearchTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($value) {
        $node = new Node($value);

        if ($this->root === null) {
            $this->root = $node;
        } else {
            $current = $this->root;

            while (true) {
                if ($value < $current->value) {
                    if ($current->leftChild === null) {
                        $current->leftChild = $node;
                        break;
                    }
                    $current = $current->leftChild;
                } else {
                    if ($current->rightChild === null) {
                        $current->rightChild = $node;
                        break;
                    }
                    $current = $current->rightChild;
                }
            }
        }
    }

    public function search($value) {
        $current = $this->root;

        while ($current !== null) {
            if ($value === $current->value) {
                return true;
            }

            if ($value < $current->value) {
                $current = $current->leftChild;
            } else {
                $current = $current->rightChild;
            }
        }

        return false;
    }
}
// To use this implementation, you can create a new BinarySearchTree object and use the insert()
// method to add values to the tree, and use the search() method to search for values in the tree:

$bst = new BinarySearchTree();

$bst->insert(10);
$bst->insert(5);
$bst->insert(20);
$bst->insert(3);
$bst->insert(7);

var_dump($bst->search(10)); // output: bool(true)
var_dump($bst->search(3)); // output: bool(true)
var_dump($bst->search(15)); // output: bool(false)

/**
 *Двоичное дерево поиска (по британскому летнему времени) - это древовидная структура данных,
 * где каждый узел в дереве имеет не более двух дочерних узлов, называются левую ребенка и права ребенка.

В по британскому летнему времени, левый дочерний узел содержит значение, которое является меньшим,
 * чем значение родительского узла, и правого дочернего узла содержит значение, которое больше,
 * чем значение родительского узла. Это свойство упорядочивания обеспечивает эффективный поиск,
 * вставку и удаление операций.

В PHP двоичное дерево поиска может быть реализовано с использованием класса Node и класса BinarySearchTree.
 * Класс Node представляет один узел в дереве и содержит информацию о значении узла, левом дочернем элементе
 * и правом дочернем элементе. Класс BinarySearchTree представляет само дерево и предоставляет методы для вставки
 * новых узлов, поиска узлов и обхода дерева.
 */