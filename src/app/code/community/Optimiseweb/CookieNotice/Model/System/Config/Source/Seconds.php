<?php

/**
 * Optimiseweb CookieNotice Model System Config Source Seconds
 *
 * @package     Optimiseweb_CookieNotice
 * @author      Kathir Vel (vkathirvel@gmail.com)
 * @copyright   Copyright (c) 2015 Kathir Vel
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Optimiseweb_CookieNotice_Model_System_Config_Source_Seconds
{

    /**
     *
     * @return array
     */
    public function toOptionArray()
    {
        $secondsArray['1'] = '1 second';

        $i = 2;

        while ($i <= 30) {
            $secondsArray[$i] = $i . ' seconds';
            $i++;
        }

        return $secondsArray;
    }

}
