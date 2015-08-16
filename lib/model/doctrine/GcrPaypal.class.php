<?php

/**
 * Paypal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    globalclassroom
 * @subpackage model
 * @author     Justin England
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class GcrPaypal extends BaseGcrPaypal
{
    public function getRefunds($start_ts = null, $end_ts = null)
    {
        return GcrPaypalTable::getRefunds($this->txn_id, $start_ts, $end_ts);
    }
}