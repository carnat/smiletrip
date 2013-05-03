<?php

/**
 * This is the model class for table "wp_bp_xprofile_fields".
 *
 * The followings are the available columns in table 'wp_bp_xprofile_fields':
 * @property string $id
 * @property string $group_id
 * @property string $parent_id
 * @property string $type
 * @property string $name
 * @property string $description
 * @property integer $is_required
 * @property integer $is_default_option
 * @property string $field_order
 * @property string $option_order
 * @property string $order_by
 * @property integer $can_delete
 */
class WpBpXprofileFields extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpBpXprofileFields the static model class
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
		return 'wp_bp_xprofile_fields';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id, parent_id, type, name, description', 'required'),
			array('is_required, is_default_option, can_delete', 'numerical', 'integerOnly'=>true),
			array('group_id, parent_id, field_order, option_order', 'length', 'max'=>20),
			array('type, name', 'length', 'max'=>150),
			array('order_by', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, group_id, parent_id, type, name, description, is_required, is_default_option, field_order, option_order, order_by, can_delete', 'safe', 'on'=>'search'),
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
			'group_id' => 'Group',
			'parent_id' => 'Parent',
			'type' => 'Type',
			'name' => 'Name',
			'description' => 'Description',
			'is_required' => 'Is Required',
			'is_default_option' => 'Is Default Option',
			'field_order' => 'Field Order',
			'option_order' => 'Option Order',
			'order_by' => 'Order By',
			'can_delete' => 'Can Delete',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('group_id',$this->group_id,true);
		$criteria->compare('parent_id',$this->parent_id,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('is_required',$this->is_required);
		$criteria->compare('is_default_option',$this->is_default_option);
		$criteria->compare('field_order',$this->field_order,true);
		$criteria->compare('option_order',$this->option_order,true);
		$criteria->compare('order_by',$this->order_by,true);
		$criteria->compare('can_delete',$this->can_delete);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}