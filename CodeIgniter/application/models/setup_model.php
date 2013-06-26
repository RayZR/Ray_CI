<?php
/**
 * Created by JetBrains PhpStorm.
 * User: acer
 * Date: 9/06/13
 * Time: 6:45 PM
 * To change this template use File | Settings | File Templates.
 */

class setup_model extends CI_Model{
        public function __construct(){

        }

    public function createDatabaseSchema(){
        $this->load->dbforge();
        $this->_createTableUser();

    }

    private function _createTableUser(){

        $fields=array(
            'id'=>array('type'=>'int',
                'constraint'=>11,
                'unsigned=>true',
                'auto_increment'=>true),
            'login'=>array('type'=>'varchar',
                'constraint'=>30 ),
            'password'=>array('type'=>'varchar',
                'constraint'=>64//for sha256
            ),
            'email'=>array('type'=>'varchar',
                'constraint'=>50)

        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('Id',true);
        return $this->dbforge->create_table('user',true);
    }

}