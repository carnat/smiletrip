<?php

/**
 * This is the model class for table "wp_bp_friends".
 *
 * The followings are the available columns in table 'wp_bp_friends':
 * @property string $id
 * @property string $initiator_user_id
 * @property string $friend_user_id
 * @property integer $is_confirmed
 * @property integer $is_limited
 * @property string $date_created
 */
class WpBpFriends extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpBpFriends the static model class
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
		return 'wp_bp_friends';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('initiator_user_id, friend_user_id, date_created', 'required'),
			array('is_confirmed, is_limited', 'numerical', 'integerOnly'=>true),
			array('initiator_user_id, friend_user_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, initiator_user_id, friend_user_id, is_confirmed, is_limited, date_created', 'safe', 'on'=>'search'),
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
			'initiator_user_id' => 'Initiator User',
			'friend_user_id' => 'Friend User',
			'is_confirmed' => 'Is Confirmed',
			'is_limited' => 'Is Limited',
			'date_created' => 'Date Created',
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
		$criteria->compare('initiator_user_id',$this->initiator_user_id,true);
		$criteria->compare('friend_user_id',$this->friend_user_id,true);
		$criteria->compare('is_confirmed',$this->is_confirmed);
		$criteria->compare('is_limited',$this->is_limited);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}