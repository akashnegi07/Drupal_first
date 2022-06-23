<?php
namespace Drupal\My_first_module\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
class CustomController extends ControllerBase {
    public function Customnode() {
        // for Node creating 

        $node = Node::create(['type' => 'content_from']);
       $node->title = 'My First Basic content';
        $node->field_dob = '06/08/2022';
        $node->field_email_id = 'Akash@gmail.com';
        $node->field_first_name = 'Akash';
        $node->field_last = 'Negi';
        $node->field_telephone_number = '9897384398';
        $node->save();

        return [
            '#markup' => $this->t('Custom Node is created successfully'),
        ];

    }

}
