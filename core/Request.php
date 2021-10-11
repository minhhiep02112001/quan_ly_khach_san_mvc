<?php

namespace Core;

class Request
{
    private $__rules =[] , $__messages = [] , $errors = [] ,$__db;
    function __construct()
    {
        $this->__db = new Database();
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet()
    {
        return $this->getMethod() == 'get' ? true : false;
    }

    public function isPost()
    {
        return $this->getMethod() == 'post' ? true : false;
    }

    public function getParams()
    {
        $result = [];

        if ($this->isGet()) {
            if (!empty($_GET)) {
                foreach ($_GET as $key => $value) {
                    if (is_array($value)) {
                        $result[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else {
                        $result[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }

        if ($this->isPost()) {
            if (!empty($_POST)) {
                foreach ($_POST as $key => $value) {
                    if (is_array($key)) {
                        $result[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    } else {
                        $result[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
                foreach ($_FILES as $file => $val){
                    $result[$file] = $val;
                }
            }
        }
        return $result;
    }

    //set rule
    public function rule($rule = [])
    {
        $this->__rules = $rule;

    }
    // set message
    public function message($message = [])
    {
        $this->__messages = $message;
    }
    // validate
    public  function validate ()
    {
        $this->__rules = array_filter($this->__rules);
        $checkValidate = true;

        if(!empty($this->__rules)){

            $dataFields = $this->getParams();

            foreach ($this->__rules as $fieldName => $ruleItem){

                $ruleItemArr = explode('|', $ruleItem);

                foreach ($ruleItemArr as $rule){
                    $ruleName = null;
                    $ruleValue = null;
                    $ruleArr = explode(":",$rule);
                    $ruleName = reset($ruleArr);
                    if(count($ruleArr ) > 1){
                        $ruleValue = end($ruleArr);
                    }

                    if($ruleName == 'nullable'){
                        if(empty($dataFields[$fieldName])){
                            break;
                        }
                        if(isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] == UPLOAD_ERR_NO_FILE ){
                            break;
                        }
                    }

                    if ($ruleName == 'required'){
                        if(empty($dataFields[$fieldName])){
                            $checkValidate = false;
                            $this->setError($fieldName , $ruleName);
                        }
                    }
                    if ($ruleName == 'min'){
                        if(strlen( $dataFields[$fieldName] ) < $ruleValue){
                            $checkValidate = false;
                            $this->setError($fieldName , $ruleName);

                        }
                    }

                    if ($ruleName == 'max'){
                        if(strlen( $dataFields[$fieldName] ) > $ruleValue){
                            $checkValidate = false;
                            $this->setError($fieldName , $ruleName);
                        }
                    }

                    if ($ruleName == 'email'){
                        if(!filter_var( $dataFields[$fieldName]  , FILTER_VALIDATE_EMAIL)){
                            $checkValidate = false;
                            $this->setError($fieldName , $ruleName);
                        }
                    }

                    if ($ruleName == 'regex'){
                        if(!preg_match( $ruleValue , $dataFields[$fieldName] )){
                            $checkValidate = false;
                            $this->setError($fieldName , $ruleName);
                        }
                    }
                    if ($ruleName == 'image'){
                        $arrType = ['image/jpg', 'image/jpeg', 'image/png', 'image/bmp', 'image/gif', 'image/svg',  'image/webp'];
                        if( $dataFields[$fieldName]['type'] ==""){
                            $checkValidate = false;
                            $this->setError($fieldName , $ruleName);
                        }
                        if(!in_array($dataFields[$fieldName]['type'] , $arrType)){
                            $checkValidate = false;
                            $this->setError($fieldName , $ruleName);
                        }
                    }
                    if($ruleName == 'size'){
                        if($dataFields[$fieldName]['size'] > $ruleValue){
                            $checkValidate = false;
                            $this->setError($fieldName , $ruleName);
                        }
                    }
                    if($ruleName == 'unique'){
                        $arrUnique = explode(',', $ruleValue);
                        $uniqueTable =$arrUnique[0] ?? null;
                        $uniqueColumn = $arrUnique[1] ?? null;
                        $skipRowId = $arrUnique[2] ?? null;
                        if(!$skipRowId){
                            $record =  $this->__db->table($uniqueTable)->where($uniqueColumn , '=' , $dataFields[$fieldName])->find();
                            if($record){
                                $checkValidate = false;
                                $this->setError($fieldName , $ruleName);
                            }
                        }else{
                            $record =  $this->__db->table($uniqueTable)->where($uniqueColumn , '=' , $dataFields[$fieldName])->where("id" , '!=' ,$skipRowId)->find();
                            if($record){
                                $checkValidate = false;
                                $this->setError($fieldName , $ruleName);
                            }
                        }
                    }
                }
            }
        }

        return $checkValidate;
    }

    public function errors($fieldName = ''){
        if($fieldName == ''){
            return $this->errors;
        }
        if(!empty($this->errors[$fieldName])){
            return reset($this->errors[$fieldName]);
        }
        return false;
    }


    public function setError($fieldName , $ruleName){
        $this->errors[$fieldName][$ruleName] = $this->__messages[$fieldName.'.'.$ruleName];
    }
}

