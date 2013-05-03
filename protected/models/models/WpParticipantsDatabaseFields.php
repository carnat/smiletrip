<?php

/**
 * This is the model class for table "wp_participants_database_fields".
 *
 * The followings are the available columns in table 'wp_participants_database_fields':
 * @property integer $id
 * @property integer $order
 * @property string $name
 * @property string $title
 * @property string $default
 * @property string $group
 * @property string $help_text
 * @property string $form_element
 * @property string $values
 * @property string $validation
 * @property integer $display_column
 * @property integer $admin_column
 * @property integer $sortable
 * @property integer $CSV
 * @property integer $persistent
 * @property integer $signup
 * @property integer $readonly
 */
class WpParticipantsDatabaseFields extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpParticipantsDatabaseFields the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wp_participants_database_fields';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, title, group', 'required'),
			array('order, display_column, admin_column, sortable, CSV, persistent, signup, readonly', 'numerical', 'integerOnly'=>true),
			array('name, group', 'length', 'max'=>30),
			array('default, help_text, form_element, values, validation', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, order, name, title, default, group, help_text, form_element, values, validation, display_column, admin_column, sortable, CSV, persistent, signup, readonly', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'order' => 'Order',
			'name' => 'Name',
			'title' => 'Title',
			'default' => 'Default',
			'group' => 'Group',
			'help_text' => 'Help Text',
			'form_element' => 'Form Element',
			'values' => 'Values',
			'validation' => 'Validation',
			'display_column' => 'Display Column',
			'admin_column' => 'Admin Column',
			'sortable' => 'Sortable',
			'CSV' => 'Csv',
			'persistent' => 'Persistent',
			'signup' => 'Signup',
			'readonly' => 'Readonly',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('order',$this->order);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('default',$this->default,true);
		$criteria->compare('group',$this->group,true);
		$criteria->compare('help_text',$this->help_text,true);
		$criteria->compare('form_element',$this->form_element,true);
		$criteria->compare('values',$this->values,true);
		$criteria->compare('validation',$this->validation,true);
		$criteria->compare('display_column',$this->display_column);
		$criteria->compare('admin_column',$this->admin_column);
		$criteria->compare('sortable',$this->sortable);
		$criteria->compare('CSV',$this->CSV);
		$criteria->compare('persistent',$this->persistent);
		$criteria->compare('signup',$this->signup);
		$criteria->compare('readonly',$this->readonly);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}