<?php

/**
 * BaseNsmTarget
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $target_id
 * @property string $target_name
 * @property string $target_description
 * @property string $target_class
 * @property Doctrine_Collection $NsmPrincipalTarget
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class BaseNsmTarget extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('nsm_target');
        $this->hasColumn('target_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('target_name', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('target_description', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('target_class', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             'fixed' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasMany('NsmPrincipalTarget', array(
             'local' => 'target_id',
             'foreign' => 'pt_target_id'));
    }
}