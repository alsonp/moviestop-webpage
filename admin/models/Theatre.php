<?php

/**
 * This is the model class for table "theatre".
 *
 * The followings are the available columns in table 'theatre':
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property integer $movie_id
 *
 * The followings are the available model relations:
 * @property Movie $movie
 * @property Time[] $times
 */
class Theatre extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'theatre';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('movie_id, hall_id , name', 'required'),
            array('status, movie_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, status, movie_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'movie' => array(self::BELONGS_TO, 'Movie', 'movie_id'),
            'times' => array(self::HAS_MANY, 'Time', 'theatre_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
            'movie_id' => 'Movie',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('movie_id', $this->movie_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Theatre the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getHall() {
        $criteria = new CDbCriteria();
        $criteria->addCondition('t.status = :status');
        $criteria->params = array(':status' => 1);

        return Hall::model()->findAll($criteria);
    }

    public function getMovie() {
        $criteria = new CDbCriteria();
        $criteria->addCondition('t.status = :status');
        $criteria->params = array(':status' => 1);

        return Movie::model()->findAll($criteria);
    }

}
