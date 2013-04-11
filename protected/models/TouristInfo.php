<?php

/**
 * This is the model class for table "tourist_info".
 *
 * The followings are the available columns in table 'tourist_info':
 * @property integer $MemberID
 * @property string $firstname
 * @property string $lastname
 * @property string $dob
 * @property string $Nationality
 * @property string $username
 * @property string $password
 * @property string $sex
 * @property string $image
 * @property integer $age
 */
class TouristInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TouristInfo the static model class
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
		return 'tourist_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, lastname, dob, Nationality, username, password, sex, image, age', 'required'),
			array('age', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname', 'length', 'max'=>20),
			array('Nationality, username, password, sex, image', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('MemberID, firstname, lastname, dob, Nationality, username, password, sex, image, age', 'safe', 'on'=>'search'),
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
			'MemberID' => 'Member',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'dob' => 'Dob',
			'Nationality' => 'Nationality',
			'username' => 'Username',
			'password' => 'Password',
			'sex' => 'Sex',
			'image' => 'Image',
			'age' => 'Age',
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

		$criteria->compare('MemberID',$this->MemberID);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('Nationality',$this->Nationality,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('age',$this->age);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}