<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 10/22/18
 * Time: 21:13
 */

namespace App\Repositories\InterfaceRepository;


interface BillDetailRepositoryInterface
{
    /**
     * Get coupon
     * @return mixed
     */
    public function getBillDetail($params);
    public function getBillDetailByBillId($id);

}