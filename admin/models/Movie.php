<?php

/**
 * This is the model class for table "movie".
 *
 * The followings are the available columns in table 'movie':
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $image
 * @property string $genre
 * @property string $releaseDate
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property Theatre[] $theatres
 * @property Time[] $times
 */
class Movie extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'movie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, name, genre, releaseDate, status', 'required'),
			array('category_id, status', 'numerical', 'integerOnly'=>true),
			array('name, genre', 'length', 'max'=>85),
			array('image', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_id, name, image, genre, releaseDate, status', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'theatres' => array(self::HAS_MANY, 'Theatre', 'movie_id'),
			'times' => array(self::HAS_MANY, 'Time', 'movie_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category_id' => 'Category',
			'name' => 'Name',
			'image' => 'Image',
			'genre' => 'Genre',
			'releaseDate' => 'Release Date',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('genre',$this->genre,true);
		$criteria->compare('releaseDate',$this->releaseDate,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Movie the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getCategory(){
            $criteria = new CDbCriteria();
            $criteria->addCondition('t.status = :status');
            $criteria->params = array(':status' => 1);
            
            return Category::model()->findAll($criteria);
        }
}
