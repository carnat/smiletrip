<?php

/**
 * This is the model class for table "wp_bp_groups".
 *
 * The followings are the available columns in table 'wp_bp_groups':
 * @property string $id
 * @property string $creator_id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $status
 * @property integer $enable_forum
 * @property string $date_created
 */
class WpBpGroups extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpBpGroups the static model class
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
		return 'wp_bp_groups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('creator_id, name, slug, description, date_created', 'required'),
			array('enable_forum', 'numerical', 'integerOnly'=>true),
			array('creator_id', 'length', 'max'=>20),
			array('name', 'length', 'max'=>100),
			array('slug', 'length', 'max'=>200),
			array('status', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, creator_id, name, slug, description, status, enable_forum, date_created', 'safe', 'on'=>'search'),
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
			'creator_id' => 'Creator',
			'name' => 'Name',
			'slug' => 'Slug',
			'description' => 'Description',
			'status' => 'Status',
			'enable_forum' => 'Enable Forum',
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
		$criteria->compare('creator_id',$this->creator_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('enable_forum',$this->enable_forum);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}