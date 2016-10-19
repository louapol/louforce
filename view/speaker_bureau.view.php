<?php

require_once 'view/view.class.php';

class SpeakerBureau_View extends View {
    public function SpeakerBureau_View() {
        //do nothing
    }
    public function displayPage() {
        $output = $this->outputHeader();
        $output .= $this->outputBody();
        $output .= $this->outputFooter();
    }
}

?>

