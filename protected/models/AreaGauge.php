<?php

/**
 * This is the model class for table "area_gauge".
 *
 * The followings are the available columns in table 'area_gauge':
 * @property string $id
 * @property integer $areaId
 */
class AreaGauge extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AreaGauge the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function primaryKey()
    {
        return 'id';
        // For composite primary key, return an array like the following
        // return array('pk1', 'pk2');
    }

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'area_gauge';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('areaId', 'numerical', 'integerOnly'=>true),
			array('id', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, areaId', 'safe', 'on'=>'search'),
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
			'areaId' => 'Area',
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
		$criteria->compare('areaId',$this->areaId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function loadModel($id)
    {
        $model=AreaGauge::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    public function getAreaId($model)
    {
        return $model->areaId;
    }


}