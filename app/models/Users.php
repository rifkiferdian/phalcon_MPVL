<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength\Min;
use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var integer
     */
    public $role_user;

    /**
     *
     * @var string
     */
    public $first_name;

    /**
     *
     * @var string
     */
    public $last_name;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $password;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            [
                "first_name",
                "password",
            ],
            new PresenceOf(
                [
                    "message" => [
                        "first_name"  => "The first_name is required",
                        "password" => "The password is required",
                    ],
                ]
            )
        );

        $validator->add(
            "first_name",
            new Min(
                [
                    "min"     => 3,
                    "message" => "We want more than just their initials",
                    "included" => true
                ]
            )
        );
        
        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        $validator->add(
            "email",
            new UniquenessValidator(
                [
                    "model"   => $this,
                    "message" => ":field already exists !",
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
        $this->setSource("users");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
