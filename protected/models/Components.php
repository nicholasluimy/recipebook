<?php

/**
 * This is the model class for table "Components".
 *
 * The followings are the available columns in table 'Components':
 * @property integer $Id
 * @property integer $RecipieId
 * @property integer $IngredientId
 * @property integer $MeasurementId
 * @property integer $Quantity
 *
 * The followings are the available model relations:
 * @property Ingredients $ingredient
 * @property Measurements $measurement
 * @property Recipes $recipie
 */
class Components extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Components';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RecipieId, IngredientId, MeasurementId, Quantity', 'required'),
			array('RecipieId, IngredientId, MeasurementId, Quantity', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, RecipieId, IngredientId, MeasurementId, Quantity', 'safe', 'on'=>'search'),
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
			'ingredient' => array(self::BELONGS_TO, 'Ingredients', 'IngredientId'),
			'measurement' => array(self::BELONGS_TO, 'Measurements', 'MeasurementId'),
			'recipie' => array(self::BELONGS_TO, 'Recipes', 'RecipieId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'RecipieId' => 'Recipie',
			'IngredientId' => 'Ingredient',
			'MeasurementId' => 'Measurement',
			'Quantity' => 'Quantity',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('RecipieId',$this->RecipieId);
		$criteria->compare('IngredientId',$this->IngredientId);
		$criteria->compare('MeasurementId',$this->MeasurementId);
		$criteria->compare('Quantity',$this->Quantity);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Components the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
