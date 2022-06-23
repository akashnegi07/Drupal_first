<?php
namespace Drupal\My_first_module\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
class Hello1Controller extends ControllerBase {
    public function herolist() {
        // for Node creating 
        $node = Node::create(['type' => 'article']);
        $node->title= 'My First Article';
        $node->body = 'This is my first Node of article';
        $node->save();

        return [
            '#markup' => $this->t('Node is created successfully'),
        ];

    }

}
