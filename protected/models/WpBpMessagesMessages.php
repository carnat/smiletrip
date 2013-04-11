<?php

/**
 * This is the model class for table "wp_bp_messages_messages".
 *
 * The followings are the available columns in table 'wp_bp_messages_messages':
 * @property string $id
 * @property string $thread_id
 * @property string $sender_id
 * @property string $subject
 * @property string $message
 * @property string $date_sent
 */
class WpBpMessagesMessages extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpBpMessagesMessages the static model class
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
		return 'wp_bp_messages_messages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('thread_id, sender_id, subject, message, date_sent', 'required'),
			array('thread_id, sender_id', 'length', 'max'=>20),
			array('subject', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, thread_id, sender_id, subject, message, date_sent', 'safe', 'on'=>'search'),
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
			'thread_id' => 'Thread',
			'sender_id' => 'Sender',
			'subject' => 'Subject',
			'message' => 'Message',
			'date_sent' => 'Date Sent',
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
		$criteria->compare('thread_id',$this->thread_id,true);
		$criteria->compare('sender_id',$this->sender_id,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('date_sent',$this->date_sent,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}