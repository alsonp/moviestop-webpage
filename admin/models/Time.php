<?php

/**
 * This is the model class for table "time".
 *
 * The followings are the available columns in table 'time':
 * @property integer $id
 * @property integer $movie_id
 * @property integer $hall_id
 * @property string $startTime
 * @property string $endTime
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Movie $movie
 * @property Hall $hall
 */
class Time extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'time';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('movie_id, hall_id ,startTime, endTime ', 'required'),
			array('movie_id, hall_id, status', 'numerical', 'integerOnly'=>true),
			array('startTime, endTime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, movie_id, hall_id, startTime, endTime, status', 'safe', 'on'=>'search'),
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
			'movie' => array(self::BELONGS_TO, 'Movie', 'movie_id'),
			'hall' => array(self::BELONGS_TO, 'Hall', 'hall_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'movie_id' => 'Movie',
			'hall_id' => 'Hall',
			'startTime' => 'Start Time',
			'endTime' => 'End Time',
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
		$criteria->compare('movie_id',$this->movie_id);
		$criteria->compare('hall_id',$this->hall_id);
		$criteria->compare('startTime',$this->startTime,true);
		$criteria->compare('endTime',$this->endTime,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Time the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
