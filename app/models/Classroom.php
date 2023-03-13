<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength\Min;

class Classroom extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $class_id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $class_name;

    /**
     *
     * @var string
     */
    public $class_description;

    /**
     *
     * @var string
     */
    public $class_thumbnail_picture;

    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            [
                "class_name",
                "user_id",
                "class_description",
            ],
            new PresenceOf(
                [
                    "message" => [
                        "class_name"  => "The class_name is required",
                        "class_description" => "The class_description is required",
                    ],
                ]
            )
        );

        $validator->add(
            "class_name",
            new Min(
                [
                    "min"     => 3,
                    "message" => "Nama Kelas harus lebih dari 3 huruf",
                    "included" => true
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("mpvl");
        $this->setSource("classroom");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Classroom[]|Classroom|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Classroom|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
