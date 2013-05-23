<?php

/**
 * BaseFamille_mots_cle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_famille
 * @property string $designation
 * @property Doctrine_Collection $FK_Famille_mots_cle
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFamille_mots_cle extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('famille_mots_cle');
        $this->hasColumn('id_famille', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('designation', 'string', 25, array(
             'type' => 'string',
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Mots_cle as FK_Famille_mots_cle', array(
             'local' => 'id_famille',
             'foreign' => 'id_famille'));
    }
}