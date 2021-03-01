<?php

namespace App\Controller;

use App\Model\DashboardModel;

class DashboardController
{
    protected $dashboardModel;

    public function __construct()
    {
        $this->dashboardModel = new DashboardModel();
    }

    public function showProfit()
    {
        // Lấy tất hoá đơn từ DB ra.
        $profits = $this->dashboardModel->showProfit();

        include "src/View/dashboard/dashboard.php";
    }

    
}
