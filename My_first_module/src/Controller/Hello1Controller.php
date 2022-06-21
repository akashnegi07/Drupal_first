<?php
namespace Drupal\My_first_module\Controller;
use Drupal\Core\Controller\ControllerBase;
class Hello1Controller extends ControllerBase {
    public function herolist() {
        $hero = [
            ['name' => 'Green Lantern'],
            ['name' => 'Captain America'],
            ['name' => 'Wonder Woman'],
            ['name' => 'Iron Man'],
            ['name' => 'Wolverine'],
            ['name' => 'Superman'],
            ['name' => 'Spider-Man'],
            ['name' => 'Batman']
            
        ];
        $ourheroes = '';
        foreach ($hero as $i)
        {
        $ourheroes .= '<li>' . $i['name'] . '</li>' ;
        } 

        return [
            '#type' => 'markup',
            '#markup' => '<ul>' . $ourheroes . '</ul>',
        ];

    }

}
