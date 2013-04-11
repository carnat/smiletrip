<?php

/**
 * This is the model class for table "wp_bp_xprofile_data".
 *
 * The followings are the available columns in table 'wp_bp_xprofile_data':
 * @property string $id
 * @property string $field_id
 * @property string $user_id
 * @property string $value
 * @property string $last_updated
 */
class WpBpXprofileData extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpBpXprofileData the static model class
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
		return 'wp_bp_xprofile_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('field_id, user_id, value, last_updated', 'required'),
			array('field_id, user_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, field_id, user_id, value, last_updated', 'safe', 'on'=>'search'),
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
			'field_id' => 'Field',
			'user_id' => 'User',
			'value' => 'Value',
			'last_updated' => 'Last Updated',
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
		$criteria->compare('field_id',$this->field_id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('last_updated',$this->last_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}