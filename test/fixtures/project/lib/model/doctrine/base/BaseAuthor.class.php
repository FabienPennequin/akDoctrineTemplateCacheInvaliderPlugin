<?php

/**
 * BaseAuthor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Comments
 * 
 * @method string              getName()     Returns the current record's "name" value
 * @method Doctrine_Collection getComments() Returns the current record's "Comments" collection
 * @method Author              setName()     Sets the current record's "name" value
 * @method Author              setComments() Sets the current record's "Comments" collection
 * 
 * @package    ##PROJECT_NAME##
 * @subpackage model
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAuthor extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('author');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Comment as Comments', array(
             'local' => 'id',
             'foreign' => 'author_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->actAs($sluggable0);
    }
}