<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 02.08.13
 * Time: 11:01
 * To change this template use File | Settings | File Templates.
 */

namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('album');
        $this->setAttribute('method', 'post');
        $this->add(array(
                        'name' => 'id',
                        'attributes' => array(
                            'type' => 'hidden',
                        ),
                   ));
        $this->add(array(
                        'name' => 'artist',
                        'attributes' => array(
                            'type' => 'text',
                        ),
                   ));
        $this->add(array(
                        'name' => 'title',
                        'attributes' => array(
                            'type' => 'text',
                        ),
                        'options' => array(
                            'label' => 'Title',
                        ),
                   ));
        $this->add(array(
                        'name' => 'submit',
                        'attributes' => array(
                            'type' => 'submit',
                            'value' => 'Go',
                            'id' => 'submitbutton',
                        ),
                   ));
    }
}