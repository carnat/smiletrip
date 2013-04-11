<?php

/**
 * This is the model class for table "wp_bp_activity".
 *
 * The followings are the available columns in table 'wp_bp_activity':
 * @property string $id
 * @property string $user_id
 * @property string $component
 * @property string $type
 * @property string $action
 * @property string $content
 * @property string $primary_link
 * @property string $item_id
 * @property string $secondary_item_id
 * @property string $date_recorded
 * @property integer $hide_sitewide
 * @property integer $mptt_left
 * @property integer $mptt_right
 * @property integer $is_spam
 */
class WpBpActivity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpBpActivity the static model class
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
		return 'wp_bp_activity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, component, type, action, content, primary_link, item_id, date_recorded', 'required'),
			array('hide_sitewide, mptt_left, mptt_right, is_spam', 'numerical', 'integerOnly'=>true),
			array('user_id, item_id, secondary_item_id', 'length', 'max'=>20),
			array('component, type', 'length', 'max'=>75),
			array('primary_link', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, component, type, action, content, primary_link, item_id, secondary_item_id, date_recorded, hide_sitewide, mptt_left, mptt_right, is_spam', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'component' => 'Component',
			'type' => 'Type',
			'action' => 'Action',
			'content' => 'Content',
			'primary_link' => 'Primary Link',
			'item_id' => 'Item',
			'secondary_item_id' => 'Secondary Item',
			'date_recorded' => 'Date Recorded',
			'hide_sitewide' => 'Hide Sitewide',
			'mptt_left' => 'Mptt Left',
			'mptt_right' => 'Mptt Right',
			'is_spam' => 'Is Spam',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('component',$this->component,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('action',$this->action,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('primary_link',$this->primary_link,true);
		$criteria->compare('item_id',$this->item_id,true);
		$criteria->compare('secondary_item_id',$this->secondary_item_id,true);
		$criteria->compare('date_recorded',$this->date_recorded,true);
		$criteria->compare('hide_sitewide',$this->hide_sitewide);
		$criteria->compare('mptt_left',$this->mptt_left);
		$criteria->compare('mptt_right',$this->mptt_right);
		$criteria->compare('is_spam',$this->is_spam);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}