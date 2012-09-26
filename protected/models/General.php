<?php

/**
 * This is the model class for table "par_general".
 *
 * The followings are the available columns in table 'par_general':
 * @property string $param
 * @property string $sub_param
 * @property integer $param_value
 * @property string $param_text
 */
class General extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return General the static model class
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
		return 'par_general';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('param_value', 'numerical', 'integerOnly'=>true),
			array('param, sub_param, param_text', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('param, sub_param, param_value, param_text', 'safe', 'on'=>'search'),
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
			'param' => 'Param',
			'sub_param' => 'Sub Param',
			'param_value' => 'Param Value',
			'param_text' => 'Param Text',
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

		$criteria->compare('param',$this->param,true);
		$criteria->compare('sub_param',$this->sub_param,true);
		$criteria->compare('param_value',$this->param_value);
		$criteria->compare('param_text',$this->param_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}