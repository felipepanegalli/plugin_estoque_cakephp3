<?php
namespace Stock\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * FormatMoney helper
 */
class FormatMoneyHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function strToReais($value){
        return 'R$ '.number_format($value, 2);
    }

}
