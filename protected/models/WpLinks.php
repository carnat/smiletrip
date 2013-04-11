<?php

/**
 * This is the model class for table "wp_links".
 *
 * The followings are the available columns in table 'wp_links':
 * @property string $link_id
 * @property string $link_url
 * @property string $link_name
 * @property string $link_image
 * @property string $link_target
 * @property string $link_description
 * @property string $link_visible
 * @property string $link_owner
 * @property integer $link_rating
 * @property string $link_updated
 * @property string $link_rel
 * @property string $link_notes
 * @property string $link_rss
 */
class WpLinks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpLinks the static model class
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
		return 'wp_links';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('link_notes', 'required'),
			array('link_rating', 'numerical', 'integerOnly'=>true),
			array('link_url, link_name, link_image, link_description, link_rel, link_rss', 'length', 'max'=>255),
			array('link_target', 'length', 'max'=>25),
			array('link_visible, link_owner', 'length', 'max'=>20),
			array('link_updated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('link_id, link_url, link_name, link_image, link_target, link_description, link_visible, link_owner, link_rating, link_updated, link_rel, link_notes, link_rss', 'safe', 'on'=>'search'),
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
			'link_id' => 'Link',
			'link_url' => 'Link Url',
			'link_name' => 'Link Name',
			'link_image' => 'Link Image',
			'link_target' => 'Link Target',
			'link_description' => 'Link Description',
			'link_visible' => 'Link Visible',
			'link_owner' => 'Link Owner',
			'link_rating' => 'Link Rating',
			'link_updated' => 'Link Updated',
			'link_rel' => 'Link Rel',
			'link_notes' => 'Link Notes',
			'link_rss' => 'Link Rss',
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

		$criteria->compare('link_id',$this->link_id,true);
		$criteria->compare('link_url',$this->link_url,true);
		$criteria->compare('link_name',$this->link_name,true);
		$criteria->compare('link_image',$this->link_image,true);
		$criteria->compare('link_target',$this->link_target,true);
		$criteria->compare('link_description',$this->link_description,true);
		$criteria->compare('link_visible',$this->link_visible,true);
		$criteria->compare('link_owner',$this->link_owner,true);
		$criteria->compare('link_rating',$this->link_rating);
		$criteria->compare('link_updated',$this->link_updated,true);
		$criteria->compare('link_rel',$this->link_rel,true);
		$criteria->compare('link_notes',$this->link_notes,true);
		$criteria->compare('link_rss',$this->link_rss,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}