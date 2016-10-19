

<?php

//meeting class

class Meeting {
    
    public $formFields = array();
    
    public function Meeting($formFields, $id=0) {
        //do nothing;
        echo 'do nothing for now';
    }
    
    public function createMeeting() {
        //check for all required fields
        $this->checkRequired();
        //get default expenses
        $this->getDefaults();
        //start transaction
        echo 'insert into meeting, expense and venue tables';
        //end transaction
    }
    
    public function updateMeeting() {
        //check for all required fields
        $this->checkRequired();
        //start transaction
        echo 'update existing meeting details and venue details';
        //end transaction
    }
    
    public function approveMeeting() {
        echo 'send through approval process';
    }
    
    public function changeStatus() {
        echo 'change a Meeting\'s status';
    }
    
    public function closeMeeting() {
        echo 'meeting no longer available for editing';
    }
    
    private function getDefaults() {
        echo 'get default expenses from database';
    }
    
    private function checkRequired() {
        //project, territory, date, service type, meeting type, topic
        echo 'check that all required fields are passed';
    }
}

?>
