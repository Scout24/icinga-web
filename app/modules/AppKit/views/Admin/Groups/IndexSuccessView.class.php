<?php

class AppKit_Admin_Groups_IndexSuccessView extends AppKitBaseView {
    public function executeHtml(AgaviRequestDataHolder $rd) {
         $result = Doctrine_Query::create()
                ->from('NsmTarget')
                ->where("target_type = ?")
                ->execute(array('credential'),Doctrine_Core::HYDRATE_ARRAY);

        $this->setAttribute('principals', $result);
        $this->setupHtml($rd);

    }
}

?>