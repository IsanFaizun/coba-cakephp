<?php
declare(strict_types=1);

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Voucher helper
 */
class VoucherHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    public function getVoucher($totalPrice)
    {
        if ($totalPrice > 30000000) {
            return 'Voucher Hotel Santika';
        } else {
            return 'Voucher Belanja Indomaret';
        }
    }

}
