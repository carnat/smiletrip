<?php

/**
 * This is the model class for table "tourist_info".
 *
 * The followings are the available columns in table 'tourist_info':
 * @property integer $MemberID
 * @property string $Name
 * @property string $Lastname
 * @property string $DOB
 * @property string $Nationality
 * @property string $Username
 * @property string $Password
 * @property string $Sex
 * @property string $image
 * @property integer $Age
 * @property string $Email
 * @property integer $Tel
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
			array('Name, Lastname, DOB, Nationality, Username, Password, Sex, image, Age, Email, Tel', 'required'),
			array('Age, Tel', 'numerical', 'integerOnly'=>true),
			array('Name, Lastname', 'length', 'max'=>20),
			array('Nationality, Username, Password, Sex, image, Email', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('MemberID, Name, Lastname, DOB, Nationality, Username, Password, Sex, image, Age, Email, Tel', 'safe', 'on'=>'search'),
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
			'Name' => 'Name',
			'Lastname' => 'Lastname',
			'DOB' => 'Dob',
			'Nationality' => 'Nationality',
			'Username' => 'Username',
			'Password' => 'Password',
			'Sex' => 'Sex',
			'image' => 'Image',
			'Age' => 'Age',
			'Email' => 'Email',
			'Tel' => 'Tel',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Lastname',$this->Lastname,true);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('Nationality',$this->Nationality,true);
		$criteria->compare('Username',$this->Username,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Sex',$this->Sex,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('Age',$this->Age);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Tel',$this->Tel);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}