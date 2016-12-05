<?php
class Tig_Flespakket_Block_Widget_Package extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function _getValue(Varien_Object $row)
    {
        return <<<HTML
                <div>
                    <select id="flespakket_package_{$row->getId()}" name="flespakket_package">
                        <option value="">Default</option>
                        <option value="bottle_1">1 fles</option>
                        <option value="bottle_2">2 flessen</option>
                        <option value="bottle_3">3 flessen</option>
                        <option value="bottle_6">6 flessen</option>
                        <option value="bottle_9">9 flessen</option>
                        <option value="bottle_12">12 flessen</option>
                        <option value="bottle_18">18 flessen</option>
                        <option value="bottle_magnum">Magnum flessen</option>
                        <option value="other">anders</option>
                    </select>
                </div>
HTML;
    }
}
