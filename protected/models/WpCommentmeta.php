<?php

/**
 * This is the model class for table "wp_commentmeta".
 *
 * The followings are the available columns in table 'wp_commentmeta':
 * @property string $meta_id
 * @property string $comment_id
 * @property string $meta_key
 * @property string $meta_value
 */
class WpCommentmeta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpCommentmeta the static model class
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
		return 'wp_commentmeta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comment_id', 'length', 'max'=>20),
			array('meta_key', 'length', 'max'=>255),
			array('meta_value', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('meta_id, comment_id, meta_key, meta_value', 'safe', 'on'=>'search'),
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
			'meta_id' => 'Meta',
			'comment_id' => 'Comment',
			'meta_key' => 'Meta Key',
			'meta_value' => 'Meta Value',
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

		$criteria->compare('meta_id',$this->meta_id,true);
		$criteria->compare('comment_id',$this->comment_id,true);
		$criteria->compare('meta_key',$this->meta_key,true);
		$criteria->compare('meta_value',$this->meta_value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}