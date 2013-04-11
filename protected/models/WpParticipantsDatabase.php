<?php

/**
 * This is the model class for table "wp_participants_database".
 *
 * The followings are the available columns in table 'wp_participants_database':
 * @property integer $id
 * @property string $private_id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $zip
 * @property string $phone
 * @property string $email
 * @property string $mailing_list
 * @property string $photo
 * @property string $website
 * @property string $interests
 * @property string $approved
 * @property string $donations
 * @property string $volunteered
 * @property string $where
 * @property string $when
 * @property string $by
 * @property string $date_recorded
 * @property string $date_updated
 * @property string $last_accessed
 */
class WpParticipantsDatabase extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpParticipantsDatabase the static model class
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
		return 'wp_participants_database';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('private_id, date_recorded', 'required'),
			array('private_id', 'length', 'max'=>6),
			array('first_name, last_name, address, city, state, country, zip, phone, email, mailing_list, photo, website, interests, approved, donations, volunteered, where, when, by, date_updated, last_accessed', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, private_id, first_name, last_name, address, city, state, country, zip, phone, email, mailing_list, photo, website, interests, approved, donations, volunteered, where, when, by, date_recorded, date_updated, last_accessed', 'safe', 'on'=>'search'),
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
			'private_id' => 'Private',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'country' => 'Country',
			'zip' => 'Zip',
			'phone' => 'Phone',
			'email' => 'Email',
			'mailing_list' => 'Mailing List',
			'photo' => 'Photo',
			'website' => 'Website',
			'interests' => 'Interests',
			'approved' => 'Approved',
			'donations' => 'Donations',
			'volunteered' => 'Volunteered',
			'where' => 'Where',
			'when' => 'When',
			'by' => 'By',
			'date_recorded' => 'Date Recorded',
			'date_updated' => 'Date Updated',
			'last_accessed' => 'Last Accessed',
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
		$criteria->compare('private_id',$this->private_id,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mailing_list',$this->mailing_list,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('interests',$this->interests,true);
		$criteria->compare('approved',$this->approved,true);
		$criteria->compare('donations',$this->donations,true);
		$criteria->compare('volunteered',$this->volunteered,true);
		$criteria->compare('where',$this->where,true);
		$criteria->compare('when',$this->when,true);
		$criteria->compare('by',$this->by,true);
		$criteria->compare('date_recorded',$this->date_recorded,true);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('last_accessed',$this->last_accessed,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}