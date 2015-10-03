<?php

class Contact
{

    //In the case of OOP i will create class Contact with all properties.
    //Update method should accept instance of Contact class with changed properties. They will be stored as private
    //variables and modify with getter/setters. So the update method will save all updated data.
    //Validations for correct data, types etc. will be applied to class setters.

    //It will return true or false with $state['error'] = 'Error name';
    /**
     * @param Contact instance $contact
     */
    public function UpdateContact(Contacts $contact){
        // TODO implement logic for update
    }


    //I will write 2 private methods. When SAVE Entity, i will check if i have set Contact ID > 0,
    // so this is update state and will call update method, or insert.
    public function save(){
        if($this->id > 0){
            $this->_update();
        }else{
            $this->_insert();
        }
    }

    private function _update(){
        // TODO implement logic for update
    }
    private function _insert() {
        // TODO implement logic for insert
    }
}