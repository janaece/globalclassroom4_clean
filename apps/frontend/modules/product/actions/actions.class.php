<?php

/**
 * product actions.
 *
 * @package    globalclassroom
 * @subpackage product
 * @author     Nandakumar
 */
class productActions extends sfActions
{
    public function executeBulkImport(sfWebRequest $request)
    {
        global $CFG;
        if (!$CFG->current_app->hasPrivilege('GCUser'))
        {
            $CFG->current_app->gcError('Non GCUser attempted access to institution/create', 'gcpageaccessdenied');
        }
        // END NOTE 1
        $this->institutionForm = new GcrTrialApplicationForm();

        if (!$this->formErrors)
        {
            $this->formErrors = array();
        }		
        $this->getResponse()->setTitle('Bulk Import Products from Excel');
        sfConfig::set('sf_escaping_strategy', false);
    }
	
}
