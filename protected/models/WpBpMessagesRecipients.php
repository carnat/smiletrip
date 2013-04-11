<?php

/**
 * This is the model class for table "wp_bp_messages_recipients".
 *
 * The followings are the available columns in table 'wp_bp_messages_recipients':
 * @property string $id
 * @property string $user_id
 * @property string $thread_id
 * @property integer $unread_count
 * @property integer $sender_only
 * @property integer $is_deleted
 */
class WpBpMessagesRecipients extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpBpMessagesRecipients the static model class
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
		return 'wp_bp_messages_recipients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, thread_id', 'required'),
			array('unread_count, sender_only, is_deleted', 'numerical', 'integerOnly'=>true),
			array('user_id, thread_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, thread_id, unread_count, sender_only, is_deleted', 'safe', 'on'=>'search'),
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
			'thread_id' => 'Thread',
			'unread_count' => 'Unread Count',
			'sender_only' => 'Sender Only',
			'is_deleted' => 'Is Deleted',
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
		$criteria->compare('thread_id',$this->thread_id,true);
		$criteria->compare('unread_count',$this->unread_count);
		$criteria->compare('sender_only',$this->sender_only);
		$criteria->compare('is_deleted',$this->is_deleted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}