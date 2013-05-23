<?php

/**
 * BaseRessource
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_ressource
 * @property string $designation
 * @property integer $id_type_ressource
 * @property integer $id_article
 * @property Type_ressource $Type_ressource
 * @property Article $Article
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRessource extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('ressource');
        $this->hasColumn('id_ressource', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('designation', 'string', 25, array(
             'type' => 'string',
             'length' => '25',
             ));
        $this->hasColumn('id_type_ressource', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('id_article', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Type_ressource', array(
             'local' => 'id_type_ressource',
             'foreign' => 'id_type_ressource'));

        $this->hasOne('Article', array(
             'local' => 'id_article',
             'foreign' => 'id_article'));
    }
}