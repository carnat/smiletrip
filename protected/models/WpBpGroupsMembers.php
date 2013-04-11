<?php

/**
 * This is the model class for table "wp_bp_groups_members".
 *
 * The followings are the available columns in table 'wp_bp_groups_members':
 * @property string $id
 * @property string $group_id
 * @property string $user_id
 * @property string $inviter_id
 * @property integer $is_admin
 * @property integer $is_mod
 * @property string $user_title
 * @property string $date_modified
 * @property string $comments
 * @property integer $is_confirmed
 * @property integer $is_banned
 * @property integer $invite_sent
 */
class WpBpGroupsMembers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpBpGroupsMembers the static model class
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
		return 'wp_bp_groups_members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id, user_id, inviter_id, user_title, date_modified, comments', 'required'),
			array('is_admin, is_mod, is_confirmed, is_banned, invite_sent', 'numerical', 'integerOnly'=>true),
			array('group_id, user_id, inviter_id', 'length', 'max'=>20),
			array('user_title', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, group_id, user_id, inviter_id, is_admin, is_mod, user_title, date_modified, comments, is_confirmed, is_banned, invite_sent', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'inviter_id' => 'Inviter',
			'is_admin' => 'Is Admin',
			'is_mod' => 'Is Mod',
			'user_title' => 'User Title',
			'date_modified' => 'Date Modified',
			'comments' => 'Comments',
			'is_confirmed' => 'Is Confirmed',
			'is_banned' => 'Is Banned',
			'invite_sent' => 'Invite Sent',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('inviter_id',$this->inviter_id,true);
		$criteria->compare('is_admin',$this->is_admin);
		$criteria->compare('is_mod',$this->is_mod);
		$criteria->compare('user_title',$this->user_title,true);
		$criteria->compare('date_modified',$this->date_modified,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('is_confirmed',$this->is_confirmed);
		$criteria->compare('is_banned',$this->is_banned);
		$criteria->compare('invite_sent',$this->invite_sent);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}