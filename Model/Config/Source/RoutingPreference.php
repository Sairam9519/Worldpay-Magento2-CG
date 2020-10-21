<?php


namespace Sapient\Worldpay\Model\Config\Source;

/**
 * Description of RoutingPrefernce
 *
 * @author aatrai
 */
class RoutingPreference implements \Magento\Framework\Option\ArrayInterface
{
     /**
      * Options getter
      *
      * @return array
      */
    public function toOptionArray()
    {
        return [
            ['value' => 'pinlessDebitOnly' , 'label' => __('pinlessDebitOnly')],
            ['value' => 'signatureOnly' , 'label' => __('signatureOnly')],
            ['value' => 'regular'  , 'label' => __('regular')]
            ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'pinlessDebitOnly' => __('pinlessDebitOnly'),
            'signatureOnly' => __('signatureOnly'),
            'regular' => __('regular')
            ];
    }
}
